<?php

return [
    'navigation' => [
        'title' => 'Categorías de Almacenamiento',
        'group' => 'Gestión de Almacenes',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'General',

                'fields' => [
                    'name'               => 'Nombre',
                    'allow-new-products' => 'Permitir Nuevos Productos',
                    'max-weight'         => 'Peso Máximo',
                    'company'            => 'Empresa',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'               => 'Nombre',
            'allow-new-products' => 'Permitir Nuevos Productos',
            'max-weight'         => 'Peso Máximo',
            'company'            => 'Empresa',
            'deleted-at'         => 'Eliminado el',
            'created-at'         => 'Creado el',
            'updated-at'         => 'Actualizado el',
        ],

        'groups' => [
            'allow-new-products' => 'Permitir Nuevos Productos',
            'created-at'         => 'Creado el',
            'updated-at'         => 'Actualizado el',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Categoría de Almacenamiento eliminada',
                    'body'  => 'La categoría de almacenamiento ha sido eliminada exitosamente.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Categorías de Almacenamiento eliminadas',
                    'body'  => 'Las categorías de almacenamiento han sido eliminadas exitosamente.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'General',

                'entries' => [
                    'name'               => 'Nombre',
                    'allow-new-products' => 'Permitir Nuevos Productos',
                    'max-weight'         => 'Peso Máximo',
                    'company'            => 'Empresa',
                ],
            ],

            'record-information' => [
                'title' => 'Información del Registro',

                'entries' => [
                    'created-by'   => 'Creado por',
                    'created-at'   => 'Creado el',
                    'last-updated' => 'Última Actualización',
                ],
            ],
        ],
    ],
];
