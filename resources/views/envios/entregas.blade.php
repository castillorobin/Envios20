<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../" />
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
    <meta charset="utf-8" />
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
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-minimize="on" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <x-default-layout>
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Entregas paquete</h1>
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
                            <li class="breadcrumb-item text-muted">Entregar paquete</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Secondary button-->
                        <a href="#" id="openAgregarComerciosModal" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#agregarComercioModal">Crear Comercio</a>
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" id="openModal" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#seleccionarComercioModal">Agregar Comercios</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
                <!--begin::Menu-->
                <div class="menu">

                    <!--begin::Menu item-->
                    <div class="menu-item">
                        <a href="/registro-orden" class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar fs-3"><span class="path1"></span><span class="path2"></span></i>
                            </span>
                            <span class="menu-title">Cobro</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar fs-3"><span class="path1"></span><span class="path2"></span></i>
                            </span>
                            <span class="menu-title">Entregar</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->

        <!-- Modal comercio-->
        <div class="modal fade" id="seleccionarComercioModal" tabindex="-1" aria-labelledby="seleccionarComercioModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="seleccionarComercioModalLabel">Seleccionar Comercio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row my-4 mx-4">
                            <div class="form-floating col-lg-12 mb-4">
                                <select class="form-control form-control-lg form-control-solid" data-control="select2" name="comercio" id="comercio">
                                    <!-- Aquí van las opciones de los comercios -->
                                </select>
                                <label for="comercio" style="padding-left: 25px;">Buscar Comercio</label>
                                <div id="comercioValidationFeedback" class="invalid-feedback">
                                    Por favor seleccione un comercio.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="seleccionarBtn">Seleccionar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de Agregar Comercio -->
        <div class="modal fade" id="agregarComercioModal" tabindex="-1" aria-labelledby="agregarComercioModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agregarComercioModalLabel">Agregar Comercio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre del comercio</label>
                            <div class="col-lg-8">
                                <input type="text" name="nombre_comercio" id="nombre_comercio" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Nombre del comercio" required />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label">Teléfono</label>
                            <div class="col-lg-8">
                                <input id="telefono" type="tel" name="telefono" class="form-control form-control-lg form-control-solid" placeholder="Teléfono" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de Alta</label>
                            <div class="col-lg-8">
                                <input type="text" name="fecha_alta" class="form-control form-control-lg form-control-solid" id="fecha_alta" placeholder="Fecha de alta" readonly required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label">Tipo de comercio</label>
                            <div class="col-lg-8">
                                <select name="tipo_comercio" id="tipo_comercio" class="form-control form-control-lg form-control-solid" required>
                                    <option value="Emprendedor">Emprendedor</option>
                                    <option value="Comercio Mediano">Comercio Mediano</option>
                                    <option value="Empresa">Empresa</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Estado de comercio</label>
                            <div class="col-lg-8">
                                <select name="estado_comercio" id="estado_comercio" class="form-control form-control-lg form-control-solid" required>
                                    <option value="Alta">Alta</option>
                                    <option value="Baja">Baja</option>
                                    <option value="Lista negra">Lista negra</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Agencia de registro</label>
                            <div class="col-lg-8">
                                <select name="agencia_registro" id="agencia_registro" class="form-control form-control-lg form-control-solid" required>
                                    <option value="San Salvador">San Salvador</option>
                                    <option value="San Miguel">San Miguel</option>
                                    <option value="Santa Ana">Santa Ana</option>
                                    <option value="Centro de distribución">Centro de distribución</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label">Correo Electrónico</label>
                            <div class="col-lg-8">
                                <input type="email" name="correo_electronico" id="correo_electronico" class="form-control form-control-lg form-control-solid" placeholder="Correo Electrónico" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarComercioBtn">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl ">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row ">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid me-xl-9 mb-xl-0">
                        <!--begin::Pos food-->
                        <div class="card card-flush card-p-0 bg-transparent border-0 ">
                            <!--begin::Body-->
                            <div class="card-body ">
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
                                                        <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar" />
                                                    </div>
                                                    <!--end::Search-->
                                                    <!--begin::Export buttons-->
                                                    <div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
                                                    <!--end::Export buttons-->
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                                                    <!--begin::Filter-->
                                                    <div class="w-150px">
                                                        <!--begin::Select2-->
                                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                                            <option></option>
                                                            <option value="Todos">Todos</option>
                                                            <option value="Alta">Alta</option>
                                                            <option value="Baja">Baja</option>
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
                                            <div class="card-body pt-0">


                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                                                        <thead>
                                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                <th style="min-width: 120px;">ID</th>
                                                                <th style="min-width: 120px;">Nombre de empleado</th>
                                                                <th style="min-width: 120px;">Numero</th>
                                                                <th style="min-width: 120px;">Whatsapp</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-semibold text-black-400">
                                                            <td><a href="#" class="text-gray-900 text-hover-primary"> 10</a></td>
                                                            <td>nombre </td>
                                                            <td>telefono </td>
                                                            <td>whatsapp</td>
                                                        </tbody>
                                                    </table>

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
                            <!--end: Card Body-->
                        </div>
                        <!--end::Pos food-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Sidebar-->
                    <div class="flex-row-auto w-xl-425px">
                        <!--begin::Pos order-->
                        <div class="card card-flush bg-body" id="kt_pos_form">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <h3 class="card-title fw-bold text-gray-800 fs-2qx">Ordenes</h3>
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-light-primary fs-4 fw-bold py-4">Limpiar cuenta</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive mb-8">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="min-w-175px"></th>
                                                <th class="w-125px"></th>
                                                <th class="w-60px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                                <td class="pe-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/media/stock/food/paque.jpeg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Departamental</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <!--begin::Dialer-->
                                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                        <!--begin::Input control-->
                                                        <input type="text" class="form-control border-0 px-0 fs-3 fw-bold text-gray-800 w-100px text-center" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                        <!--end::Input control-->

                                                    </div>
                                                    <!--end::Dialer-->
                                                </td>
                                                <td class="text-end">
                                                    <input type="number" class="form-control border-0 px-0 fs-2 fw-bold text-primary w-75px text-end" data-kt-pos-element="item-total" value="00.00" />
                                                </td>
                                            </tr>

                                            <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                                <td class="pe-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/media/stock/food/paque.jpeg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Personalizado Departamental</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <!--begin::Dialer-->
                                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                        <!--begin::Input control-->
                                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-100px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="1" />
                                                        <!--end::Input control-->

                                                    </div>
                                                    <!--end::Dialer-->
                                                </td>
                                                <td class="text-end">
                                                    <input type="number" class="form-control border-0 px-0 fs-2 fw-bold text-primary w-75px text-end" data-kt-pos-element="item-total" value="00.00" />
                                                </td>
                                            </tr>

                                            <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                                <td class="pe-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/media/stock/food/paque.jpeg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Punto fijo</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <!--begin::Dialer-->
                                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                        <!--begin::Input control-->
                                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-100px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                        <!--end::Input control-->

                                                    </div>
                                                    <!--end::Dialer-->
                                                </td>
                                                <td class="text-end">
                                                    <input type="number" class="form-control border-0 px-0 fs-2 fw-bold text-primary w-75px text-end" data-kt-pos-element="item-total" value="00.00" />
                                                </td>
                                            </tr>

                                            <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                                <td class="pe-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/media/stock/food/paque.jpeg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1 ">Casillero</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <!--begin::Dialer-->
                                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                        <!--begin::Input control-->
                                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-100px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                        <!--end::Input control-->

                                                    </div>
                                                    <!--end::Dialer-->
                                                </td>
                                                <td class="text-end">
                                                    <input type="number" class="form-control border-0 px-0 fs-2 fw-bold text-primary w-75px text-end" data-kt-pos-element="item-total" value="00.00" />
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                                <!-- Campo para la cantidad de descuento -->
                                <div class="d-flex flex-stack  rounded-3 p-6 mb-4">
                                    <td class="pe-0">
                                        <div class="form-floating col-lg-8 mb-4">
                                            <input type="text" class="form-control form-control-solid" name="descuento" id="descuento" placeholder="Descuento" />
                                            <label for="descuento" style="padding-left: 25px;">Descuento</label>
                                            <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                        </div>
                                    </td>
                                </div>
                                <!--begin::Summary-->
                                <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bold text-white">
                                        <span class="d-block lh-1 mb-2">Subtotal</span>
                                        <span class="d-block mb-2">Descuento</span>
                                        <span class="d-block fs-2qx lh-1">Total</span>
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bold text-white text-end">
                                        <span class="d-block lh-1 mb-2" data-kt-pos-element="total">$100.50</span>
                                        <span class="d-block mb-2" data-kt-pos-element="discount">-$8.00</span>
                                        <span class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$93.46</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Summary-->
                                <!--begin::Payment Method-->
                                <div class="m-0">
                                    <!--begin::Actions-->
                                    <button class="btn btn-primary fs-1 w-100 py-4">imprimir comprobante</button>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Payment Method-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Pos order-->
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
        </div>

    </x-default-layout>
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Evento para cargar los comercios cuando se abra el modal
            $('#seleccionarComercioModal').on('show.bs.modal', function(e) {
                // Aquí deberías cargar los comercios desde tu base de datos o de donde sea que los tengas
                var comercios = ["Comercio 1", "Comercio 2", "Comercio 3"]; // Aquí pongo ejemplos

                // Vaciamos el select
                $('#comercio').empty();

                // Iteramos sobre los comercios y los agregamos al select
                $.each(comercios, function(index, comercio) {
                    $('#comercio').append($('<option>', {
                        value: comercio,
                        text: comercio
                    }));
                });
            });

            // Evento para manejar la selección del comercio
            $('#seleccionarBtn').on('click', function() {
                var comercioSeleccionado = $('#comercio').val();

                // Aquí puedes hacer lo que quieras con el comercio seleccionado, como enviarlo a través de un formulario, etc.
                alert("Comercio seleccionado: " + comercioSeleccionado);

                // Cerrar el modal
                $('#seleccionarComercioModal').modal('hide');
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Evento para abrir el modal de agregar comercio cuando se hace clic en el enlace
            $('#openAgregarComerciosModal').on('click', function() {
                $('#agregarComercioModal').modal('show');
            });

            // Evento para guardar la información del comercio cuando se hace clic en el botón Guardar
            $('#guardarComercioBtn').on('click', function() {
                // Obtener los valores de los campos del formulario
                var nombreComercio = $('#nombre_comercio').val();
                var telefono = $('#telefono').val();
                var fechaAlta = $('#fecha_alta').val();
                var tipoComercio = $('#tipo_comercio').val();
                var estadoComercio = $('#estado_comercio').val();
                var agenciaRegistro = $('#agencia_registro').val();
                var correoElectronico = $('#correo_electronico').val();

                // Aquí puedes hacer validaciones adicionales si es necesario

                // Crear un objeto con la información del comercio
                var comercio = {
                    nombre: nombreComercio,
                    telefono: telefono,
                    fecha_alta: fechaAlta,
                    tipo: tipoComercio,
                    estado: estadoComercio,
                    agencia_registro: agenciaRegistro,
                    correo: correoElectronico
                };

                // Aquí podrías hacer una petición AJAX para guardar el comercio en la base de datos
                // Por ejemplo, si estás utilizando jQuery:
                /*
                $.ajax({
                  type: 'POST',
                  url: '/guardar_comercio',
                  data: comercio,
                  success: function(response) {
                    // Manejar la respuesta del servidor
                    alert('Comercio guardado correctamente');
                    $('#agregarComercioModal').modal('hide');
                  },
                  error: function(error) {
                    // Manejar errores
                    alert('Error al guardar el comercio');
                  }
                });
                */

                // Simplemente mostraremos los datos en la consola como ejemplo
                console.log('Información del comercio:', comercio);

                // Cerrar el modal después de guardar
                $('#agregarComercioModal').modal('hide');
            });
        });
    </script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>