<?php

return [
    'before-save' => [
        'notification' => [
            'error' => [
                'tracking-update' => [
                    'title' => 'Error al actualizar el seguimiento',
                    'body'  => 'No puede cambiar el seguimiento de inventario de un producto que ya ha sido utilizado.',
                ],

                'track-by-update' => [
                    'title' => 'Error al actualizar el seguimiento',
                    'body'  => 'Tiene producto(s) en stock que no tienen lote/número de serie. Puede asignar lotes/números de serie realizando un ajuste de inventario.',
                ],
            ],
        ],
    ],
];
