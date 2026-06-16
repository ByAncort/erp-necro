<?php

return [
    'title' => 'Gestionar Impuestos',

    'form' => [
        'default-taxes' => [
            'label'       => 'Impuestos Predeterminados',
            'helper-text' => 'Se aplicará por defecto a los productos si no se selecciona ningún impuesto',
        ],

        'sales-tax' => [
            'label' => 'Impuesto de Venta',
        ],

        'purchase-tax' => [
            'label' => 'Impuesto de Compra',
        ],

        'prices' => [
            'label' => 'Precios',
        ],

        'rounding-method' => [
            'label'       => 'Método de Redondeo',
            'helper-text' => 'Método utilizado para redondear los montos de impuestos',

            'options' => [
                'round-per-line' => 'Redondear por Línea',
                'round-globally' => 'Redondear Globalmente',
            ],
        ],

        'fiscal-country' => [
            'label' => 'País Fiscal',
        ],
    ],
];
