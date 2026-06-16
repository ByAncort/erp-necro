<?php

return [
    'columns' => [
        'number'           => 'Número',
        'date'             => 'Fecha',
        'account'          => 'Cuenta',
        'partner'          => 'Socio',
        'label'            => 'Etiqueta',
        'reference'        => 'Referencia',
        'journal'          => 'Diario',
        'debit'            => 'Débito',
        'credit'           => 'Crédito',
        'balance'          => 'Saldo',
        'currency'         => 'Moneda',
        'company'          => 'Compañía',
        'status'           => 'Estado',
        'amount-currency'  => 'Monto en Moneda',
        'amount-residual'  => 'Monto Residual',
        'reconciled'       => 'Conciliado',
        'due-date'         => 'Fecha de Vencimiento',
    ],

    'values' => [
        'yes' => 'Sí',
        'no'  => 'No',
    ],

    'notification' => [
        'completed' => 'Su exportación de elementos de diario se ha completado y se exportaron :count fila(s).',
        'failed'    => ':count fila(s) fallaron al exportar.',
    ],
];
