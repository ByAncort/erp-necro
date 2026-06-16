<?php

return [
    'title' => 'Gestionar Cuentas Predeterminadas',

    'form' => [
        'exchange-difference-entries' => [
            'label' => 'Asientos de Diferencia Cambiaria',

            'fields' => [
                'journal' => [
                    'label' => 'Diario',
                ],

                'gain' => [
                    'label' => 'Ganancia',
                ],

                'loss' => [
                    'label' => 'Pérdida',
                ],
            ],
        ],

        'bank-transfer-and-payments' => [
            'label' => 'Transferencias Bancarias y Pagos',

            'fields' => [
                'bank-suspense-account' => [
                    'label' => 'Cuenta de Suspenso Bancario',
                ],

                'transfer-account' => [
                    'label' => 'Cuenta de Transferencia',
                ],
            ],
        ],

        'product-accounts' => [
            'label' => 'Cuentas de Producto',

            'fields' => [
                'income-account' => [
                    'label' => 'Cuenta de Ingresos',
                ],

                'expense-account' => [
                    'label' => 'Cuenta de Gastos',
                ],
            ],
        ],
    ],
];
