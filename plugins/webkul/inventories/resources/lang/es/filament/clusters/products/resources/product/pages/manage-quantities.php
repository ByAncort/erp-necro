<?php

return [
    'title' => 'Cantidades',

    'tabs' => [
        'internal-locations' => 'Ubicaciones Internas',
        'transit-locations'  => 'Ubicaciones de Tránsito',
        'on-hand'            => 'Disponible',
        'to-count'           => 'Por Contar',
        'to-apply'           => 'Por Aplicar',
    ],

    'form' => [
        'fields' => [
            'product'          => 'Producto',
            'location'         => 'Ubicación',
            'package'          => 'Paquete',
            'lot'              => 'Lote / Números de Serie',
            'on-hand-qty'      => 'Cantidad Disponible',
            'storage-category' => 'Categoría de Almacenamiento',
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => 'Producto',
            'location'          => 'Ubicación',
            'lot'               => 'Lote / Números de Serie',
            'storage-category'  => 'Categoría de Almacenamiento',
            'quantity'          => 'Cantidad',
            'package'           => 'Paquete',
            'on-hand'           => 'Cantidad Disponible',
            'unit'              => 'Unidad',
            'reserved-quantity' => 'Cantidad Reservada',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'Cantidad actualizada',
                    'body'  => 'La cantidad ha sido actualizada exitosamente.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'label' => 'Añadir Cantidad',

                'notification' => [
                    'title' => 'Cantidad añadida',
                    'body'  => 'La cantidad ha sido añadida exitosamente.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'La cantidad ya existe',
                        'body'  => 'Ya tiene una cantidad para la misma configuración. Actualice la cantidad en su lugar.',
                    ],
                ],
            ],
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
