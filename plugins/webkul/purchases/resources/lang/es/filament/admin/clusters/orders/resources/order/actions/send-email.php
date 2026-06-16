<?php

return [
    'label'        => 'Enviar por Correo',
    'resend-label' => 'Reenviar por Correo',

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
