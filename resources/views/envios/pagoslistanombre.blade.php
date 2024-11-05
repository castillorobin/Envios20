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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).on('click', '#check3', function(){

        //alert("Hola mundo");

        var id=$(this).val();
        var total1 = $('#total1').text();  
        if ($(this).prop('checked')) {
            var totaleste=parseFloat($('#tot'+id).text());
            var total = parseFloat(totaleste) + parseFloat(total1);
            $('#total1').text(total); 
            $('#totalito').text(total);
            document.getElementById("stota").value = total.toFixed(2);
           
          // document.getElementById("totalito").value = total.toFixed(2);
           //alert("Hola mundo");
            $('#stotal').text(total);
//document.getElementById("tota").value = total.toFixed(2);
//document.getElementById("stota").value = total.toFixed(2);
}else {
    var totaleste=parseFloat($('#tot'+id).text());
    var total = parseFloat(total1) - parseFloat(totaleste);
    $('#total1').text(total); 
    $('#totalito').text(total);
    $('#stotal').text(total);
    document.getElementById("tota").value = total.toFixed(2);
    document.getElementById("stota").value = total.toFixed(2);
}
        

});


</script>


<script>
    
    $(document).ready(function() {

$("#descuento").change(function() {
                                                                
const pago = parseFloat($(this).val());
const cambio = parseFloat($('#stotal').text());                                        
const total = cambio - pago;
 
 $('#sdescuento').text(pago);
$('#totalito').text(total);
 $('#stota').val(stotal);
 $('#tota').val(total);
 document.getElementById("stota").value = cambio.toFixed(2);
             });
            

             $("#entrega").change(function() {
                //alert("Hola");
                                                               
                 const pago = parseFloat($(this).val());
                 const cambio = parseFloat($('#totalito').text());   
                                                                
                                                                                                                       
               const total = pago - cambio ;
                                                                  
                //$('#cambio').text(total.toFixed(2));
               document.getElementById("cambio").value = total.toFixed(2);                                          
                                                                             });




             
            });
            
</script>

<script>
      function redireccionarPagina(){
    window.setTimeout( abrirURL, 2000 ); // 3 segundos
};
    
function abrirURL(){
    
   //window.location = "http://127.0.0.1:8000/listapagos";
   window.location = "http://154.12.227.235/listapagos";
};

    $(document).on('click', '#checktodo', function(){

        document.querySelectorAll('#formElement input[type=checkbox]').forEach(function(checkElement) {
        checkElement.checked = true;
        todo();

        document.getElementById('checktodo').style.display = 'none';
        document.getElementById('checknada').style.display = '';
        document.getElementById("stota").value = total.toFixed(2);
    });
    
    });

    function todo() {
        var total5 =  document.getElementById('total5').innerText;
        document.getElementById('total1').innerText = total5;
        document.getElementById('totalito').innerText = total5;
        document.getElementById('stotal').innerText = total5;
        document.getElementById("tota").value = total5.toFixed(2);
        document.getElementById("stota").value = total5.toFixed(2);
       // $('#tot1').text(total);
       //alert(total5);
}

$(document).on('click', '#checknada', function(){

document.querySelectorAll('#formElement input[type=checkbox]').forEach(function(checkElement) {
checkElement.checked = false;
nada();

document.getElementById('checktodo').style.display = '';
document.getElementById('checknada').style.display = 'none';

});

});

function nada() {
var total5 =  document.getElementById('total5').innerText;
document.getElementById('total1').innerText = 0;
document.getElementById('totalito').innerText = 0;
document.getElementById('stotal').innerText = 0;
document.getElementById("tota").value = 0;
document.getElementById("stota").value = 0;
//alert(total5);
}





</script>



