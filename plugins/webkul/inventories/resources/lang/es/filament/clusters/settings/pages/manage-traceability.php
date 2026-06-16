<?php

return [
    'title' => 'Gestionar Trazabilidad',

    'form' => [
        'enable-lots-serial-numbers'                             => 'Lotes y Números de Serie',
        'enable-lots-serial-numbers-helper-text'                 => 'Obtenga trazabilidad completa desde proveedores hasta clientes',
        'configure-lots'                                         => 'Configurar Lotes',
        'enable-expiration-dates'                                => 'Fechas de Vencimiento',
        'enable-expiration-dates-helper-text'                    => 'Establecer fechas de vencimiento en lotes y números de serie',
        'display-on-delivery-slips'                              => 'Mostrar en Albaranes de Entrega',
        'display-on-delivery-slips-helper-text'                  => 'Los lotes y números de serie aparecerán en los albaranes de entrega',
        'display-expiration-dates-on-delivery-slips'             => 'Mostrar Fechas de Vencimiento en Albaranes',
        'display-expiration-dates-on-delivery-slips-helper-text' => 'Las fechas de vencimiento aparecerán en el albarán de entrega',
        'enable-consignments'                                    => 'Consignaciones',
        'enable-consignments-helper-text'                        => 'Establecer propietario en productos almacenados',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'Tiene productos en stock con seguimiento por lote/número de serie habilitado.',
                'body'  => 'Primero desactive el seguimiento en todos los productos antes de desactivar esta configuración.',
            ],
        ],
    ],
];
