<?php

return [
    'columns' => [
        'invoice-date' => 'Fecha de Factura',
        'date'         => 'Fecha',
        'number'       => 'Número',
        'partner'      => 'Socio',
        'reference'    => 'Referencia',
        'journal'      => 'Diario',
        'company'      => 'Compañía',
        'total'        => 'Total',
        'state'        => 'Estado',
        'checked'      => 'Verificado',
    ],

    'values' => [
        'yes' => 'Sí',
        'no'  => 'No',
    ],

    'notification' => [
        'completed' => 'Su exportación de asientos de diario se ha completado y se exportaron :count fila(s).',
        'failed'    => ':count fila(s) fallaron al exportar.',
    ],
];
