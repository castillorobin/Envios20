<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />

    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.cdnfonts.com/css/oswald-4" rel="stylesheet">
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head--> 
<!--begin::Body-->
<style>
    .delabase{
        color: #001295; 
        font-family: 'Oswald', sans-serif;
        font-weight: 600;
        font-size: 16px;
    }
</style>
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load--> <!--begin::Sign-in Method-->
    <x-default-layout>
        <!--begin::Main-->
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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Informacion del paquete</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Paquetes</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Perfil del paquete</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb--> 
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">

                            <!--begin::Primary button-->
                          
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
                        <!--begin::Navbar-->
                        <div class="card mb-5 mb-xl-10">
                            <div class="card-body pt-9 pb-0">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <!--begin: Pic-->
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                            <img src="/fotos/expertos.png" alt="image" />
                                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <div class="d-flex flex-column">
                                                <div class="row">
                                                    <div class="col-lg-8 mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="text-gray-900 text-hover-primary fs-3 fw-bold me-1" style="white-space: nowrap;">
                                                                
                                                                {{ $comercio[0]->comercio }}
                                                            </a>
                                                            <a href="#">
                                                                <i class="ki-duotone ki-verify fs-1 text-primary">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" fw-semibold">

                                                <table style="font-size:16px;">
                                                    <tr >
                                                        <td style="width: 150px;">
                                                Telefono:  
                                               </td>
                                                        <td >{{ $comercio[0]->telefono }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>WhatsApp:</td>
                                                        <td>{{ $comercio[0]->whatsapp }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Correo: </td>
                                                        <td>{{ $comercio[0]->correo }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dirección:</td>
                                                        <td> {{ $comercio[0]->direccion }}</td>
                                                    </tr>
                                                </table>
                                               
                                               
                                                
                                                  
                                                </div>
                                            </div>
                                            <div class="d-flex my-1">
                                                
                                            </div>


                                        </div>
                                        <div class="d-flex flex-wrap flex-stack ">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                                <!--begin::Stats-->
                                                <div class="d-flex flex-wrap">
                                                    <!--begin::Stat-->
                                                    
                                                       
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Wrapper-->

                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Navs-->
                                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                    <!--begin::Nav item-->
                                    <li class="nav-item mt-2">
                                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Entrega</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    @can('ordenes-editar')
                                    <li class="nav-item mt-2">

                                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="/envios/editardetalle/{{ $envio[0]->guia }}">Editar Entrega</a>
                                    </li>
                                    @endcan
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                   
                                    <!--end::Nav item-->
                                </ul>
                                <!--begin::Navs-->
                            </div>
                        </div> 
                        <!--end::Navbar-->
                       
                           
                           

                        <!--begin::details View-->
                        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                            <!--begin::Card header-->
                            <div class="card-header cursor-pointer">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    
                                    <h3 class="fw-bold m-0" >Detalles del destinatario</h3>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Action-->
                               
                                <!--end::Action-->
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                               
                            <table style="font-size:16px;">
                                                    <tr >
                                                        <td style="width: 150px;">
                                                Destinatario:  
                                               </td>
                                                        <td >{{ $envio[0]->destinatario }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Direccion:</td>
                                                        <td>{{ $envio[0]->direccion }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipo de envio: </td>
                                                        <td><span class="badge badge-dark">{{ $envio[0]->tipo }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fecha de entrega:</td>
                                                        <td> {{ $envio[0]->fecha_entrega }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estado:</td>
                                                        <td>
                                                        @if( $envio[0]->estado == 'No entregado')
                                                    <span class="badge badge-danger">{{ $envio[0]->estado }}</span>
                                                    @elseif( $envio[0]->estado == 'Creado')
                                                    <span class="badge badge-warning">{{ $envio[0]->estado }}</span>
                                                    @elseif( $envio[0]->estado == 'Entregado')
                                                    <span class="badge badge-success">{{ $envio[0]->estado }}</span>
                                                    @elseif( $envio[0]->estado == 'En ruta')
                                                    <span class="badge badge-info">{{ $envio[0]->estado }}</span>
                                                    @elseif( $envio[0]->estado == 'Reprogramado')
                                                    <span class="badge badge-dark">{{ $envio[0]->estado }}</span>
                                                    @elseif( $envio[0]->estado == 'Devuelto al comercio')
                                                    <span class="badge badge-primary">{{ $envio[0]->estado }}</span>
                                                    @else
                                                    <span class="badge badge-light">{{ $envio[0]->estado }}</span>
                                                    @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Precio: </td>
                                                        <td>${{ $envio[0]->precio }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Envio:</td>
                                                        <td> ${{ $envio[0]->envio }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Total:</td>
                                                        <td>{{ $envio[0]->total }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cobro: </td>
                                                        <td>{{ $envio[0]->cobro }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nota:</td>
                                                        <td> {{ $envio[0]->nota }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estado del pago:</td>
                                                        <td> 
                                                           
                                                            @if( $envio[0]->pago == 'Por pagar')
                                                            <span class="badge badge-danger">{{ $envio[0]->pago }}</span>
                                                            @elseif( $envio[0]->pago == 'Pagado')
                                                            <span class="badge badge-success">{{ $envio[0]->pago }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                               
                                                
                                </div>
                                </div>
                                
                        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                            <!--begin::Card header-->
                            <div class="card-header cursor-pointer">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <h3 class="fw-bold m-0">Fotos del paquete</h3>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <div class="row mb-7 text-center">
                                    <!--begin::Label-->
                                 <div class="col-sm-2">                                 
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/fotos/{{$envio[0]->foto1}})"></div>
                                    </div>
                                </div>  
                                <div class="col-sm-2">  
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/fotos/{{$envio[0]->foto2}})"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="col-sm-2">  
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/fotos/{{$envio[0]->foto3}})"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="col-sm-2">  
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/fotos/{{$envio[0]->foto4}})"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="col-sm-2">  
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/fotos/{{$envio[0]->foto5}})"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                        <!--end::details View-->



                        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                            <!--begin::Card header-->
                            <div class="card-header cursor-pointer">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <h3 class="fw-bold m-0">Datos de la entrega</h3>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <table style="font-size:16px;">
                                    <tr >
                                        <td style="width: 160px;">
                                        Repartidor:  
                               </td>
                                        <td >{{ $envio[0]->repartidor }} </td>
                                    </tr>
                                    <tr>
                                        <td>Nota del repartidor:</td>
                                        <td>{{ $envio[0]->nota }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ruta: </td>
                                        <td>{{ $envio[0]->ruta }}</td>
                                    </tr>
                                </table>
                                
                            </div>
                                
                            </div>




                            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                <!--begin::Card header-->
                                <div class="card-header cursor-pointer">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Comprobante de la entrega</h3>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body p-9">
                                    <div class="row mb-7 text-center">
                                        <!--begin::Label-->
                                     <div class="col-sm-2">                                 
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/fotos/expertos.png"></div>
                                        </div>
                                    </div>  
                                </div>
                                </div>
                                   
                                </div>




                                

                            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                <!--begin::Card header-->
                                <div class="card-header cursor-pointer">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Datos de creación</h3>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body p-9">
                                   
                                    <table style="font-size:16px;">
                                        <tr >
                                            <td style="width: 160px;">
                                            Usuario:  
                                   </td>
                                            <td >{{ $envio[0]->usuario }} </td>
                                        </tr>
                                        <tr>
                                            <td>Fecha de creación:</td>
                                            <td>
                                                {{date('d-m-Y',strtotime($envio[0]->created_at))}}
                                                
                                                </td>
                                        </tr>
                                        <tr>
                                            <td>Agencia de registro: </td>
                                            <td>{{ $envio[0]->foto1 }}</td>
                                        </tr>
                                    </table>
                                    
                                </div>
                                  
                                </div>


                                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                    <!--begin::Card header-->
                                    <div class="card-header cursor-pointer">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <h3 class="fw-bold m-0">Ubicación</h3>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--begin::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body p-9">
                                        <table style="font-size:16px;">
                                            <tr >
                                                <td style="width: 160px;">
                                                Caja:  
                                       </td>
                                                <td >{{ $envio[0]->caja }} </td>
                                            </tr>
                                            <tr>
                                                <td>Rack:</td>
                                                <td>
                                                    {{$envio[0]->rack}}
                                                    
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Nivel: </td>
                                                <td>{{ $envio[0]->nivel }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tarima: </td>
                                                <td>{{ $envio[0]->tarima }}</td>
                                            </tr>
                                        </table>
                                        
                                    </div>
                                      
                                    </div>



                                    
                                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                    <!--begin::Card header-->
                                    <div class="card-header cursor-pointer">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0" style="width: 100%;">
                                            <div style="float:left; width: 70%;">
                                            <h3 class="fw-bold m-0" >Fotos de cambios</h3>
                                            </div>
                                            <div style="float: inline-end;">
                                            <h3 >Guia: {{$envio[0]->guiacambio}}</h3>
                                            </div>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--begin::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body p-9">
                                        <div class="row mb-7 text-center">
                                            <!--begin::Label-->
                                         <div class="col-sm-2">                                 
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(https://www.meloexpressdomicilios.site/fotos/{{$envio[0]->fotocambio}})"></div>
                                            </div>
                                        </div>  
                                        
                                    </div>
                                        
                                    </div>

                                </div>
                                         
                                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                  
                                    <div class="card-body p-9">
                                        <div class="row mb-7 text-center">
                                            <!--begin::Label-->
                                         <div class="col-sm-2">                                 
                                           

                                            
                                        
                                        </div>  
                                    </div>
                                    @if($envio[0]->estado == "Fallido")
                                    <h3 >Fallido</h3>
                                    <span style="font-size:14px;">{{$envio[0]->motivofallo}}</span>
                                    <p></p>
                                    <span style="font-size:14px;">Nota: {{$envio[0]->notafallido}}</span>
                                    <p></p>
                                    @if($envio[0]->motivofallo == "reprogramado")
                                    <h4 >Reprogramado</h4>

                                    <span style="font-size:14px;">{{$envio[0]->fechareprogra}}</span>
                                    @endif
                                    @endif
                                  


                                    @if($envio[0]->estado == "No entregado")
                                    <h3 >No entregado</h3>
                                    
                                    <span style="font-size:14px;">Nota: {{$envio[0]->notanoentre}}</span>
                                    <p></p>
                                    
                                    @endif
                                   


                        
                    </div>
                    <!--end::details View-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

        </div>
        <!--end::Footer-->
        </div>
        <!--end:::Main-->
    </x-default-layout>
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function confirmDelete(url) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        }
    </script>
</body>

</html>