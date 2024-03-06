<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <title>Melo express</title>
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
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Order Details (#14534)</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Inicio</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Getion de pedidos</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Detalles de la orden</li>
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
                                <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Filter</a>
                                <!--end::Menu toggle-->
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641ac4114177f">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641ac4114177f" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                            </div>
                            <!--end::Filter menu-->
                            <!--begin::Secondary button-->
                            <!--end::Secondary button-->
                            <!--begin::Primary button-->
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
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
                        <!--begin::Order details page-->
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                                <!--begin:::Tabs-->
                                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">Order Summary</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history">Order History</a>
                                    </li>
                                    <!--end:::Tab item-->
                                </ul>
                                <!--end:::Tabs-->
                                <!--begin::Button-->
                                <a href="../../demo1/dist/apps/ecommerce/sales/listing.html" class="btn btn-icon btn-light btn-sm ms-auto me-lg-n7">
                                    <i class="ki-duotone ki-left fs-2"></i>
                                </a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="btn btn-success btn-sm me-lg-n7">Edit Order</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <a href="../../demo1/dist/apps/ecommerce/sales/add-order.html" class="btn btn-primary btn-sm">Add New Order</a>
                                <!--end::Button-->
                            </div>
                            <!--begin::Order summary-->
                            <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                <!--begin::Order details-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Detalles del pedido </h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-shop fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>Comercio
                                                            </div>
                                                        </td>
                                                        <td class="fw-bold text-start">MODA SV</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-phone fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>Telefono
                                                            </div>
                                                            <i class="ki-duotone ki-whatsapp">
                                                        </td>
                                                        <td class="fw-bold text-start">7172-5251
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-whatsapp fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>whatsapp
                                                            </div>
                                                            <i class="ki-duotone ki-whatsapp">
                                                        </td>
                                                        <td class="fw-bold text-start">7172-5251
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-geolocation-home fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>Lugar de recepcion
                                                            </div>
                                                        </td>
                                                        <td class="fw-bold text-start">Santa ana</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Order details-->
                                <!--begin::Customer details-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Detalles del Cliente</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-profile-circle fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>Cliente
                                                            </div>
                                                        </td>
                                                        <td class="fw-bold text-end">
                                                            <div class="d-flex align-items-center justify-content-start">
                                                                <!--begin::Name-->
                                                                <a href="../../demo1/dist/apps/ecommerce/customers/details.html" class="text-gray-600 text-hover-primary ">Joakin Polanco</a>
                                                                <!--end::Name-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-phone fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>Telefono
                                                            </div>
                                                            <i class="ki-duotone ki-whatsapp">
                                                        </td>
                                                        <td class="fw-bold text-start">7172-5251
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-whatsapp fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>whatsapp
                                                            </div>
                                                            <i class="ki-duotone ki-whatsapp">
                                                        </td>
                                                        <td class="fw-bold text-start">7172-5251
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-geolocation-home fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>Lugar de recepcion
                                                            </div>
                                                        </td>
                                                        <td class="fw-bold text-start">Santa ana</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Customer details-->
                                <!--begin::Documents-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Detalles del paquete</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-calendar-tick fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>Fecha de creacion
                                                            </div>
                                                        </td>
                                                        <td class="fw-bold text-start">20/3/2024</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-calendar fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>Fecha de envio
                                                            </div>
                                                        </td>
                                                        <td class="fw-bold text-start">21/3/2024</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-geolocation-home fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>Tipo de envio
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-light-success">Punto fijo</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-double-check fs-2 me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>Status del envio
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-light-success">Entregado</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Documents-->
                            </div>
                            <!--end::Order summary-->







                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                                    <!--begin::Orders-->
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                            <!--begin::Payment address-->
                                            <div class="card card-flush py-4 flex-row-fluid position-relative">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>UBICACION - CENTRO DE DISTRIBUCION</h2>
                                                    </div>
                                                </div>

                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div>
                                                    <div class="card-body pt-0">
                                                        <div style="display: inline-block; width: 27%;"> 
                                                            <div>
                                                                <h4>Datos del paquete</h4>
                                                            </div>
                                                            <table>
                                                                <tr>
                                                                    <td>Estado del pago:</td>
                                                                    <td><span class="badge badge-light-success">Entregado</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Precio del paquete:</td>
                                                                    <td>$25.50</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Precio del envio:</td>
                                                                    <td>$2.50</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Total a pagar:</td>
                                                                    <td>$23.00</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div style="display: inline-block; width: 35%;"> 
                                                            <div>
                                                                <h4>Otros datos</h4>
                                                            </div>
                                                            <table>
                                                                <tr>
                                                                    <td>Envio cobrado:</td>
                                                                    <td>Cobrado</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Usuario de registro:</td>
                                                                    <td>Joaquin polanco</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Repartidor:</td>
                                                                    <td>kevin ocotan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ruta:</td>
                                                                    <td>1</td>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                        <div style="display: inline-block; width: 35%;"> 
                                                            <div>
                                                                <h4>Ubicacion</h4>
                                                            </div>
                                                            <table>
                                                                <tr>
                                                                    <td>Rack:</td>
                                                                    <td>1</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nivel:</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tarima:</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>caja:</td>
                                                                    <td>1</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Payment address-->

                                        </div>














                                        <!--begin::Product List-->
                                        <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Order #14534</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                        <thead>
                                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                <th class="min-w-175px">Product</th>
                                                                <th class="min-w-100px text-end">SKU</th>
                                                                <th class="min-w-70px text-end">Qty</th>
                                                                <th class="min-w-100px text-end">Unit Price</th>
                                                                <th class="min-w-100px text-end">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-semibold text-gray-600">
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Thumbnail-->
                                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                                            <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
                                                                        </a>
                                                                        <!--end::Thumbnail-->
                                                                        <!--begin::Title-->
                                                                        <div class="ms-5">
                                                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="fw-bold text-gray-600 text-hover-primary">Product 1</a>
                                                                            <div class="fs-7 text-muted">Delivery Date: 22/03/2023</div>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">04726008</td>
                                                                <td class="text-end">2</td>
                                                                <td class="text-end">$120.00</td>
                                                                <td class="text-end">$240.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Thumbnail-->
                                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                                            <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/100.gif);"></span>
                                                                        </a>
                                                                        <!--end::Thumbnail-->
                                                                        <!--begin::Title-->
                                                                        <div class="ms-5">
                                                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="fw-bold text-gray-600 text-hover-primary">Footwear</a>
                                                                            <div class="fs-7 text-muted">Delivery Date: 22/03/2023</div>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">03745004</td>
                                                                <td class="text-end">1</td>
                                                                <td class="text-end">$24.00</td>
                                                                <td class="text-end">$24.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" class="text-end">Subtotal</td>
                                                                <td class="text-end">$264.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" class="text-end">VAT (0%)</td>
                                                                <td class="text-end">$0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" class="text-end">Shipping Rate</td>
                                                                <td class="text-end">$5.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" class="fs-3 text-dark text-end">Grand Total</td>
                                                                <td class="text-dark fs-3 fw-bolder text-end">$269.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Product List-->
                                    </div>
                                    <!--end::Orders-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                                    <!--begin::Orders-->
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <!--begin::Order history-->
                                        <div class="card card-flush py-4 flex-row-fluid">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Order History</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                        <thead>
                                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                <th class="min-w-100px">Date Added</th>
                                                                <th class="min-w-175px">Comment</th>
                                                                <th class="min-w-70px">Order Status</th>
                                                                <th class="min-w-100px">Customer Notifed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-semibold text-gray-600">
                                                            <tr>
                                                                <td>22/03/2023</td>
                                                                <td>Order completed</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-success">Completed</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <td>21/03/2023</td>
                                                                <td>Order received by customer</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-success">Delivered</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>Yes</td>
                                                            </tr>
                                                            <tr>
                                                                <td>20/03/2023</td>
                                                                <td>Order shipped from warehouse</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-primary">Delivering</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>Yes</td>
                                                            </tr>
                                                            <tr>
                                                                <td>19/03/2023</td>
                                                                <td>Payment received</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-primary">Processing</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <td>18/03/2023</td>
                                                                <td>Pending payment</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-warning">Pending</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <td>17/03/2023</td>
                                                                <td>Payment method updated</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-warning">Pending</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <td>16/03/2023</td>
                                                                <td>Payment method expired</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-danger">Failed</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>Yes</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15/03/2023</td>
                                                                <td>Pending payment</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-warning">Pending</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <td>14/03/2023</td>
                                                                <td>Order received</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-warning">Pending</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>Yes</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Order history-->
                                        <!--begin::Order data-->
                                        <div class="card card-flush py-4 flex-row-fluid">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Order Data</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5">
                                                        <tbody class="fw-semibold text-gray-600">
                                                            <tr>
                                                                <td class="text-muted">IP Address</td>
                                                                <td class="fw-bold text-end">172.68.221.26</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Forwarded IP</td>
                                                                <td class="fw-bold text-end">89.201.163.49</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">User Agent</td>
                                                                <td class="fw-bold text-end">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Accept Language</td>
                                                                <td class="fw-bold text-end">en-GB,en-US;q=0.9,en;q=0.8</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Order data-->
                                    </div>
                                    <!--end::Orders-->
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Order details page-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->

        </div>

    </x-default-layout>
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>¿
    <script src="assets/js/custom/apps/ecommerce/reports/shipping/shipping.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>

    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>