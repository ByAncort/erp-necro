<?php

return [
    'label' => 'Enviar OC por Correo',

    'form' => [
        'fields' => [
            'to'      => 'Para',
            'subject' => 'Asunto',
            'message' => 'Mensaje',
        ],
    ],

    'action' => [
        'notification' => [
            'success' => [
                'title' => 'Correo enviado',
                'body'  => 'El correo ha sido enviado exitosamente.',
            ],
        ],
    ],
];
