<?php

return [
    'title'        => 'Enviar por correo',
    'resend-title' => 'Reenviar por correo',
    'quotation'    => 'presupuesto',
    'quotations'   => 'presupuestos',

    'modal' => [
        'heading' => 'Enviar presupuesto por correo',
    ],

    'form' => [
        'fields' => [
            'partners'    => 'Contactos',
            'subject'     => 'Asunto',
            'description' => 'Descripción',
            'attachment'  => 'Adjunto',
        ],
    ],

    'actions' => [
        'notification' => [
            'email' => [
                'no_recipients' => [
                    'title' => 'No se seleccionaron destinatarios',
                    'body'  => 'Seleccione al menos un contacto para enviar los presupuestos.',
                ],

                'all_success' => [
                    'title' => '¡Presupuestos enviados!',
                    'body'  => 'Sus :plural se han entregado correctamente a: :recipients',
                ],

                'all_failed' => [
                    'title' => 'No se pudieron enviar los presupuestos',
                    'body'  => 'Tuvimos problemas al enviar sus presupuestos: :failures',
                ],

                'partial_success' => [
                    'title'       => 'Algunos presupuestos enviados',
                    'sent_part'   => 'Entregados correctamente a: :recipients',
                    'failed_part' => 'No se pudo entregar a: :failures',
                ],

                'failure_item' => ':partner (:reason)',
            ],
        ],
    ],
];
