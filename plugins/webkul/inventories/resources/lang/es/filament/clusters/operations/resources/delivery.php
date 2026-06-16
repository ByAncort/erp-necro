<?php

return [
    'navigation' => [
        'title' => 'Entregas',
        'group' => 'Transferencias',
    ],

    'global-search' => [
        'partner' => 'Partner',
        'origin'  => 'Origen',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Entrega eliminada',
                        'body'  => 'La entrega ha sido eliminada exitosamente.',
                    ],

                    'error' => [
                        'title' => 'La entrega no pudo ser eliminada',
                        'body'  => 'La entrega no puede ser eliminada porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Entregas eliminadas',
                        'body'  => 'Las entregas han sido eliminadas exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Las entregas no pudieron ser eliminadas',
                        'body'  => 'Las entregas no pueden ser eliminadas porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],
];
