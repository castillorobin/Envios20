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
                <div id="kt_content" class="content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center ">   
                               <!--begin::Card title-->
                                 <div class="card-title">
            <form action="/stocks/paquetesasignadosdatos/" method="GET">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
               
                                 

            </div>



            <!--end::Search-->
        </div>

      
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5" data-select2-id="select2-data-122-79op">
            <!--begin::Flatpickr-->
             
            <div class="input-group w-250px">
            
                                                <input class="form-control" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" name="rango" />

            </div>
            <!--end::Flatpickr-->

            <div class="w-100 mw-200px" data-select2-id="select2-data-121-dtky">
                                                   <select class="form-select form-select-solid mi-selector" name="repartidor" id="repartidor"  >
                                                    
                                                    @foreach ($empleados as $empleado)
                                                    <option value="{{$empleado->id}}" >{{$empleado->nombre}} </option>
                                                    @endforeach
                                                </select>
                                             


            </div>

            <div class="w-100 mw-200px" data-select2-id="select2-data-121-dtky">
                                                   <select class="form-select form-select-solid mi-selector" name="camino" id="camino"  >
                                                    <option value="Asignados" style="height: 60px;">Asignados</option>
                                                    <option value="Entregados" style="height: 60px;">Entregados</option>
                                                  
                                                </select>
                                             


            </div>

            <!--begin::Add product-->
               <button type="submit" class="btn btn-primary ">Filtrar</button>
            <!--end::Add product-->
                
        </div>
          
        <!--end::Card toolbar-->
    </div>
     </form>
   
                                <!--end::Card toolbar-->
                         
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 590px;  ">


                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                                        <thead>
                                        <tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0 text-center" >
                                                <th class="min-w-80px"># de guía</th>
                                                <th class="min-w-50px text-center">Comercio</th>
                                                <th class="min-w-150px text-center">Destinatario</th>
                                                <th class="min-w-150px ">Dirección</th>                                                 
                                                <th class="min-w-100px text-center">Tipo de envío</th>
                                                <th class="min-w-150px text-center">Fecha de entrega</th>      
                                                <th class="min-w-50px text-center">Repartidor</th>                                            
                                                <th class="min-w-50px text-center">Estado</th>                                                                                      
                                                <th class="min-w-50px text-center">Total</th>  
                                            </tr> 
                                        </thead>
                                        <tbody class="fw-semibold  text-gray-400">
                                        @foreach ($envios as $index => $envio)
                                            <tr class="{{ $index % 2 == 0 ? 'table-row-gray' : 'table-row-white' }}">
                                                <td>
                                                    <a href="/envios/detalle/{{ $envio->guia }}" class="text-gray-900 text-hover-primary">
                                                        {{ $envio->guia }}
                                                    </a>
                                                </td>
                                                <td style="text-align: center;">{{ $envio->comercio }}</td>
                                                <td style="text-align: center;">{{ $envio->destinatario }}</td>
                                                <td>{{ $envio->direccion }}</td>
                                                <td style="text-align: center;"><span class="badge badge-dark">{{ $envio->tipo}}</span></td>
                                                <td style="text-align: center;">{{ $envio->fecha_entrega}}</td>
                                                <td style="text-align: center;">{{ $envio->repartidor}}</td>
                                               
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
                                               
                                                <td class="text-center">${{ $envio->total }}</td>
                                               
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    
                                   
                                  

                                 
                                   




                                </div>
                                

                                <div class="row mt-7">
                                    <div class="col-12 mb-3" >
                                        <a href="/stocks/paquetesasignados">
                                        <button type="button" class="btn btn-secondary mb-3" style="float: right;">Cancelar</button>
                                    </a>
                                    </div>
                                    
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