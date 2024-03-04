<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../" />
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
    <meta charset="utf-8" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <style>
        .table-row-gray {
            background-color: #f9f9f9;
        }
        .table-row-white {
            background-color: #ffffff;
        }
        
    </style>

</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <x-default-layout>

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <div class="d-flex flex-column flex-column-fluid">
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-4">
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Melo Express</h1>
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="/" class="text-muted text-hover-primary">Inicio</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <li class="breadcrumb-item text-muted">Envios</li>
                            </ul>
                        </div>


                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <!--begin::Filter menu-->
                            <div class="m-0">
                                <!--begin::Menu toggle-->
                                <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Filter</a>
                                <!--end::Menu toggle-->
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641ac417384b2">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641ac417384b2" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                            </div>
                            <!--end::Filter menu-->
                            <!--begin::Secondary button-->
                            <!--end::Secondary button-->
                            <!--begin::Primary button-->
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                            <!--end::Primary button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid" style="min-width: 1100px;">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar" />
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    <div id="kt_ecommerce_report_customer_orders_export" class="d-none"></div>
                                    <!--end::Export buttons-->
                                </div>
                               
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Daterangepicker-->
                                    <input class="form-control form-control-solid w-100 mw-250px" placeholder="Rango" id="kt_ecommerce_report_customer_orders_daterangepicker" />
                                    <!--end::Daterangepicker-->
                                    <!--begin::Filter-->
                                    <div class="w-150px">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Estado" data-kt-ecommerce-order-filter="status">
                                            <option></option>
                                            <option value="all">All</option>
                                            <option value="active">Active</option>
                                            <option value="locked">Locked</option>
                                            <option value="disabled">Disabled</option>
                                            <option value="banned">Banned</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->
                                    <!--begin::Export dropdown-->
                                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-exit-up fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Export Report</button>
                                    <!--begin::Menu-->
                                    <div id="kt_ecommerce_report_customer_orders_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Export dropdown-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->


                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                
                                <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable" style="min-width: 800px;">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="text-center min-w-100px"># de guía</th>
                                            <th class="text-center min-w-100px">Comercio</th>
                                            <th class="text-center min-w-100px">Destinatario</th>
                                            <th class="text-center min-w-100px">Dirección</th>
                                            <th class="text-center min-w-100px">Estado</th>
                                            <th class="text-center min-w-100px">Precio</th>
                                            <th class="text-center min-w-100px">Envío</th>
                                            <th class="text-center min-w-100px">Total</th>
                                            <th class="text-center min-w-100px">Estado del pago</th>
                                            <th class="text-end min-w-25px"></th> <!-- Celda vacía para simetría -->
                                            <th class="text-end min-w-25px"></th> <!-- Celda vacía para simetría -->
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        @foreach ($envios as $index => $envio)
                                        <tr class="{{ $index % 2 == 0 ? 'table-row-gray' : 'table-row-white' }}">
                                            <td class="text-center">{{ $envio->guia }}</td>
                                            <td class="text-center">{{ $envio->comercio }}</td>
                                            <td class="text-center">{{ $envio->destinatario }}</td>
                                            <td class="text-center">{{ $envio->direccion }}</td>
                                            <td class="text-center">{{ $envio->estado }}</td>
                                            <td class="text-center">{{ $envio->precio }}</td>
                                            <td class="text-center">{{ $envio->envio }}</td>
                                            <td class="text-center">{{ $envio->total }}</td>
                                            <td class="text-center">{{ $envio->pago }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-docs-datatable-subtable="expand_row">
                                                    <span class="svg-icon fs-3 m-0 toggle-off">+</span>
                                                    <span class="svg-icon fs-3 m-0 toggle-on">-</span>
                                                </button>
                                            </td>
                                            <td></td> <!-- Celda vacía para simetría -->
                                            <td></td> <!-- Celda vacía para simetría -->
                                        </tr>
                                        <tr data-kt-docs-datatable-subtable="subtable_template" class="d-none">
                                            <td colspan="12">
                                                <div class="row my-1 mx-1">
                                                    <div class="col-6 col-lg-2">
                                                        <div class="text-gray-900 fs-7">Fecha de creación:</div>
                                                        <div class="text-muted fs-7 fw-bold">20/4/2020</div>
                                                    </div>
                                                    <div class="col-6 col-lg-2">
                                                        <div class="text-gray-900 fs-7">Fecha de entrega:</div>
                                                        <div class="text-muted fs-7 fw-bold">{{ $envio->fecha_entrega }}</div>
                                                    </div>
                                                    <div class="col-6 col-lg-2">
                                                        <div class="text-gray-900 fs-7">Tipo de envío:</div>
                                                        <div class="text-muted fs-7 fw-bold">{{ $envio->tipo }}</div>
                                                    </div>
                                                    <div class="col-6 col-lg-2">
                                                        <div class="text-gray-900 fs-7">Recepción:</div>
                                                        <div class="text-muted fs-7 fw-bold">Entregado</div>
                                                    </div>
                                                    <div class="col-6 col-lg-2">
                                                        <div class="text-gray-900 fs-7">Repartidor:</div>
                                                        <div class="text-muted fs-7 fw-bold">Erick</div>
                                                    </div>
                                                    <div class="col-6 col-lg-2">
                                                        <div class="text-gray-900 fs-7">Ruta:</div>
                                                        <div class="text-muted fs-7 fw-bold">1</div>
                                                    </div>
                                                    <div class="col-6 col-lg-2"></div> <!-- Celda vacía para simetría -->
                                                    <div class="col-6 col-lg-2"></div> <!-- Celda vacía para simetría -->
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>


                                <!--end::Table -->
                            </div>


                            <!--end::Card body-->
                        </div>
                        <!--end::Products-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->



        </div>
        </div>
        </div>
        </div>
    </x-default-layout>
    <script>
        var hostUrl = "assets/";
    </script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <script src="assets/js/custom/apps/ecommerce/reports/customer-orders/customer-orders.js"></script>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('[data-kt-docs-datatable-subtable="expand_row"]');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const subtableRow = row.nextElementSibling;

                if (subtableRow && subtableRow.getAttribute('data-kt-docs-datatable-subtable') === 'subtable_template') {
                    subtableRow.classList.toggle('d-none');
                    subtableRow.classList.toggle('expanded-row'); // Agregar o quitar la clase de fila expandida
                }
            });
        });
    });
</script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    const estados = document.querySelectorAll('td:nth-child(5)');

    estados.forEach(estado => {
        estado.style.backgroundColor = '#F8F9FA'; 
        const text = estado.innerText.trim();
        if (text === 'Creado') {
            estado.innerHTML = `<span style="background-color: #D9E9DA; color: #50cd89; padding: 6px; border-radius: 5px;">${text}</span>`;
        } else if (text === 'Sin crear') {
            estado.innerHTML = `<span style="background-color: #E9DCDC; color: #f14c87; padding: 6px; border-radius: 5px;">${text}</span>`;
        }
    });
});



</script>

</html>