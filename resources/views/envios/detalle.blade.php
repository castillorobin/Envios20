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

                                        <div class="card pt-4 mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header border-0">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2 class="fw-bold mb-0">UBICACION - CENTRO DE DISTRIBUCION</h2>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                        <i class="ki-duotone ki-plus-square fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>Add new method</a>
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div id="kt_customer_view_payment_method" class="card-body pt-0">
                                                <!--begin::Option-->
                                                <div class="py-0" data-kt-customer-payment-method="row">
                                                    <!--begin::Header-->
                                                    <div class="py-3 d-flex flex-stack flex-wrap">
                                                        <!--begin::Toggle-->
                                                        <div class="d-flex align-items-center collapsible rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
                                                            <!--begin::Arrow-->
                                                            <div class="me-3 rotate-90">
                                                                <i class="ki-duotone ki-right fs-3"></i>
                                                            </div>
                                                            <!--end::Arrow-->
                                                            <!--begin::Summary-->
                                                            <div class="me-3">
                                                                <div class="d-flex align-items-center">
                                                                    <h4>UBICACION - CENTRO DE DISTRIBUCION</h4>
                                                                </div>
                                                            </div>
                                                            <!--end::Summary-->
                                                        </div>
                                                        <!--end::Toggle-->
                                                        <!--begin::Toolbar-->
                                                        <div class="d-flex my-3 ms-9">
                                                            <!--begin::Edit-->
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                                    <i class="ki-duotone ki-pencil fs-3">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                            </a>
                                                            <!--end::Edit-->
                                                            <!--begin::Delete-->
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                                <i class="ki-duotone ki-trash fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </a>
                                                            <!--end::Delete-->
                                                            <!--begin::More-->
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-duotone ki-setting-3 fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                            <!--end::More-->
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                                        <!--begin::Details-->
                                                        <div class="d-flex flex-wrap py-4">
                                                            <!--begin::Col-->
                                                            <div class="flex-equal me-5">
                                                                <table class="table table-flush fw-semibold gy-1" style="line-height: 1.8;">
                                                                    <h4>Datos del paquete</h4>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Estado del pago:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;"><span class="badge badge-light-success">Entregado</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Precio del paquete:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">$25.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Costo de envio:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">$2.50</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Total a cobrar:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">$23.00</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="flex-equal">
                                                                <table class="table table-flush fw-semibold gy-1" style="line-height: 1.8;">
                                                                    <h4>Otros datos</h4>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Envio cobrado :</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">$1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-180px w-180px">Usuario registrado:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">Joaquin Polanco</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Repartidor:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">kevin ocotan</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Ruta:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">2</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Option-->
                                                <div class="separator separator-dashed"></div>
                                                <!--begin::Option-->
                                                <div class="py-0" data-kt-customer-payment-method="row">
                                                    <!--begin::Header-->
                                                    <div class="py-3 d-flex flex-stack flex-wrap">
                                                        <!--begin::Toggle-->
                                                        <div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_2" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_2">
                                                            <!--begin::Arrow-->
                                                            <div class="me-3 rotate-90">
                                                                <i class="ki-duotone ki-right fs-3"></i>
                                                            </div>
                                                            <!--end::Arrow-->
                                                            <!--begin::Summary-->
                                                            <div class="me-3">
                                                                <div class="d-flex align-items-center">
                                                                    <h4>UBICACION - CENTRO DE DISTRIBUCION</h4>
                                                                </div>
                                                            </div>
                                                            <!--end::Summary-->
                                                        </div>
                                                        <!--end::Toggle-->
                                                        <!--begin::Toolbar-->
                                                        <div class="d-flex my-3 ms-9">
                                                            <!--begin::Edit-->
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                                    <i class="ki-duotone ki-pencil fs-3">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                            </a>
                                                            <!--end::Edit-->
                                                            <!--begin::Delete-->
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                                <i class="ki-duotone ki-trash fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </a>
                                                            <!--end::Delete-->
                                                            <!--begin::More-->
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-duotone ki-setting-3 fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                            <!--end::More-->
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Body-->
                                                    <div id="kt_customer_view_payment_method_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                                        <!--begin::Details-->
                                                        <div class="d-flex flex-wrap py-5">
                                                            <!--begin::Col-->
                                                            <div class="flex-equal me-5">
                                                                <table class="table table-flush fw-semibold gy-1" style="line-height: 1.8;">
                                                                    <h4>Otros datos</h4>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Rack:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-180px w-180px">Nivel:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Tarima:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">caja:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">2</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="flex-equal">
                                                            <table class="table table-flush fw-semibold gy-1" style="line-height: 1.8;">
                                                                    <h4>Pagos</h4>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">quien pago:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">Salomon</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-180px w-180px">Cuando pago:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">25/03/2024</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">cajero:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">estela</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted min-w-150px w-150px">Ubicacion:</td>
                                                                        <td class="text-gray-800" style="padding-left: 10px;">Santa ana</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Option-->

                                            </div>
                                            <!--end::Card body-->
                                        </div>

                                        <div class="card card-flush py-1 flex-row-fluid">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Historial del pedido</h2>
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
                                                                <th class="min-w-100px">IMAGEN </th>
                                                                <th class="min-w-175px">FECHA</th>
                                                                <th class="min-w-70px">Status</th>
                                                                <th class="min-w-100px">NOTA</th>
                                                                <th class="min-w-100px">CLIENTE NOTIFICADO </th>
                                                                <th class="min-w-100px">USUARIO</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-semibold text-gray-600">
                                                            <tr>
                                                                <td><img src="https://media.istockphoto.com/id/1186665850/es/vector/cami%C3%B3n-de-entrega-de-env%C3%ADo-r%C3%A1pido-dise%C3%B1o-de-icono-de-l%C3%ADnea-ilustraci%C3%B3n-vectorial-para.jpg?s=1024x1024&w=is&k=20&c=LSTplYguUmkr40p1FeuSYnmTUiD7PtvElGNd5k3sHKA=" alt="Fecha de entrega" width="50" height="50"></td>
                                                                <td>25/03/2024</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-success">Completed</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>No</td>
                                                                <td>No</td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="https://media.istockphoto.com/id/1186665850/es/vector/cami%C3%B3n-de-entrega-de-env%C3%ADo-r%C3%A1pido-dise%C3%B1o-de-icono-de-l%C3%ADnea-ilustraci%C3%B3n-vectorial-para.jpg?s=1024x1024&w=is&k=20&c=LSTplYguUmkr40p1FeuSYnmTUiD7PtvElGNd5k3sHKA=" alt="Fecha de entrega" width="50" height="50"></td>
                                                                <td>25/03/2024</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-success">Delivered</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>Yes</td>
                                                                <td>No</td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="https://media.istockphoto.com/id/1186665850/es/vector/cami%C3%B3n-de-entrega-de-env%C3%ADo-r%C3%A1pido-dise%C3%B1o-de-icono-de-l%C3%ADnea-ilustraci%C3%B3n-vectorial-para.jpg?s=1024x1024&w=is&k=20&c=LSTplYguUmkr40p1FeuSYnmTUiD7PtvElGNd5k3sHKA=" alt="Fecha de entrega" width="50" height="50"></td>
                                                                <td>25/03/2024</td>
                                                                <td>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-primary">Delivering</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td>Yes</td>
                                                                <td>No</td>
                                                                <td>No</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
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