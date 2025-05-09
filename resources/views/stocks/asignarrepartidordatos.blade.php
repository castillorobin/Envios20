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
        .table td {
            padding: 0.10rem;
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
                        <div class="page-title d-flex flex-column justify-content-center  ">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Asignación de guía</h1>
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
                                <li class="breadcrumb-item text-muted">Control de stocks</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">AAsignación de guía</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                          
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
                    <div id="kt_app_content_container" class="">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <form action="/stocks/agregarrepartidorlote" class="row g-2" method="GET">
                                                   
                                        <div class="col-auto">
                                            <label for="guia" class="visually-hidden">Guía</label>
                                            <input type="text" class="form-control " id="guia" name="guia" placeholder="Buscar guia" required autofocus> 
                                           
                                            
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                                            <span style="font-size:18px; color: red;"> &nbsp; {{ $nota }} &nbsp; </span>
                                            <input type="text" value="{{$actual}}" class="visually-hidden" name="asignum" id="asignum">
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
                                    <div class="w-190px">
                                        <!--begin::Select2-->
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                                    Asignar
                                                </button>
                                        <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->

                                </div>
                                <!--end::Card toolbar-->

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 550px;  ">


                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="tenvios">
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
                                        <tbody class="fw-semibold  text-gray-400">
                                            @foreach ($pedidos as $pedido) 
                                            <tr class="'table-row-gray' : 'table-row-white' }}">
                                            <td>
                                                    <a href="/envios/detalle/{{ $pedido->guia }}" class="text-gray-900 text-hover-primary">
                                                        {{ $pedido->guia }}
                                                    </a>
                                                </td>
                                                <td style="text-align: center;">{{ $pedido->comercio }}</td>
                                                <td style="text-align: center;">{{ $pedido->destinatario }}</td>
                                                <td>{{ $pedido->direccion }}</td>
                                                <td style="text-align: center;"><span class="badge badge-dark">{{ $pedido->tipo}}</span></td>
                                                <td style="text-align: center;">{{ $pedido->fecha_entrega}}</td>
                                                
                                               
                                                <td style="text-align: center;">
                                                    @if( $pedido->estado == 'No entregado')
                                                    <span class="badge badge-danger">{{ $pedido->estado }}</span>
                                                    @elseif( $pedido->estado == 'Creado')
                                                    <span class="badge badge-warning">{{ $pedido->estado }}</span>
                                                    @elseif( $pedido->estado == 'Entregado')
                                                    <span class="badge badge-success">{{ $pedido->estado }}</span>
                                                    @elseif( $pedido->estado == 'En ruta')
                                                    <span class="badge badge-info">{{ $pedido->estado }}</span>
                                                    @elseif( $pedido->estado == 'Reprogramado')
                                                    <span class="badge badge-dark">{{ $pedido->estado }}</span>
                                                    @elseif( $pedido->estado == 'Devuelto al comercio')
                                                    <span class="badge badge-primary">{{ $pedido->estado }}</span>
                                                    @else
                                                    <span class="badge badge-light">{{ $pedido->estado }}</span>
                                                    @endif
                                                </td>
                                               
                                                <td class="text-center">${{ $pedido->total }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    
                                </div>
                                <div class="row mt-7">
                                    <div class="col-12" >
                                        <ul class="pagination"style="float: right;" >
                                            <li style="margin-left:auto"></li> <!-- Empty list item to push elements to the right -->
                                            <li class="page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item next"><a href="#" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mt-7">
                                    <div class="col-12 mb-3" >
                                        <a href="/stocks/asignarrepartidor">
                                        <button type="button" class="btn btn-secondary mb-3" style="float: right;">Cancelar</button>
                                    </a>
                                    </div>
                                    
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Table-->
                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                           
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header mt-5 m-5" >
                                            <h3 class="modal-title">Asignar repartidor</h3>
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Close-->

                                            <form action="/stocks/guardarasignarrepartidor/" method="GET">

                                        </div>
                                        <div class="modal-body">
                                            <div class="row my-2 mx-2 justify-content-center">
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="usuario" id="usuario" value="{{ Auth::user()->name }}" readonly />
                                                    <label for="rack" style="padding-left: 25px;">Usuario</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="fecha" id="fecha" value="{{ now()->Format('d/m/Y H:i A')}}" />
                                                    <label for="nivel" style="padding-left: 25px;">Fecha y hora</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                            </div>
                                            <div class="row my-2 mx-2 justify-content-center">
                                                <div class="form-floating col-lg-12 mb-4">
                                                    <select class="form-select form-select-solid" name="agencia" id="agencia" aria-label="Floating label select example" >
                                                       
                                                        <option value="San Salvador">San Salvador</option>
                                                        <option value="Santa Ana">Santa Ana</option>
                                                        <option value="San Miguel">San Miguel</option>
                                                    </select>
                                                    <label for="cenvio" style="padding-left: 25px;">Agencia</label>
                                                </div>
                                               
                                            </div>

                                            <div class="row my-2 mx-2 justify-content-center">
                                                <div class="form-floating col-lg-12 mb-4">
                                                    <select class="form-select form-select-solid mi-selector" name="repartidor" id="repartidor"  >
                                                        <option value="" style="height: 60px;"></option>
                                                        @foreach ($empleados as $empleado)
                                                        <option value="{{$empleado->nombre}}" >{{$empleado->nombre}} </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="cenvio" style="padding-left: 25px;">Repartidor</label>
                                                </div>
                                               
                                            </div>

                                            <div class="row my-2 mx-2 justify-content-center">
                                                <div class="form-floating col-lg-12 mb-4">
                                                    <select class="form-select form-select-solid" name="ruta" id="ruta" aria-label="Floating label select example" >
                                                       
                                                        <option value="Ruta 1">Ruta 1</option>
                                                        <option value="Ruta 2">Ruta 2</option>
                                                        <option value="Ruta 3">Ruta 3</option>
                                                        <option value="Ruta 4">Ruta 4</option>
                                                        <option value="Ruta 5">Ruta 5</option>
                                                    </select>
                                                    <label for="cenvio" style="padding-left: 25px;">Ruta</label>
                                                </div>
                                               
                                            </div>
                                                               
                                          
                                            
                                          
                                        </div>
                                        <input type="text" value="{{$actual}}" class="visually-hidden" name="guia2" id="guia2">

                                        <div class="modal-footer m-5">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Asignar</button>
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

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

</body>
<!--end::Body-->

</html>