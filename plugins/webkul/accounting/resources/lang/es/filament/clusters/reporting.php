<?php

return [
    'navigation' => [
        'title' => 'Informes',
        'group' => 'Contabilidad',
    ],
    'pages' => [
        'balance-sheet' => [
            'navigation' => [
                'title' => 'Balance General',
                'group' => 'Informes de Estado',
            ],
            'actions' => [
                'export-excel' => 'Exportar a Excel',
                'export-pdf'   => 'Exportar a PDF',
            ],
            'filters' => [
                'date-range' => 'Rango de Fechas',
                'journals'   => 'Diarios',
            ],
            'content' => [
                'sections' => [
                    'assets' => [
                        'title'       => 'ACTIVOS',
                        'total-label' => 'Total ACTIVOS',
                        'subsections' => [
                            'current-assets' => [
                                'title'       => 'Activos Corrientes',
                                'total-label' => 'Total Activos Corrientes',
                            ],
                            'fixed-assets' => [
                                'title'       => 'Activos Fijos',
                                'total-label' => 'Total Activos Fijos',
                            ],
                            'non-current-assets' => [
                                'title'       => 'Activos No Corrientes',
                                'total-label' => 'Total Activos No Corrientes',
                            ],
                        ],
                    ],
                    'liabilities' => [
                        'title'       => 'PASIVOS',
                        'total-label' => 'Total PASIVOS',
                        'subsections' => [
                            'current-liabilities' => [
                                'title'       => 'Pasivos Corrientes',
                                'total-label' => 'Total Pasivos Corrientes',
                            ],
                            'non-current-liabilities' => [
                                'title'       => 'Pasivos No Corrientes',
                                'total-label' => 'Total Pasivos No Corrientes',
                            ],
                        ],
                    ],
                    'equity' => [
                        'title'       => 'PATRIMONIO',
                        'total-label' => 'Total PATRIMONIO',
                        'subsections' => [
                            'unallocated-earnings' => [
                                'title'          => 'Ganancias No Asignadas',
                                'current-year'   => 'Ganancias No Asignadas del Año Actual',
                                'previous-years' => 'Ganancias No Asignadas de Años Anteriores',
                                'total-label'    => 'Total Ganancias No Asignadas',
                            ],
                            'retained-earnings' => [
                                'title'       => 'Ganancias Retenidas',
                                'total-label' => 'Total Ganancias Retenidas',
                            ],
                        ],
                    ],
                ],
                'grand-total-label' => 'PASIVOS + PATRIMONIO',
            ],
        ],
        'profit-loss' => [
            'navigation' => [
                'title' => 'Pérdidas y Ganancias',
                'group' => 'Informes de Estado',
            ],
            'actions' => [
                'export-excel' => 'Exportar a Excel',
                'export-pdf'   => 'Exportar a PDF',
            ],
            'filters' => [
                'date-range' => 'Rango de Fechas',
                'journals'   => 'Diarios',
            ],
            'content' => [
                'sections' => [
                    'revenue' => [
                        'title'         => 'INGRESOS',
                        'total-label'   => 'Total Ingresos',
                        'empty-message' => 'No hay cuentas de ingresos con transacciones en este período',
                    ],
                    'expenses' => [
                        'title'         => 'GASTOS',
                        'total-label'   => 'Total Gastos',
                        'empty-message' => 'No hay cuentas de gastos con transacciones en este período',
                    ],
                ],
            ],
        ],
        'general-ledger' => [
            'navigation' => [
                'title' => 'Libro Mayor',
                'group' => 'Informes de Auditoría',
            ],
            'actions' => [
                'export-excel' => 'Exportar a Excel',
                'export-pdf'   => 'Exportar a PDF',
            ],
            'filters' => [
                'date-range' => 'Rango de Fechas',
                'journals'   => 'Diarios',
            ],
        ],
        'trial-balance' => [
            'navigation' => [
                'title' => 'Balance de Comprobación',
                'group' => 'Informes de Auditoría',
            ],
            'actions' => [
                'export-excel' => 'Exportar a Excel',
                'export-pdf'   => 'Exportar a PDF',
            ],
            'filters' => [
                'date-range' => 'Rango de Fechas',
                'journals'   => 'Diarios',
            ],
        ],
        'partner-ledger' => [
            'navigation' => [
                'title' => 'Libro de Socios',
                'group' => 'Informes de Socios',
            ],
            'actions' => [
                'export-excel' => 'Exportar Excel',
                'export-pdf'   => 'Exportar PDF',
            ],
            'filters' => [
                'date-range' => 'Rango de Fechas',
                'partners'   => 'Socios',
                'journals'   => 'Diarios',
            ],
        ],
        'aged-receivable' => [
            'navigation' => [
                'title' => 'Cuentas por Cobrar Antiguas',
                'group' => 'Informes de Socios',
            ],
            'actions' => [
                'export-excel' => 'Exportar Excel',
                'export-pdf'   => 'Exportar PDF',
            ],
            'filters' => [
                'as-of'         => 'Al',
                'based-on'      => 'Basado en',
                'period-length' => 'Período (días)',
                'journals'      => 'Diarios',
                'partners'      => 'Socios',
                'entries'       => 'Asientos',
                'options'       => [
                    'due-date'       => 'Fecha de Vencimiento',
                    'invoice-date'   => 'Fecha de Factura',
                    'days-30'        => '30 Días',
                    'days-60'        => '60 Días',
                    'days-90'        => '90 Días',
                    'posted-entries' => 'Asientos Contabilizados',
                    'all-entries'    => 'Todos los Asientos',
                ],
            ],
        ],
        'aged-payable' => [
            'navigation' => [
                'title' => 'Cuentas por Pagar Antiguas',
                'group' => 'Informes de Socios',
            ],
            'actions' => [
                'export-excel' => 'Exportar Excel',
                'export-pdf'   => 'Exportar PDF',
            ],
            'filters' => [
                'as-of'         => 'Al',
                'based-on'      => 'Basado en',
                'period-length' => 'Período (días)',
                'journals'      => 'Diarios',
                'partners'      => 'Socios',
                'entries'       => 'Asientos',
                'options'       => [
                    'due-date'       => 'Fecha de Vencimiento',
                    'invoice-date'   => 'Fecha de Factura',
                    'days-30'        => '30 Días',
                    'days-60'        => '60 Días',
                    'days-90'        => '90 Días',
                    'posted-entries' => 'Asientos Contabilizados',
                    'all-entries'    => 'Todos los Asientos',
                ],
            ],
        ],
    ],
];
