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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
    flatpickr("#kt_datepicker_1", {
        dateFormat: 'Y-m-d',
    });
</script>
<script>

   // $("#kt_datepicker_1").flatpickr();

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
      
    <div class="d-flex flex-column flex-column-fluid">
                                            
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack ">
            
    

<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
        Cuadre de caja
            </h1>
    <!--end::Title-->

            
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    <a href="/dashboard" class="text-muted text-hover-primary">
                                Inicio                            </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                                        
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    Caja                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                                        
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    Cuadre de caja                                           </li>
                                <!--end::Item-->
                                        
                    </ul>
        <!--end::Breadcrumb-->
    </div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Filter menu-->
        <div class="m-0">
            <!--begin::Menu toggle-->
            
            <!--end::Menu toggle-->
            
            

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_687ac4a64193b">
    <!--begin::Header-->
   
    <!--end::Header-->

    <!--begin::Menu separator-->
    <div class="separator border-gray-200"></div>
    <!--end::Menu separator-->
    

    <!--begin::Form-->
   
    <!--end::Form-->
</div>
<!--end::Menu 1-->        </div>
        <!--end::Filter menu-->
    
    
    <!--begin::Secondary button-->
        <!--end::Secondary button-->
    
    <!--begin::Primary button-->
           
        <!--end::Primary button-->
</div>
<!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->                                        
                    
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >
    
           
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container " >
            <!--begin::Products-->
<div class="card card-flush" >
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5" >
        <!--begin::Card title-->
        <!--begin::Card title-->
        <div class="card-title">
            <form action="/caja/listadofiltro" method="GET">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                 <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>

                                        <input type="search" spellcheck="false" data-ms-editor="true" id="searchTerm" class="dt-input form-control form-control-solid w-200px ps-12" placeholder="Buscar ticket" onkeyup="doSearch()" />

            </div>



            <!--end::Search-->
        </div>

      
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5" data-select2-id="select2-data-122-79op">
            <!--begin::Flatpickr-->
             
            <div class="input-group w-250px">
            <input class="form-control" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" name="rango" />
            </div>
            <!--end::Flatpickr-->

            <div class="w-100 mw-200px" data-select2-id="select2-data-121-dtky">
                                                    <select class="form-select form-select-solid mi-selector" data-control="select2" name="usuario" id="usuario" >
                                   
                                    <option value="todos" >Todos</option>
                                    @foreach ($repartidores as $repartidor)
                                    <option value="{{$repartidor->name}}">{{$repartidor->name}}</option>
                                    @endforeach
                                </select>

            </div>

            <!--begin::Add product-->
              <button type="submit" class="btn btn-primary " >Filtrar</button>
            <!--end::Add product-->
                
        </div>
          
        <!--end::Card toolbar-->
    </div>
     </form>
   
                                <!--end::Card toolbar-->
                         
                            <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0" style="min-height: 550px;">
        
<!--begin::Table-->
<div  id="kt_ecommerce_report_returns_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer"><div id="" class="table-responsive">   
<table class="table align-middle table-bordered fs-6 gy-5 dataTable" id="kt_ecommerce_report_shipping_table" style="width: 100%;">
    <colgroup><col data-dt-column="0" ><col data-dt-column="1" ><col data-dt-column="2" ><col data-dt-column="3" ><col data-dt-column="4" ><col data-dt-column="5" ></colgroup>
    <thead>
        <tr class="text-center text-gray-500 fw-bold fs-7 text-uppercase gs-0">
            <th class="text-center min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">ID</span><span class="dt-column-order"></span>
            </th>

            <th class="text-center min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="No. Orders Returned: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Fecha</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-center min-w-175px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="No. Orders Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Cajero</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-center min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="No. Orders Replaced: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Saldo</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-center min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Estado</span><span class="dt-column-order"></span>
            </th>
            
           
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
       @isset($cajas)
         @foreach ($cajas as $caja) 
             <tr class="'table-row-gray' : 'table-row-white' ">
                    <td class="text-center"> 
                        <a href="/caja/listado/{{ $caja->id }}" class="form-control-plaintext">
                    {{ $caja->id }}
                    </a>
                    </td>
                    <td class="text-center">{{ date('d/m/Y', strtotime($caja->created_at)) }}</td>
                    <td class="text-center">{{$caja->cajero}}</td>
                    <td class="text-center">$ {{$caja->descuadre}}</td>
                    <td class="text-center" >
                        @if($caja->estado == 0)
                        <span class="badge text-bg-success" ><span style="color:white; font-weight:bolder;"> Abierta</span></span>
                        @endif
                        @if($caja->estado == 1)
                        <span class="badge text-bg-danger" > <span style="color:white; font-weight:bolder;">Cerrada</span></span>
                        @endif
                    </td>
                    
                    </tr>
                    @endforeach
            @endisset
        </tbody>
<tfoot></tfoot></table></div><div id="" class="row">
    <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar" style="float:bottom;">
   
</div>
<!--end::Products-->        </div>
        <!--end::Content container-->
          
    <a href="/caja/jefe" style="float: right;">
    <button type="button" class="btn btn-secondary " style="float: right; width:100%;">Cancelar</button>
    </a>

    </div>
<!--end::Content-->	

                                    </div>





<div class="modal fade" tabindex="-1" id="kt_modal_stacked_1">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Crear Movimiento</h3>

            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
        </div>

        <div class="modal-body">
           <input type="text" class="form-control form-control-solid" placeholder="Cajero"/>
           <br>
            <input type="date" class="form-control form-control-solid" placeholder="Fecha"/>
            
            <br>
            <input type="text" class="form-control form-control-solid" placeholder="Agencia"/>
            <br>
            <select class="form-select form-select-solid" aria-label="Select example">
    <option>Tipo</option>
    <option value="Caja inicial">Caja inicial</option>
    <option value="Entrada">Entrada</option>
    <option value="Salida">Salida</option>
    <option value="Cierre de caja">Cierre de caja</option>
</select>
            <br>
            <input type="text" class="form-control form-control-solid" placeholder="Concepto"/>
            <br>
            <input type="text" class="form-control form-control-solid" placeholder="$0.00"/>
            



        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>
</div>









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
   






</body>
<!--end::Body-->

</html>