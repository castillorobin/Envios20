<html lang="es">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="es_SV" />
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
        table td {
            padding: 7px;
            /* Ajusta el valor según sea necesario */
        }
    </style>

</head>
<script>
    function elegircajasuelto() {
var tipo =  document.getElementById('cajasuelto').value;
if(tipo=='caja'){
   // alert("elegiste caja");
   document.getElementById('caja1').hidden = false;
   document.getElementById('caja2').hidden = false;
   document.getElementById('suelto1').hidden = true;
   document.getElementById('suelto2').hidden = true;
}
if(tipo=='suelto'){
    document.getElementById('caja1').hidden = true;
    document.getElementById('caja2').hidden = true;
    document.getElementById('suelto1').hidden = false;
   document.getElementById('suelto2').hidden = false;
}
//document.getElementById('total1').innerText = 0;
//document.getElementById('totalito').innerText = 0;
//document.getElementById('stotal').innerText = 0;
//document.getElementById("tota").value = 0;
////document.getElementById("stota").value = 0;
//alert(total5);

}
</script>
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Entrega de no retirado</h1>
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
                                <li class="breadcrumb-item text-muted">Control de stocks</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Entrega de no retirado</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        
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
                                    <!--begin::Search-->
                                    <form action="/stocks/entreganoretdatos/" class="row g-2" method="GET">
                                                   
                                        <div class="col-auto ">
                                            <label for="guia" class="visually-hidden">ticket</label>
                                            <input type="text" class="form-control " id="guia" name="guia" placeholder="Buscar ticket" autofocus>
                                            <input type="text" value=" " class="visually-hidden" name="actual" id="actual">
                                            <input type="text" class="visually-hidden" name="comerci" id="comerci" value="Buscar guia">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                                            <span style="font-size:18px; color: red;"> &nbsp; {{ $nota }} &nbsp; </span>
                                        </div>

                                    </form>
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    <div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
                                    <!--end::Export buttons-->
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Filter-->
                                    <div class="w-190px">
                                        <!--begin::Select2-->
                                    
                                        <!--end::Select2-->
                                    </div>
                                    <!--begin::Filter-->
                                 
                                      <form action="stocks/filtrarnotre" method="GET"  >
                                        @method('GET') 
                                      
                                
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <input type="text" value="{{$numti}}" class="visually-hidden" name="ticketc" id="ticketc">
                                    
                                    <div class="w-150px"> 
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" name="estado" data-control="select2" data-hide-search="true" data-placeholder="Estados" data-kt-ecommerce-order-filter="Estados">
                                            <option value="todos" >Todos</option>
                                        <option value="Creado">Creado</option>
                                        <option value="En ruta">En ruta</option>
                                        <option value="Entregado">Entregado</option>
                                        <option value="No entregado">No entregado</option>
                                        <option value="Reprogramado">Reprogramado</option>
                                        <option value="Devuelto al comercio">Devuelto al comercio</option>
                                        <option value="Recepcionado">Recepcionado</option>
                                        <option value="Fallido">Fallido</option>
                                        </select>
                                        <!--end::Select2-->
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary" >Filtrar</button>
                                    <!--end::Filter-->
                                    <!--begin::Export dropdown-->
                                   
                                </form>                                    </div>
                                    <!--end::Filter-->

                                </div>
                                <!--end::Card toolbar-->

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 610px;  ">

 <form action="/stocks/guardarentrega/" method="GET">
                                <!--begin::Table-->
                                
                                            
                                

                                <div class="row mt-7">
                                    <div class="col-12 mb-3" >
                                        <a href="/stocks/entreganoret">
                                        <button type="button" class="btn btn-secondary mb-3" style="float: right; margin-left:10px; ">Cancelar</button>
                                    </a>
                                   
                                     
                                        <button type="button" class="btn btn-primary edit mb-3" style="float: right; margin-left:10px; " data-bs-toggle="modal" data-bs-target="#kt_modal_1">Entregar</button>
                                    
                                    </div>

                                    
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Table-->
                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                           
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header mt-5 m-5" >
                                            <h3 class="modal-title">Entregar</h3>
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Close-->

                                           

                                        </div>
                                        <div class="modal-body">
                                            <div class="row my-2 mx-2 justify-content-center" >
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="usuario" id="usuario" value="{{ Auth::user()->name }}" readonly />
                                                    <label for="rack" style="padding-left: 25px;">Usuario</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="fecha" id="fecha" value="{{ now()->Format('d/m/Y H:i A')}}" readonly/>
                                                    <label for="nivel" style="padding-left: 25px;">Fecha y hora</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                            </div>
                                            
                                            <input type="text" name="ticket" id="ticket" hidden>

                                            
                                                <div class="row my-2 mx-2 justify-content-center" name="caja1" id="caja1">
                                                    <div class="form col-lg-12 mb-4">
                                                        <input type="text" class="form-control form-control-solid" name="nombre" id="nombre" placeholder="Nombre de quien recibe"  />
                                                       <p></p>
                                                        <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                                        
                                                    </div>
                                              
                                                </div>
                                               
                                               
                                            </div>

                                            <input type="text" value=" " class="visually-hidden" name="actual2" id="actual2">
                                       
                                        <div class="modal-footer m-5">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            </form>
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
       
        
    $(document).ready(function(){
        $(document).on('click', '.edit', function(){
           var cod=$(this).val();
          // var iden=$('#id'+cod).text();
         
            
    //alert("HOla");
            
        
            //$('#edit').modal('show');
         //  $('#codigo').text(cod);

           document.getElementById("ticket").value = cod;
      /*
          
           var ide = '/cobro/ticketlistado/'+cod ;
		   document.getElementById("impri").href = ide;
    
            */
    
            //$('#impri a').prop("href", ide);
            //$('.paginacion a').prop('href','http://nuevaUrl.com');
    
           // document.getElementById("impri").href = ide;
        });
    });
     
    
    
    
    
    
    
        </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

</body>
<!--end::Body-->

</html>