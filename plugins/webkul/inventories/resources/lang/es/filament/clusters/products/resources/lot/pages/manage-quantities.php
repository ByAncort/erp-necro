<?php

return [
    'title' => 'Ubicaciones',

    'table' => [
        'columns' => [
            'product'          => 'Producto',
            'location'         => 'Ubicación',
            'storage-category' => 'Categoría de Almacenamiento',
            'quantity'         => 'Cantidad',
            'package'          => 'Paquete',
            'on-hand'          => 'Cantidad Disponible',
            'unit'             => 'Unidad',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Cantidad eliminada',
                    'body'  => 'La cantidad ha sido eliminada exitosamente.',
                ],
            ],
        ],
    ],
];
