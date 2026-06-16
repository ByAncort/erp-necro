<?php

return [
    'notification' => [
        'title' => 'Acuerdo de Compra actualizado',
        'body'  => 'El acuerdo de compra ha sido actualizado exitosamente.',
    ],

    'header-actions' => [
        'confirm' => [
            'label' => 'Confirmar',
        ],

        'close' => [
            'label'        => 'Cerrar',
            'notification' => [
                'warning' => [
                    'title' => 'No se puede cerrar el acuerdo de compra',
                    'body'  => 'No puede cerrar este acuerdo de compra porque algunas SdC relacionadas no están en estado Hecho o Cancelado.',
                ],
            ],
        ],

        'cancel' => [
            'label' => 'Cancelar',
        ],

        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'title' => 'Acuerdo de Compra eliminado',
                'body'  => 'El acuerdo de compra ha sido eliminado exitosamente.',
            ],
        ],
    ],
];
