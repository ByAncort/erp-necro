<?php

return [
    'navigation' => [
        'title' => 'Productos',
        'group' => 'Inventario',
    ],

    'form' => [
        'sections' => [
            'inventory' => [
                'title' => 'Inventario',

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Seguimiento',

                        'fields' => [
                            'track-inventory'              => 'Rastrear Inventario',
                            'track-inventory-hint-tooltip' => 'Un producto almacenable es aquel que requiere gestión de inventario.',
                            'track-by'                     => 'Rastrear por',
                            'expiration-date'              => 'Fecha de Vencimiento',
                            'expiration-date-hint-tooltip' => 'Si se selecciona, puede especificar fechas de vencimiento para el producto y sus lotes/números de serie asociados.',
                        ],
                    ],

                    'operation' => [
                        'title' => 'Operaciones',

                        'fields' => [
                            'routes'              => 'Rutas',
                            'routes-hint-tooltip' => 'Basado en los módulos instalados, esta configuración le permite definir la ruta del producto, como compra, fabricación o reabastecimiento por pedido.',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Logística',

                        'fields' => [
                            'responsible'              => 'Responsable',
                            'responsible-hint-tooltip' => 'El plazo de entrega (en días) representa la duración prometida entre la confirmación del pedido de venta y la entrega del producto.',
                            'weight'                   => 'Peso',
                            'volume'                   => 'Volumen',
                            'sale-delay'               => 'Plazo de Entrega al Cliente (Días)',
                            'sale-delay-hint-tooltip'  => 'El plazo de entrega (en días) representa la duración prometida entre la confirmación del pedido de venta y la entrega del producto.',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Trazabilidad',

                        'fields' => [
                            'expiration-date'               => 'Fecha de Vencimiento (Días)',
                            'expiration-date-hint-tooltip'  => 'Si se selecciona, puede establecer fechas de vencimiento para el producto y sus lotes/números de serie asociados.',
                            'best-before-date'              => 'Fecha de Consumo Preferente (Días)',
                            'best-before-date-hint-tooltip' => 'El número de días antes de la fecha de vencimiento en que el producto comienza a deteriorarse, aunque aún es seguro usarlo. Se calcula en base al lote/número de serie.',
                            'removal-date'                  => 'Fecha de Retiro (Días)',
                            'removal-date-hint-tooltip'     => 'El número de días antes de la fecha de vencimiento en que el producto debe retirarse del stock. Se calcula en base al lote/número de serie.',
                            'alert-date'                    => 'Fecha de Alerta (Días)',
                            'alert-date-hint-tooltip'       => 'El número de días antes de la fecha de vencimiento en que se debe activar una alerta para el lote/número de serie. Se calcula en base al lote/número de serie.',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Adicional',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'inventory' => [
                'title' => 'Inventario',

                'entries' => [
                ],

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Seguimiento',

                        'entries' => [
                            'track-inventory' => 'Rastrear Inventario',
                            'track-by'        => 'Rastrear por',
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
                            'responsible' => 'Responsable',
                            'weight'      => 'Peso',
                            'volume'      => 'Volumen',
                            'sale-delay'  => 'Plazo de Entrega al Cliente (Días)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Trazabilidad',

                        'entries' => [
                            'expiration-date'  => 'Fecha de Vencimiento (Días)',
                            'best-before-date' => 'Fecha de Consumo Preferente (Días)',
                            'removal-date'     => 'Fecha de Retiro (Días)',
                            'alert-date'       => 'Fecha de Alerta (Días)',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
