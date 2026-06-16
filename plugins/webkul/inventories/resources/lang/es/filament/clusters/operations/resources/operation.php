<?php

return [
    'navigation' => [
        'title' => 'Productos',
        'group' => 'Inventario',
    ],

    'global-search' => [
        'partner' => 'Partner',
        'origin'  => 'Origen',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'fields' => [
                    'receive-from'         => 'Recibir de',
                    'contact'              => 'Contacto',
                    'delivery-address'     => 'Dirección de Entrega',
                    'operation-type'       => 'Tipo de Operación',
                    'source-location'      => 'Ubicación de Origen',
                    'destination-location' => 'Ubicación de Destino',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title' => 'Operaciones',

                'columns' => [
                    'product'                    => 'Producto',
                    'final-location'             => 'Ubicación Final',
                    'description'                => 'Descripción',
                    'scheduled-at'               => 'Programado el',
                    'deadline'                   => 'Fecha Límite',
                    'packaging'                  => 'Empaque',
                    'demand'                     => 'Demanda',
                    'quantity'                   => 'Cantidad',
                    'insufficient-stock-tooltip' => 'Cantidad disponible insuficiente',
                    'unit'                       => 'Unidad',
                    'picked'                     => 'Recogido',
                ],

                'fields' => [
                    'product'        => 'Producto',
                    'final-location' => 'Ubicación Final',
                    'description'    => 'Descripción',
                    'scheduled-at'   => 'Programado el',
                    'deadline'       => 'Fecha Límite',
                    'packaging'      => 'Empaque',
                    'demand'         => 'Demanda',
                    'quantity'       => 'Cantidad',
                    'unit'           => 'Unidad',
                    'picked'         => 'Recogido',

                    'lines' => [
                        'modal-heading' => 'Gestionar Movimientos de Stock',
                        'add-line'      => 'Añadir Línea',

                        'fields' => [
                            'lot'       => 'Lote/Número de Serie',
                            'pick-from' => 'Recoger de',
                            'location'  => 'Almacenar en',
                            'package'   => 'Paquete de Destino',
                            'quantity'  => 'Cantidad',
                            'uom'       => 'Unidad de Medida',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Adicional',

                'fields' => [
                    'responsible'                  => 'Responsable',
                    'shipping-policy'              => 'Política de Envío',
                    'shipping-policy-hint-tooltip' => 'Define si los productos deben entregarse parcialmente o de una vez.',
                    'scheduled-at'                 => 'Programado el',
                    'scheduled-at-hint-tooltip'    => 'La hora programada para procesar la primera parte del envío. Establecer un valor aquí lo aplicará como fecha esperada para todos los movimientos de stock.',
                    'source-document'              => 'Documento de Origen',
                    'source-document-hint-tooltip' => 'Referencia del documento',
                ],
            ],

            'note' => [
                'title' => 'Nota',

                'fields' => [

                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'        => 'Favorito',
            'reference'       => 'Referencia',
            'from'            => 'De',
            'to'              => 'A',
            'contact'         => 'Contacto',
            'responsible'     => 'Responsable',
            'scheduled-at'    => 'Programado el',
            'deadline'        => 'Fecha Límite',
            'closed-at'       => 'Cerrado el',
            'source-document' => 'Documento de Origen',
            'operation-type'  => 'Tipo de Operación',
            'company'         => 'Empresa',
            'state'           => 'Estado',
            'deleted-at'      => 'Eliminado el',
            'created-at'      => 'Creado el',
            'updated-at'      => 'Actualizado el',
        ],

        'groups' => [
            'state'           => 'Estado',
            'source-document' => 'Documento de Origen',
            'operation-type'  => 'Tipo de Operación',
            'scheduled-at'    => 'Programado el',
            'created-at'      => 'Creado el',
        ],

        'filters' => [
            'name'                 => 'Nombre',
            'state'                => 'Estado',
            'partner'              => 'Partner',
            'responsible'          => 'Responsable',
            'owner'                => 'Propietario',
            'source-location'      => 'Ubicación de Origen',
            'destination-location' => 'Ubicación de Destino',
            'deadline'             => 'Fecha Límite',
            'scheduled-at'         => 'Programado el',
            'closed-at'            => 'Cerrado el',
            'created-at'           => 'Creado el',
            'updated-at'           => 'Actualizado el',
            'company'              => 'Empresa',
            'creator'              => 'Creador',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Información General',
                'entries' => [
                    'contact'              => 'Contacto',
                    'operation-type'       => 'Tipo de Operación',
                    'source-location'      => 'Ubicación de Origen',
                    'destination-location' => 'Ubicación de Destino',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title'   => 'Operaciones',
                'entries' => [
                    'product'        => 'Producto',
                    'final-location' => 'Ubicación Final',
                    'description'    => 'Descripción',
                    'scheduled-at'   => 'Programado el',
                    'deadline'       => 'Fecha Límite',
                    'packaging'      => 'Empaque',
                    'demand'         => 'Demanda',
                    'quantity'       => 'Cantidad',
                    'unit'           => 'Unidad',
                    'picked'         => 'Recogido',
                ],
            ],
            'additional' => [
                'title'   => 'Información Adicional',
                'entries' => [
                    'responsible'     => 'Responsable',
                    'shipping-policy' => 'Política de Envío',
                    'scheduled-at'    => 'Programado el',
                    'source-document' => 'Documento de Origen',
                ],
            ],
            'note' => [
                'title' => 'Nota',
            ],
        ],
    ],

    'tabs' => [
        'todo'        => 'Por Hacer',
        'my'          => 'Mis Transferencias',
        'starred'     => 'Destacadas',
        'draft'       => 'Borrador',
        'waiting'     => 'En espera',
        'ready'       => 'Listo',
        'done'        => 'Completado',
        'canceled'    => 'Cancelado',
        'back-orders' => 'Pendientes',
    ],

    'notifications' => [
        'uom-precision-warning' => [
            'title' => 'Advertencia de Precisión de Unidad de Medida',
            'body'  => 'Está utilizando una unidad de medida más pequeña que la usada para almacenar este producto. Esto puede provocar problemas de redondeo en las cantidades reservadas. Considere usar la unidad de medida más pequeña para la valoración de stock, o reduzca la precisión de redondeo de su unidad base.',
        ],
    ],
];
