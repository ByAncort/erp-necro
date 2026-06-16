<?php

return [
    'navigation' => [
        'title' => 'Envíos Directos',
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
                        'title' => 'Envío Directo eliminado',
                        'body'  => 'El envío directo ha sido eliminado exitosamente.',
                    ],

                    'error' => [
                        'title' => 'El envío directo no pudo ser eliminado',
                        'body'  => 'El envío directo no puede ser eliminado porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Envíos Directos eliminados',
                        'body'  => 'Los envíos directos han sido eliminados exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Los envíos directos no pudieron ser eliminados',
                        'body'  => 'Los envíos directos no pueden ser eliminados porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],
];
