<?php

return [
    'navigation' => [
        'title' => 'Acuerdos de Compra',
        'group' => 'Compra',
    ],

    'global-search' => [
        'vendor' => 'Proveedor',
        'type'   => 'Tipo',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'fields' => [
                    'vendor'                => 'Proveedor',
                    'valid-from'            => 'Válido Desde',
                    'valid-to'              => 'Válido Hasta',
                    'buyer'                 => 'Comprador',
                    'reference'             => 'Referencia',
                    'reference-placeholder' => 'ej. PO/123',
                    'agreement-type'        => 'Tipo de Acuerdo',
                    'company'               => 'Compañía',
                    'currency'              => 'Moneda',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Productos',

                'columns' => [
                    'product'    => 'Producto',
                    'quantity'   => 'Cantidad',
                    'ordered'    => 'Pedido',
                    'uom'        => 'Unidad de Medida',
                    'unit-price' => 'Precio Unitario',
                ],

                'fields' => [
                    'product'    => 'Producto',
                    'quantity'   => 'Cantidad',
                    'ordered'    => 'Pedido',
                    'uom'        => 'Unidad de Medida',
                    'unit-price' => 'Precio Unitario',
                ],
            ],

            'additional' => [
                'title' => 'Información Adicional',
            ],

            'terms' => [
                'title' => 'Términos y Condiciones',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'agreement'      => 'Acuerdo',
            'vendor'         => 'Proveedor',
            'agreement-type' => 'Tipo de Acuerdo',
            'buyer'          => 'Comprador',
            'company'        => 'Compañía',
            'valid-from'     => 'Válido Desde',
            'valid-to'       => 'Válido Hasta',
            'reference'      => 'Referencia',
            'status'         => 'Estado',
        ],

        'groups' => [
            'agreement-type' => 'Tipo de Acuerdo',
            'vendor'         => 'Proveedor',
            'state'          => 'Estado',
            'created-at'     => 'Creado En',
            'updated-at'     => 'Actualizado En',
        ],

        'filters' => [
            'agreement'      => 'Acuerdo',
            'vendor'         => 'Proveedor',
            'agreement-type' => 'Tipo de Acuerdo',
            'buyer'          => 'Comprador',
            'company'        => 'Compañía',
            'valid-from'     => 'Válido Desde',
            'valid-to'       => 'Válido Hasta',
            'reference'      => 'Referencia',
            'status'         => 'Estado',
            'created-at'     => 'Creado En',
            'updated-at'     => 'Actualizado En',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Acuerdo de Compra eliminado',
                    'body'  => 'El acuerdo de compra ha sido eliminado exitosamente.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Acuerdo de Compra restaurado',
                    'body'  => 'El acuerdo de compra ha sido restaurado exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Acuerdo de Compra eliminado permanentemente',
                        'body'  => 'El acuerdo de compra ha sido eliminado permanentemente exitosamente.',
                    ],

                    'error' => [
                        'title' => 'El Acuerdo de Compra no pudo ser eliminado',
                        'body'  => 'El acuerdo de compra no puede ser eliminado porque está actualmente en uso.',
                    ],

                    'warning' => [
                        'title' => 'El Acuerdo de Compra no puede ser eliminado',
                        'body'  => 'Solo los acuerdos de compra en estado Borrador o Cancelado pueden ser eliminados.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Acuerdos de Compra eliminados',
                    'body'  => 'Los acuerdos de compra han sido eliminados exitosamente.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Acuerdos de Compra restaurados',
                    'body'  => 'Los acuerdos de compra han sido restaurados exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Acuerdos de Compra eliminados permanentemente',
                        'body'  => 'Los acuerdos de compra han sido eliminados permanentemente exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Los Acuerdos de Compra no pudieron ser eliminados',
                        'body'  => 'Los acuerdos de compra no pueden ser eliminados porque están actualmente en uso.',
                    ],

                    'warning' => [
                        'title' => 'Los Acuerdos de Compra no pueden ser eliminados',
                        'body'  => 'Solo los acuerdos de compra en estado Borrador o Cancelado pueden ser eliminados.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'entries' => [
                    'vendor'                => 'Proveedor',
                    'valid-from'            => 'Válido Desde',
                    'valid-to'              => 'Válido Hasta',
                    'buyer'                 => 'Comprador',
                    'reference'             => 'Referencia',
                    'reference-placeholder' => 'ej. PO/123',
                    'agreement-type'        => 'Tipo de Acuerdo',
                    'company'               => 'Compañía',
                    'currency'              => 'Moneda',
                ],
            ],

            'metadata' => [
                'title' => 'Metadatos',

                'entries' => [
                    'created-at' => 'Creado En',
                    'created-by' => 'Creado Por',
                    'updated-at' => 'Actualizado En',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Productos',

                'entries' => [
                    'product'    => 'Producto',
                    'quantity'   => 'Cantidad',
                    'ordered'    => 'Pedido',
                    'uom'        => 'Unidad de Medida',
                    'unit-price' => 'Precio Unitario',
                ],
            ],

            'additional' => [
                'title' => 'Información Adicional',
            ],

            'terms' => [
                'title' => 'Términos y Condiciones',
            ],
        ],
    ],
];
