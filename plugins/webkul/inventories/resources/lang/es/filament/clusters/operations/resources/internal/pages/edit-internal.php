<?php

return [
    'notification' => [
        'title' => 'Transferencia Interna actualizada',
        'body'  => 'La transferencia interna ha sido actualizada exitosamente.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

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
];
