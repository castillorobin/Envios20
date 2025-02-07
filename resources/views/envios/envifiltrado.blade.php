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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
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
        .paginate_button {
            display: none;
        }
 
        .dataTables_length {
            display: none;
        }

        #kt_ecommerce_report_shipping_table_previous{
            display: none;
        }
        #kt_ecommerce_report_shipping_table_next{
            display: none;
        }

        #kt_ecommerce_report_shipping_table_next{
            display: none;
        }

        .dt-length{
            display: none;
        }
        .dt-search{
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
            <div class="d-flex flex-column flex-column-fluid" style="margin-top: 0% ;display: flex;  ">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Busqueda manual</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Inicio</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Busqueda manual</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        <div class="d-flex gap-2 gap-lg-3" style="float: right;">
                            
                            <!--end::Primary button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <!---->
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
                                    <form action="envios/filtrandoenvios2" method="GET" id="myForm" >
                                        @method('GET') 
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Daterangepicker-->
                                    <input class="form-control form-control-solid w-100 mw-250px" value="{{ $rangol }}" name="rango" disabled/>
                                    <!--end::Daterangepicker-->
                                    <!--begin::Filter-->
                                    <div class="w-150px">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" data-control="select2" name="estado"  data-hide-search="true" data-placeholder="Estado" data-kt-ecommerce-order-filter="status" >
                                             
                                            <option value="todo"> Todo</option>
                                            <option value="Creado">Creado</option>
                                            <option value="En ruta">En ruta</option>
                                            <option value="Entregado">Entregado</option>
                                            <option value="No entregado">No entregado</option>
                                            <option value="Reprogramado">Reprogramado</option>
                                            <option value="Reenvio">Reenvio</option>
                                            <option value="Devuelto al comercio">Devuelto al comercio</option>
                                            <option value="Recepcionado">Recepcionado</option>
                                        </select>
                                        <input type="text" id="rangolimp" name="rangolimp" value="{{ $rangol }}" hidden>
                                        <!--end::Select2-->
                                    </div>

                                    <!--end::Filter-->
                                    <button type="submit" class="btn btn-primary" >Filtrar</button>
                                    <!--end::Export dropdown-->
                                    
                                </form>
                                
                                <a href="envios/lista">
                                <button class="btn btn-danger" type="submit">Limpiar</button>
                                </a>
                        
                                </div>

                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!-- Empty list item to push elements to the right  -->

			 		
			  	
                                <!--begin::Table-->
                                <div class="table-responsive" >
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" style="font-size: 12px;" id="kt_ecommerce_report_shipping_table">
                                        <thead>
                                            <tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0 text-center" >
                                                <th class="min-w-80px"># de guía</th>
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
                                <!--end::Table-->


 







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
    <!--begin::Vendors Javascript(used for this page only)   <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script> -->
    
    <script src="assets/js/custom/apps/ecommerce/reports/shipping/shipping.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

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