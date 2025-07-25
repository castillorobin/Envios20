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
        #kt_ecommerce_report_shipping_table_paginate {
            display: none;
        }


        #kt_ecommerce_report_shipping_table_previous{
            display: none;
        }
        #kt_ecommerce_report_shipping_table_next{
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

<script>
    function doSearch()

{

const tableReg = document.getElementById('tenvios');

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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Reporte de cobro</h1>
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
                                <li class="breadcrumb-item text-muted">Reporte de cobro</li>
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
                                    <form action="/envios/ticketdatos" method="GET">
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
    <a href="/envios/listadoticket">
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
                           


                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 590px;  ">


                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px"></th>
                                                <th class="min-w-50px"></th>
                                                <th class="min-w-50px"></th>
                                                <th class="min-w-50px"></th>
                                                <th class="min-w-50px"></th>
                                                <th class="min-w-50px"></th>
                                                <th class="min-w-50px"></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold  text-gray-400">
                                           
                                            <tr class="'table-row-gray' : 'table-row-white' ">
                                                <td>                                   </td>
                                                <td></td> 
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                               
                                                <td></td>
                                                <td></td>
                                               
                                                    
                                                   


                                               
                                            </tr>
                                            
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







        <!--begin::Ticket-->
<div
    id="kt_drawer_example_basic"

    class="bg-white"
    data-kt-drawer="true"
    data-kt-drawer-activate="true"
    data-kt-drawer-toggle="#kt_drawer_example_basic_button"
    data-kt-drawer-close="#kt_drawer_example_basic_close"
    data-kt-drawer-width="500px"
>
    




<div style="width:100%; " class="text-center centrar">
    <img src="/fotos/logo24.png" width="150px">
    
    <div class="margen "> <span>Expertos en paqueteria</span></div>

    <div class="margenint " style="background-color: black; color:white; width:80%; margin-left:10%;">  <span style="background-color: black; color:white; width:100%;">Comprobante de cobro</span> </div>

    <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>

           <div style="margin-top:10px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
       <br>

                        <div class="fecha centrar " style="font-weight: bolder;">
   TICKET Nº <label for="" id="codigo"></label>
  
   
   </div>
   <div style="text-align: left; margin-left:10%;">
   Comercio: <span style="font-weight: bolder;"><label for="" id="come"></label></span> 
   </div>
   <hr style="margin-right:10%; margin-left:10%;">
   
   <div style="text-align: left; margin-right:10%; margin-left:10%;">
   <span > Fecha: <label for="" id="fech"></label> </span>
   <span style="float:right; ">Hora: <label for="" id="hora"></label></span> 
   </div>


   <div class="centrar">
<table class="centrar" style="margin-left:10%; width: 80%;">
    <thead class="centrar" style="border-top: 2px solid black; border-bottom: 2px solid black;">
        <tr>
        <th style="width: 200px;">DESCRIPCION</th>
        <TH>CANT</TH>
        <TH>IMPORTE</TH>
        </tr>

        <tbody>
            <tr>
                <td style="text-align: left;">Personalizado</td>
                <td><label for="" id="pers"></label></td>
                <td>$<label for="" id="peri"></label></td>
            </tr>
            <tr>
                <td style="text-align: left;">Punto fijo</td>
                <td><label for="" id="punt"></label></td>
                <td>$<label for="" id="puni"></label></td>
            </tr>
            <tr>
                <td style="text-align: left;">Casillero</td>
                <td><label for="" id="casi"></label></td>
                <td>$<label for="" id="caii"></label></td>
            </tr>
            <tr>
                <td style="text-align: left;">Personalizado Departamental</td>
                <td><label for="" id="depa"></label></td>
                <td>$<label for="" id="depi"></label></td>
            </tr>
            <tr >
                <td style="text-align: left; border-bottom: 2px solid black;"> Guias</td>
                <td style="border-bottom: 2px solid black;"><label for="" id="guia"></label></td>
                <td style="border-bottom: 2px solid black;">$<label for="" id="guii"></label></td>
            </tr>
            <tr >
                <td></td>
                <td>SUBTOTAL</td>
                <td >$<label for="" id="subt"> </label>
                 
                </td>
                
            </tr>
            <tr >
                <td></td>
                <td>DESCUENTO</td>
                <td>$
                 
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td style="font-weight: bolder;">TOTAL</td>
                <td >$<label for="" id="tota"> </label></td>
            </tr>
            <tr>
                
                <td colspan="2" style="text-align: right;">ENTREGA EFECTIVO:</td>
                <td >$<label for="" id="entr"> </label></td>
            </tr>
            <tr>
                <td></td>
                <td>CAMBIO:</td>
                <td >$<label for="" id="camb"> </label></td>
            </tr>
        </tbody>

    </thead>
</table>


   
<br>
<div>Le atendio: {{ Auth::user()->name }}</div>
<hr>
<div>¡¡GRACIAS POR PREFERIRNOS!!</div>
<hr>
<div style="padding-left: 125px;"> {!! DNS1D::getBarcodeHTML(202401 , 'C39') !!} <span style="padding-right: 80px; font-weight: bolder;"> <label for="" id="cod2"> </label></span></div>






</div>


<br>
<p></p>

<button type="button" class="btn btn-secondary" data-kt-drawer-dismiss="true">Cerrar</button>
&nbsp; &nbsp;
<a id="impri" target="_blank">
<button type="button" class="btn btn-dark">Imprimir</button>
</a>



</div>
<!--end::Ticket-->








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