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
/*
        .dataTables_paginate {
  
bottom: -360px;
        }

        
        .pagination {
            
            position: absolute;
  z-index: 100;
 
    margin-bottom: -560px;
        }

       

       table.dataTable tbody td {
  padding-top: 9px !important;
  padding-bottom: 9px !important;
}
*/

tbody td {
    padding-top: 5px !important; /* e.g. change 8x to 4px here */
    padding-bottom: 5px !important;
}


.dataTables_paginate {
           
           
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
$("#pago").prop('disabled',false)
}else {
    var totaleste=parseFloat($('#tot'+id).text());
    var total = parseFloat(total1) - parseFloat(totaleste);
    $('#total1').text(total); 
    $('#totalito').text(total);
    $('#stotal').text(total);
    document.getElementById("tota").value = total.toFixed(2);
    document.getElementById("stota").value = total.toFixed(2);

    if(total <= 0){
        $("#pago").prop('disabled',true)
    }
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
 //$('#descu').val(pago);
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
            

            function redireccionarPagina(){
    window.setTimeout( abrirURL, 2000 ); // 3 segundos
};
    
function abrirURL(){
    
   //window.location = "http://127.0.0.1:8000/listapagos";
   window.location = "https://meloexpress.site/listapagosticket";
};
</script>

<script>
   

    $(document).on('click', '#checktodo', function(){

        document.querySelectorAll('#formElement input[type=checkbox]').forEach(function(checkElement) {
        checkElement.checked = true;
       
        todo();

        document.getElementById('checktodo').style.display = 'none';
        document.getElementById('checknada').style.display = '';

    });
    
    });

    function todo() {
        
        var total5 =  document.getElementById('total5').innerText;
        document.getElementById('total1').innerText = total5;
        document.getElementById('totalito').innerText = total5;
        document.getElementById('stotal').innerText = total5;
        $totalisimo=parseFloat(total5);
        document.getElementById("tota").value = $totalisimo.toFixed(2);
       // $('#tot1').text(total);
       $("#pago").prop('disabled',false)
       //alert("Hola");
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
//alert(total5);
$("#pago").prop('disabled',true)
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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Pago de paquetes</h1>
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
                        <form action="/pago/conticket" id="kt_invoice_form" method="POST" > 
                            @csrf
                            @method('GET')
                        <div class="row m-1 rounded" style="background-color:white; min-height: 100px; display: flex; align-items: center;">
                            <div class="col-md-3 m-2 mb-4">
                                <input type="text" class="form-control form-control-solid" placeholder="Ingrese # ticket" name="ticket" id="ticket" />
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
                                <form action="pago/filtrandonombre2" method="GET"  >
                                    @method('GET') 
                                    <input type="text" value="{{$comercioset[0]->comercio}}" name="comerset" hidden>
                                    <input type="text" value="{{$pedidos[0]->ticketc}}" name="ticketc" hidden>
                            </div>
                            
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                               
                                <!--begin::Daterangepicker
                                <input class="form-control form-control-solid w-100 mw-250px" placeholder="Rango" id="kt_ecommerce_report_shipping_daterangepicker" name="rango" />  -->
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
                               <span style="font-size:18px; color: red;"> &nbsp; {{ $nota }} &nbsp; </span>
                                <!--end::Menu-->
                                <!--end::Export dropdown-->
                            </div>
                            <!--end::Card toolbar-->
                            
                        <!--end::Card header               -->
                        <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                
                                <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                    <form action="/pago/pagoticket/" method="GET" name="f1" id="formElement" >
                                    
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 " id="kt_ecommerce_report_shipping_table" data-ordering="false">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 gs-0">
                                                <th><div class="form-group form-check" style="width: 5px;">
                                               
                                                    <input type="checkbox" class="form-check-input" id="checktodo" name="checked[]" >
                                                    <input type="checkbox" class="form-check-input" id="checknada" name="checked[]" style="display:none;">
                                                    
                                                   </div></th>
                                                <th class="min-w-50px"># De guia</th>
                                                <th class="min-w-50px">Comercio</th>
                                                <th class="min-w-50px">Destinatario</th>
                                                <th class="min-w-150px">Dirección </th>
                                                <th class="min-w-50px text-center">Tipo de envío</th>
                                                <th class="min-w-100px text-center">Estado del envío</th>
                                                <th class="min-w-100px text-center">Fecha de entrega</th>
                                                <th class="min-w-100px text-center">Estado del pago</th>
                                                <th class="min-w-50px text-center">Precio del paquete</th>
                                                <th class="min-w-50px text-center">Precio de envío</th>
                                                <th class="min-w-50px text-center">Total </th>
                                                <th class="min-w-100px text-center">Nota</th>
                                                <th class="min-w-100px text-center">Acción</th>

                                                
                                             
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-black-400" style="font-size: 10px;">
                                            <span hidden id="total3"> {{ $total4 = 0 }}</span>

                                            
                                            @foreach ($pedidos as $pedido)                                               
                                           
                                            <tr >

                                                <td >
                                                    <div class="form-group form-check" style="width: 5px;">
                                                     <input type="checkbox" value="{{ $pedido->id }}" class="form-check-input" id="check3" name="checked[]" >
                                                     
                                                    </div>
                                                    </td>


                                                <td>
                                                <a href="/envios/detalle/{{ $pedido->guia }}" class="text-gray-900 text-hover-primary">
                                                    {{$pedido->guia}}
                                                    </a>
                                                </td>
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
                                                <td class="text-center">
                                                <button class="btn btn-primary edit " value="{{$pedido->id}}" id="kt_drawer_example_basic_button" >Ver</button>
                                                </td>

                                                <span hidden id="gu{{ $pedido->id }}"> {{ $pedido->guia }}</span>
                                                <span hidden id="co{{ $pedido->id }}"> {{ $pedido->comercio }}</span>
                                                <span hidden id="de{{ $pedido->id }}"> {{ $pedido->destinatario }}</span>
                                                <span hidden id="di{{ $pedido->id }}"> {{ $pedido->direccion }}</span>
                                                <span hidden id="ti{{ $pedido->id }}"> {{ $pedido->tipo }}</span>
                                                <span hidden id="fe{{ $pedido->id }}"> {{ $pedido->fecha_entrega }}</span>
                                                <span hidden id="es{{ $pedido->id }}"> {{ $pedido->estado }}</span>
                                                <span hidden id="pr{{ $pedido->id }}"> {{ $pedido->precio }}</span>
                                                <span hidden id="en{{ $pedido->id }}"> {{ $pedido->envio }}</span>
                                                <span hidden id="to{{ $pedido->id }}"> {{ $pedido->total }}</span>
                                                <span hidden id="cob{{ $pedido->id }}"> {{ $pedido->cobro }}</span>
                                                <span hidden id="no{{ $pedido->id }}"> {{ $pedido->nota }}</span>
                                                <span hidden id="est{{ $pedido->id }}"> {{ $pedido->pago }}</span>
                                                <span hidden id="re{{ $pedido->id }}"> {{ $pedido->repartidor }}</span>
                                                <span hidden id="not{{ $pedido->id }}"> {{ $pedido->notarepa }}</span>
                                                <span hidden id="ru{{ $pedido->id }}"> {{ $pedido->ruta }}</span>
                                                <span hidden id="us{{ $pedido->id }}"> {{ $pedido->usuario }}</span>
                                                <span hidden id="cr{{ $pedido->id }}"> {{ $pedido->created_at }}</span>
                                                <span hidden id="ag{{ $pedido->id }}"> {{ $pedido->agencia }}</span>

                                                <span hidden id="ca{{ $pedido->id }}"> {{ $pedido->caja }}</span>
                                                <span hidden id="ra{{ $pedido->id }}"> {{ $pedido->rack }}</span>
                                                <span hidden id="ni{{ $pedido->id }}"> {{ $pedido->nivel }}</span>
                                                <span hidden id="ta{{ $pedido->id }}"> {{ $pedido->tarima }}</span>

                                                
                                                
                                            </tr>
                                            <span hidden >  {{ $total4 = $total4 + $pedido->total}}</span>
                                            @endforeach

                                            <span hidden id="total5"> {{ $total4 }}</span>
                                        </tbody>
                                    </table>
                                
                                </div>
                                
                                <!--end::Table-->
                                <div class="row justify-content-end">


                                <ul class="pagination" style="margin-bottom: 15px;">
                                        <li style="margin-left:auto"></li> 
                                        <li class="page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item "><a href="" class="page-link">2</a></li>
                                        <li class="page-item next"><a href="" class="page-link">Next</a></li>
                                    </ul>


                                    <div class="col-auto align-self-end text-end">
                                        <button type="button" style="height: 42px; margin-top: 10px;" class="btn btn-dark btn-sm mb-3" id="pago" data-bs-toggle="modal" data-bs-target="#kt_modal_2 " disabled>Pagar</button>
                                       
                                        <a href="/pago/exportarticket/{{$pedidos[0]->ticketc}}" target="_blank"> 
                                        <button type="button" class="btn btn-light-primary" data-kt-menu-placement="bottom-end" onclick="redireccionarPagina()" >
                                            <i class="ki-duotone ki-exit-up fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>Exportar Reporte</button>


                                            </a>

                                    </div>


                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>




                                </div>







                                

        <!--begin::Ticket-->
<div
    id="kt_drawer_example_basic"

    class="bg-white"
    data-kt-drawer="true"
    data-kt-drawer-activate="true"
    data-kt-drawer-toggle="#kt_drawer_example_basic_button"
    data-kt-drawer-close="#kt_drawer_example_basic_close"
    data-kt-drawer-width="500px"
>
    




<div style="width:100%; margin: 10px;" >
    

<table style="font-size: 14px;">
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2">
               <strong> DATOS DEL PAQUETE </strong>
                <hr style="width: 500px;">
            </td>
        </tr>

        <tr>
            <td>Guia: </td>
            <td><label for="" id="guia"></label></td>
        </tr>
        <tr>
            <td>Comercio: </td>
            <td><label for="" id="come"></label></td>
        </tr>
        <tr>
            <td>Destinatario: </td>
            <td><label for="" id="dest"></label></td>
        </tr>
        <tr>
            <td>Direccion: </td>
            <td><label for="" id="dire"></label></td>
        </tr>
        <tr>
            <td>Tipo de envio: </td>
            <td><span class="badge badge-dark"><label for="" id="tipo"></label></span></td>
        </tr>
        <tr>
            <td>Fecha de entrega: </td>
            <td><label for="" id="fech"></label></td>
        </tr>
        <tr>
            <td>Estado: </td>
            <td><span class="badge badge-dark"><label for="" id="esta"></label></span></td>
        </tr>
        <tr>
            <td>Precio: </td>
            <td><label for="" id="prec">$</label></td>
        </tr>
        <tr>
            <td>Envio: </td>
            <td><label for="" id="envi">$</label></td>
        </tr>
        <tr>
            <td>Total: </td>
            <td><label for="" id="tota">$</label></td>
        </tr>
        <tr>
            <td>Cobro de envio: </td>
            <td><label for="" id="cobro">$</label></td>
        </tr>
        <tr>
            <td>Nota: </td>
            <td><label for="" id="nota">$</label></td>
        </tr>
       
        <tr>
            <td>Estado del pago: </td>
            <td><label for="" id="estad">$</label></td>
        </tr>

        <tr >
            <td colspan="2" >
            <p></p>
               <strong> DATOS DEL REPARTIDOR </strong>
                <hr style="width: 500px;">
            </td>
        </tr>
        <tr>
            <td>Repartidor: </td>
            <td><label for="" id="repa">$</label></td>
        </tr>
        <tr>
            <td>Nota del repartidor: </td>
            <td><label for="" id="notar">$</label></td>
        </tr>
        <tr>
            <td>Ruta: </td>
            <td><label for="" id="ruta">$</label></td>
        </tr>
        <tr >
            <td colspan="2" >
            <p></p>
               <strong> DATOS DE CREACION </strong>
                <hr style="width: 500px;">
            </td>
        </tr>
        <tr>
            <td>Usuario: </td>
            <td><label for="" id="usua">$</label></td>
        </tr>
        <tr>
            <td>Fecha de creacion: </td>
            <td><label for="" id="crea">$</label></td>
        </tr>
        <tr>
            <td>Agencia de registro: </td>
            <td><label for="" id="agen">$</label></td>
        </tr>
        <tr >
            <td colspan="2" >
            <p></p>
               <strong> UBICACION </strong>
                <hr style="width: 500px;">
            </td>
        </tr>
        <tr>
            <td>Caja: </td>
            <td><label for="" id="caja">$</label></td>
        </tr>
        <tr>
            <td>Rack: </td>
            <td><label for="" id="rack">$</label></td>
        </tr>
        <tr>
            <td>Nivel: </td>
            <td><label for="" id="nive">$</label></td>
        </tr>
        <tr>
            <td>Tarima: </td>
            <td><label for="" id="tari">$</label></td>
        </tr>
        <tr >
            <td colspan="2" >
            <p></p>
               <strong> FOTO </strong>
                <hr style="width: 500px;">
            </td>
        </tr>
    </tbody>
    
</table>




<hr>

<button type="button" class="btn btn-secondary text-center" data-kt-drawer-dismiss="true">Cerrar</button>


</div>
<!--end::Ticket-->


                                
        <!--end::Content wrapper-->
    </x-default-layout>





    <script>
       
        
       $(document).ready(function(){
           $(document).on('click', '.edit', function(){
              var cod=$(this).val();
              var iden=$('#gu'+cod).text();
              var com=$('#co'+cod).text();
              var des=$('#de'+cod).text();
              var dir=$('#di'+cod).text();
              var tip=$('#ti'+cod).text();
              var fec=$('#fe'+cod).text();
              var est=$('#es'+cod).text();
              var pre=$('#pr'+cod).text();
              var env=$('#en'+cod).text();
              var tot=$('#to'+cod).text();
              var cobr=$('#cob'+cod).text();
              var not=$('#no'+cod).text();
              var esta=$('#est'+cod).text();
              var rep=$('#re'+cod).text();
              var nott=$('#not'+cod).text();
              var rut=$('#ru'+cod).text();
              var usu=$('#us'+cod).text();
              var cre=$('#cr'+cod).text();
              var age=$('#ag'+cod).text();

              var caj=$('#ca'+cod).text();
              var rac=$('#ra'+cod).text();
              var niv=$('#ni'+cod).text();
              var tar=$('#ta'+cod).text();
                     
         //     alert(est);
               
           
               //$('#edit').modal('show');
              $('#guia').text(iden);
              $('#come').text(com);
              $('#dest').text(des);
              $('#dire').text(dir);
              $('#tipo').text(tip);
              $('#fech').text(fec);
              $('#esta').text(est);
              $('#prec').text('$'+pre);
              $('#envi').text('$'+env);
              $('#tota').text('$'+tot);
              $('#cobro').text(cobr);
              $('#nota').text(not);

              $('#estad').text(esta);
              $('#repa').text(rep);
              $('#notar').text(nott);
              $('#ruta').text(rut);
              $('#usua').text(usu);
              $('#crea').text(cre);
              $('#agen').text(age);
              $('#caja').text(caj);
              $('#rack').text(rac);
              $('#nive').text(niv);
              $('#tari').text(tar);
           
           });
       });
        
       
       
       
       
       
       
           </script>











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