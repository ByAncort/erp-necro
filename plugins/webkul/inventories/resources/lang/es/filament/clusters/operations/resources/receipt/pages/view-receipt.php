<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Recepción Eliminada',
                    'body'  => 'La recepción ha sido eliminada exitosamente.',
                ],

                'error' => [
                    'title' => 'La recepción no pudo ser eliminada',
                    'body'  => 'La recepción no puede ser eliminada porque está actualmente en uso.',
                ],
            ],
        ],
    ],
];
