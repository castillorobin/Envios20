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

const tableReg = document.getElementById('kt_ecommerce_report_returns_table');

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
     
<input type="text" value="{{date_default_timezone_set('America/El_Salvador') }}" hidden>
    <div class="d-flex flex-column flex-column-fluid">
                                            
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
            
    

<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
        Listado de movimientos
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
                                                    Listado de movimientos                                           </li>
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
        <div id="kt_app_content_container" class="app-container  container-xxl " >
            <!--begin::Products-->
<div class="card card-flush" >
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5" >
        <!--begin::Card title-->
        <div class="card-title" >
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar" spellcheck="false" data-ms-editor="true" id="searchTerm" onkeyup="doSearch()">
            </div>
            <!--end::Search-->

            <!--begin::Export buttons-->
            <div id="kt_ecommerce_report_returns_export" class="d-none"><div class="dt-buttons btn-group flex-wrap">      <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>PDF</span></button> </div></div>
            <!--end::Export buttons-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5" >
          

<!--begin::Export dropdown-->





                                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
                                            <a href="/caja/exportarexcel/{{ $cajas[0]->idcaja }}" class="menu-link px-3" data-kt-ecommerce-export="excel" target="_blank">Exportar a Excel</a>
                                        </div>
                                        
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/caja/exportarpdf/{{ $cajas[0]->idcaja }}" class="menu-link px-3" target="_blank">Exportar a PDF</a>
                                        </div>
                                        <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/caja/exportarticket/{{ $cajas[0]->idcaja }}" class="menu-link px-3" target="_blank">Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>






<!--end::Export dropdown-->        


</div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0" style="min-height: 550px;">
        
<!--begin::Table-->
<div  id="kt_ecommerce_report_returns_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer"><div id="" class="table-responsive">
    <table class="table align-middle table-bordered fs-6 gy-5 dataTable" id="kt_ecommerce_report_returns_table" style="width: 100%;">
        <colgroup><col data-dt-column="0" style="width: 124.688px;"><col data-dt-column="1" style="width: 192.797px;"><col data-dt-column="2" style="width: 192.766px;"><col data-dt-column="3" style="width: 190.156px;"><col data-dt-column="4" style="width: 148.828px;"><col data-dt-column="5" style="width: 146.266px;"></colgroup>
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Fecha</span><span class="dt-column-order"></span>
            </th>
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Hora</span><span class="dt-column-order"></span>
            </th>

            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="1" rowspan="1" colspan="1" aria-label="No. Orders Returned: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Concepto</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="2" rowspan="1" colspan="1" aria-label="No. Orders Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Entrada</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="3" rowspan="1" colspan="1" aria-label="No. Orders Replaced: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Salida</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Saldo</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="5" rowspan="1" colspan="1" aria-label="Total Replaced: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Cajero</span><span class="dt-column-order"></span>
            </th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
      
         @foreach ($cajas as $caja) 
             <tr class="'table-row-gray' : 'table-row-white' ">
                    <td class="text-center"> 
                    {{ date('d/m/Y', strtotime($caja->created_at)) }}
                    </td>
                    <td class="text-center">{{ date('h:i A', strtotime($caja->created_at)) }}</td>
                    
                    <td class="text-center">{{ $caja->concepto }}</td>
                    <td class="text-center">
                       @if ($caja->tipo == "Entrada")
                           $ {{ $caja->valor }}
                        @elseif ($caja->tipo == "Caja inicial")
                            $ {{ $caja->valor }}
                        @else
                            $ 0.00
                        @endif
                    </td>
                    <td class="text-center">
                         @if ($caja->tipo == "Salida")
                           $ {{ $caja->valor }}
                        @elseif ($caja->tipo == "Cierre de caja")
                            $ {{ $caja->valor }}
                        @else
                            $ 0.00
                        @endif
                    </td>
                    <td class="text-center">$ {{$caja->saldo}}</td>
                    <td class="text-center">{{$caja->cajero}}</td>
                    </tr>
                    @endforeach
        </tbody>
<tfoot></tfoot></table></div><div id="" class="row">
    <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar" style="float:bottom;">
        <div >
            <select name="kt_ecommerce_report_returns_table_length" aria-controls="kt_ecommerce_report_returns_table" class="form-select form-select-solid form-select-sm" id="dt-length-0"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><label for="dt-length-0"></label></div></div><div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dt-paging paging_simple_numbers"><nav aria-label="pagination"><ul class="pagination"><li class="dt-paging-button page-item disabled"><button class="page-link previous" role="link" type="button" aria-controls="kt_ecommerce_report_returns_table" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="previous"></i></button></li><li class="dt-paging-button page-item active"><button class="page-link" role="link" type="button" aria-controls="kt_ecommerce_report_returns_table" aria-current="page" data-dt-idx="0">1</button></li></ul></nav></div></div></div></div>
