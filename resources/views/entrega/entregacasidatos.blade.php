<html lang="es">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="es_SV" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only) 
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
   -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />

    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />


    <!--end::Global Stylesheets Bundle-->
    <style>
        .table th,
        table td {
            padding: 7px;
            /* Ajusta el valor según sea necesario */
        }
    </style>

</head>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
    function redireccionarPagina(){
    window.setTimeout( abrirURL, 2000 ); // 3 segundos
};
    
function abrirURL(){
    
   //window.location = "http://127.0.0.1:8000/entregas";
   window.location = "https://meloexpress.site/entregas";
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

                function formapago() {

                    const meto = document.getElementById("metodo").value; 
                    if(meto == "Transferencia al comercio"){
                        $('#tota').val(0);
                        $('#total1').text(0);
                        $('#sutota').val(0);
                        $('#stotal').text(0);
                    }
                   // alert(meto);
                  
}


               
    </script>
    


<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<input type="text" value="{{date_default_timezone_set('America/El_Salvador') }}" hidden>
    <x-default-layout>
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main" >
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kkt_content" class="content flex-column-fluid">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center ">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Entrega de paquetes</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="/dashboard" class="text-muted text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Facturacion</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Entrega de paquetes</li>
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
                                    <!--begin::Search-->
                                    <form action="/entrega/agregarparte" class="row g-2" method="GET">
                                                   
                                        <div class="col-auto ">
                                            <label for="guia" class="visually-hidden">Guia</label>
                                            <input type="text" class="form-control " id="guia" name="guia" placeholder="Buscar guia" autofocus>
                                           <input type="text" class="visually-hidden" name="entrega" id="entrega" value="{{$actual}}">
                                            <input type="text" class="visually-hidden" name="comerci" id="comerci" value="Buscar guia">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                                            <span style="font-size:18px; color: red;"> &nbsp; {{ $nota }} &nbsp; </span>
                                             @if($errors->any())
                                                            <span style="font-size:18px; color: red;">{{$errors->first()}} </span>
                                                            @endif
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
                                 
                                      <form action="/entrega/filtrarcasi" method="GET"  >
                                        @method('GET') 
                                      
                                
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <input type="text" value="{{$pedidos[0]->entrega2 ?? ''}} " class="visually-hidden" name="ticketc" id="ticketc">
                                    
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
                                   
                                </form>                                    </div>
                                    <!--end::Filter-->

                                </div>
                                <!--end::Card toolbar-->

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 610px;  ">


                                <!--begin::Table-->
                                <span hidden id="total3"> {{ $total4 = 0 }}</span>
                                            @foreach ($pedidos as $pedido) 

                                                <div style="border: 1px solid;border-color: #edece8;border-radius: 10px; margin-top: 5px; padding:15px; width: 100%;">
                                                <div class="table-responsive"> 
                                                <table>
                                                        <tr><td style="width:200px; font-weight: bolder;">
                                               NUMERO DE GUIA:  
                                                </td>
                                                <td style="width:300px;"> 
                                                    <a href="/envios/detalle/{{$pedido->guia}}" class="text-gray-900 text-hover-primary">{{$pedido->guia}} </a></td>
                                                <td style="width:150px; font-weight: bolder;">UBICACION:</td>
                                                <TD style="width:100px;"><span class="badge text-bg-dark" style="padding:10px;">{{$pedido->agencia}} </span></TD>
                                                <td style="width:500px; " class="text-center" rowspan="5">
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-200px h-200px" style="background-image: url(/fotos/{{$pedido->foto1}})"></div>
                                    </div>
                                            </td>  
                                            
                                            <td class="text-center" rowspan="5">
                                                <!--    
                                                <button type="button"  value="{{$pedido->id}}" class="btn btn-primary btn-sm edit" data-bs-toggle="modal" data-bs-target="#kt_modal_1">Entregar</button>
-->                                                 <!-- 
                                                 <input type="checkbox" name="selec[]" id="selec[]" value="{{$pedido->id}}">
-->     
                                                 </td>
                                            </tr>
                                                 <tr><td style="width:200px; font-weight: bolder;">
                                               COMERCIO:  
                                                </td>
                                                <td style="width:300px;"> {{$pedido->comercio}}</td>
                                                <td style="width:200px; font-weight: bolder;">TIPO DE UBICACION:</td>
                                                <TD style="width:100px;">{{$pedido->ubicacion}} </TD>
                                                  
                                            </tr>
                                                 <tr><td style="width:200px; font-weight: bolder;">
                                               DESTINATARIO:  
                                                </td>
                                                <td style="width:300px;"> {{$pedido->destinatario}}</td>
                                                <td style="width:150px; font-weight: bolder;">RACK:</td>
                                                <TD style="width:100px;">{{$pedido->rack}} </TD>
                                                 
                                            </tr>
                                                 <tr><td style="width:200px; font-weight: bolder;">
                                               DIRECCION:  
                                                </td>
                                                <td style="width:300px;"> {{$pedido->direccion}}</td>
                                                <td style="width:150px; font-weight: bolder;">NIVEL:</td>
                                                <TD style="width:100px;">{{$pedido->nivel}} </TD>
                                                
                                            </tr>
                                                 <tr><td style="width:200px; font-weight: bolder;">
                                               TIPO:  
                                                </td>
                                                <td style="width:300px;"> {{$pedido->tipo}}</td>
                                                <td style="width:150px; font-weight: bolder;">CAJA:</td>
                                                <TD style="width:100px;">{{$pedido->caja}} </TD>
                                                 
                                            </tr>
                                                 <tr><td style="width:200px; font-weight: bolder;">
                                               ESTADO:  
                                                </td>
                                                <td style="width:300px; font-size: 15px;"> 
                                                    @if( $pedido->estado == 'No entregado')
                                                                <span class="badge badge-danger" style="font-size: 15px;">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'Creado')
                                                                <span class="badge badge-warning" style="font-size: 15px;">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'Entregado')
                                                                <span class="badge badge-success" style="font-size: 15px;">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'En ruta')
                                                                <span class="badge badge-info" style="font-size: 15px;">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'Reprogramado')
                                                                <span class="badge badge-dark" style="font-size: 15px;">{{ $pedido->estado }}</span>
                                                                @elseif( $pedido->estado == 'Devuelto al comercio')
                                                                <span class="badge badge-primary" style="font-size: 15px;">{{ $pedido->estado }}</span>
                                                                @else
                                                                <span class="badge badge-light" style="font-size: 15px;">{{ $pedido->estado }}</span>
                                                                @endif
                                                </td>
                                                <td style="width:150px; font-weight: bolder;">TARIMA:</td>
                                                <TD style="width:100px;">{{$pedido->tarima}} </TD>
                                                
                                            </tr>
                                            
                                                </table>
                                                </div>
                                                </div>

