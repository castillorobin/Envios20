<html lang="es">
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
    </style>

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
/*
        #kt_ecommerce_report_shipping_table_previous{
            display: none;
        }
        #kt_ecommerce_report_shipping_table_next{
            display: none;
        }
            */
    </style>


</head>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>






<script>
    $("#kt_daterangepicker_1").daterangepicker();
</script>
<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>

<script>



    var start = moment().subtract(29, "days");
var end = moment();

function cb(start, end) {
    $("#kt_daterangepicker_4").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
}

$("#kt_daterangepicker_4").daterangepicker({
    startDate: start,
    endDate: end,
    ranges: {
    "Today": [moment(), moment()],
    "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
    "Last 7 Days": [moment().subtract(6, "days"), moment()],
    "Last 30 Days": [moment().subtract(29, "days"), moment()],
    "This Month": [moment().startOf("month"), moment().endOf("month")],
    "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
    }
}, cb);

cb(start, end);
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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Reporte de repartidor</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="#" class="text-muted text-hover-primary">Home</a>
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
                                <li class="breadcrumb-item text-muted">Reporte de repartidor</li>
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
                                    
                                    <form action="/stocks/paquetesasignadosdatos/" class="row g-2" method="GET">
                                                   
                                        <div class="row">
                                          
                                            <div class="col-5 mt-5 d-flex justify-content-between align-items-center">
                                                Rango: 
                                                <input style="line-height: 28px;" class="form-control form-control-solid w-100 mw-250px" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" name="rango" />
                                            </div>
                                            <div class="form-floating  col-3 mt-5 ">
                                                <select class="form-select form-select-solid mi-selector" name="repartidor" id="repartidor"  >
                                                    <option value="todos" style="height: 60px;">TODOS</option>
                                                    @foreach ($empleados as $empleado)
                                                    <option value="{{$empleado->nombre}}" >{{$empleado->nombre}} </option>
                                                    @endforeach
                                                </select>
                                                <label for="cenvio" style="padding-left: 25px;">Repartidor</label>
                                            </div>
                                            <div class="col-2 mt-2">
                                                <button type="submit" class="btn btn-primary mt-5 ">Buscar</button>
                                               
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
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                                        <thead>
                                        <tr>
                                        <td>                                                 
                                                </td>
                                                <td></td>
                                                <td> </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                   
                                                </td>
                                                <td class="text-end"></td>
                                                <td>
                                                    
                                                </td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td></td>

                                        </tr>
                                        
                                        </thead>
                                        <tbody class="fw-semibold  text-gray-400">

                                            <tr class="'table-row-gray' : 'table-row-white' }}">
                                                <td>                                                 
                                                </td>
                                                <td></td>
                                                <td> </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                   
                                                </td>
                                                <td class="text-end"></td>
                                                <td>
                                                    
                                                </td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td></td>

                                            </tr>

                                        </tbody>

                                    </table>
                                    

                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Table-->

                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Asignar paquete</h3>
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <div class="modal-body">
                                            <div class="row my-4 mx-4 justify-content-center">
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="rack" id="rack" placeholder="# de rack" pattern="[0-9]+" required />
                                                    <label for="rack" style="padding-left: 25px;">Rack</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="nivel" id="nivel" placeholder="# de nivel" pattern="[0-9]+" required />
                                                    <label for="nivel" style="padding-left: 25px;">Nivel</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                            </div>
                                            <div class="row my-4 mx-4 justify-content-center">
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="caja" id="caja" placeholder="# de caja" pattern="[0-9]+" required />
                                                    <label for="caja" style="padding-left: 25px;">Caja</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="tarima" id="tarima" placeholder="# de tarima" pattern="[0-9]+" required />
                                                    <label for="tarima" style="padding-left: 25px;">Tarima</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Asignar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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