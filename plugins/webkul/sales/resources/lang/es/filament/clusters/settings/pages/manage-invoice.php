<?php

return [
    'title' => 'Gestionar factura',

    'breadcrumb' => 'Gestionar factura',

    'navigation' => [
        'title' => 'Gestionar factura',
    ],

    'form' => [
        'invoice-policy' => [
            'label'      => 'Política de facturación',
            'label-help' => 'Define cómo se generan las facturas a partir de los pedidos de venta.',
            'options'    => [
                'order'    => 'Generar factura basada en cantidades pedidas',
                'delivery' => 'Generar factura basada en cantidades entregadas',
            ],
        ],
    ],
];
