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

       
    </style>


</head>

<script>
    function doSearch()

{

const tableReg = document.getElementById('kt_ecommerce_report_shipping_table');

const searchText = document.getElementById('searchTerm').value.toLowerCase();

let total = 0;



// Recorremos todas las filas con contenido de la tabla

for (let i = 1; i < tableReg.rows.length; i++) {

    // Si el td tiene la clase "noSearch" no se busca en su cntenido

    if (tableReg.rows[i].classList.contains("noSearch")) {

        continue;

    }



    let found = false;

    const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

    // Recorremos todas las celdas

    for (let j = 0; j < cellsOfRow.length && !found; j++) {

        const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

        // Buscamos el texto en el contenido de la celda

        if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

            found = true;

            total++;

        }

    }

    if (found) {

        tableReg.rows[i].style.display = '';

    } else {

       

        tableReg.rows[i].style.display = 'none';

    }

}



// mostramos las coincidencias

const lastTR=tableReg.rows[tableReg.rows.length-1];

const td=lastTR.querySelector("td");

lastTR.classList.remove("hide", "red");

if (searchText == "") {

    lastTR.classList.add("hide");

} else if (total) {

    td.innerHTML="";

} else {

    lastTR.classList.add("red");

    td.innerHTML="";

}

}
</script>




<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <x-default-layout>

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container">
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Reporte de repartidor</h1>
                           <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="/dashboard" class="text-muted text-hover-primary">Inicio</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <li class="breadcrumb-item text-muted">
                                    <a href="" class="text-muted text-hover-primary">Control de stocks</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <li class="breadcrumb-item text-muted">Reporte de repartidor</li>
                                
                                
                            </ul>
                        </div>
                        
                        <div class="row m-1 rounded" style="background-color:white; min-height: 100px; display: flex; align-items: center;">
                            <div class="col-md-3 m-2 mb-4">
                               <h2>Repartidor: {{ $user->nombre }}</h2>
                                
                            </div> 
                           
                      
                           
                            <div class="col-md-7 m-2 mb-4">
                                <div class="d-flex flex-stack rounded-4 p-3 float-end" style="width: 250px;">
                                   
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
                                        <input type="search" spellcheck="false" data-ms-editor="true" id="searchTerm" class="dt-input form-control form-control-solid w-250px ps-12" placeholder="Buscar" onkeyup="doSearch()" />
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
                                    
                                    <!--end::Daterangepicker-->
                                    <!--begin::Filter-->
                                    <form action="repartidorfiltroestado" id="kt_invoice_form" method="POST"> 
                                        @csrf
                                        @method('GET')
                                    <div class="row w-550px">
                                       
                                        <!--begin::Select2-->
                                        <div class="col-md-7 align-self-center mb-3">
                                        <select class="form-select form-select-solid" data-control="select2" name="filtro" id="filtro" data-hide-search="true" data-placeholder="Estado" data-kt-ecommerce-order-filter="status">
                                           
                                            <option value="asignado">Asignado</option>
                                            <option value="entregado">Entregado</option>
                                            <option value="No entregado">No entregado</option>
                                         
                                        </select>
                                        
                                        <input type="text" value="{{ $user->id }}" name="idrepa" id="idrepa" hidden>
                                    </div>
                                        <!--end::Select2-->
                                        <div class="col-md-auto align-self-center mb-3">
                                            <button type="submit" class="btn btn-primary btn-kg">Filtrar</button>
                                        </form>
                                        <a href="/stocks/paquetesasignados" class="btn btn-danger">
                                            Limpiar
                                        </a>
                                        </div>
                                   
                                    </div>
                                    <!--end::Filter-->
                                    <!--begin::Export dropdown-->
                                    
                                    <!--end::Menu-->
                                    <!--end::Export dropdown-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header       fs-8 -->
                            <!--begin::Card body-->
                            <div class="card-body pt-0 " style="background-color:white; min-height: 450px;  ">
                                <!--begin::Table-->
                                <div class="table-responsive" >
                                    <table  class="table align-middle table-row-dashed fs-6 gy-5" style="font-size: 12px;" id="kt_ecommerce_report_shipping_table">
                                    <thead>
                                            <tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0 text-center" >
                                                <th class="min-w-50px"># de guía</th>
                                                <th class="min-w-50px text-center">Comercio</th>
                                                <th class="min-w-150px text-center">Destinatario</th>
                                                <th class="min-w-150px ">Dirección</th>                                                 
                                                <th class="min-w-100px text-center">Tipo de envío</th>
                                                <th class="min-w-150px text-center">Fecha de entrega</th>                                                
                                                <th class="min-w-50px text-center">Estado</th>                                                                                      
                                                <th class="min-w-50px text-center">Total</th>  
                                            </tr> 
                                        </thead> 
                                        <tbody class="fw-semibold text-gray-400">
                                            @foreach ($envios as $index => $envio)
                                            <tr class="{{ $index % 2 == 0 ? 'table-row-gray' : 'table-row-white' }}">
                                                <td>
                                                    <a href="/envios/detalle/{{ $envio->guia }}" class="text-gray-900 text-hover-primary">
                                                        {{ $envio->guia }}
                                                    </a>
                                                </td>
                                                <td style="text-align: center;">{{ $envio->comercio }}</td>
                                                <td style="text-align: center;">{{ $envio->destinatario }}</td>
                                                <td>{{ $envio->direccion }}</td>
                                                <td style="text-align: center;"><span class="badge badge-dark">{{ $envio->tipo}}</span></td>
                                                <td style="text-align: center;">{{ $envio->fecha_entrega}}</td>
                                                
                                               
                                                <td style="text-align: center;">
                                                    @if( $envio->estado == 'No entregado')
                                                    <span class="badge badge-danger">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Creado')
                                                    <span class="badge badge-warning">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Entregado')
                                                    <span class="badge badge-success">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'En ruta')
                                                    <span class="badge badge-info">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Reprogramado')
                                                    <span class="badge badge-dark">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Devuelto al comercio')
                                                    <span class="badge badge-primary">{{ $envio->estado }}</span>
                                                    @else
                                                    <span class="badge badge-light">{{ $envio->estado }}</span>
                                                    @endif
                                                </td>
                                               
                                                <td class="text-center">${{ $envio->total }}</td>
                                              
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                              
                                <br>

                                <!--end::Table -->
                                <div class="row justify-content-end">
                                    <div class="col-auto align-self-end text-end">
                                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-exit-up fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Exportar Reporte</button> 
                                    <!--begin::Menu-->
                                    <div id="kt_ecommerce_report_shipping_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                       
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Exportar a Excel</a>
                                        </div>
                                        <!--end::Menu item-->
                                     
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Exportar a PDF</a>
                                        </div>
                                        <!--end::Menu item-->
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

<script>
        import DataTable from 'datatables.net-dt';
        import language from 'datatables.net-plugins/i18n/es-MX.mjs';
 
 let table = new DataTable('#kt_ecommerce_report_shipping_table', {
    language,
 });
    </script>



</body>
<!--end::Body-->

</html>