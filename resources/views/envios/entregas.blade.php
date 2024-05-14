<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../" />
    <title>Melo Express - Entregas
    </title>
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


<body id="kt_body" class="">
    <x-default-layout>
        <!--begin::Container-->
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start">
            <!--begin::Post-->
            <div class="content flex-row-fluid" id="kt_content">
                <!--begin::Row-->
                <div class="row gy-0 gx-10 ">
                    <!--begin::Col-->
                    <div class="col-xl-8 ">

                        <!--begin::General Widget 1-->
                        <div class="mb-5 mb-lg-10 ">
                            <!--begin::Tabs-->
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="kt_general_widget_1_1">

                                    <!--begin::Tables Widget 2-->
                                    <div class="card card-flush col-lg-12">
                                        <!--begin::Card header-->
                                        <div class="card-header align-items-end py-5 gap-2 gap-md-5">
                                            <!--begin::Card title-->
                                            <div class="card-title ">
                                                <!--begin::Search-->
                                                <div>


                                                    <form action="#" class="row g-2" method="get">

                                                        <div class="col-auto">
                                                            <label for="guia" class="visually-hidden">Guía</label>
                                                            <input type="text" class="form-control " id="guia" name="guia" placeholder="Buscar por # guía">
                                                            <input type="text" value="Departamental" class="visually-hidden" name="tipo" id="tipo">
                                                            <input type="text" class="visually-hidden" name="comerci" id="comerci" value="comercio">
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                                                        </div>

                                                    </form>

                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 align-items-end">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                                    <thead>
                                                        <tr class="fw-semibold fs-6 text-gray-400 fw-bold ">
                                                            <th># DE GUÍA</th>
                                                            <th>COMERCIO</th>
                                                            <th>DESTINATARIO</th>
                                                            <th>TIPO DE ENVÍO</th>
                                                            <th>TOTAL A PAGAR </th>
                                                            <th>BORRAR</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>#0002</td>
                                                            <td>MODA SV</td>
                                                            <td>J0akin Polanco</td>
                                                            <td>Departamental</td>
                                                            <td>$20.00</td>
                                                            <td><button type="button" class="btn btn-danger p-2"><i class="fas fa-trash-alt"></i></button></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Tables Widget 2-->
                                </div>
                            </div>
                            <!--end::Tab content-->
                        </div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-4">

                        <!--begin::Mixed Widget 12-->
                        <div class="card mb-5 mb-lg-10">
                            <!--begin::Header-->
                            <div class="card card-flush bg-body" id="kt_pos_form">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <h3 class="card-title fw-bold text-gray-800 fs-2qx">Entregas</h3>

                                </div>

                                <!--begin::Body-->
                                <div class="card-body pt-0">

                                    <!-- Campo para la cantidad de descuento -->

                                    <div class="form-floating col-lg-12 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="descuento" id="descuento" placeholder="Descuento" />
                                        <label for="descuento" style="padding-left: 25px;">Descuento</label>
                                        <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                    </div>

                                    <div class="form-floating col-lg-12 mb-4">
                                        <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                        <label for="nota" style="padding-left: 25px;">Nota</label>
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
                                            <span id="stotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">$0.00</span>
                                            <span id="sdescuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">-$0.00</span>
                                            <span id="total1" name="total1" class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$0.00</span>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Summary-->
                                    <!--begin::Payment Method-->
                                    <div class="m-0">
                                        <!--begin::Actions-->
                                        <button class="btn btn-primary fs-1 w-100 py-1">imprimir comprobante</button>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Payment Method-->
                                </div>
                                <!--end: Card Body-->

                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->

                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 12-->



                        <!--end: List Widget 5-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Container-->




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
    <!--end::Vendors Javascript-->



</body>
<!--end::Body-->

</html>