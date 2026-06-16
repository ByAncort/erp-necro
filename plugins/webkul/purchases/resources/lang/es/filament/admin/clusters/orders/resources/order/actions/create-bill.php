<?php

return [
    'label' => 'Crear Factura',

    'action' => [
        'notification' => [
            'warning' => [
                'title' => 'Sin líneas facturables',
                'body'  => 'No hay líneas facturables, asegúrese de que se haya recibido una cantidad.',
            ],

            'success' => [
                'title' => 'Factura creada',
                'body'  => 'La factura ha sido creada exitosamente.',
            ],
        ],
    ],
];
