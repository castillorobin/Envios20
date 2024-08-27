<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />

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

        .dataTables_filter {
            display: none;
        }

        .dataTables_length {
            display: none;
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
                    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Listado de envios</h1>
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
                                <li class="breadcrumb-item text-muted">Listado de envios</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        <div class="d-flex gap-2 gap-lg-3" style="float: right;">
                            <a href="/envio/crear" class="btn btn-sm fw-bold btn-primary" style="float: right;" data-bs-target="#kt_modal_create_app">Crear envio</a>
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
                    <div id="kt_app_content_container" class="app-container">
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

                                        <input type="search" spellcheck="false" data-ms-editor="true" id="dt-search-0" class="dt-input form-control form-control-solid w-250px ps-12" placeholder="Buscar" />
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    <div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
                                    <!--end::Export buttons-->
                                    <form action="envios/filtrandoenvios" method="GET" id="myForm" >
                                        @method('GET') 
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Daterangepicker-->
                                    <input class="form-control form-control-solid w-100 mw-250px" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" name="rango"/>
                                    <!--end::Daterangepicker-->
                                    <!--begin::Filter-->
                                    <div class="w-150px">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Estado" data-kt-ecommerce-order-filter="status">
                                            <option></option>
                                            <option value="all">Todo</option>
                                            <option value="Creado">Creado</option>
                                            <option value="Creado">En ruta</option>
                                            <option value="Entregado">Entregado</option>
                                            <option value="Fallido">No entregado</option>
                                            <option value="En transito">Reprogramado</option>
                                            <option value="En transito">Devuelto al comercio</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->
                                    <button type="submit" class="btn btn-primary" >Filtrar</button>
                                    <!--end::Export dropdown-->
                                </form>
                                </div>

                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">

                                <!--begin::Table-->
                                <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-80px "># de guía</th>
                                                <th class="min-w-50px">Comercio</th>
                                                <th class="min-w-150px">Destinatario</th>
                                                <th class="min-w-150px">Dirección</th>
                                                <th class="min-w-150px">Fecha de entrega</th>
                                                <th class="min-w-100px">Tipo de envío</th>
                                                <th class="min-w-50px text-center">Cobro de envio</th>
                                                <th class="min-w-50px text-center">Estado</th>
                                                <th class="min-w-50px text-center">Sub estado</th>
                                                <th class="min-w-50px text-center">Fecha estado</th>
                                                <th class="min-w-50px">Total</th>
                                                <th class="min-w-50px">Ruta</th>
                                                <th class="min-w-100px text-center">Nota </th>
                                                <th class="min-w-100px text-center">Nota de repartidor</th>
                                                <th class="min-w-150px">Ubicación</th>
                                            </tr> 
                                        </thead>
                                        <tbody class="fw-semibold text-gray-400">
                                            @foreach ($envios as $index => $envio)
                                            <tr class="{{ $index % 2 == 0 ? 'table-row-gray' : 'table-row-white' }}">
                                                <td>
                                                    <a href="/envios/detalle" class="text-gray-900 text-hover-primary">
                                                        {{ $envio->guia }}
                                                    </a>
                                                </td>
                                                <td>{{ $envio->comercio }}</td>
                                                <td>{{ $envio->destinatario }}</td>
                                                <td>{{ $envio->direccion }}</td>
                                                <td style="text-align: center;">{{ $envio->fecha_entrega}}</td>
                                                <td style="text-align: center;"><span class="badge badge-dark">{{ $envio->tipo}}</span></td>
                                                <td style="text-align: center;">
                                                    @if( $envio->cobro == 'Pagado')
                                                    <span class="badge badge-success">{{ $envio->cobro}}</span>
                                                    @else
                                                    <span class="badge badge-danger">{{ $envio->cobro }}</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if( $envio->estado == 'No entregado')
                                                    <span class="badge badge-danger">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Creado')
                                                    <span class="badge badge-warning">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Entregado')
                                                    <span class="badge badge-success">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'En ruta')
                                                    <span class="badge badge-info">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Reprogramado')
                                                    <span class="badge badge-dark">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Devuelto al comercio')
                                                    <span class="badge badge-primary">{{ $envio->estado }}</span>
                                                    @else
                                                    <span class="badge badge-light">{{ $envio->estado }}</span>
                                                    @endif
                                                </td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center">{{ $envio->total }}</td>
                                                <td style="text-align: center;">2</td>
                                                <td  style="text-align: center;">{{ $envio->nota }}</td>
                                                <td>no respondio</td>
                                                <td>Santa ana, el salvador</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
<!-- Empty list item to push elements to the right
                                    <ul class="pagination">
                                        <li style="margin-left:auto"></li> 
                                        <li class="page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item next"><a href="#" class="page-link">Next</a></li>
                                    </ul>
 -->
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
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->



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
    <script src="assets/js/custom/apps/ecommerce/reports/shipping/shipping.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>