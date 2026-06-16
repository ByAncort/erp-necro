<?php

return [
    'navigation' => [
        'title' => 'Transferencias Internas',
        'group' => 'Transferencias',
    ],

    'global-search' => [
        'origin' => 'Origen',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Transferencia Interna eliminada',
                        'body'  => 'La transferencia interna ha sido eliminada exitosamente.',
                    ],

                    'error' => [
                        'title' => 'La transferencia interna no pudo ser eliminada',
                        'body'  => 'La transferencia interna no puede ser eliminada porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Transferencias Internas eliminadas',
                        'body'  => 'Las transferencias internas han sido eliminadas exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Las transferencias internas no pudieron ser eliminadas',
                        'body'  => 'Las transferencias internas no pueden ser eliminadas porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],
];
