<?php

return [
    'table' => [
        'columns' => [
            'reference'         => 'Referencia',
            'total-amount'      => 'Monto Total',
            'confirmation-date' => 'Fecha de Confirmación',
            'status'            => 'Estado',
        ],
    ],

    'infolist' => [
        'settings' => [
            'entries' => [
                'buyer' => 'Comprador',
            ],

            'actions' => [
                'accept' => [
                    'label' => 'Aceptar',

                    'notification' => [
                        'title' => 'Cotización Aceptada',
                        'body'  => 'La SdC ha sido confirmada exitosamente.',
                    ],

                    'message' => [
                        'body' => 'La SdC ha sido confirmada por el proveedor.',
                    ],
                ],

                'decline' => [
                    'label' => 'Rechazar',

                    'notification' => [
                        'title' => 'Cotización Rechazada',
                        'body'  => 'La SdC ha sido rechazada exitosamente.',
                    ],

                    'message' => [
                        'body' => 'La SdC ha sido rechazada por el proveedor.',
                    ],
                ],

                'print' => [
                    'label' => 'Descargar/Imprimir',
                ],
            ],
        ],

        'general' => [
            'entries' => [
                'purchase-order'        => 'Orden de Compra #:id',
                'quotation'             => 'Solicitud de Cotización #:id',
                'order-date'            => 'Fecha del Pedido',
                'from'                  => 'De',
                'confirmation-date'     => 'Fecha de Confirmación',
                'receipt-date'          => 'Fecha de Recepción',
                'products'              => 'Productos',
                'untaxed-amount'        => 'Monto Sin Impuestos',
                'tax-amount'            => 'Monto de Impuestos',
                'total'                 => 'Total',
                'communication-history' => 'Historial de Comunicación',
            ],
        ],
    ],
];
