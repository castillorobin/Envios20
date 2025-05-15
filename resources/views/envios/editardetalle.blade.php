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
                                <td style="width: 550px;"><input type="text" name="destinatario" id="destinatario" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->destinatario }}" />
                                
                            </td>
                            </tr>
                            <tr>
                                <td>Direccion:</td>
                                <td><input type="text" name="direccion" id="direccion" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->direccion }}"   /></td>
                            </tr>
                            <tr>
                                <td>Tipo de envio: </td>
                                <td>
                            
                                <select class="form-select form-select-solid mi-selector" name="tipo" id="tipo" onchange="cambiotipo()" >
                                    <option value="{{ $envio[0]->tipo }}">{{ $envio[0]->tipo }}</option>
                                   
                                    <option value="Personalizado">Personalizado </option>
                                    <option value="Personalizado departamental">Personalizado departamental</option>
                                    <option value="Casillero">Casillero</option>
                                    <option value="Punto fijo">Punto fijo</option>
                                    
                                </select>
                            
                            </td>
                            </tr>
                            <tr>
                                <td>Fecha de entrega:</td>
                                <td>  <input type="date" style="width: 250px;" name="fechae" id="fechae" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->fecha_entrega }}"  /></td>
                            </tr>
                            <tr>
                                <td>Estado:</td>        
                                <td>
                                    
                                        
                                      <input type="text" style="width: 250px;" name="estado" id="estado" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->estado }}"  readonly />
                                </td>
                            </tr>
                            <tr>
                                <td>Precio: </td>
                                <td><input type="text" style="width: 250px;" name="precio" id="precio" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->precio }}"   /></td>
                            </tr>
                            <tr>
                                <td>Envio:</td>
                                <td> <input type="text" style="width: 250px;" name="envio" id="envio" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->envio }}"  /></td>
                            </tr>

                            <tr>
                                <td>Total:</td>
                                <td><input type="text" style="width: 250px;" name="total" id="total" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->total }}"  /></td>
                            </tr>
                            <tr>
                                <td>Cobro: </td>
                                <td>
                                 <select style="width: 250px;" name="cobro" id="cobro" class="form-control form-control-lg form-control-solid" data-placeholder="Seleccionar agencia">
                                        <option value="{{ $envio[0]->cobro }}">{{ $envio[0]->cobro }}</option>
                                        <option value="Por pagar">Pagado</option>
                                                <option value="Pagado">Pendiente</option>
                                                
                                                
                                    </select>    
                                </td>
                            </tr>
                            <tr>
                                <td>Nota:</td>
                                <td><input type="text" name="nota" id="nota" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->nota }}"  /></td>
                            </tr>
                            <tr>
                                <td>Estado del pago:</td>
                                <td> 
                                    

                                    <select style="width: 250px;" name="pago" id="pago" class="form-control form-control-lg form-control-solid" data-placeholder="Seleccionar agencia">
                                        <option value="{{ $envio[0]->pago }}">{{ $envio[0]->pago }}</option>
                                        <option value="Por pagar">Por pagar</option>
                                                <option value="Pagado">Pagado</option>
                                                
                                                
                                    </select>
                                </td>
                            </tr>
                            <input type="text" name="cajero" id="cajero" class="form-control form-control-lg form-control-solid" value="{{ Auth::user()->name }}" hidden/>
                        </table>


                        


                        </div>
                       
                    </div>
                    <!--begin::Sign-in Method-->
                    <!--begin::details View-->
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                    
                       
                   
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
                        <div class="card-body p-9" >
                            <div class="row mb-7 text-center" >
                                <!--begin::Label-->
                             <div class="col-sm-2">                                 
                                
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-100px h-100px" style="background-image: url(/fotos/expertos.png"></div>
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="ki-duotone ki-pencil fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="file" name="foto" accept=".png, .jpg, .jpeg" capture="camera" /> <!-- Agregar capture="camera" -->
                                            <input type="hidden" name="avatar_remove" />
                                        </label>
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Quitar imagen">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="form-text">Tipos: png, jpg, jpeg.</div>
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
                                        <td ><input type="text" name="repartidor" id="repartidor" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->repartidor }}" readonly /></td>
                                    </tr>
                                    <tr>
                                        <td>Nota del repartidor:</td>
                                        <td><input type="text" name="repartidor" id="repartidor" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->nota}}" readonly/></td>
                                    </tr>
                                    <tr>
                                        <td>Ruta: </td>
                                        <td><input type="text" name="repartidor" id="repartidor" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->ruta }}" readonly /></td>
                                    </tr>
                                </table>
                                
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
                                            <td ><input type="text" name="usuario" id="usuario" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->usuario }}" readonly /> </td>
                                        </tr>
                                        <tr>
                                            <td>Fecha de creación:</td>
                                            <td>
                                                
                                                <input type="text" name="creacion" id="creacion" class="form-control form-control-lg form-control-solid" value="{{date('d-m-Y',strtotime($envio[0]->created_at))}}" readonly />
                                                </td>
                                        </tr>
                                        <tr>
                                            <td>Agencia de registro: </td>
                                            <td>
                                            <input type="text" name="agencia" id="agencia" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->agencia }}" readonly />
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
                                                <td >
                                                <input type="text" name="caja" id="caja" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->caja }} " readonly/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rack:</td>
                                                <td>
                                                    
                                                    <input type="text" name="rack" id="rack" class="form-control form-control-lg form-control-solid" value="{{$envio[0]->rack}} " readonly/>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Nivel: </td>
                                                <td>
                                                <input type="text" name="nivel" id="nivel" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->nivel }} " readonly />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tarima: </td>
                                                <td>
                                                <input type="text" name="tarima" id="tarima" class="form-control form-control-lg form-control-solid" value="{{ $envio[0]->tarima }} " readonly />
                                            </td>
                                            </tr>
                                        </table>
                                        
                                    </div>
                                      
                                    </div>

                    <!--end::details View-->
                    <!--begin::details View-->
                   
                    <!--end::Card body-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary" >Editar </button>
                        
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

        function cambiotipo(){
            //alert("Hola mundo")
            const precio = parseFloat(document.getElementById("precio").value);
            const envio = parseFloat(document.getElementById("envio").value);
            const total = precio - envio;
           // const total2 = precio ;

            const tipo = document.getElementById("tipo").value;
//alert(tipo);
            if (tipo == "Personalizado") {
                document.getElementById("total").value = total;
            }else{
                document.getElementById("total").value = precio;
            }
            
            
        }
    </script>

    
<script>
    $(document).ready(function() {

        // Función para calcular el total
        function calcularTotal() {
            const precioPaquete = parseFloat($("#precio").val()) || 0;
            const precioEnvio = parseFloat($("#envio").val()) || 0;
            const estadoCobro = $("#cenvio").val();
            const estadoPago = $("#estado_pago").val();

            let total = precioPaquete + precioEnvio;

            if (estadoCobro === "Pendiente") {
                total -= precioEnvio;
            }

            if (estadoPago === "Por pagar") {
                total -= precioPaquete;
            }

            const tipo = document.getElementById("tipo").value;

             if (tipo == "Personalizado") {
                $("#total").val(precioPaquete.toFixed(2) - precioEnvio.toFixed(2));
            }else{
                 $("#total").val(recioPaquete.toFixed(2));
            }

           
        }

        // Calcular total al cargar la página
        calcularTotal();
        $("#precio").change(calcularTotal);
        $("#envio").change(calcularTotal);
        $("#cenvio").change(calcularTotal);
        $("#estado_pago").change(calcularTotal);

        $("#envio").keyup(calcularTotal);

    });
</script>
</body>

</html>