<!--end::Table-->  
<div class="row">
    <div class="col-6"></div>
    <div class="col-6">
        <table>
            <tr>
                <td style="width: 200px;">Saldo en caja al cierre</td>
                <td > $ {{$cajapr[0]->saldo}} </td>
            </tr>
            <tr>
                <td style="width: 200px;">Saldo en cajero</td>
                <td style="border-bottom: 1px solid black"> $ {{$cajapr[0]->saldocajero}} </td>
            </tr>
             <tr>
                <td style="width: 200px;">Descuadre</td>
                @if($cajapr[0]->descuadre > 0 )
                <td style="color:red;"> $ -{{$cajapr[0]->descuadre}} </td>
                @else
                <td > $ {{$cajapr[0]->descuadre}} </td>
                @endif
            </tr>
        </table>
    </div>
</div>
  <div style="float: right;">
@if($caja->concepto != "Cierre de caja" )
 <a href="#" class="btn btn-sm fw-bold btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_stacked_1">
            Cerrar caja       </a>
@endif

 <a href="/caja/jefe" class="btn btn-sm fw-bold btn-primary" >
            Regresar       </a>
<!--end::Regresar-->



    </div>

</div>
    <!--end::Card body-->
  <!--begin::Regresar-->

</div>
<!--end::Products-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->	

                                    </div>





<div class="modal fade" tabindex="-1" id="kt_modal_stacked_1">
<div class="modal-dialog modal-dialog-centered">
     
    <div class="modal-content">
        <div class="modal-header">
           <h3 class="modal-title">Cerrar caja</h3>
<form action="/caja/guardar" method="GET">
     
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
        </div>

        <div class="modal-body">
            
           <input type="text" name="cajero" class="form-control form-control-solid" value="{{ Auth::user()->name }}" readonly />
           <br>
            <input type="text" class="form-control form-control-solid" value="{{ date("d/m/Y") }}" readonly />
            
            <br>
            <input type="text" name="agencia" class="form-control form-control-solid" value="{{$empleado[0]->agencia}}" readonly/>
            <br>
          
              <select class="form-select form-select-solid" aria-label="Select example" name="concepto" id="select-concepto"> 
    
    
     @foreach ($conceptos as $concepto)
     @if($concepto->concepto == "Cierre de caja")
    <option value="{{$concepto->id}}">{{$concepto->concepto}}</option>
    @endif
    @endforeach
   
</select>
            <br>
                       
            <div class="row">
                <div class="col">
                    <div id="input-cierre-wrapper2" class="mt-3">
                         
                             <label for="valor_caja" class="form-label">Saldo en caja</label>
                            @isset($caja->saldo)
                               <input type="text" name="valor_caja" id="valor_caja" class="form-control form-control-solid" placeholder="Saldo caja" value="{{$caja->saldo}}" readonly>
                            @endisset


                    </div>
                </div>
                <div class="col">
            <!-- Input oculto al principio -->
                    <div id="input-cierre-wrapper"  class="mt-3">
                        <label for="valor_cierre" class="form-label">Saldo de cajero</label>
                        <input type="text" name="valor_cierre" id="valor_cierre" class="form-control form-control-solid" placeholder="Saldo cajero">

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                
            <div id="input-saldo-final-wrapper" class="mt-3">
               <label for="saldo_final" class="form-label">Descuadre</label>
                    <input type="number" name="saldo_final" id="saldo_final" class="form-control form-control-solid" placeholder="$0.00" readonly>
            </div>

              </div>
            </div>



        </div>



        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
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
   


    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectConcepto = document.getElementById('select-concepto');
        const inputWrapper = document.getElementById('input-cierre-wrapper');
        const inputWrapper2 = document.getElementById('input-cierre-wrapper2');
        const inputWrapper3 = document.getElementById('input-cierre-wrapper3');
        const inputSaldoFinal = document.getElementById('saldo_final');
        const inputSaldoFinalWrapper = document.getElementById('input-saldo-final-wrapper');
        const inputCierre = document.getElementById('valor_cierre');
        const inputcaja = document.getElementById('valor_caja');

        selectConcepto.addEventListener('change', function () {
            // Obtener el texto de la opción seleccionada
            const selectedText = selectConcepto.options[selectConcepto.selectedIndex].text;
            

            // Verificar si contiene "Cierre de caja"
            if (selectedText.includes('Cierre de caja')) {
                inputWrapper.style.display = 'block'; // Mostrar input
                inputWrapper2.style.display = 'block';
                inputWrapper3.style.display = 'none';
                inputSaldoFinalWrapper.style.display = 'block';

            } else {
                inputWrapper.style.display = 'none'; // Ocultar input
                inputWrapper2.style.display = 'none';
                inputWrapper3.style.display = 'block';
                inputSaldoFinalWrapper.style.display = 'none';
                inputSaldoFinal.value = '';
            }
        });


         // Calcular saldo final en tiempo real
        inputCierre.addEventListener('input', function () {
            const saldoCaja = parseFloat(inputcaja.value) || 0;
            const valorCierre = parseFloat(inputCierre.value) || 0;
            const saldoFinal = saldoCaja - valorCierre;

            inputSaldoFinal.value = saldoFinal.toFixed(2);
        });
    });
</script>




</body>
<!--end::Body-->

</html>