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
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start ">
            <!--begin::Post-->
            <div class="content flex-row-fluid" id="kt_content" >
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5" >
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Entrega de paquetes </h1>
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
                        <li class="breadcrumb-item text-muted">Entregas</li>
                    </ul>
                </div>

                <!--begin::Row-->
                <div class="row gy-0 gx-10 ">
                    <!--begin::Col-->
                    <div class="col-xl-12 ">

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



                                                    <form action="/entrega/agregar/" class="row g-2" method="GET">
                                                   
                                                   

                                                        <div class="col-auto">
                                                            <label for="guia" class="visually-hidden">Guía</label>
                                                            <input type="text" class="form-control " id="guia" name="guia" placeholder="Buscar guia">
                                                            <input type="text" value="Departamental" class="visually-hidden" name="tipo" id="tipo">
                                                            <input type="text" class="visually-hidden" name="comerci" id="comerci" value="Buscar guia">
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
                                                            <td><a href="#" class="text-gray-900 text-hover-primary"></a></td>
                                                            <td><a href="#" class="text-gray-900 text-hover-primary"></a></td>
                                                            <td></td>
                                                            <td class="text-center"><span class="badge badge-light-success"></span></td>
                                                            <td class="text-center"></td>
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