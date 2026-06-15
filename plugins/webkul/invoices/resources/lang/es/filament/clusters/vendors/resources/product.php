<?php

return [
    'navigation' => [
        'title' => 'Productos',
        'group' => 'Inventory',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'fields' => [
                    'name'             => 'Nombre',
                    'name-placeholder' => 'ej. Polera',
                    'description'      => 'Descripción',
                    'tags'             => 'Etiquetas',
                    'sales'            => 'Ventas',
                    'purchase'         => 'Compras',
                ],
            ],

            'invoice-policy' => [
                'title'            => 'Política de Facturación',
                'ordered-policy'   => 'Puede facturar los productos antes de que sean entregados.',
                'delivered-policy' => 'Facturar después de la entrega, según cantidades entregadas, no pedidas.',
            ],

            'images' => [
                'title' => 'Imágenes',
            ],

            'settings' => [
                'title' => 'Configuración',

                'fields' => [
                    'type'      => 'Tipo',
                    'reference' => 'Referencia',
                    'barcode'   => 'Código de Barras',
                    'category'  => 'Categoría',
                    'company'   => 'Compañía',
                ],
            ],

            'category-and-tags' => [
                'title' => 'Categoría y Etiquetas',

                'fields' => [
                    'category' => 'Categoría',
                    'tags'     => 'Etiquetas',
                ],
            ],

            'pricing' => [
                'title' => 'Precios',

                'fields' => [
                    'price' => 'Precio',
                    'cost'  => 'Costo',
                ],
            ],

            'additional' => [
                'title' => 'Adicional',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'Nombre',
            'images'      => 'Imágenes',
            'type'        => 'Tipo',
            'reference'   => 'Referencia',
            'responsible' => 'Responsable',
            'barcode'     => 'Código de Barras',
            'category'    => 'Categoría',
            'company'     => 'Compañía',
            'price'       => 'Precio',
            'cost'        => 'Costo',
            'tags'        => 'Etiquetas',
            'deleted-at'  => 'Eliminado en',
            'created-at'  => 'Creado en',
            'updated-at'  => 'Actualizado en',
        ],

        'groups' => [
            'type'       => 'Tipo',
            'category'   => 'Categoría',
            'created-at' => 'Creado en',
        ],

        'filters' => [
            'name'        => 'Nombre',
            'type'        => 'Tipo',
            'reference'   => 'Referencia',
            'barcode'     => 'Código de Barras',
            'category'    => 'Categoría',
            'company'     => 'Compañía',
            'price'       => 'Precio',
            'cost'        => 'Costo',
            'is-favorite' => 'Es Favorito',
            'weight'      => 'Peso',
            'volume'      => 'Volumen',
            'tags'        => 'Etiquetas',
            'responsible' => 'Responsable',
            'created-at'  => 'Creado en',
            'updated-at'  => 'Actualizado en',
            'creator'     => 'Creador',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Producto restaurado',
                    'body'  => 'El producto ha sido restaurado exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Producto eliminado',
                    'body'  => 'El producto ha sido eliminado exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Producto eliminado forzosamente',
                    'body'  => 'El producto ha sido eliminado forzosamente exitosamente.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Productos restaurados',
                    'body'  => 'Los productos han sido restaurados exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Productos eliminados',
                    'body'  => 'Los productos han sido eliminados exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Productos eliminados forzosamente',
                    'body'  => 'Los productos han sido eliminados forzosamente exitosamente.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'entries' => [
                    'name'             => 'Nombre',
                    'name-placeholder' => 'ej. Polera',
                    'description'      => 'Descripción',
                    'tags'             => 'Etiquetas',
                ],
            ],

            'images' => [
                'title' => 'Imágenes',

                'entries' => [],
            ],

            'settings' => [
                'title' => 'Configuración',

                'entries' => [
                    'type'      => 'Tipo',
                    'reference' => 'Referencia',
                    'barcode'   => 'Código de Barras',
                    'category'  => 'Categoría',
                    'company'   => 'Compañía',
                ],
            ],

            'pricing' => [
                'title' => 'Precios',

                'entries' => [
                    'price' => 'Precio',
                    'cost'  => 'Costo',
                ],
            ],

            'inventory' => [
                'title' => 'Inventario',

                'entries' => [],

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Seguimiento',

                        'entries' => [
                            'track-inventory' => 'Controlar Inventario',
                            'track-by'        => 'Controlar por',
                            'expiration-date' => 'Fecha de Vencimiento',
                        ],
                    ],

                    'operation' => [
                        'title' => 'Operaciones',

                        'entries' => [
                            'routes' => 'Rutas',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Logística',

                        'entries' => [
                            'responsible'    => 'Responsable',
                            'weight'         => 'Peso',
                            'volume'         => 'Volumen',
                            'sale-delay'     => 'Plazo de Entrega (Días)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Trazabilidad',

                        'entries' => [
                            'expiration-date'  => 'Fecha de Vencimiento (Días)',
                            'best-before-date' => 'Consumo Preferente (Días)',
                            'removal-date'     => 'Fecha de Retiro (Días)',
                            'alert-date'       => 'Fecha de Alerta (Días)',
                        ],
                    ],
                ],
            ],

            'record-information' => [
                'title' => 'Información del Registro',

                'entries' => [
                    'created-at' => 'Creado en',
                    'created-by' => 'Creado por',
                    'updated-at' => 'Actualizado en',
                ],
            ],
        ],
    ],
];
