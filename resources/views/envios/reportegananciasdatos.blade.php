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
        table tr td{
            height: 60px;
        }
    </style>
  <script>
    $("#kt_datepicker_1").flatpickr();
    $("#kt_datepicker_2").flatpickr();
</script>

</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <x-default-layout>

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container ">
                        
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Reporte de Ganancias</h1>
                            
                        </div>
                        <form action="/envios/reportegananciasdatos" id="kt_invoice_form" method="POST"> 
                            @csrf
                            @method('GET')
                        <div class="row m-1 rounded" style="background-color:white; min-height: 100px; display: flex; align-items: center;">
                            <div class="col-sm-3 m-2">
                                <input class="form-control" placeholder="Desde" id="kt_datepicker_1" style="float: left; width:48%;" name="desde"/>
                                <input class="form-control" placeholder="Hasta" id="kt_datepicker_2" style="float: right; width:48%;" name="hasta"/>
                            </div> 
                            <div class="col-md-2 m-2 mb-4">
                                <select class="form-select form-select-solid mi-selector" data-control="select2" name="tipo" id="tipo" >
                                    <option value="Todos">Tipo de paquete</option>
                                    <option value="Todos">Todos</option>
                                    <option value="Personalizado">Personalizado </option>
                                    <option value="Personalizado departamental">Personalizado departamental</option>
                                    <option value="Casillero">Casillero</option>
                                    <option value="Punto fijo">Punto fijo</option>
                                    
                                </select>
                            </div> 
                            <div class="col-md-2 m-2 mb-4">
                                <select class="form-select form-select-solid mi-selector" name="estado" id="estado" data-control="select2" >
                                    <option value="Todos" >Estado</option>    
                                    <option value="Todos" >Todos</option>
                                    <option value="Creado">Creado</option>
                                    <option value="En ruta">En ruta</option>
                                    <option value="Entregado">Entregado</option>
                                    <option value="No entregado">No entregado</option>
                                    <option value="Reprogramado">Reprogramado</option>
                                    <option value="Devuelto al comercio">Devuelto al comercio</option>
                                    <option value="Recepcionado">Recepcionado</option>
                                </select>
                            </div> 
                            <div class="col-md-2 m-2 mb-4">
                                <select class="form-select form-select-solid mi-selector" data-control="select2" name="repartidor" id="repartidor" >
                                    <option value="Todos">Repartidor</option>
                                    <option value="Todos" >Todos</option>
                                    @foreach ($repartidores as $repartidor)
                                    <option value="{{$repartidor->nombre}}">{{$repartidor->nombre}}</option>
                                    @endforeach
                                </select> 
                            </div> 
                            
                            <div class="col-md-auto align-self-center mb-3">
                                <button type="submit" class="btn btn-primary btn-kg">Buscar</button>
                            </div>
                        </form>
                           
                            <div class="col-md-7 m-2 mb-4">
                                
                            </div>
                        </div>

                        <br>
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                           
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-5 ">


                                <div class="row" style="font-size:180%; font-weight: bolder;">
                                    <div class="col-sm-6 pt-5">
                                        Desde: {{$desde}}
                                        <p></p>
                                        Hasta: {{$hasta}}
                                        <p></p>
                                        Tipo de paquete: {{$tipo}}
                                        <p></p>
                                        Estado: {{$estado}}
                                        <p></p>
                                        Repartidor:  {{$repartidorsolo}}


                                    </div>
                                    <div class="col-sm-6 pt-5">
                                        @if ($tipo == "Personalizado")
                                        Personalizado: $ {{$totalperso}}
                                        @endif
                                        @if ($tipo == "Punto fijo")
                                        Punto Fijo: $ {{$totalfijo}}
                                        @endif
                                        @if ($tipo == "Casillero")
                                        Casillero: $ {{$totalcasillero}}
                                        @endif
                                        @if ($tipo == "Personalizado departamental")
                                        Personalizado departamental: $ {{$totalpersodepa}}
                                        @endif
                                        @if ($tipo == "Todos")
                                        Todos: $ {{$totaltodos}}
                                        @endif
                                        <p></p>
                                        
                                    </div>
                                </div>


            <br>
            
            <br>
            

<!--end::Table-->

                            </div>
                            
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