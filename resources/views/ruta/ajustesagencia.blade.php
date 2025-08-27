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
    </style>

</head>

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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Configuracion de agencia</h1>
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
                                <li class="breadcrumb-item text-muted">Configuracion</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Configuracion de agencia</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                      
                           
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
                        <!--begin::Card-->
                        <div class="card card-flush">
                            <!--begin::Card body-->
                            <div class="card-body" style="min-height: 650px;">
                                

                                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_stacked_1" style="float:right;">
            Crear        </a>
                              
                                <!--begin:::Tabs-->
                                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
                                    <!--begin:::Tab item-->
                                    
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
                                            <i class="ki-duotone ki-shop fs-2 me-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>Listado de agencias</a>
                                    </li>
                                    
                                    <!--begin:::Tab item-->
                                    
                                    
                                    <!--end:::Tab item-->
                                </ul>
                               @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert-success" style="margin-left: 25px;">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        // Espera 4 segundos (4000 ms) y luego oculta el mensaje
        setTimeout(function () {
            let alertBox = document.getElementById('alert-success');
            if (alertBox) {
                alertBox.classList.remove('show');
                alertBox.classList.add('fade');
                alertBox.style.display = 'none';
            }
        }, 3000);
    </script>
@endif
                                <!--begin:::Tab content-->
                                <div class="tab-content" id="myTabContent">
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade show active" id="kt_ecommerce_settings_store" role="tabpanel">
                                        <!--begin::Form-->
                                       
                                            <!--begin::Heading-->
                                          
                                            <!--end::Heading-->
                                            
                                            <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px text-center">ID</th>
                                                <th class="min-w-150px text-center">Agencia</th>
                                                
                                                <th class="min-w-100px text-center">Acción</th>

                                              
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold ">
                                            @foreach ($cajas as $ruta) 
                                            <tr class="'table-row-gray' : 'table-row-white' ">
                                                <td class="text-center"> {{$ruta->id}}</td>
                                                <td class="text-center">{{ $ruta->nombre }}</td>
                                           
                                                
                                               
                                                <td class="text-center">
                                                    <a href="/agencia/editar/{{$ruta->id}}">
                                                <button type="button" class="btn btn-warning">Editar</button></a>
                                                <a href="/agencia/eliminar/{{$ruta->id}}">
                                                <button type="button" class="btn btn-danger">Eliminar</button></a>
                                            </td>
                                                
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                   
                                </div>
                                <!--end::Table-->
                                          
                                            
                                       
                                        <!--end::Form-->
                                    </div>

                                </div>
                                <!--end:::Tab content-->











                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->


            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->








        
<!--inicia::Modal-->	

<div class="modal fade" tabindex="-1" id="kt_modal_stacked_1">
<div class="modal-dialog modal-dialog-centered">
     
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Crear Agencia</h3>
<form action="/agencia/guardar" method="GET">
     
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
        </div>

        <div class="modal-body">
            
            <input type="text" class="form-control form-control-solid" placeholder="Nombre" name="nombre" />
               

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>
</div>

    </form>




    </x-default-layout>
    <!--begin::Javascript-->
    <script>

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/reports/shipping/shipping.js"></script>

</body>
<!--end::Body-->

</html>