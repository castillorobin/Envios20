<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        .table th,
        .table td {
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }

        .dataTables_filter {
            display: none;
        }

        .dataTables_length {
            display: none;
        }
    </style>

</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <x-default-layout>

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Pago de paquetes </h1>
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="/" class="text-muted text-hover-primary">Inicio</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <li class="breadcrumb-item text-muted">Facturacion</li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <li class="breadcrumb-item text-muted">Pagar</li>
                            </ul>
                        </div>

                        <div class="row m-1 rounded" style="background-color:white; min-height: 100px; display: flex; align-items: center;">
                            <div class="col-md-3 m-2 mb-4">
                                <select class="form-control form-control-lg" data-control="select2" name="comercio" id="comercio">
                                    <option value=" ">Buscar comercio</option>
                                    <option value="MODA">MODA SV</option>
                                </select>
                            </div>
                            <div class="col-md-auto align-self-center mb-3">
                                <button type="submit" class="btn btn-primary btn-kg">Pago con nombre</button>
                            </div>
                            <div class="col-md-auto align-self-center mb-3">
                                <button type="submit" class="btn btn-primary">Pago general</button>
                            </div>
                            <div class="col-md-3 m-2 mb-4">
                                <div class="d-flex flex-stack bg-success rounded-4 p-3">
                                    <div class="fs-6 fw-bold text-white">
                                        <span class="d-block fs-1 lh-1">Total</span>
                                    </div>
                                    <div class="fs-6 fw-bold text-white text-end">
                                        <span id="total1" name="total1" class="d-block fs-1 lh-1" data-kt-pos-element="grant-total">$0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
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
                                <div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
                                <!--end::Export buttons-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <!--begin::Daterangepicker-->
                                <input class="form-control form-control-solid w-100 mw-250px" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" />
                                <!--end::Daterangepicker-->
                                <!--begin::Filter-->
                                <div class="w-150px">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                        <option></option>
                                        <option value="Todos">Todos</option>
                                        <option value="Alta">Alta</option>
                                        <option value="Baja">Baja</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--end::Filter-->
                                <!--begin::Export dropdown-->
                                <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-exit-up fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Exportar Reporte</button>
                                <!--begin::Menu-->
                                <div id="kt_ecommerce_report_shipping_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                    <!--begin::Menu item
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                                        </div>
                                        -->
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Exportar a Excel</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Exportar a CSV</a>
                                        </div>
                                        -->
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Exportar a PDF</a>
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
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th># De guia</th>
                                            <th>Comercio</th>
                                            <th>Destinatario</th>
                                            <th>Dirección </th>
                                            <th class="text-center">Tipo de envío</th>
                                            <th class="text-center">Estado del envío</th>
                                            <th class="text-center">Fecha de entrega</th>
                                            <th class="text-center">Estado del pago</th>
                                            <th class="text-center">Precio del paquete</th>
                                            <th class="text-center">Precio de envío</th>
                                            <th>Total </th>
                                            <th>Nota</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-black-400">

                                        <td><a href="#" class="text-gray-900 text-hover-primary">#000</a></td>
                                        <td><a href="#" class="text-gray-900 text-hover-primary">MODA SV </a></td>
                                        <td>JOAKIN POLANCO</td>
                                        <td>SANTA ANA</td>
                                        <td class="text-star"><span class="badge badge-light-success">Personalizado</span></td>
                                        <td class="text-star"><span class="badge badge-light-success">Entregado</span></td>
                                        <td>25/mayo/2021</td>
                                        <td class="text-star"><span class="badge badge-light-success">pagado</span></td>
                                        <td>$25.00</td>
                                        <td>$5.00</td>
                                        <td>$30</td>
                                        <td>se relaizo descuento</td>


                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <br>
                            <!--end::Table-->
                            <div class="row justify-content-end">
                                <div class="col-auto align-self-end text-end">
                                    <button type="submit" class="btn btn-dark btn-sm mb-3" id="pago" data-bs-toggle="modal" data-bs-target="#exampleModal">Pagar</button>
                                </div>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detalles de la compra</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-responsive mb-8">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-175px"></th>
                                                            <th class="w-125px"></th>
                                                            <th class="w-60px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <div class="form-floating col-lg-12 mb-4">
                                                            <div class="form-floating col-lg-12 mb-4">
                                                                <input type="text" class="form-control form-control-solid" name="Cajero" id="Cajero" placeholder="Cajero" value="Joakin Polanco" required readonly />
                                                                <label for="Cajero">Cajero</label>
                                                                <div id="CajeroValidationFeedback" class="invalid-feedback">
                                                                    Por favor ingrese el destinatario.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-floating col-lg-12 mb-4">
                                                            <select class="form-select form-select-solid" name="metodo" id="metodo" required>
                                                                <option value="Efectivo">Efectivo</option>
                                                                <option value="Transferencia_empresa">Transferencia a la empresa</option>
                                                                <option value="Transferencia_comercio">Transferencia al comercio</option>
                                                                <option value="Tigo_money">Tigo money</option>
                                                                <option value="Chivo">Chivo</option>
                                                            </select>
                                                            <label for="estado_envio">Método de pago</label>
                                                            <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                                                Por favor seleccione el método de pago.
                                                            </div>
                                                        </div>
                                                        <div class="form-floating col-lg-12 mb-4">
                                                            <input type="text" class="form-control form-control-solid" name="fecha_entrega" id="fecha_entrega" placeholder="Fecha de entrega" readonly />
                                                            <label for="fecha_entrega">Fecha de entrega</label>
                                                            <div id="fechaEntregaValidationFeedback" class="invalid-feedback">
                                                                Por favor seleccione una fecha de entrega.
                                                            </div>
                                                        </div>
                                                        <!-- Campo para la cantidad de descuento -->
                                                        <div class="form-floating col-lg-12 mb-4">
                                                            <input type="text" class="form-control form-control-solid" name="descuento" id="descuento" placeholder="Descuento" />
                                                            <label for="descuento" style="padding-left: 25px;">Descuento</label>
                                                            <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                        </div>
                                                        <div class="form-floating col-lg-12 mb-4">
                                                            <input type="text" class="form-control form-control-solid" name="Pago" id="Pago" placeholder="Pago" />
                                                            <label for="Pago" style="padding-left: 25px;">Pago</label>
                                                            <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                        </div>
                                                        <div class="form-floating col-lg-12 mb-4">
                                                            <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                                            <label for="nota" style="padding-left: 25px;">Nota</label>
                                                        </div>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-5">
                                                <!--begin::Content-->
                                                <div class="fs-6 fw-bold text-white">
                                                    <span class="d-block lh-1 mb-2">Subtotal</span>
                                                    <span class="d-block mb-2">Descuento</span>
                                                    <span class="d-block fs-2qx lh-1">Total</span>
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Content-->
                                                <div class="fs-6 fw-bold text-white text-end">
                                                    <span id="stotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">$0.00</span>
                                                    <span id="sdescuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">-$0.00</span>
                                                    <span id="total1" name="total1" class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$0.00</span>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Summary-->
                                            <div class="row justify-content-end">
                                                <!-- Campo para la cantidad de descuento -->
                                                <label class="col-lg-2 col-form-label ">Pago</label>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control form-control-solid" name="Pago" id="Pago" />
                                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <!-- Campo para la cantidad de descuento -->
                                                <label class="col-lg-2 col-form-label ">Cambio</label>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control form-control-solid" name="Cambio" id="Cambio" value="$5.00" />
                                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                                </div>
                                            </div>
                                        </div>






                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Imprimir comprobante</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end::Table-->
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
    </x-default-layout>
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/reports/shipping/shipping.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <script>
        document.getElementById('pago').addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('modalPago'));
            myModal.show();
        });
    </script>
    <script>
        // Función para obtener la fecha y hora actual en El Salvador
        function obtenerFechaHoraElSalvador() {
            var ahora = new Date();
            var timeZoneOffset = -6 * 60; // GMT-6 (El Salvador)
            var offset = ahora.getTimezoneOffset();
            ahora.setMinutes(ahora.getMinutes() - (offset - timeZoneOffset));
            return ahora;
        }
        // Función para formatear la fecha
        function formatearFecha(fecha) {
            var meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
            var dia = fecha.getDate();
            var mes = meses[fecha.getMonth()];
            var año = fecha.getFullYear();
            var horas = fecha.getHours();
            var minutos = fecha.getMinutes();
            var am_pm = horas >= 12 ? 'AM' : 'PM';
            horas = horas % 12;
            horas = horas ? horas : 12;
            minutos = minutos < 10 ? '0' + minutos : minutos;
            return dia + '/' + mes + '/' + año + ' ' + horas + ':' + minutos + ' ' + am_pm;
        }
        // Función para establecer la fecha y hora actual en el campo de fecha de entrega
        function establecerFechaEntrega() {
            var fechaHoraActual = obtenerFechaHoraElSalvador();
            var fechaFormateada = formatearFecha(fechaHoraActual);
            document.getElementById('fecha_entrega').value = fechaFormateada;
        }
        // Llamar a la función para establecer la fecha y hora actual al cargar la página
        establecerFechaEntrega();
    </script>
</body>
<!--end::Body-->

</html>