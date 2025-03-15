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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Listado de tickets</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Listado de tickets</li>
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
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>

                                        <input type="search" spellcheck="false" data-ms-editor="true" id="searchTerm" class="dt-input form-control form-control-solid w-250px ps-12" placeholder="Buscar ticket" onkeyup="doSearch()" />
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
                                    <input class="form-control form-control-solid w-100 mw-250px" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" />
                                    <!--end::Daterangepicker-->
                                    <!--begin::Filter-->
                                    <div class="w-150px">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Estado" data-kt-ecommerce-order-filter="status">
                                            <option></option>
                                            <option value="all">Todo</option>
                                            <option value="Creado">Creado</option>
                                            <option value="Entregado">Entregado</option>
                                            <option value="Fallido">Fallido</option>
                                            <option value="En transito">En transito</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->
                                    <!--begin::Export dropdown-->
                                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-exit-up fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Exportar Reporte</button>
                                    <!--begin::Menu-->
                                    <div id="kt_ecommerce_report_shipping_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                        <!--begin::Menu item
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                                        </div>

                                        -->
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Exportar a Excel</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Exportar a CSV</a>
                                        </div>
                                        -->
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Exportar a PDF</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Export dropdown-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 450px;  ">


                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="tenvios">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px"># de ticket</th>
                                                <th class="min-w-50px">Comercio</th>
                                                <th class="min-w-50px">Agencia</th>
                                                <th class="min-w-50px">Cantidad</th>
                                                <th class="min-w-50px">Descuento</th>
                                                <th class="min-w-50px">Fecha y hora</th>
                                                <th class="min-w-50px">Estado del pago</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold  text-gray-400">
                                            @foreach ($tickets as $ticket) 
                                            <tr class="'table-row-gray' : 'table-row-white' ">
                                                <td> 
                                                    <button class="btn btn-active-light-secondary edit " value="{{$ticket->codigo}}" id="kt_drawer_example_basic_button" >#{{$ticket->codigo}}</button>
                                                    
                                                    </td>
                                                <td>{{$ticket->comercio}}</td> 
                                                <td>{{$ticket->direccion}}</td>
                                                <td>{{$ticket->perso + $ticket->punto + $ticket->casil + $ticket->depar}}</td>
                                                <td>${{$ticket->total}}</td>
                                                <td>{{$ticket->created_at}}</td>
                                                <td><span class="badge badge-warning">Pendiente</span>
                                                    
                                                    <span hidden id="id{{ $ticket->codigo }}"> {{ $ticket->id }}</span>
                                                    <span hidden id="com{{ $ticket->codigo }}"> {{ $ticket->comercio }}</span>
                                                    <span hidden id="fec{{ $ticket->codigo }}"> {{date('d/m/Y', strtotime($ticket->created_at)) }}</span>
                                                    <span hidden id="hor{{ $ticket->codigo }}"> {{ date('H:i:s', strtotime($ticket->created_at)) }}</span>
                                                    <span hidden id="per{{ $ticket->codigo }}"> {{ $ticket->perso }}</span>
                                                    <span hidden id="pei{{ $ticket->codigo }}"> {{ $ticket->persoi }}</span>
                                                    <span hidden id="pun{{ $ticket->codigo }}"> {{ $ticket->punto }}</span>
                                                    <span hidden id="pui{{ $ticket->codigo }}"> {{ $ticket->puntoi }}</span>
                                                    <span hidden id="cas{{ $ticket->codigo }}"> {{ $ticket->casil }}</span>
                                                    <span hidden id="cai{{ $ticket->codigo }}"> {{ $ticket->casili }}</span>
                                                    <span hidden id="dep{{ $ticket->codigo }}"> {{ $ticket->depar }}</span>
                                                    <span hidden id="dei{{ $ticket->codigo }}"> {{ $ticket->depari }}</span>
                                                    <span hidden id="gui{{ $ticket->codigo }}"> {{ $ticket->guias }}</span>
                                                    <span hidden id="gii{{ $ticket->codigo }}"> {{ $ticket->guias }}</span>
                                                    <span hidden id="sub{{ $ticket->codigo }}"> {{ $ticket->persoi + $ticket->puntoi + $ticket->casili + $ticket->depari + $ticket->guias }}</span>
                                                    <span hidden id="tot{{ $ticket->codigo }}"> {{ $ticket->total }}</span>
                                                    <span hidden id="ent{{ $ticket->codigo }}"> {{ $ticket->entrega }}</span>
                                                    <span hidden id="cam{{ $ticket->codigo }}"> {{ $ticket->cambio }}</span>


                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <ul class="pagination">
                                        <li style="margin-left:auto"></li> <!-- Empty list item to push elements to the right -->
                                        <li class="page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item next"><a href="#" class="page-link">Next</a></li>
                                    </ul>
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
    <!--begin::Javascript-->
    <script>

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>




    

<script>
       
        
    $(document).ready(function(){
        $(document).on('click', '.edit', function(){
           var cod=$(this).val();
           var iden=$('#id'+cod).text();
           var comer=$('#com'+cod).text();
           var fecha=$('#fec'+cod).text();
           var horas=$('#hor'+cod).text();
           var perso=$('#per'+cod).text();
           var persi=$('#pei'+cod).text();
           var punto=$('#pun'+cod).text();
           var punti=$('#pui'+cod).text();
           var casil=$('#cas'+cod).text();
           var casill=$('#cai'+cod).text();
           var depar=$('#dep'+cod).text();
           var depai=$('#dei'+cod).text();
           var guias=$('#gui'+cod).text();
           var guiai=$('#gii'+cod).text();
           var subto=$('#sub'+cod).text();
           var total=$('#tot'+cod).text();
           var entre=$('#ent'+cod).text();
           var cambi=$('#cam'+cod).text();
            
    //alert("HOla");
            
        
            //$('#edit').modal('show');
           $('#codigo').text(cod);
           $('#come').text(comer);
           $('#fech').text(fecha);
           $('#hora').text(horas);
           $('#pers').text(perso);
           $('#peri').text(persi);
           $('#punt').text(punto);
           $('#puni').text(punti);
           $('#casi').text(casil);
           $('#caii').text(casill);
           $('#depa').text(depar);
           $('#depi').text(depai);
           $('#guia').text(guias);
           $('#guii').text(guiai);
           $('#subt').text(subto);
           $('#tota').text(total);
           $('#entr').text(entre);
           $('#camb').text(cambi);
           $('#cod2').text(cod);
          
           var ide = '/cobro/ticketlistado/'+cod ;
		   document.getElementById("impri").href = ide;
    
            
    
            //$('#impri a').prop("href", ide);
            //$('.paginacion a').prop('href','http://nuevaUrl.com');
    
           // document.getElementById("impri").href = ide;
        });
    });
     
    
    
    
    
    
    
        </script>











</body>
<!--end::Body-->

</html>