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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
    function redireccionarPagina(){
    window.setTimeout( abrirURL, 2000 ); // 3 segundos
};
    
function abrirURL(){
    
   //window.location = "http://127.0.0.1:8000/entregas";
   window.location = "http://154.12.227.235/entregas";
};
         

$(document).ready(function() {

    $("#descuento").change(function() {
                                                                    
    const pago = parseFloat($(this).val());
    const cambio = parseFloat(document.getElementById("suto").value); 
    
                                                           
    const total = cambio - pago;
     //const total = subtotal;               
     //$('#subto').text(total);
     //document.getElementById("cambio").value = total ;    
     $('#sdescuento').text(pago);
     $('#total1').text(total);
     $('#descu').val(pago);
     $('#tota').val(total);

                 });

                 $("#entrega3").change(function() {
                                                                   
                     const pago =parseFloat($(this).val());
                     const cambio = parseFloat(document.getElementById("tota").value); 
                                                                    
                                                                                                                           
                    const total = pago - cambio ;
                                                                      
                    //$('#cambio').val(total.toFixed(2));
                    document.getElementById("cambio").value = total.toFixed(2)                                          
                                                                                 });


 

                 
                });
    </script>
    








<body id="kt_body" class="">
    <x-default-layout>
        <!--begin::Container-->
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start">
            <!--begin::Post-->
            <div class="content flex-row-fluid" id="kt_content">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Entrega de paquetes </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
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



                                                    <form action="/entrega/agregarparte/" class="row g-2" method="GET">
                                                   
                                                        <div class="col-auto">
                                                            <label for="guia" class="visually-hidden">Guía</label>
                                                            <input type="text" class="form-control " id="guia" name="guia" placeholder="Buscar guia">
                                                            <input type="text" value="Departamental" class="visually-hidden" name="tipo" id="tipo">
                                                            <input type="text" class="visually-hidden" name="entrega" id="entrega" value="{{$actual}}">
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                                                            @if($errors->any())
                                                            <span style="font-size:18px; color: red;">{{$errors->first()}} </span>
                                                            @endif
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
                                                            <th class="min-w-100px"># De guia</th>
                                                            <th class="min-w-50px">Comercio</th>
                                                            <th class="min-w-150px">Destinatario</th>
                                                            <th class="min-w-250px">Direccion</th>
                                                            
                                                            <th class="min-w-150px text-center">Tipo de envío</th>
                                                            <th class="min-w-150px text-center">Estado del envío</th>
                                                            <th class="text-center min-w-150px" >Fecha de entrega</th>
                                                            <th class="min-w-150px text-center">Estado del pago</th>
                                                            <th class="min-w-150px text-center">Precio del paquete</th>
                                                            <th class="min-w-150px text-center">Precio de envío</th>
                                                            <th class="min-w-50px">Total </th>
                                                            <th class="min-w-50px">Nota</th>
                                                            <th class="min-w-50px">Nota de repartidor</th>
                                                            <th class="min-w-50px text-center">Borrar</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                    <span hidden id="total3"> {{ $total4 = 0 }}</span>
                                                    @foreach ($pedidos as $pedido) 
                                                        <tr>
                                                            <td><a href="#" class="text-gray-900 text-hover-primary">{{$pedido->guia}}</a></td>
                                                            <td><a href="#" class="text-gray-900 text-hover-primary">{{$pedido->comercio}}</a></td>
                                                            <td>{{$pedido->destinatario}}</td>
                                                            <td  >{{$pedido->direccion}}</td>
                                                            <td class="text-center"><span class="badge badge-dark">{{$pedido->tipo}}</span></td>
                                                            <td class="text-center">
                                                                @if( $pedido->estado == 'No entregado')
                                                                <span class="badge badge-danger">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'Creado')
                                                                <span class="badge badge-warning">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'Entregado')
                                                                <span class="badge badge-success">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'En ruta')
                                                                <span class="badge badge-info">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'Reprogramado')
                                                                <span class="badge badge-dark">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'Devuelto al comercio')
                                                                <span class="badge badge-primary">{{ $pedido->estado }}</span>
                                                                @else
                                                                <span class="badge badge-light">{{ $pedido->estado }}</span>
                                                                @endif
                                                            </td>
                                                            <td class="text-center">{{$pedido->fecha_entrega}}</td>
                                                            <td class="text-center">{{$pedido->pago}}</td>
                                                            <td class="text-center">{{$pedido->precio}}</td>
                                                            <td class="text-center">{{$pedido->envio}}</td>
                                                            <td class="text-center">{{$pedido->total}}</td>
                                                            <td class="text-center">{{$pedido->nota}}</td>
                                                            <span hidden id="total2"> {{ $total4 = $total4 + $pedido->total }}</span>
                                                            <td class="text-center"></td>
                                                            <td style="text-align: center;">
                                                                <a href="/entrega/limpiar/{{$pedido->id}}">
                                                                <button type="button" class="btn btn-danger p-2"> <i class="fas fa-trash-alt"></i></button>
                                                            </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <span hidden id="total5"> {{ $total4 }}</span>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                            <a href="/entregas" class="btn btn-danger mt-3 ms-3" style="float: right; width:150px;">
                                                Cancelar
                                            </a>
                                           
                                            <button type="button"data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3"  style="float: right; width:150px;">Entregar</button>
                                            
                                            
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
                
                        <!--end::Mixed Widget 12-->
                    


                   
                    <!--end::Col-->

                
                 
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
    
        <!--end::Post-->
        </div>
        <!--end::Container-->
       
