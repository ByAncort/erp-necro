<?php

return [
    'navigation' => [
        'title' => 'Lotes / Números de Serie',
        'group' => 'Inventario',
    ],

    'global-search' => [
        'ref'     => 'Referencia',
        'product' => 'Producto',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'fields' => [
                    'name'                   => 'Nombre',
                    'name-placeholder'       => 'ej. LOTE/0001/20121',
                    'product'                => 'Producto',
                    'product-hint-tooltip'   => 'El producto asociado con este lote/número de serie. No se puede cambiar si ya ha sido movido.',
                    'reference'              => 'Referencia',
                    'reference-hint-tooltip' => 'Un número de referencia interno, si es diferente del lote/número de serie del fabricante.',
                    'description'            => 'Descripción',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nombre',
            'product'      => 'Producto',
            'on-hand-qty'  => 'Cantidad Disponible',
            'reference'    => 'Referencia Interna',
            'created-at'   => 'Creado el',
            'updated-at'   => 'Actualizado el',
        ],

        'groups' => [
            'product'        => 'Producto',
            'location'       => 'Ubicación',
            'created-at'     => 'Creado el',
        ],

        'filters' => [
            'product'  => 'Producto',
            'location' => 'Ubicación',
            'creator'  => 'Creador',
            'company'  => 'Empresa',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Lote eliminado',
                        'body'  => 'El lote ha sido eliminado exitosamente.',
                    ],

                    'error' => [
                        'title' => 'El lote no pudo ser eliminado',
                        'body'  => 'El lote no puede ser eliminado porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Imprimir Código de Barras',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Lotes eliminados',
                        'body'  => 'Los lotes han sido eliminados exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Los lotes no pudieron ser eliminados',
                        'body'  => 'Los lotes no pueden ser eliminados porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Detalles del Lote',

                'entries' => [
                    'name'        => 'Nombre del Lote',
                    'product'     => 'Producto',
                    'reference'   => 'Referencia',
                    'description' => 'Descripción',
                    'on-hand-qty' => 'Cantidad Disponible',
                    'company'     => 'Empresa',
                    'created-at'  => 'Creado el',
                    'updated-at'  => 'Última Actualización',
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
