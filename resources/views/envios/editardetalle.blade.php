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
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load--> <!--begin::Sign-in Method-->
    <x-default-layout>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Informacion del paquete</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Comercios</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Perfil de comercio</li>
                    </ul>
                </div>
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
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/envios/detalle/{{ $envio[0]->guia }}">Entrega</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Editar Entrega</a>
                            </li>
                           
                            <!--end::Nav item-->
                            </li>
                        </ul>
                    </div>
                </div>
                <form action="/envios/detalleeditando" method="GET" id="myForm" >
                    @method('GET') 

                    <input type="text" value="{{ $envio[0]->id }}" id="iden" name="iden" hidden>
                    <input type="text" value="{{ $envio[0]->guia }}" id="guia" name="guia" hidden>

                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Información detallada del destinatario</h3>
                        </div>
                       
                    </div>
                    <div class="card-body border-top p-9">
                        <table style="font-size:16px;">
                            <tr >
                                <td style="width: 150px;">
                        Destinatario:  
                       </td>
                                <td ><input type="text" name="destinatario" id="destinatario" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->destinatario }}" /></td>
                            </tr>
                            <tr>
                                <td>Direccion:</td>
                                <td><input type="text" name="direccion" id="direccion" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->direccion }}"   /></td>
                            </tr>
                            <tr>
                                <td>Tipo de envio: </td>
                                <td><input type="text" name="tipo" id="tipo" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->tipo }}"   /></td>
                            </tr>
                            <tr>
                                <td>Fecha de entrega:</td>
                                <td>  <input type="date" name="fechae" id="fechae" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->fecha_entrega }}"  /></td>
                            </tr>
                            <tr>
                                <td>Estado:</td>
                                <td>
                                    <select name="estado" id="estado" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar agencia">
                                        <option value="Creado">{{ $envio[0]->estado }}</option>
                                        <option value="Creado">Creado</option>
                                                <option value="En ruta">En ruta</option>
                                                <option value="Entregado">Entregado</option>
                                                <option value="No entregado">No entregado</option>
                                                <option value="Reprogramado">Reprogramado</option>
                                                <option value="Reenvio">Reenvio</option>
                                                <option value="Devuelto al comercio">Devuelto al comercio</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Precio: </td>
                                <td><input type="text" name="precio" id="precio" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->precio }}"   /></td>
                            </tr>
                            <tr>
                                <td>Envio:</td>
                                <td> <input type="text" name="envio" id="envio" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->envio }}"  /></td>
                            </tr>

                            <tr>
                                <td>Total:</td>
                                <td><input type="text" name="total" id="total" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->total }}"  /></td>
                            </tr>
                            <tr>
                                <td>Cobro: </td>
                                <td><input type="text" name="cobro" id="cobro" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->cobro }}"   /></td>
                            </tr>
                            <tr>
                                <td>Nota:</td>
                                <td><input type="text" name="nota" id="nota" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->nota }}"  /></td>
                            </tr>
                            <tr>
                                <td>Estado del pago:</td>
                                <td> 
                                    <input type="text" name="pago" id="pago" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->pago }}" />
                                </td>
                            </tr>
                        </table>






                       
                    </div>
                    <!--begin::Sign-in Method-->
                    <!--begin::details View-->
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">OTROS DATOS</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de creación</label>
                                <div class="col-lg-8">
                                    <input type="date" name="fecha_alta" id="fecha_alta" class="form-control form-control-lg form-control-solid"  />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label">Usuario </label>
                                <div class="col-lg-8">
                                    <input type="text" name="Usuario" id="Usuario" class="form-control form-control-lg form-control-solid" />
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label">Agencia de registro</label>
                                <div class="col-lg-8">
                                    <input type="text" name="Usuario" id="Usuario" class="form-control form-control-lg form-control-solid" />
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::details View-->
                    <!--begin::details View-->
                   
                    <!--end::Card body-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary" >Editar </button>
                        
                    </div>
                </div>
            </form>
                <!--end::Sign-in Method-->
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