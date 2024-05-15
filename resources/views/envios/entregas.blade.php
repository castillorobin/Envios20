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



                                                    <form action="/cobro/agregar/" class="row g-2" method="get">

                                                        <div class="col-auto">
                                                            <label for="guia" class="visually-hidden">Guía</label>
                                                            <input type="text" class="form-control " id="guia" name="guia" placeholder="Buscar envio">
                                                            <input type="text" value="Departamental" class="visually-hidden" name="tipo" id="tipo">
                                                            <input type="text" class="visually-hidden" name="comerci" id="comerci" value="Buscar envio">
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                                                        </div>

                                                    </form>

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
                                                            <th class="text-center">DESTINATARIO</th>
                                                            <th class="text-center">TIPO DE ENVÍO</th>
                                                            <th class="text-center">TOTAL A PAGAR</th>
                                                            <th class="text-center">BORRAR</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#" class="text-gray-900 text-hover-primary">#000</a></td>
                                                            <td><a href="#" class="text-gray-900 text-hover-primary">MODA SV</a></td>
                                                            <td>J0akin Polanco</td>
                                                            <td class="text-center"><span class="badge badge-light-success">Personalizado</span></td>
                                                            <td class="text-center">$20.00</td>
                                                            <td style="text-align: center;">
                                                                <button type="button" class="btn btn-danger p-2"><i class="fas fa-trash-alt"></i></button>
                                                            </td>
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
                                    <!--begin::Table container-->
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
                                                    <label for="estado_envio">Metodo de pago</label>
                                                    <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                                        Por favor seleccione el estado del envío.
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
                                                    <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                                    <label for="nota" style="padding-left: 25px;">Nota</label>
                                                </div>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                    <!--begin::Summary-->
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
                                    <!--begin::Payment Method-->
                                    <div class="m-0">
                                        <!--begin::Actions-->
                                        <button class="btn btn-primary fs-1 w-100 py-4">imprimir comprobante</button>
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