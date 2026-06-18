<?php

return [
    'title' => 'Plantilla de presupuesto',

    'navigation' => [
        'title'  => 'Plantilla de presupuesto',
        'group'  => 'Órdenes de venta',
    ],

    'form' => [
        'tabs' => [
            'products' => [
                'title'  => 'Productos',
                'fields' => [
                    'products'     => 'Productos',
                    'name'         => 'Nombre',
                    'quantity'     => 'Cantidad',
                ],
            ],

            'terms-and-conditions' => [
                'title'  => 'Términos y condiciones',
                'fields' => [
                    'note-placeholder' => 'Escriba sus términos y condiciones para los presupuestos.',
                ],
            ],
        ],

        'sections' => [
            'general' => [
                'title' => 'Información general',

                'fields' => [
                    'name'               => 'Nombre',
                    'quotation-validity' => 'Validez del presupuesto',
                    'sale-journal'       => 'Diario de ventas',
                ],
            ],

            'signature-and-payment' => [
                'title' => 'Firma y pagos',

                'fields' => [
                    'online-signature'      => 'Firma electrónica',
                    'online-payment'        => 'Pago en línea',
                    'prepayment-percentage' => 'Porcentaje de prepago',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'created-by'            => 'Creado por',
            'company'               => 'Empresa',
            'name'                  => 'Nombre',
            'number-of-days'        => 'Número de días',
            'journal'               => 'Diario de ventas',
            'signature-required'    => 'Firma requerida',
            'payment-required'      => 'Pago requerido',
            'prepayment-percentage' => 'Porcentaje de prepago',
        ],
        'groups'  => [
            'company' => 'Empresa',
            'name'    => 'Nombre',
            'journal' => 'Diario',
        ],
        'filters' => [
            'created-by' => 'Creado por',
            'company'    => 'Empresa',
            'name'       => 'Nombre',
            'created-at' => 'Creado el',
            'updated-at' => 'Actualizado el',
        ],
        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Plantilla de presupuesto eliminada',
                    'body'  => 'La plantilla de presupuesto se ha eliminado correctamente.',
                ],
            ],

        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Plantilla de presupuesto eliminada',
                    'body'  => 'La plantilla de presupuesto se ha eliminado correctamente.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'products' => [
                'title' => 'Productos',
            ],
            'terms-and-conditions' => [
                'title' => 'Términos y condiciones',
            ],
        ],
        'sections' => [
            'general' => [
                'title' => 'Información general',
            ],
            'signature_and_payment' => [
                'title' => 'Firma y pago',
            ],
        ],
        'entries' => [
            'product'               => 'Producto',
            'description'           => 'Descripción',
            'quantity'              => 'Cantidad',
            'unit-price'            => 'Precio unitario',
            'section-name'          => 'Nombre de sección',
            'note-title'            => 'Título de nota',
            'name'                  => 'Nombre de plantilla',
            'quotation-validity'    => 'Validez del presupuesto',
            'sale-journal'          => 'Diario de ventas',
            'online-signature'      => 'Firma electrónica',
            'online-payment'        => 'Pago en línea',
            'prepayment-percentage' => 'Porcentaje de prepago',
        ],
    ],
];
