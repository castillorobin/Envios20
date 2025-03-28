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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Configuracion de ruta</h1>
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
                                <li class="breadcrumb-item text-muted">Configuracion</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Configuracion de ruta</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                      <!--      <a href="/envio/crear" class="btn btn-sm fw-bold btn-primary" data-bs-target="#kt_modal_create_app">Crear envio</a>
                            end::Primary button-->
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
                            <div class="card-body">
                                <!--begin:::Tabs-->
                                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary d-flex align-items-center pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
                                            <i class="ki-duotone ki-home fs-2 me-2"></i>General</a>
                                    </li>
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
                                            </i>Listado</a>
                                    </li>
                                    
                                    <!--begin:::Tab item-->
                                    
                                    
                                    <!--end:::Tab item-->
                                </ul>
                                <!--end:::Tabs-->
                                <!--begin:::Tab content-->
                                <div class="tab-content" id="myTabContent">
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                                        <!--begin::Form-->
                                        <form action="/ruta/agregar" id="kt_invoice_form" method="POST"> 
                                            @csrf
                                            @method('GET')
                                            <!--begin::Heading-->
                                            <div class="row mb-7">
                                                <div class="col-md-9 offset-md-3">
                                                    <h2>Configuraciones de ruta</h2>
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->

                                            <div class="row fv-row mb-7">
                                                <div class="col-md-3 text-md-end">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span>Nombre de zona</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Set theme style for the store.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="w-100">
                                                        <!--begin::Select2-->
                                                        <select class="form-select form-select-solid" name="zona" data-control="select2" data-hide-search="true" data-placeholder="Select a layout">
                                                            <option></option>
                                                            <option value="Occidente" selected="selected">Occidente</option>
                                                            <option value="Zona central">Zona central</option>
                                                            <option value="Zona paracentral">Zona paracentral</option>
                                                            <option value="Oriente">Oriente</option>
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="row fv-row mb-7">
                                                <div class="col-md-3 text-md-end">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span>Nombre de la ruta</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Set keywords for the store separated by a comma.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <div class="col-md-3">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" name="ruta" value="" data-kt-ecommerce-settings-type="tagify" />
                                                    <!--end::Input-->
                                                </div>

                                                <div class="col-md-1">
                                                    <!--begin::Label-->
                                                    <label class=" fw-semibold form-label mt-3">
                                                        <span> &nbsp; &nbsp; Color</span>
                                                       
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                
                                                <div class="col-md-1 ms-1">
                                                    <!--begin::Input-->
                                                    
                                                    <input type="color" id="colo" name="colo" value="#ff0000">
                                                    <!--end::Input-->
                                                </div>

                                            </div>
                                            <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span>Numero</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Set keywords for the store separated by a comma.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <div class="col-md-3">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" name="numero" value="" data-kt-ecommerce-settings-type="tagify" />
                                                    <!--end::Input-->
                                                </div>
                                                </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row fv-row mb-7">
                                                <div class="col-md-3 text-md-end">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span>Nombre punto fijo</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Set keywords for the store separated by a comma.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <div class="col-md-9">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" name="punto" value="" data-kt-ecommerce-settings-type="tagify" />
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row fv-row mb-7">
                                                <div class="col-md-3 text-md-end">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span>Numero</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Set keywords for the store separated by a comma.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <div class="col-md-3">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" name="numero" value="" data-kt-ecommerce-settings-type="tagify" />
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <!--end::Input group-->
                                            
                                            <!--begin::Action buttons-->
                                            <div class="row py-5">
                                                <div class="col-md-9 offset-md-3">
                                                    <div class="d-flex">
                                                        <!--begin::Button-->
                                                        <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancelar</button>
                                                        <!--end::Button-->
                                                        <!--begin::Button-->
                                                        <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                            <span class="indicator-label">Guardar</span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                        <!--end::Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Action buttons-->
                                        </form>
                                        <!--end::Form-->
                                    </div>

                                </div>
                                <!--end:::Tab content-->

                                <!--begin:::Tab content-->
                                <div class="tab-content" id="myTabContent">
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade show" id="kt_ecommerce_settings_store" role="tabpanel">
                                        <!--begin::Form-->
                                       
                                            <!--begin::Heading-->
                                            <div class="row mb-7">
                                                <div class="col-md-9 offset-md-3">
                                                    <h2>Listado de rutas</h2>
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            
                                            <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="tenvios">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px">ID</th>
                                                <th class="min-w-50px">Zona</th>
                                                <th class="min-w-50px">Ruta</th>
                                                <th class="min-w-50px">Punto</th>
                                                <th class="min-w-50px">Numero</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold ">
                                            @foreach ($rutas as $ruta) 
                                            <tr class="'table-row-gray' : 'table-row-white' ">
                                                <td> #{{$ruta->id}}</td>
                                                <td>{{ $ruta->zona }}</td>
                                                <td>{{$ruta->ruta}}</td>
                                                <td>{{$ruta->punto}}</td>
                                                <td>{{$ruta->numero}}</td>

                                                
                                                
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