<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <x-default-layout>

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container">
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Pago de paquetes </h1>
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
                                <li class="breadcrumb-item text-muted">Pagar</li>
                            </ul>
                        </div>
                        <form action="/pago/connombre" id="kt_invoice_form" method="POST"> 
                            @csrf
                            @method('GET')
                        <div class="row m-1 rounded" style="background-color:white; min-height: 100px; display: flex; align-items: center;">
                            <div class="col-md-3 m-2 mb-4">
                                <select class="form-select form-select-solid mi-selector" data-control="select2" name="comercio" id="comercio" >
                                    <option value=" ">Buscar comercio</option>
                                    @foreach ($comercios as $comercio)
                                    <option value="{{$comercio->comercio}}">{{$comercio->comercio}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <div class="col-md-auto align-self-center mb-3">
                                <button type="submit" class="btn btn-primary btn-kg">Buscar</button>
                            </div>
                        </form>
                            
                            <div class="col-md-7 m-2 mb-4 ">
                                <div class="d-flex flex-stack bg-success rounded-4 p-3 float-end " style="width: 250px;">
                                    <div class="fs-6 fw-bold text-white">
                                        <span class="d-block fs-1 lh-1">Total</span>
                                    </div>
                                    <div class="fs-6 fw-bold text-white text-end">
                                       <span id="total1" name="total1" class="d-block fs-1 lh-1" data-kt-pos-element="grant-total">0</span>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <br>
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
                                        <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar"  />
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    
                                    <!--end::Export buttons-->
                                    <form action="pago/filtrandonombre" method="GET"  >
                                        @method('GET') 
                                        <input type="text" value="{{$comercioset[0]->comercio}}" name="comerset" hidden>
                                </div>
                                
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <span style="font-size:18px; color: red;"> &nbsp; {{ $nota }} &nbsp; </span>
                                    <!--begin::Daterangepicker-->
                                    <input class="form-control form-control-solid w-100 mw-250px" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" name="rango" />
                                    <!--end::Daterangepicker-->
                                    <!--begin::Filter-->
                                    
                                    <div class="w-150px"> 
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" name="estado" data-control="select2" data-hide-search="true" data-placeholder="Estados" data-kt-ecommerce-order-filter="Estados">
                                            <option value="todos" >Todos</option>
                                        <option value="Creado">Creado</option>
                                        <option value="En ruta">En ruta</option>
                                        <option value="Entregado">Entregado</option>
                                        <option value="No entregado">No entregado</option>
                                        <option value="Reprogramado">Reprogramado</option>
                                        <option value="Devuelto al comercio">Devuelto al comercio</option>
                                        <option value="Recepcionado">Recepcionado</option>
                                        <option value="Fallido">Fallido</option>
                                        </select>
                                        <!--end::Select2-->
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary" >Filtrar</button>
                                    <!--end::Filter-->
                                    <!--begin::Export dropdown-->
                                   
                                </form>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                       
                                        <!--end::Menu item-->
                                        <!--begin::Menu item
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Exportar a CSV</a>
                                        </div>
                                        -->
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                     
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Export dropdown-->
                                </div>
                                <!--end::Card toolbar-->
                           
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <div class="table-responsive" style="max-height: 480px;">
                                    <form action="/pago/pagoticket2/" method="GET">

                                    <table class="table align-middle table-row-dashed fs-6 gy-5"  id="kt_ecommerce_report_shipping_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 gs-0">
                                                
                                                <th>
                                                    <div class="form-group form-check" style="width: 5px;">

                                                    <input type="checkbox" class="form-check-input" id="checktodo" name="checked[]" >
                                                    <input type="checkbox" class="form-check-input" id="checknada" name="checked[]" style="display:none;">
                                                    
                                                   </div></th>
                                                <th class="min-w-100px"># De guia</th>
                                                <th class="min-w-100px">Comercio</th>
                                                <th class="min-w-100px">Destinatario</th>
                                                <th class="min-w-200px">Dirección </th>
                                                <th class="min-w-100px text-center">Tipo de envío</th>
                                                <th class="min-w-150px text-center">Estado del envío</th>
                                                <th class="min-w-150px text-center">Fecha de entrega</th>
                                                <th class="min-w-150px text-center">Estado del pago</th>
                                                <th class="min-w-150px text-center">Precio del paquete</th>
                                                <th class="min-w-150px text-center">Precio de envío</th>
                                                <th class="min-w-100px text-center">Total </th>
                                                <th class="min-w-100px text-center">Nota</th>
                                                <th class="min-w-100px text-center">Nota de repartidor</th>
                                                <th class="min-w-100px">Ubicación</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-black-400">
                                            <span hidden id="total3"> {{ $total4 = 0 }}</span>
                                            @foreach ($pedidos as $pedido)                                               
                                            <tr>

                                                <td >
                                                    <div class="form-group form-check" style="width: 5px;">
                                                     <input type="checkbox" value="{{ $pedido->id }}" class="form-check-input" id="check3" name="checked[]" >
                                                     
                                                    </div>
                                                    </td>


                                                <td>{{$pedido->guia}}</td>
                                                <td>{{$pedido->comercio}}</td>
                                                <td>{{$pedido->destinatario}}</td>
                                                <td>{{$pedido->direccion}}</td>
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
                                                    @elseif( $pedido->estado == 'Fallido')
                                                    <span class="badge badge-secondary">{{ $pedido->estado }}</span>
                                                    @else
                                                    <span class="badge badge-light">{{ $pedido->estado }}</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">{{$pedido->fecha_entrega}}</td>
                                                <td class="text-center">
                                                    @if( $pedido->pago == 'Pagado')
                                                    <span class="badge badge-success">{{ $pedido->pago}}</span>
                                                    @else
                                                    <span class="badge badge-danger">{{ $pedido->pago }}</span>
                                                    @endif

                                                </td>
                                                <td class="text-center">${{$pedido->precio}}</td>
                                                <td class="text-center">${{$pedido->envio}}</td>
                                                <td class="text-center">${{$pedido->total}}</td>
                                                <span hidden id="tot{{ $pedido->id }}"> {{ $pedido->total }}</span>
                                                <td class="text-center">{{$pedido->nota}}</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <span hidden >  {{ $total4 = $total4 + $pedido->total}}</span>
                                            @endforeach
                                            
                                            <span hidden id="total5"> {{ $total4 }}</span>
                                        </tbody>
                                    </table>
                                
                                </div>
                                <br>
                                <!--end::Table-->
                                <div class="row justify-content-end">
                                    <div class="col-auto align-self-end text-end">
                                        <button type="button" class="btn btn-dark btn-sm mb-3" id="pago" data-bs-toggle="modal" data-bs-target="#kt_modal_2 ">Pagar</button>
                                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-exit-up fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>Exportar Reporte</button>
                                    </div>
                                    
                                </div>
                                <div class="modal bg-body fade" tabindex="-1" id="kt_modal_2">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content shadow-none">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detalles del cobro</h5>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <div style="border: 2px solid white; border-radius: 30px; padding: 20px;">
                                                                <h3 style="margin-bottom: 20px;">Datos del comercio</h3>
                                                                <div class="row ">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right m-0">
                                                                        <label class="text-muted mb-0">Nombre</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">{{$comercioset[0]->comercio}}</p>
                                                                    </div>
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right mb-0">
                                                                        <label class="text-muted mb-0">Teléfono</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center mb-0">
                                                                        <p class="mb-0">{{$comercioset[0]->telefono}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px mb-0">Dirección</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">{{$comercioset[0]->direccion}}</p>
                                                                    </div>
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px mb-0">Whatsapp</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">{{$comercioset[0]->whatsapp}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px mb-0">Correo</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">{{$comercioset[0]->correo}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div style="border: 2px solid white; border-radius: 30px; padding: 20px;">
                                                                <!--begin::Card-->
                                                                <div class="card pt-2 mb-6 mb-xl-9">
                                                                    <!--begin::Card header-->
                                                                    <div class="card-header border-0">
                                                                        <!--begin::Card title-->
                                                                        <div class="card-title">
                                                                            <h2 class="fw-bold mb-0" style="margin-left: -30px;">Datos bancarios</h2>
                                                                        </div>
                                                                        <!--end::Card title-->
                                                                        <!--begin::Card toolbar-->
                                                                        <div class="card-toolbar">
                                                                            <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                                                <i class="ki-duotone ki-plus-square fs-3">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                    <span class="path3"></span>
                                                                                </i>Agregar nuevo metodo</a>
                                                                        </div>
                                                                        <!--end::Card toolbar-->
                                                                    </div>
                                                                    <!--end::Card header-->
                                                                    <!--begin::Card body-->
                                                                    <div id="kt_customer_view_payment_method" class="card-body pt-0">
                                                                        <!--begin::Option-->
                                                                        <div class="py-0" data-kt-customer-payment-method="row">
                                                                            <!--begin::Header-->
                                                                            <div class="py-3 d-flex flex-stack flex-wrap">
                                                                                <!--begin::Toggle-->
                                                                                <div class="d-flex align-items-center collapsible rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
                                                                                    <!--begin::Logo-->
                                                                                    <img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
                                                                                    <!--end::Logo-->
                                                                                    <!--begin::Summary-->
                                                                                    <div class="me-3">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <div class="text-gray-800 fw-bold">{{$comercioset[0]->comercio}}</div>
                                                                                            <div class="badge badge-light-primary ms-5">{{$comercioset[0]->estado}}</div>
                                                                                        </div>
                                                                                        <div class="text-muted"></div>
                                                                                    </div>
                                                                                    <!--end::Summary-->
                                                                                </div>
                                                                                <!--end::Toggle-->
                                                                                <!--begin::Toolbar-->
                                                                                <div class="d-flex my-3 ms-9">
                                                                                    <!--begin::Edit-->
                                                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                                                            <i class="ki-duotone ki-pencil fs-3">
                                                                                                <span class="path1"></span>
                                                                                                <span class="path2"></span>
                                                                                            </i>
                                                                                        </span>
                                                                                    </a>
                                                                                    <!--end::Edit-->
                                                                                    <!--begin::Delete-->
                                                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                                                        <i class="ki-duotone ki-trash fs-3">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                            <span class="path3"></span>
                                                                                            <span class="path4"></span>
                                                                                            <span class="path5"></span>
                                                                                        </i>
                                                                                    </a>
                                                                                    <!--end::Delete-->
                                                                                    <!--begin::More-->
                                                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                        <i class="ki-duotone ki-setting-3 fs-3">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                            <span class="path3"></span>
                                                                                            <span class="path4"></span>
                                                                                            <span class="path5"></span>
                                                                                        </i>
                                                                                    </a>
                                                                                    <!--begin::Menu-->
                                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
                                                                                        <!--begin::Menu item-->
                                                                                        <div class="menu-item px-3">
                                                                                            <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary"></a>
                                                                                        </div>
                                                                                        <!--end::Menu item-->
                                                                                    </div>
                                                                                    <!--end::Menu-->
                                                                                    <!--end::More-->
                                                                                </div>
                                                                                <!--end::Toolbar-->
                                                                            </div>
                                                                            <!--end::Header-->

                                                                            <!--begin::Body-->
                                                                            <div class="collapse show fs-6 ps-10" >
                                                                                <!--begin::Details-->
                                                                                <div class="d-flex flex-wrap py-5">
                                                                                    <!--begin::Col-->
                                                                                    <div class="flex-equal me-5">
                                                                                        <table class="table table-flush gy-1 table-with-spacing" style="margin-left: -30px;"> <!-- Ajusta el valor de margen según tus necesidades -->
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-120px">Titular</td>
                                                                                                <td ><p>{{$comercioset[0]->titular}}</p></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Banco</td>
                                                                                                <td >{{$comercioset[0]->banco}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Numero de cuenta</td>
                                                                                                <td class="text-gray-800">{{$comercioset[0]->cuenta}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">DUI</td>
                                                                                                <td class="text-gray-800">{{$comercioset[0]->dui}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Tipo de cuenta</td>
                                                                                                <td class="text-gray-800">{{$comercioset[0]->tipo_cuenta}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Empresa</td>
                                                                                                <td class="text-gray-800">{{$comercioset[0]->empresa}}</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                    <!--begin::Col-->
                                                                                    <div class="flex-equal">
                                                                                        <table class="table table-flush gy-1 table-with-spacing" style="margin-left: -40px;"> <!-- Ajusta el valor de margen según tus necesidades -->
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Tipo de Contribuyente</td>
                                                                                                <td class="text-gray-800">{{$comercioset[0]->tipo_contri}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Giro</td>
                                                                                                <td class="text-gray-800">
                                                                                                    <a href="#" class="text-gray-900 text-hover-primary">{{$comercioset[0]->giro}}</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">NCR</td>
                                                                                                <td class="text-gray-800">
                                                                                                    <a href="#" class="text-gray-900 text-hover-primary">{{$comercioset[0]->nrc}}</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Direccion fiscal</td>
                                                                                                <td class="text-gray-800">
                                                                                                    <a href="#" class="text-gray-900 text-hover-primary">{{$comercioset[0]->d_fiscal}}</a>
                                                                                                </td>
                                                                                            </tr>


                                                                                        </table>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Details-->
                                                                            </div>
                                                                            <!--end::Body-->
                                                                        </div>
                                                                        <!--end::Option-->
                                                                    </div>
                                                                    <!--end::Card body-->
                                                                </div>
                                                                <!--end::Card-->
                                                            </div>
                                                            <br>
                                                            <div style="border: 2px solid white; border-radius: 30px; padding: 20px;">
                                                                <h3 style="margin-bottom: 20px;">Otros metodos de pagos</h3>

                                                                <div class="row mb-1">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px col-form-label mb-0">Chivo wallet</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">{{$comercioset[0]->chivo}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-1">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px col-form-label mb-0">Tigo Money</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">{{$comercioset[0]->tigo}}</p>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="col-lg-5">
                                                            <div style="border: 2px solid white; border-radius: 30px; padding: 20px;">

                                                                <div class="table-responsive mb-8">
                                                                    <!--begin::Table-->
                                                                    <table class="table align-middle gs-0 gy-4 my-0">
                                                                        <!--begin::Table head-->
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="min-w-100px"></th>
                                                                                <th class="w-200px"></th>
                                                                                <th class="w-60px"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <!--end::Table head-->
                                                                        <!--begin::Table body-->
                                                                        <tbody>
                                                                            <h2>Datos de pagar</h2>
                                                                            <br>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="cajero" id="cajero" placeholder="Cajero" value="{{ Auth::user()->name }}" required readonly />
                                                                                <label for="Cajero">Cajero</label>
                                                                                <div id="CajeroValidationFeedback" class="invalid-feedback">
                                                                                    Por favor ingrese el destinatario.
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <select class="form-select form-select-solid" name="metodo" id="metodo" required>
                                                                                    <option value="Efectivo">Efectivo</option>
                                                                                    <option value="Deposito">Deposito</option>
                                                                                    <option value="Transferencia_empresa">Transferencia a la empresa</option>
                                                                                    <option value="Transferencia_comercio">Transferencia al comercio</option>
                                                                                    <option value="Tigo_money">Tigo money</option>
                                                                                    <option value="Chivo">Chivo</option>
                                                                                </select>
                                                                                <label for="estado_envio">Método de pago</label>
                                                                                <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                                                                    Por favor seleccione el método de pago.
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
                                                                <!-- Summary -->
                                                                <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-5">
                                                                    <!-- Content -->
                                                                    <div class="fs-6 fw-bold text-white">
                                                                        <span class="d-block lh-1 mb-2">Subtotal</span>
                                                                        <span class="d-block mb-2">Descuento</span>
                                                                        <span class="d-block fs-2qx lh-1">Total</span>
                                                                    </div>
                                                                    <!-- Content -->
                                                                    <div class="fs-6 fw-bold text-white text-end">
                                                                        
                                                                        <span id="stotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">$0.00</span>
                                                                        <span id="sdescuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">-$0.00</span>
                                                                        <span class="d-block fs-2qx lh-1" id="totalito" name="totalito" data-kt-pos-element="tot1">$1.00</span>
                                                                       
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                                <!-- End of Summary -->
                                                                <!-- Payment and Change -->
                                                                <div class="row justify-content-end">
                                                                    <label class="col-lg-3 col-form-label ">Pago</label>
                                                                    <div class="col-lg-5">
                                                                        <input type="text" class="form-control form-control-solid" name="entrega" id="entrega" value="0.00" onClick="this.select()"/>
                                                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row justify-content-end">
                                                                    <label class="col-lg-3 col-form-label ">Cambio</label>
                                                                    <div class="col-lg-5">
                                                                        <input type="text" class="form-control form-control-solid" name="cambio" id="cambio" value="0.00"  />
                                                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                                                    </div>
                                                                </div>
                                                                <input type="text" value="{{$comercioset[0]->comercio}}" name="comercio" hidden>
                                                                <input type="text" name="tota" id="tota" hidden>
                                                                <input type="text" name="stota" id="stota" hidden>
                                                                <!-- End of Payment and Change -->
                                                                <br>
                                                                <div class="modal-footer">
                                                                    <div class="d-flex justify-content-between w-100">
                                                                        <button type="button" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2" data-bs-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2" onclick="redireccionarPagina()" formtarget="_blank">Cobrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                            </form>

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
    <script>
        document.getElementById('pago').addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('modalPago'));
            myModal.show();
        });
    </script>
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