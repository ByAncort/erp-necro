<?php

return [
    'navigation' => [
        'title' => 'Reabastecimiento',
        'group' => 'Aprovisionamiento',
    ],

    'form' => [
        'fields' => [
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => 'Producto',
            'location'          => 'Ubicación',
            'route'             => 'Ruta',
            'vendor'            => 'Proveedor',
            'trigger'           => 'Activador',
            'on-hand'           => 'Disponible',
            'min'               => 'Mín',
            'max'               => 'Máx',
            'multiple-quantity' => 'Cantidad Múltiple',
            'to-order'          => 'Por Ordenar',
            'uom'               => 'UDM',
            'company'           => 'Empresa',
        ],

        'groups' => [
            'location' => 'Ubicación',
            'product'  => 'Producto',
            'category' => 'Categoría',
        ],

        'filters' => [
        ],

        'header-actions' => [
            'create' => [
                'label' => 'Añadir Reabastecimiento',

                'notification' => [
                    'title' => 'Reabastecimiento añadido',
                    'body'  => 'El reabastecimiento ha sido añadido exitosamente.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'El reabastecimiento ya existe',
                        'body'  => 'Ya existe un reabastecimiento para esta configuración. Actualice el reabastecimiento existente en su lugar.',
                    ],
                ],
            ],
        ],

        'actions' => [
        ],
    ],
];
