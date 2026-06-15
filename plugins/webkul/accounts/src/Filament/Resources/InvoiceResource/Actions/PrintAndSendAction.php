<?php

namespace Webkul\Account\Filament\Resources\InvoiceResource\Actions;

use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Webkul\Account\Enums\MoveState;
use Webkul\Account\Facades\Account as AccountFacade;
use Webkul\Account\Models\Move;
use Webkul\Account\Models\Partner;
use Webkul\Support\Traits\PDFHandler;

class PrintAndSendAction extends Action
{
    use PDFHandler;

    public static function getDefaultName(): ?string
    {
        return 'customers.invoice.print-and-send';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->label(__('accounts::filament/resources/invoice/actions/print-and-send.title'))
            ->color('gray')
            ->visible(function (Move $record) {
                return
                    $record->state == MoveState::CANCEL
                    || $record->state == MoveState::POSTED;
            });

        $this->beforeFormFilled(function (Move $record, Action $action) {
            $money = function ($amount, $currency) {
                return money($amount, $currency);
            };

            $description = "
                <p>Estimado/a {$record->partner->name},</p>
                <p>Su factura <strong>{$record->name}</strong> de <strong>{$record->company->name}</strong> por un monto de <strong>{$money($record->amount_total, $record->currency->name)}</strong> ya se encuentra disponible. Le solicitamos gestionar el pago a la brevedad posible.</p>
                <p>Al momento de realizar el pago, por favor utilice como referencia <strong>{$record->name}</strong> para la cuenta <strong>".($record->partnerBank->bank->name ?? 'N/A').'</strong>.</p>
                <p>Si tiene alguna consulta, no dude en contactarnos.</p>
                <p><strong>Saludos cordiales,</strong><br>Administrador</p>
            ';

            $action->fillForm([
                'files'       => $this->prepareInvoice($record),
                'partners'    => [$record->partner_id],
                'subject'     => $record->partner->name.' Invoice (Ref '.$record->name.')',
                'description' => $description,
            ]);
        });

        $this->schema(
            function (Schema $schema) {
                return $schema->components([
                    Select::make('partners')
                        ->options(Partner::all()->pluck('name', 'id'))
                        ->multiple()
                        ->label(__('accounts::filament/resources/invoice/actions/print-and-send.modal.form.partners'))
                        ->searchable()
                        ->preload(),
                    TextInput::make('subject')
                        ->label(__('accounts::filament/resources/invoice/actions/print-and-send.modal.form.subject'))
                        ->hiddenLabel(),
                    RichEditor::make('description')
                        ->label(__('accounts::filament/resources/invoice/actions/print-and-send.modal.form.description'))
                        ->hiddenLabel(),
                    FileUpload::make('files')
                        ->label(__('accounts::filament/resources/invoice/actions/print-and-send.modal.form.files'))
                        ->acceptedFileTypes([
                            'image/*',
                            'application/pdf',
                        ])
                        ->downloadable()
                        ->openable()
                        ->multiple()
                        ->disk('public')
                        ->hiddenLabel(),
                ]);
            }
        );

        $this->modalSubmitActionLabel(__('accounts::filament/resources/invoice/actions/print-and-send.modal.action.submit.title'));
        $this->modalIcon('heroicon-m-paper-airplane');
        $this->icon('heroicon-o-envelope');
        $this->action(fn (Move $record, array $data) => AccountFacade::printAndSendMove($record, $data));
        $this->modalSubmitAction(function ($action) {
            $action->label(__('accounts::filament/resources/invoice/actions/print-and-send.modal.action.submit.title'));
            $action->icon('heroicon-m-paper-airplane');
        });
    }

    private function prepareInvoice(Move $record): ?string
    {
        return $this->savePDF(
            view('accounts::invoice/actions/preview.index', compact('record'))->render(),
            'invoice-'.$record->created_at->format('d-m-Y')
        );
    }
}