<!-- Inicia Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Entrega de paquetes</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body"> <!-- Inicia Modalbody -->
            <form action="/entrega/ticketentrega/" class="row g-2" method="GET">
                <input type="text" class="visually-hidden" name="entrega2" id="entrega2" value="{{$actual}}">
            <!--begin::Mixed Widget 12-->
            <div class="card mb-5 mb-lg-10">
                <!--begin::Header-->
                <div class="card card-flush bg-body" id="kt_pos_form">
                    <!--begin::Header-->
                    
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
                                    <div class="form-floating col-lg-12 mb-4">
                                        <div class="form-floating col-lg-12 mb-4">
                                            <input type="text" class="form-control form-control-solid" name="cajero" id="cajero" placeholder="Cajero" value="{{ Auth::user()->name }}" required readonly />
                                            <label for="Cajero">Cajero</label>
                                            <div id="CajeroValidationFeedback" class="invalid-feedback">
                                                Por favor ingrese el destinatario.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-12 mb-4">
                                        <select class="form-select form-select-solid" name="metodo" id="metodo" required>
                                            <option value="Efectivo">Efectivo</option>
                                            <option value="Efectivo">Transferencia a la empresa</option>
                                            <option value="Transferencia al comercio">Transferencia al comercio</option>
                                           
                                        </select>
                                        <label for="estado_envio">Metodo de pago</label>
                                        <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el estado del envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-12 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="fecha_entrega" id="fecha_entrega" placeholder="Fecha de entrega" readonly />
                                        <label for="fecha_entrega">Fecha de entrega</label>
                                        <div id="fechaEntregaValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione una fecha de entrega.
                                        </div>
                                    </div>
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


                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                        <!--begin::Summary-->
                        <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-5">
                            <!--begin::Content-->
                            <div class="fs-6 fw-bold text-white">
                                <span class="d-block lh-1 mb-2">Subtotal</span>
                                <span class="d-block mb-2">Descuento</span>
                                <span class="d-block fs-2qx lh-1">Total</span>
                            </div>
                            <!--end::Content-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-bold text-white text-end">
                                <span id="stotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">${{ $total4 }}</span>
                                <input type="text" id="suto" value="{{ $total4 }}" hidden>
                                <span id="sdescuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">$0</span>
                                <span id="total1" name="total1" class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">${{ $total4 }}</span>
                            </div>

                            
                            <!--end::Content-->
                        </div>
                        <input type="text" class="visually-hidden" name="descu" id="descu" >
                        <input type="text" class="visually-hidden" name="tota" id="tota" value="{{ $total4 }}">
                        <input type="text" class="visually-hidden" name="sutota" id="sutota" value="{{$total4}}">
                        <div class="">
                        <div class="form-floating col-lg-8 mb-4 " style="float: right;">
                            <input type="text" class="form-control form-control-solid" style="" name="entrega3" id="entrega3" placeholder="Entrega efectivo" />
                            <label for="entrega" style="padding-left: 25px;">Efectivo recibido</label>
                            
                        </div>
                        <div class="form-floating col-lg-8 mb-4" style="float: right;">
                            <input type="text" class="form-control form-control-solid " style="" name="cambio" id="cambio" placeholder="Cambio" />
                            <label for="cambio" style="padding-left: 25px;">Cambio</label>
                            
                        </div>
                    </div>
                        <!--end::Summary-->
                        <!--begin::Payment Method-->
                        <div class="m-0">
                            <!--begin::Actions-->
                            <button type="submit" class="btn btn-primary fs-1 w-100 pt-3 px-3" onclick="redireccionarPagina()" formtarget="_blank">Imprimir comprobante</button>
                            
                            
                            <!--end::Actions-->
                       
                        </div> 
                    </form>
                        <!--end::Payment Method-->
                    </div>
                    <!--end: Card Body-->

                

                </div>

<!--end: List Widget 5-->
        </div>





        </div>
        <div class="modal-footer"> <!-- Termina ModalBody -->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
     
        </div>
      </div>
    </div>
  </div>
<!-- Termina Modal -->

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
    <script>
        // Función para obtener la fecha y hora actual en El Salvador
        function obtenerFechaHoraElSalvador() {
            var ahora = new Date();
            var timeZoneOffset = -6 * 60; // GMT-6 (El Salvador)
            var offset = ahora.getTimezoneOffset();
            ahora.setMinutes(ahora.getMinutes() - (offset - timeZoneOffset));
            return ahora;
        }

        // Función para formatear la fecha
        function formatearFecha(fecha) {
            var meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
            var dia = fecha.getDate();
            var mes = meses[fecha.getMonth()];
            var año = fecha.getFullYear();
            var horas = fecha.getHours();
            var minutos = fecha.getMinutes();
            var am_pm = horas >= 12 ? 'AM' : 'PM';
            horas = horas % 12;
            horas = horas ? horas : 12;
            minutos = minutos < 10 ? '0' + minutos : minutos;
            return dia + '/' + mes + '/' + año + ' ' + horas + ':' + minutos + ' ' + am_pm;
        }

        // Función para establecer la fecha y hora actual en el campo de fecha de entrega
        function establecerFechaEntrega() {
            var fechaHoraActual = obtenerFechaHoraElSalvador();
            var fechaFormateada = formatearFecha(fechaHoraActual);
            document.getElementById('fecha_entrega').value = fechaFormateada;
        }

        // Llamar a la función para establecer la fecha y hora actual al cargar la página
        establecerFechaEntrega();
    </script>

</body>
<!--end::Body-->

</html>