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


<body class="">
    <x-default-layout>
        <!--begin::Container-->
        <div >
            <!--begin::Post-->
            <div >
                <div >
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0 mt-1 pt-1">Entrega de paquetes </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Inicio</a>
                        </li> 
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Facturacion</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Entregas</li>
                    </ul>
                </div>

                <!--begin::Row-->
                <div class="row gy-0 gx-10 ">
                    <!--begin::Col-->
                    <div class="col-xl-12 ">

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



                                                    <form action="/entrega/agregar" class="row g-2" method="GET">
                                                   
                                                   

                                                        <div class="col-auto">
                                                            <label for="guia" class="visually-hidden">Guia</label>
                                                            <input type="text" class="form-control " id="guia" name="guia" placeholder="Buscar guia" autofocus>
                                                            <input type="text" value="Departamental" class="visually-hidden" name="tipo" id="tipo">
                                                            <input type="text" class="visually-hidden" name="comerci" id="comerci" value="Buscar guia">
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                                                            <span style="font-size:18px; color: red;"> {{ $nota }} &nbsp; </span>
                                                            @if($errors->any())
                                                            <span style="font-size:18px; color: red;">{{$errors->first()}} </span>
                                                            @endif
                                                        </div>

                                                    </form>

                                                </div>

                                                 
                                      <!--end::Search-->
                                           

                                            @if (session('Error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert-error" style="margin-left: 25px;">
        {{ session('Error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        // Espera 4 segundos (4000 ms) y luego oculta el mensaje
        setTimeout(function () {
            let alertBox = document.getElementById('alert-error');
            if (alertBox) {
                alertBox.classList.remove('show');
                alertBox.classList.add('fade');
                alertBox.style.display = 'none';
            }
        }, 3000);
    </script>
@endif
           </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 align-items-end" style="background-color:white; min-height: 590px;  ">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                                    <thead>
                                                        <tr class="fw-semibold fs-6 text-gray-400 fw-bold ">
                                                        <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                            <th class="text-center"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#" class="text-gray-900 text-hover-primary"></a></td>
                                                            <td><a href="#" class="text-gray-900 text-hover-primary"></a></td>
                                                            <td></td>
                                                            <td class="text-center"><span class="badge badge-light-success"></span></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td style="text-align: center;">
                                                               
                                                            </td>
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
                  
                    <!--end::Col-->


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



</body>
<!--end::Body-->

</html>