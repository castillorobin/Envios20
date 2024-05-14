<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../" />
    <title>Melo Express - Entregas
    </title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>


<body id="kt_body" class="">
    <x-default-layout>
        <!--begin::Container-->
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start">
            <!--begin::Post-->
            <div class="content flex-row-fluid" id="kt_content">
                <!--begin::Row-->
                <div class="row gy-0 gx-10 ">
                    <!--begin::Col-->
                    <div class="col-xl-8 ">

                        <!--begin::General Widget 1-->
                        <div class="mb-5 mb-lg-10 ">
                            <!--begin::Tabs-->
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="kt_general_widget_1_1">

                                    <!--begin::Tables Widget 2-->
                                    <div class="card card-flush col-lg-12">
                                        <!--begin::Card header-->
                                        <div class="card-header align-items-end py-5 gap-2 gap-md-5">
                                            <!--begin::Card title-->
                                            <div class="card-title ">
                                                <!--begin::Search-->
                                                <div>



                                                    <!--begin::Search-->
                                                    <div class="d-flex align-items-center position-relative my-1">
                                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <input type="search" spellcheck="false" data-ms-editor="true" id="dt-search-0" class="dt-input form-control form-control-solid w-250px ps-12" placeholder="Buscar" />
                                                    </div>

                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 align-items-end">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                                    <thead>
                                                        <tr class="fw-semibold fs-6 text-gray-400 fw-bold ">
                                                            <th># DE GUÍA</th>
                                                            <th>COMERCIO</th>
                                                            <th>DESTINATARIO</th>
                                                            <th>TIPO DE ENVÍO</th>
                                                            <th>TOTAL A PAGAR </th>
                                                            <th>BORRAR</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>#0002</td>
                                                            <td>MODA SV</td>
                                                            <td>J0akin Polanco</td>
                                                            <td>Departamental</td>
                                                            <td>$20.00</td>
                                                            <td><button type="button" class="btn btn-danger p-2"><i class="fas fa-trash-alt"></i></button></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Tables Widget 2-->
                                </div>
                            </div>
                            <!--end::Tab content-->
                        </div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-4">

                        <!--begin::Mixed Widget 12-->
                        <div class="card mb-5 mb-lg-10">
                            <!--begin::Header-->
                            <div class="card card-flush bg-body" id="kt_pos_form">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <h3 class="card-title fw-bold text-gray-800 fs-2qx">Entregas</h3>

                                </div>

                                <!--begin::Body-->
                                <div class="card-body pt-0">
                                    <div class="form-floating col-lg-12 mb-4">
                                        <select class="form-select form-select-solid" name="cajero" id="cajero" required>
                                            <option value="Joaquin">Joaquin Polanco</option>
                                            <option value="Robin">Robin castillo</option>
                                        </select>
                                        <label for="estado_envio">Cajero</label>
                                        <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el estado del envío.
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
                                        <label for="estado_envio">Metodo de pago</label>
                                        <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el estado del envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-12 mb-4">
                                        <input type="datetime-local" class="form-control form-control-solid" name="fecha_entrega" id="fecha_entrega" placeholder="Fecha de entrega" />
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
                                        <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                        <label for="nota" style="padding-left: 25px;">Nota</label>
                                    </div>



                                </div>
                                <!--begin::Summary-->
                                <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
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
                                <!--begin::Payment Method-->
                                <div class="m-0">
                                    <!--begin::Actions-->
                                    <button class="btn btn-primary fs-1 w-100 py-3">imprimir comprobante</button>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Payment Method-->
                            </div>
                            <!--end: Card Body-->

                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->

                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 12-->



                    <!--end: List Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Post-->
        </div>
        <!--end::Container-->




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
    <!--end::Vendors Javascript-->
    <script>
        // Función para obtener la fecha y hora actual en El Salvador
        function obtenerFechaHoraElSalvador() {
            var ahora = new Date();
            var timeZoneOffset = -6 * 60; // GMT-6 (El Salvador)
            var offset = ahora.getTimezoneOffset();
            ahora.setMinutes(ahora.getMinutes() - (offset - timeZoneOffset));
            return ahora;
        }

        // Función para establecer la fecha y hora actual en el campo de fecha de entrega
        function establecerFechaEntrega() {
            var fechaHoraActual = obtenerFechaHoraElSalvador();
            var fechaHoraFormateada = fechaHoraActual.toISOString().slice(0, 16);
            document.getElementById('fecha_entrega').value = fechaHoraFormateada;
        }

        // Llamar a la función para establecer la fecha y hora actual al cargar la página
        establecerFechaEntrega();
    </script>

</body>
<!--end::Body-->

</html>