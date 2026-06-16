<?php

return [
    'navigation' => [
        'title' => 'Tipos de Operación',
        'group' => 'Gestión de Almacén',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'operator-type'             => 'Tipo de Operación',
                    'operator-type-placeholder' => 'ej. Recepciones',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Aplicable en',
                'description' => 'Seleccione los lugares donde esta ruta puede ser seleccionada.',

                'fields' => [
                ],
            ],
        ],

        'tabs' => [
            'general' => [
                'title'  => 'General',

                'fields' => [
                    'operator-type'                      => 'Tipo de Operación',
                    'sequence-prefix'                    => 'Prefijo de Secuencia',
                    'generate-shipping-labels'           => 'Generar Etiquetas de Envío',
                    'warehouse'                          => 'Almacén',
                    'show-reception-report'              => 'Mostrar Informe de Recepción al Validar',
                    'show-reception-report-hint-tooltip' => 'Si se selecciona, el sistema mostrará automáticamente el informe de recepción al validar, siempre que haya movimientos que asignar.',
                    'company'                            => 'Compañía',
                    'return-type'                        => 'Tipo de Devolución',
                    'create-backorder'                   => 'Crear Pedido Pendiente',
                    'move-type'                          => 'Tipo de Movimiento',
                    'move-type-hint-tooltip'             => 'A menos que sea definido por el documento de origen, esto servirá como la política de selección predeterminada para este tipo de operación.',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title'  => 'Lotes/Números de Serie',

                        'fields' => [
                            'create-new'                => 'Crear Nuevo',
                            'create-new-hint-tooltip'   => 'Si se selecciona, el sistema asumirá que tiene la intención de crear nuevos Lotes/Números de Serie, permitiéndole ingresarlos en un campo de texto.',
                            'use-existing'              => 'Usar Existente',
                            'use-existing-hint-tooltip' => 'Si se selecciona, puede elegir los Lotes/Números de Serie u optar por no asignar ninguno. Esto permite crear stock sin lote o sin restricciones sobre el lote utilizado.',
                        ],
                    ],

                    'locations' => [
                        'title'  => 'Ubicaciones',

                        'fields' => [
                            'source-location'                   => 'Ubicación de Origen',
                            'source-location-hint-tooltip'      => 'Esta es la ubicación de origen predeterminada al crear manualmente esta operación. Sin embargo, puede cambiarse más tarde, y las rutas pueden asignar una ubicación predeterminada diferente.',
                            'destination-location'              => 'Ubicación de Destino',
                            'destination-location-hint-tooltip' => 'Esta es la ubicación de destino predeterminada para operaciones creadas manualmente. Sin embargo, puede modificarse más tarde, y las rutas pueden asignar una ubicación predeterminada diferente.',
                        ],
                    ],

                    'packages' => [
                        'title'  => 'Paquetes',

                        'fields' => [
                            'show-entire-package'              => 'Mover Paquete Completo',
                            'show-entire-package-hint-tooltip' => 'Si se selecciona, puede mover paquetes completos.',
                        ],
                    ],
                ],
            ],

            'hardware' => [
                'title'  => 'Hardware',

                'fieldsets' => [
                    'print-on-validation' => [
                        'title'  => 'Imprimir al Validar',

                        'fields' => [
                            'delivery-slip'              => 'Albarán de Entrega',
                            'delivery-slip-hint-tooltip' => 'Si se selecciona, el sistema imprimirá automáticamente el albarán de entrega cuando se valide la selección.',

                            'return-slip'              => 'Albarán de Devolución',
                            'return-slip-hint-tooltip' => 'Si se selecciona, el sistema imprimirá automáticamente el albarán de devolución cuando se valide la selección.',

                            'product-labels'              => 'Etiquetas de Producto',
                            'product-labels-hint-tooltip' => 'Si se selecciona, el sistema imprimirá automáticamente las etiquetas de producto cuando se valide la selección.',

                            'lots-labels'              => 'Etiquetas de Lote/NS',
                            'lots-labels-hint-tooltip' => 'Si se selecciona, el sistema imprimirá automáticamente las etiquetas de lote/número de serie cuando se valide la selección.',

                            'reception-report'              => 'Informe de Recepción',
                            'reception-report-hint-tooltip' => 'Si se selecciona, el sistema imprimirá automáticamente el informe de recepción cuando se valide la selección y contenga movimientos asignados.',

                            'reception-report-labels'              => 'Etiquetas de Informe de Recepción',
                            'reception-report-labels-hint-tooltip' => 'Si se selecciona, el sistema imprimirá automáticamente las etiquetas del informe de recepción cuando se valide la selección.',

                            'package-content'              => 'Contenido del Paquete',
                            'package-content-hint-tooltip' => 'Si se selecciona, el sistema imprimirá automáticamente los detalles del paquete y su contenido cuando se valide la selección.',
                        ],
                    ],

                    'print-on-pack' => [
                        'title'  => 'Imprimir al "Poner en Paquete"',

                        'fields' => [
                            'package-label'              => 'Etiqueta del Paquete',
                            'package-label-hint-tooltip' => 'Si se selecciona, el sistema imprimirá automáticamente la etiqueta del paquete cuando se use el botón "Poner en Paquete".',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nombre',
            'warehouse'  => 'Almacén',
            'company'    => 'Compañía',
            'deleted-at' => 'Eliminado el',
            'created-at' => 'Creado el',
            'updated-at' => 'Actualizado el',
        ],

        'groups' => [
            'type'       => 'Tipo',
            'warehouse'  => 'Almacén',
            'created-at' => 'Creado el',
            'updated-at' => 'Actualizado el',
        ],

        'filters' => [
            'type'      => 'Tipo',
            'warehouse' => 'Almacén',
            'company'   => 'Compañía',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tipo de Operación restaurado',
                    'body'  => 'El tipo de operación ha sido restaurado exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tipo de Operación eliminado',
                    'body'  => 'El tipo de operación ha sido eliminado exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tipo de Operación forzado a eliminar',
                        'body'  => 'El tipo de operación ha sido forzado a eliminar exitosamente.',
                    ],

                    'error' => [
                        'title' => 'El tipo de operación no pudo ser eliminado',
                        'body'  => 'El tipo de operación no puede ser eliminado porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tipos de Operación restaurados',
                    'body'  => 'Los tipos de operación han sido restaurados exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tipos de Operación eliminados',
                    'body'  => 'Los tipos de operación han sido eliminados exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tipos de Operación forzados a eliminar',
                        'body'  => 'Los tipos de operación han sido forzados a eliminar exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Los tipos de operación no pudieron ser eliminados',
                        'body'  => 'Los tipos de operación no pueden ser eliminados porque están actualmente en uso.',
                    ],
                ],
            ],
        ],

        'empty-actions' => [
            'create' => [
                'label' => 'Crear Tipo de Operación',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Información General',

                'entries' => [
                    'name' => 'Nombre',
                ],
            ],

            'record-information' => [
                'title' => 'Información del Registro',

                'entries' => [
                    'created-by'   => 'Creado Por',
                    'created-at'   => 'Creado el',
                    'last-updated' => 'Última Actualización',
                ],
            ],
        ],

        'tabs' => [
            'general' => [
                'title' => 'General',

                'entries' => [
                    'type'                       => 'Tipo de Operación',
                    'sequence_code'              => 'Código de Secuencia',
                    'print_label'                => 'Imprimir Etiqueta',
                    'warehouse'                  => 'Almacén',
                    'reservation_method'         => 'Método de Reserva',
                    'auto_show_reception_report' => 'Mostrar Informe de Recepción Automáticamente',
                    'company'                    => 'Compañía',
                    'return_operation_type'      => 'Tipo de Operación de Devolución',
                    'create_backorder'           => 'Crear Pedido Pendiente',
                    'move_type'                  => 'Tipo de Movimiento',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title' => 'Lotes',

                        'entries' => [
                            'use_create_lots'   => 'Usar Crear Lotes',
                            'use_existing_lots' => 'Usar Lotes Existentes',
                        ],
                    ],

                    'locations' => [
                        'title' => 'Ubicaciones',

                        'entries' => [
                            'source_location'      => 'Ubicación de Origen',
                            'destination_location' => 'Ubicación de Destino',
                        ],
                    ],
                ],
            ],
            'hardware' => [
                'title' => 'Hardware',

                'fieldsets' => [
                    'print_on_validation' => [
                        'title' => 'Imprimir al Validar',

                        'entries' => [
                            'auto_print_delivery_slip'           => 'Imprimir Automáticamente Albarán de Entrega',
                            'auto_print_return_slip'             => 'Imprimir Automáticamente Albarán de Devolución',
                            'auto_print_product_labels'          => 'Imprimir Automáticamente Etiquetas de Producto',
                            'auto_print_lot_labels'              => 'Imprimir Automáticamente Etiquetas de Lote',
                            'auto_print_reception_report'        => 'Imprimir Automáticamente Informe de Recepción',
                            'auto_print_reception_report_labels' => 'Imprimir Automáticamente Etiquetas de Informe de Recepción',
                            'auto_print_packages'                => 'Imprimir Automáticamente Paquetes',
                        ],
                    ],

                    'print_on_pack' => [
                        'title' => 'Imprimir al Empaquetar',

                        'entries' => [
                            'auto_print_package_label' => 'Imprimir Automáticamente Etiqueta del Paquete',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
