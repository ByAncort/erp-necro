<?php

return [
    'navigation' => [
        'title' => 'Ver Lista de Precios de Proveedor',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Precio de Proveedor eliminado',
                    'body'  => 'El precio de proveedor ha sido eliminado exitosamente.',
                ],

                'error' => [
                    'title' => 'El Precio de Proveedor no pudo ser eliminado',
                    'body'  => 'El precio de proveedor no puede ser eliminado porque está actualmente en uso.',
                ],
            ],
        ],
    ],
];
