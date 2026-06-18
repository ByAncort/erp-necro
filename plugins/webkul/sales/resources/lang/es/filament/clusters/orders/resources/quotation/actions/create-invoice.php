<?php

return [
    'title' => 'Crear factura',

    'modal' => [
        'heading' => 'Crear factura',
    ],

    'notification' => [
        'invoice-created' => [
            'title' => 'Factura creada',
            'body'  => 'La factura se ha creado correctamente.',
        ],

        'no-invoiceable-lines' => [
            'title' => 'Sin líneas facturables',
            'body'  => 'No hay líneas facturables, asegúrese de que se haya recibido una cantidad.',
        ],
    ],

    'form' => [
        'fields' => [
            'create-invoice' => 'Crear factura',
        ],
    ],
];
