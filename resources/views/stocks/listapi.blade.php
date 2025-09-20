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

        #kt_ecommerce_report_shipping_table_previous{
            display: none;
        }
        #kt_ecommerce_report_shipping_table_next{
            display: none;
        }
    </style>

</head>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function() {

        $("#kt_ecommerce_report_shipping_daterangepicker").change(function() {

            const subtotal = $(this).val();
         document.getElementById("rangolimp").value = subtotal ;
            

            

        });

  

        
    });

    window.onload = function() { // también puede usar window.addEventListener('load', (event) => {
       const subtotal = document.getElementById("kt_ecommerce_report_shipping_daterangepicker").value
    document.getElementById("rangolimp").value = subtotal ;
  };
</script>



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


<body>
<input type="text" value="{{date_default_timezone_set('America/El_Salvador') }}" hidden>
    <x-default-layout>
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main" >
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kkt_content" class="content flex-column-fluid">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center ">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Listado de picking</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="/dashboard" class="text-muted text-hover-primary">Inicio</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Listado de picking</li>
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
               <div id="kt_content" class="content flex-column-fluid " >
                    <!--begin::Content container-->
                    <div id="kt_content_container" class="">
                        <!--begin::Products-->
                        <div class="card card-flush ">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center">
                                <!--begin::Card title-->
                                <div class="card-title ">
                                    <!--begin::Search-->
                                    <div class="col-auto ">
                                            <label for="guia" class="visually-hidden">Ticket</label>
                                            <input type="text" class="form-control " id="searchTerm" name="searchTerm" placeholder="Buscar" autofocus onkeyup="doSearch()">
                                            <input type="text" value="Departamental" class="visually-hidden" name="asignar" id="asignar">
                                            <input type="text" class="visually-hidden" name="comerci" id="comerci" value="Buscar">
                                        </div>
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    <div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
                                    <!--end::Export buttons-->
                                    <form action="/stocks/listapifiltro" method="GET" id="myForm" >
                                        @method('GET') 
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Daterangepicker-->
                                    <input class="form-control form-control-solid w-100 mw-250px" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" name="rango" />
                                    <!--end::Daterangepicker-->
                                    <!--begin::Filter-->
                                    
                                    <input type="text" id="rangolimp" name="rangolimp" hidden>
                                    <!--end::Filter-->
                                    <button type="submit" class="btn btn-primary" >Filtrar</button>
                                    <!--end::Export dropdown-->
                                </form>
                                
                                    <button class="btn btn-danger" disabled>Limpiar</button>
                                
                                </div>

                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 700px;  ">

                                <!--begin::Table-->
                                <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-80px "># de guía</th>
                                                <th class="min-w-50px">Comercio</th>
                                                <th class="min-w-150px">Destinatario</th>
                                                                                              
                                                <th class="min-w-100px">Tipo de orden</th>
                                                <th class="min-w-150px">Fecha programada</th>                                                
                                                <th class="min-w-50px text-center">Ubicación</th>                                                                                      
                                                <th class="min-w-50px">Estado de la orden</th>                                              
                                            </tr> 
                                        </thead>
                                        <tbody class="fw-semibold text-gray-400">
                                            @foreach ($envios as $index => $envio)
                                            <tr class="{{ $index % 2 == 0 ? 'table-row-gray' : 'table-row-white' }}">
                                                <td>
                                                    <a href="/stocks/detallepick/{{ $envio->guia }}" class="text-gray-900 text-hover-primary">
                                                        {{ $envio->guia }}
                                                    </a>
                                                </td> 
                                                <td>{{ $envio->comercio }}</td>
                                                <td>{{ $envio->destinatario }}</td>
                                                <td style="text-align: center;">
                                                    @if( $envio->tipo == 'Reenvio')
                                                    <span class="badge badge-warning">{{ $envio->tipo }}</span>
                                                   
                                                    @else 
                                                    <span class="badge badge-danger">{{ $envio->tipo }}</span>
                                                    @endif
                                                </td>

                                                <td style="text-align: center;">{{ $envio->fecha_pro}}</td>
                                                <td style="text-align: center;">{{ $envio->ubicacion}}</td>
                                                
                                                
                                                <td class="text-center">
                                                     @if( $envio->estado == 'Pendiente')
                                                    <span class="badge badge-danger">{{ $envio->estado }}</span>
                                                 @else 
                                                    <span class="badge badge-success">{{ $envio->estado}}</span>
                                                    @endif
                                                </td>
                                               
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                                <!--end::Table-->
<!-- Empty list item to push elements to the right  -->

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

</body>
<!--end::Body-->

</html>