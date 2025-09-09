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
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Preparacion por punto</h1>
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
                                <li class="breadcrumb-item text-muted">Preparacion por punto</li>
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
                                     <form action="/stocks/preparaciondatos" id="kt_invoice_form" method="POST"> 
                                    @csrf
                                    @method('GET')
                                <div class="row mb-7">
                                    <div class="col-auto">
                                        <input type="text" class="form-control form-control-solid" name="guia" id="guia" placeholder="# de guia" required autofocus />
                                     
                                        <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                    </div>
                                    <div class="col-auto">
                                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                                            <span style="font-size:18px; color: red;"> &nbsp; {{ $nota }} &nbsp; </span>
                                        </div>
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
                                      
                                        <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->

                                </div>
                                <!--end::Card toolbar-->

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 610px;  ">


                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="tenvios">
                                        <thead>
                                        
                                        </thead>
                                        <tbody class="fw-semibold  text-gray-400">
                                            
                                            @foreach ($pedidos as $pedido) 
                                            @if($envio[0]->tipo = "Punto fijo")
 <!--end::Table
                                            <tr class="'table-row-gray' : 'table-row-white' }}">
                                                
                                                <td class="text-center">{{$envio[0]->tipo}}</td>
                                                <td class="text-center"> {{$pedido->zona }}</td>
                                                <td class="text-center">{{$pedido->ruta}}</td>
                                                <td class="text-center">
                                                    {{$pedido->punto}} 
                                                </td>
                                                <td class="text-center">{{$envio[0]->fecha_entrega}}</td>
                                                <td class="text-center">
                                                    @if( $envio[0]->estado == 'No entregado')
                                                                <span class="badge badge-danger">{{ $envio[0]->estado }}</span>
                                                                @elseif( $envio[0]->estado == 'Creado')
                                                                <span class="badge badge-warning">{{ $envio[0]->estado }}</span>
                                                                @elseif( $envio[0]->estado == 'Entregado')
                                                                <span class="badge badge-success">{{ $envio[0]->estado }}</span>
                                                                @elseif( $envio[0]->estado == 'En ruta')
                                                                <span class="badge badge-info">{{ $envio[0]->estado }}</span>
                                                                @elseif( $envio[0]->estado == 'Reprogramado')
                                                                <span class="badge badge-dark">{{ $envio[0]->estado }}</span>
                                                                @elseif( $envio[0]->estado == 'Devuelto al comercio')
                                                                <span class="badge badge-primary">{{ $envio[0]->estado }}</span>
                                                                @else
                                                                <span class="badge badge-light">{{ $envio[0]->estado }}</span>
                                                                @endif
                                                </td>
                                              

                                            </tr>
                                            -->
                                            <tr>
                                                <td colspan="6" class="text-gray-800" style="font-weight:bolder; font-size: 25px; "><span style="background-color: {{$pedido->color }}; width: 100%; padding: 10px;"> Zona: {{$pedido->zona }}   </span></td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="text-gray-800" style="font-weight:bolder; font-size: 25px; "><span style="background-color: {{$pedido->color }}; width: 100%; padding: 10px;"> Punto: {{$pedido->punto }}   </span></td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="text-gray-800" style="font-weight:bolder; font-size: 25px; "><span style="background-color: {{$pedido->color }}; width: 100%; padding: 10px;"> Fecha de entrega: {{ \Carbon\Carbon::parse($envio[0]->fecha_entrega)->translatedFormat('j \d\e F') }}  </span></td>
                                            </tr>



                                            <tr>
                                                <td colspan="6" class="text-gray-800" style="font-weight:bolder; font-size: 50px; padding-top:75px;"><span style="background-color: {{$pedido->color }}; width: 100%; padding: 10px;">Ubicación: Punto {{$pedido->nfijo}} </span></td>
                                            </tr>

                                           
                                           
                                           

                                            @endif
                                            @endforeach

                                            @if($envio[0]->tipo !== 'Punto fijo')
                                    
                                           
                                            <tr>
                                                <td colspan="6" class="text-gray-800" style="font-weight:bolder; font-size: 50px; "><span style="background-color: {{$pedido->color }}; width: 100%; padding: 10px;"> {{$envio[0]->tipo}} </span></td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class=" text-gray-800" style="font-weight:bolder; font-size: 25px; "><span style="background-color: {{$pedido->color }}; width: 100%; padding: 10px;"> Direccion: {{$envio[0]->direccion }} </span></td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class=" text-gray-800" style="font-weight:bolder; font-size: 25px; "><span style="background-color: {{$pedido->color }}; width: 100%; padding: 10px;"> Fecha de entrega: {{ \Carbon\Carbon::parse($envio[0]->fecha_entrega)->translatedFormat('j \d\e F') }}  </span></td>
                                            </tr>

                                            @if($envio[0]->tipo == 'Casillero')
                                            <tr>
                                                <td colspan="6" class="text-center text-gray-800" style="font-weight:bolder; font-size: 50px; padding-top:15px;"><span style="background-color: {{$pedido->color }}; width: 100%; padding: 10px;"> {{$envio[0]->direccion}} </span></td>
                                            </tr>
                                           
                                            @endif
                                            
                                            @endif




                                        </tbody>

                                    </table>
                                    
                                </div>
                                <div class="row mt-7">
                                  
                                </div>

                                <div class="row mt-7">
                                    <div class="col-12 mb-3" >
                                        <a href="/stocks/seleccionarpunto">
                                        <button type="button" class="btn btn-secondary mb-3" style="float: right;">Cancelar</button>
                                    </a>
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

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

</body>
<!--end::Body-->

</html>