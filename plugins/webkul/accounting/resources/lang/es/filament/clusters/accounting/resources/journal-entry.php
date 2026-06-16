<?php

return [
    'title' => 'Asientos de Diario',

    'navigation' => [
        'title' => 'Asientos de Diario',
    ],

    'record-sub-navigation' => [
        'payment' => 'Pago',
    ],

    'global-search' => [
        'number'   => 'Número',
        'partner'  => 'Socio',
        'date'     => 'Fecha de Factura',
        'due-date' => 'Fecha de Vencimiento de Factura',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'General',

                'fields' => [
                    'reference'       => 'Referencia',
                    'accounting-date' => 'Fecha Contable',
                    'journal'         => 'Diario',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => 'Elementos de Diario',

                'repeater' => [
                    'title'       => 'Elementos',
                    'add-item'    => 'Agregar Elemento',

                    'columns' => [
                        'account'                  => 'Cuenta',
                        'partner'                  => 'Socio',
                        'label'                    => 'Etiqueta',
                        'amount-currency'          => 'Monto (Moneda)',
                        'currency'                 => 'Moneda',
                        'taxes'                    => 'Impuestos',
                        'debit'                    => 'Débito',
                        'credit'                   => 'Crédito',
                        'discount-amount-currency' => 'Monto de Descuento (Moneda)',
                    ],

                    'fields' => [
                        'account'                  => 'Cuenta',
                        'partner'                  => 'Socio',
                        'label'                    => 'Etiqueta',
                        'amount-currency'          => 'Monto (Moneda)',
                        'currency'                 => 'Moneda',
                        'taxes'                    => 'Impuestos',
                        'debit'                    => 'Débito',
                        'credit'                   => 'Crédito',
                        'discount-amount-currency' => 'Monto de Descuento (Moneda)',
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'Otra Información',

                'fields' => [
                    'checked'         => 'Verificado',
                    'company'         => 'Compañía',
                    'fiscal-position' => 'Posición Fiscal',
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Términos y Condiciones',
            ],
        ],
    ],

    'table' => [
        'total'   => 'Total',
        'columns' => [
            'invoice-date' => 'Fecha de Factura',
            'date'         => 'Fecha',
            'number'       => 'Número',
            'partner'      => 'Socio',
            'reference'    => 'Referencia',
            'journal'      => 'Diario',
            'company'      => 'Compañía',
            'total'        => 'Total',
            'state'        => 'Estado',
            'checked'      => 'Verificado',
        ],

        'summarizers' => [
            'total' => 'Total',
        ],

        'groups' => [
            'partner'        => 'Socio',
            'journal'        => 'Diario',
            'state'          => 'Estado',
            'payment-method' => 'Método de Pago',
            'date'           => 'Fecha',
            'invoice-date'   => 'Fecha de Factura',
            'company'        => 'Compañía',
        ],

        'filters' => [
            'number'                       => 'Número',
            'invoice-partner-display-name' => 'Nombre de Socio en Factura',
            'invoice-date'                 => 'Fecha de Factura',
            'invoice-due-date'             => 'Fecha de Vencimiento de Factura',
            'invoice-origin'               => 'Origen de Factura',
            'reference'                    => 'Referencia',
            'created-at'                   => 'Creado el',
            'updated-at'                   => 'Actualizado el',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Pago eliminado',
                    'body'  => 'El pago ha sido eliminado exitosamente.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Pagos eliminados',
                    'body'  => 'Los pagos han sido eliminados exitosamente.',
                ],
            ],
        ],

        'toolbar-actions' => [
            'export' => [
                'label' => 'Exportar',
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'General',
                'entries' => [
                    'number'          => 'Número',
                    'reference'       => 'Referencia',
                    'accounting-date' => 'Fecha Contable',
                    'journal'         => 'Diario',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => 'Elementos de Diario',

                'repeater' => [
                    'entries' => [
                        'account'  => 'Cuenta',
                        'partner'  => 'Socio',
                        'label'    => 'Etiqueta',
                        'currency' => 'Moneda',
                        'taxes'    => 'Impuestos',
                        'debit'    => 'Débito',
                        'credit'   => 'Crédito',
                    ],
                ],
            ],

            'other-information' => [
                'title' => 'Otra Información',

                'fieldset' => [
                    'accounting' => [
                        'title' => 'Contabilidad',

                        'entries' => [
                            'company'         => 'Compañía',
                            'fiscal-position' => 'Posición Fiscal',
                            'checked'         => 'Verificado',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Términos y Condiciones',
            ],
        ],
    ],

];
