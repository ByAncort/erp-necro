<?php

return [
    'navigation' => [
        'title' => 'Recepciones',
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
                        'title' => 'Recepción eliminada',
                        'body'  => 'La recepción ha sido eliminada exitosamente.',
                    ],

                    'error' => [
                        'title' => 'La recepción no pudo ser eliminada',
                        'body'  => 'La recepción no puede ser eliminada porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Recepciones eliminadas',
                        'body'  => 'Las recepciones han sido eliminadas exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Las recepciones no pudieron ser eliminadas',
                        'body'  => 'Las recepciones no pueden ser eliminadas porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],
];
