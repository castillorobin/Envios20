<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only) 
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
   -->
   <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />

    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
 
    <style>
        .table th,
        .table td { 
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }
    </style>

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
/*
        #kt_ecommerce_report_shipping_table_previous{
            display: none;
        }
        #kt_ecommerce_report_shipping_table_next{
            display: none;
        }
            */
    </style>

    <!--end::Global Stylesheets Bundle-->
    <style>
        .table th,
        .table td {
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }

        .margen{
            margin: 5px;
        }
        .margenint{
            padding: 5px;
        }
        
.columna{
    width:350px;
}
.centrar{
    
    text-align: center;
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
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Reporte de tickets de pago</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="/dashboard" class="text-muted text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Reporte de tickets de pago</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title--> 

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                        @can('ordenes-crear')
                            <a href="/envios/registroconguia" class="btn btn-sm fw-bold btn-primary" data-bs-target="#kt_modal_create_app">Crear envio</a>
                            @endcan
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
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class=" ">
                                <!--begin::Card title-->
                                <div class="p-5">

                                <div class="row" >

                                <!--primera colummna-->
                                    <div class="col-12 col-md-3" >
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>

                                        <input type="search" spellcheck="false" data-ms-editor="true" id="searchTerm" class="dt-input form-control form-control-solid w-200px ps-12" placeholder="Buscar ticket" onkeyup="doSearch()" disabled />
                                    </div>
                                    </div>
<!-- fin primera colummna-->
<!--segunda colummna-->
                                    <div class="col-12 col-md-9">
                                    <form action="/envios/rpagodatos" method="GET">
                                        <table  style="float:right;">
                                            <tr>
                                                <td>
                                    <div class="col-auto" style="margin-right: 15px;">
                                    <input style="width: 220px;" class="form-control" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" name="rango" />
  </div>
  </td>
  <td style="width: 30%;">
                                    <div class="">

                                    <select class="form-select form-select-solid mi-selector" data-control="select2" name="usuario" id="usuario" style="width: 420px;">
                                   
                                    <option value="todos" >Todos</option>
                                    @foreach ($repartidores as $repartidor)
                                    <option value="{{$repartidor->name}}">{{$repartidor->name}}</option>
                                    @endforeach
                                </select>
  </div>
  </td>
  <td >
  <div class="col-auto">
  <button type="submit" class="btn btn-primary " style="margin-left:10px;">Filtrar</button>
  </div>
  </td>
  <td >
    <a href="/envios/reportepago">
    <button type="button" class="btn btn-secondary " style="margin-left:10px;">Cancelar</button>
    </a>
</td>
  </tr>
  </table>
          
                                   
                                    </form>
                                    </div>
                                    <!-- fin segunda colummna-->
                                     <!--tercera colummna-->
                                    
                                    <!--fin tercera colummna-->
                                </div>




                                    <!--begin::Search-->
                                   
                                    <!--end::Search-->
                                  
                                    <!--end::Export buttons-->
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                                          
                                   


                                    
                                </div>

                                <!--end::Card toolbar-->
                           

                                <!--end::Card toolbar-->
                         
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 590px;  max-height: 590px; overflow-y: scroll">


                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px"># de ticket</th>
                                                <th class="min-w-50px">Comercio</th>
                                                
                                                <th class="min-w-50px">Usuario verifico</th>
                                                <th class="min-w-50px">Fecha verificacion</th>
                                                <th class="min-w-50px">Usuario de pago</th>
                                                <th class="min-w-50px">Fecha de pago</th>
                                                <th class="min-w-50px">Estado</th>
                                                <th class="min-w-50px">Nota</th>
                                               
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold  text-gray-400">
                                            @foreach ($tickets as $ticket) 
                                            <tr class="'table-row-gray' : 'table-row-white' ">
                                                <td> <a href="/envios/lisdopagosdatosticket/{{$ticket->id}}">
                                                    <button class="btn btn-active-light-secondary edit " value="{{$ticket->id}}" id="kt_drawer_example_basic_button" ># {{$ticket->id}}</button>
                                                    </a>
                                                    </td>
                                                <td>{{$ticket->comercio}}</td> 
                                                <td>{{$ticket->cajeroveri}}</td>
                                                
                                                <td>{{$ticket->fechaveri}}</td>
                                                <td>{{$ticket->cajero}}</td>
                                                <td>{{$ticket->created_at}}</td>
                                                <td>{{$ticket->estado}}</td> 
                                               <td>{{$ticket->nota}}</td>
                                            
                                                
                                               
                                                    
                                                   


                                                
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <div style="float:right">
                                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" disabled>
                                        <i class="ki-duotone ki-exit-up fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Exportar Reporte</button>
                                    <!--begin::Menu-->
                                    
                                    <div id="kt_ecommerce_report_shipping_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                        <!--begin::Menu item
                                     
                                        -->
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Exportar a Excel</a>
                                        </div>
                                        <!--end::Menu item-->
                                       
                                      
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf" disabled>Exportar a PDF</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    </div>
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
    <!--begin::Javascript-->
    <script>

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
   





    

<script>
       
    
    
    
    
    
        </script>











</body>
<!--end::Body-->

</html>