<span hidden id="total2"> {{ $total4 = $total4 + $pedido->total }}</span>


                                           
                                            @endforeach
                                
<span hidden id="total5"> {{ $total4 }}</span>
                                <div class="row mt-7">
                                    <div class="col-12 mb-3" >
                                        <a href="/entrega/cancelar/{{$actual}}">
                                        <button type="button" class="btn btn-secondary mb-3" style="float: right; margin-left:10px; ">Cancelar</button>
                                    </a>
                                   
                                     
                                        <button type="button" class="btn btn-primary edit mb-3" style="float: right; margin-left:10px; " data-bs-toggle="modal" data-bs-target="#exampleModal">Entregar</button>
                                    
                                    </div>

                                    
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Table-->
                            
                            
                            

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
                                        <select class="form-select form-select-solid" name="metodo" id="metodo" onchange="formapago()" required>
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
                                        <input type="text" class="form-control form-control-solid" name="fecha_entrega" id="fecha_entrega" value="{{ \Carbon\Carbon::now()->format('d/m/Y') }}" readonly  />
                                        <label for="fecha_entrega">Fecha de entrega</label>
                                        <div id="fechaEntregaValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione una fecha de entrega.
                                        </div>
                                    </div> 
                                    <div class="form-floating col-lg-12 mb-4">
                                        
                                        
                                            <select name="agencia" id="agencia" class="form-select form-select-solid" data-placeholder="Seleccionar Agencia" >
                                                <option value="San_Salvador">San Salvador</option>
                                                <option value="San_Miguel">San Miguel</option>
                                                <option value="Santa_ana">Santa Ana</option>
                                                <option value="Centro de distribucion">Centro de distribucion</option>
                                            </select>
                                            <label class="col-lg-3 col-form-label fw-semibold fs-6">Agencia de registro</label>
                                    </div>
                                    <!-- Campo para la cantidad de descuento -->
                                    <div class="form-floating col-lg-12 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="descuento" id="descuento" value="0" onClick="this.select()" />
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
                            <input type="text" class="form-control form-control-solid" style="" name="entrega3" id="entrega3"value="0" onClick="this.select()" />
                            <label for="entrega" style="padding-left: 25px;">Efectivo recibido</label>
                            
                        </div>
                        <div class="form-floating col-lg-8 mb-4" style="float: right;">
                            <input type="text" class="form-control form-control-solid " style="" name="cambio" id="cambio" value="0"  />
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
       
        
    $(document).ready(function(){
        $(document).on('click', '.edit', function(){
           var cod=$(this).val();
          // var iden=$('#id'+cod).text();
         
            
    //alert("HOla");
            
        
            //$('#edit').modal('show');
         //  $('#codigo').text(cod);

           document.getElementById("ticket").value = cod;
      /*
          
           var ide = '/cobro/ticketlistado/'+cod ;
		   document.getElementById("impri").href = ide;
    
            */
    
            //$('#impri a').prop("href", ide);
            //$('.paginacion a').prop('href','http://nuevaUrl.com');
    
           // document.getElementById("impri").href = ide;
        });
    });
     
    
    
    
    
    
    
        </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

</body>
<!--end::Body-->

</html>