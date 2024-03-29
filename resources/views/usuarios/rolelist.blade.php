<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
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
<!--end::Head-->

<body>
    <x-default-layout>
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Lista de roles</h1>
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
                            <li class="breadcrumb-item text-muted">UGestión de usuarios</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Roles</li>
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
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641ac41fd81c9">
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
                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641ac41fd81c9" data-allow-clear="true">
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
                    <!--begin::Row-->
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Administrador</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 5</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Recursos humanos
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion financiera
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Facturacion
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Control de ubicaciones
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Gerente general</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 14</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Recursos humanos
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion financiera
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Facturacion
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Gerente financiero</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 4</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Recursos humanos
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion financiera
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Facturacion
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>jefe de digitado</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 23</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ubicaciones
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Jefe de atencion al cliente</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 546</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ubicaciones
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Cajero</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 546</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>facturacion
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ubicaciones
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Digitador</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 546</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ubicaciones
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Atencion al cliente</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 546</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ubicaciones
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Operario</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 546</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ubicaciones
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->


                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Repartidor</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: 546</div>
                                    <!--end::Users-->
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <h5>permisos:</h5>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de ordenes
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>Gestion de comercios
                                        </div>
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="/usuarios/roleview" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                    <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->



                        <!--begin::Add new card-->
                        <div class="ol-md-4">
                            <!--begin::Card-->
                            <div class="card h-md-100">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center">
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
                                        <!--begin::Illustration-->
                                        <img src="assets/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-150px mb-7" />
                                        <!--end::Illustration-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                                        <!--end::Label-->
                                    </button>
                                    <!--begin::Button-->
                                </div>
                                <!--begin::Card body-->
                            </div>
                            <!--begin::Card-->
                        </div>
                        <!--begin::Add new card-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Modals-->
                    <!--begin::Modal - Add role-->
                    <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-750px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Add a Role</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-lg-5 my-7">
                                    <!--begin::Form-->
                                    <form id="kt_modal_add_role_form" class="form" action="#">
                                        <!--begin::Scroll-->
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_role_header" data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="fs-5 fw-bold form-label mb-2">
                                                    <span class="required">Role name</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Permissions-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                                                <!--end::Label-->
                                                <!--begin::Table wrapper-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                        <!--begin::Table body-->
                                                        <tbody class="text-gray-600 fw-semibold">
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <td class="text-gray-800">Administrator
                                                                    <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Allows a full access to the system">
                                                                        <i class="ki-duotone ki-information fs-7">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                        </i>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-9">
                                                                        <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                                        <span class="form-check-label" for="kt_roles_select_all">Select all</span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </td>
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Recursos humanos</td>
                                                                <!--end::Label-->
                                                                <!--begin::Options-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="user_management_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="user_management_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="user_management_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Options-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Gestion financiera</td>
                                                                <!--end::Label-->
                                                                <!--begin::Options-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="content_management_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="content_management_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="content_management_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Options-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Facturacion</td>
                                                                <!--end::Label-->
                                                                <!--begin::Options-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Options-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Gestion de ordenes</td>
                                                                <!--end::Label-->
                                                                <!--begin::Options-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="reporting_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="reporting_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="reporting_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Options-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Gestion de comercios</td>
                                                                <!--end::Label-->
                                                                <!--begin::Options-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="payroll_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="payroll_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="payroll_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Options-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Control de ubicaciones</td>
                                                                <!--end::Label-->
                                                                <!--begin::Options-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="disputes_management_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="disputes_management_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="disputes_management_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Options-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table wrapper-->
                                            </div>
                                            <!--end::Permissions-->
                                        </div>
                                        <!--end::Scroll-->
                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">Discard</button>
                                            <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Add role-->


                    <!--begin::Modal - Update role-->
                    <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-750px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Update Role</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 my-7">
                                    <!--begin::Form-->
                                    <form id="kt_modal_update_role_form" class="form" action="#">
                                        <!--begin::Scroll-->
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="fs-5 fw-bold form-label mb-2">
                                                    <span class="required">Role name</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" value="Developer" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Permissions-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                                                <!--end::Label-->
                                                <!--begin::Table wrapper-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                        <!--begin::Table body-->
                                                        <tbody class="text-gray-600 fw-semibold">
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <td class="text-gray-800">Administrador 
                                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Allows a full access to the system">
                                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                        </i>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                                        <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                                        <span class="form-check-label" for="kt_roles_select_all">Select all</span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </td>
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Recursos humanos</td>
                                                                <!--end::Label-->
                                                                <!--begin::Input group-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="user_management_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="user_management_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="user_management_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Input group-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Gestion financiera</td>
                                                                <!--end::Label-->
                                                                <!--begin::Input group-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="content_management_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="content_management_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="content_management_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Input group-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Facturacion</td>
                                                                <!--end::Label-->
                                                                <!--begin::Input group-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Input group-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Gestion de ordenes</td>
                                                                <!--end::Label-->
                                                                <!--begin::Input group-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="reporting_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="reporting_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="reporting_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Input group-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Gestion de comercios</td>
                                                                <!--end::Label-->
                                                                <!--begin::Input group-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="payroll_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="payroll_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="payroll_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Input group-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">Control de ubicaciones</td>
                                                                <!--end::Label-->
                                                                <!--begin::Input group-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="disputes_management_read" />
                                                                            <span class="form-check-label">Read</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input" type="checkbox" value="" name="disputes_management_write" />
                                                                            <span class="form-check-label">Write</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="disputes_management_create" />
                                                                            <span class="form-check-label">Create</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Input group-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table wrapper-->
                                            </div>
                                            <!--end::Permissions-->
                                        </div>
                                        <!--end::Scroll-->
                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">Discard</button>
                                            <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Update role-->
                    <!--end::Modals-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
    </x-default-layout>
</body>

</html>