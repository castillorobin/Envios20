<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../" />
    <title>Melo Express - Cobros</title>
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
<!--end::Head-->
<!--begin::Body
<style>
.app-header{
    display: none;
}
</style>

-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>

 $(document).ready(function() {
  
   					$("#depasub").change(function() {
       												              
          const subtotal =parseFloat($(this).val());
          const subtotal2 = parseFloat(document.getElementById("persosub").value); 
          const subtotal3 = parseFloat(document.getElementById("fijosub").value); 
          const subtotal4 = parseFloat(document.getElementById("casisub").value); 

          const total = subtotal + subtotal2 + subtotal3 + subtotal4 ;

          $('#stotal').text("$" + total);

    				});


                    $("#persosub").change(function() {
       												              
                    const subtotal =parseFloat($(this).val());
                    const subtotal2 = parseFloat(document.getElementById("depasub").value); 
                    const subtotal3 = parseFloat(document.getElementById("fijosub").value); 
                    const subtotal4 = parseFloat(document.getElementById("casisub").value); 
                                                           
                    const total = subtotal + subtotal2 + subtotal3 + subtotal4 ;
                                                           
                    $('#stotal').text("$" + total);
                                                           
                    });


                    $("#fijosub").change(function() {
       												              
                    const subtotal =parseFloat($(this).val());
                    const subtotal2 = parseFloat(document.getElementById("depasub").value); 
                    const subtotal3 = parseFloat(document.getElementById("persosub").value); 
                    const subtotal4 = parseFloat(document.getElementById("casisub").value); 
                                                                                                            
                    const total = subtotal + subtotal2 + subtotal3 + subtotal4 ;
                                                                                                            
                    $('#stotal').text("$" + total);
                                                                                                            
                    });



                    $("#casisub").change(function() {
       												              
                    const subtotal =parseFloat($(this).val());
                    const subtotal2 = parseFloat(document.getElementById("depasub").value); 
                    const subtotal3 = parseFloat(document.getElementById("persosub").value); 
                    const subtotal4 = parseFloat(document.getElementById("fijosub").value); 
                                                                                                                                                             
                    const total = subtotal + subtotal2 + subtotal3 + subtotal4 ;
                                                                                                                                                             
                    $('#stotal').text("$" + total);
                                                                                                                                                             
                    });


                    $("#descuento").change(function() {
       												              
                    const descu =parseFloat($(this).val());
                    //var sutotal=$('#stotal').text();
                   
                                                                                                                                                                                                              
                   
                                                                                                                                                                                                              
                    $('#sdescuento').text("-$" + descu);
                                                                                                                                                                                                              
                    });
              
                                            });

                function aplicariva(){
                    
                    
                    var checkbox = document.getElementById('chkiva');
                    if(checkbox.checked != true){
                        const subtotal = parseFloat(document.getElementById('fijosub').value);
                        
                    const subtotal2 = parseFloat(document.getElementById("depasub").value); 
                    const subtotal3 = parseFloat(document.getElementById("persosub").value); 
                    const subtotal4 = parseFloat(document.getElementById("casisub").value); 
                                                                                                            
                    const total = subtotal + subtotal2 + subtotal3 + subtotal4 ;
                    const coniva = total * 0.13 ;

                        $('#siva').text("+$" + coniva);

                    }else{
                        $('#siva').text("+$0.00"); 
                    }

                        };

</script>

<body  id="kt_body"  class="" >
<x-default-layout>

    
        <br>

        	<!--begin::Container-->
				<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start">
					<!--begin::Post-->
					<div class="content flex-row-fluid" id="kt_content">

                    <div class="row m-1" style="background-color:white; ">
                    <div class="col-4 m-2" >
                    <select class="form-control form-control-lg " data-control="select2" name="comercio" id="comercio">
                                    <option value=" ">Buscar comercio</option>
                                    @foreach ($comercios as $comercio)
                                    <option value="{{$comercio->comercio}}">{{$comercio->comercio}}</option>
                                    @endforeach
                                </select>
                    </div>
                    <div class="col-2 m-2">
                    <button type="button" class="btn btn-primary" id="seleccionarBtn" onclick="comerciosel()" >Seleccionar</button>
                    </div>

                    <div class="col-4 m-2 " >
                    <button type="button" class="btn btn-success" id="seleccionarBtn" style="float:right; ">Agregar Comercio</button>
                    </div>


                    </div>
                    
                    

                    <br>
						<!--begin::Row-->
<div class="row gy-0 gx-10 ">
    <!--begin::Col-->
    <div class="col-xl-8 ">
        
<!--begin::General Widget 1-->
<div class="mb-5 mb-lg-10 ">
    <!--begin::Tabs-->
    <ul class="nav row mb-lg-5 m-1 py-3" style="background-color:white; ">
                    <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active" 
                    data-bs-toggle="tab" href="#kt_general_widget_1_1">

                    <img src="assets/media/stock/food/paque.jpeg" class="w-50px" alt="" />
                    <span class="fs-6 fw-bold">
                        Envio <br/>Personalizado                    </span>
                </a>
            </li>
                    <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px " 
                    data-bs-toggle="tab" href="#kt_general_widget_1_2">

                    <img src="assets/media/stock/food/paque.jpeg" class="w-50px" alt="" />
                    <span class="fs-6 fw-bold">
                        Envio <br/>Departamental                   </span>
                </a>
            </li>
                    <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px" 
                    data-bs-toggle="tab" href="#kt_general_widget_1_3">

                    <img src="assets/media/stock/food/paque.jpeg" class="w-50px" alt="" />
                    <span class="fs-6 fw-bold">
                        Envio <br/>Punto fijo                  </span>
                </a>
            </li>
                    <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px " 
                    data-bs-toggle="tab" href="#kt_general_widget_1_4">

                    <img src="assets/media/stock/food/paque.jpeg" class="w-50px" alt="" />
                    <span class="fs-6 fw-bold">
                        Envio <br/>Casillero                  </span>
                </a>
            </li>
                 
            </ul>

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

                                                        <form action="/cobro/agregar/" class="row g-2" method="get">

                                                            <div class="col-auto">
                                                                <label for="guia" class="visually-hidden">Guía</label>
                                                                <input type="text" class="form-control " id="guia" name="guia" placeholder="Ingrese guía">
                                                                <input type="text" value="Departamental" class="visually-hidden" name="tipo" id="tipo">
                                                                <input type="text" class="visually-hidden" name="comerci" id="comerci" value="{{ $comer }}">
                                                            </div>
                                                            <div class="col-auto">
                                                                <button type="submit" class="btn btn-primary mb-3">Agregar</button>
                                                                <span style="font-size:18px; color: red;"> {{ $nota }} &nbsp; </span>
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
                                                                <th>TIPO DE ENVÍO </th>
                                                                <th>AGENCIA</th>
                                                                <th>FECHA DE RECEPCIÓN</th>
                                                                <th>BORRAR</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($pedidos as $pedido)
                                                            @if ($pedido->tipo == "Departamental")
                                                                
                                                           
                                                            <tr>



                                                                <td>{{$pedido->guia}}</td>
                                                                <td>{{$pedido->comercio}}</td>
                                                                <td><span class="badge badge-light-success">{{$pedido->tipo}}</span></td>
                                                                <th>Santa Ana</th>
                                                                <td>{{$pedido->created_at->format('d/m/Y')}}</td>
                                                                <td><button type="button" class="btn btn-danger p-2"><i class="fas fa-trash-alt"></i></button></td>
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>




<!--end::Tables Widget 2-->
            </div>
            <div class="tab-pane fade " id="kt_general_widget_1_2">
                
                <!--begin::Tables Widget 2-->
                <div class="card ">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Departamental</span>
                
                            
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                           
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_663da81c2980d">
                    <!--begin::Header-->
                   
                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                       
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Tables Widget 2-->
                            </div>
                            <div class="tab-pane fade " id="kt_general_widget_1_3">
                
                <!--begin::Tables Widget 2-->
                <div class="card ">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Punto Fijo</span>
                
                            
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                           
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_663da81c2980d">
                    <!--begin::Header-->
                   
                    <!--end::Form-->
                </div> 
                <!--end::Menu 1-->            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                       
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Tables Widget 2-->
                            </div>
                            <div class="tab-pane fade " id="kt_general_widget_1_4">
                
                <!--begin::Tables Widget 2-->
                <div class="card ">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Casillero</span>
                
                            
                        </h3>
                    <div class="card-toolbar">
                            <!--begin::Menu-->
                           
                <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_663da81c2980d">
                    <!--begin::Header-->
                   
                    <!--end::Form-->
                        </div>
                <!--end::Menu 1-->            <!--end::Menu-->
                    </div>
                    </div>
                    <!--end::Header-->
                
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                       
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
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
                                <h3 class="card-title fw-bold text-gray-800 fs-2qx">Ordenes</h3>
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="/cobro/limpiar" class="btn btn-light-primary fs-4 fw-bold py-4">Limpiar cuenta</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            
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
                                            <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                                <td class="pe-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/media/stock/food/paque.jpeg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Personalizado</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <!--begin::Dialer-->
                                                    <div class="position-relative d-flex align-items-center">

                                                        <!--begin::Input control-->
                                                        <input type="text" class="form-control border-0 px-0 fs-3 fw-bold text-gray-800 w-100px text-center" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value=" {{ $cobrodepa }}" />
                                                        <!--end::Input control-->

                                                    </div>
                                                    <!--end::Dialer-->
                                                </td>
                                                <td class="text-end">
                                                    <input type="text" name="depasub" id="depasub" class="form-control border-0 px-0 fs-2 fw-bold text-primary " data-kt-pos-element="item-total" value="0" />
                                                </td>
                                            </tr>

                                            <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                                <td class="pe-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/media/stock/food/paque.jpeg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Personalizado Departamental</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <!--begin::Dialer-->
                                                    <div class="position-relative d-flex align-items-center">

                                                        <!--begin::Input control-->
                                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-100px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value=" {{ $cobroperdepa }}" />
                                                        <!--end::Input control-->

                                                    </div>
                                                    <!--end::Dialer-->
                                                </td>
                                                <td class="text-end">
                                                    <input type="text" name="persosub" id="persosub" class="form-control border-0 px-0 fs-2 fw-bold text-primary " data-kt-pos-element="item-total" value="0" />
                                                </td>
                                            </tr>

                                            <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                                <td class="pe-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/media/stock/food/paque.jpeg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Punto fijo</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <!--begin::Dialer-->
                                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="0" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                        <!--begin::Input control-->
                                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-100px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value=" {{ $cobropfijo }}" />
                                                        <!--end::Input control-->

                                                    </div>
                                                    <!--end::Dialer-->
                                                </td>
                                                <td class="text-end">
                                                    <input type="text" name="fijosub" id="fijosub" class="form-control border-0 px-0 fs-2 fw-bold text-primary" data-kt-pos-element="item-total" value="0" />
                                                </td>
                                            </tr>

                                            <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                                <td class="pe-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/media/stock/food/paque.jpeg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1 ">Casillero</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <!--begin::Dialer-->
                                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="0" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                        <!--begin::Input control-->
                                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-100px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value=" {{ $cobrocasi }}" />
                                                        <!--end::Input control-->

                                                    </div>
                                                    <!--end::Dialer-->
                                                </td>
                                                <td class="text-end">
                                                    <input type="text" name="casisub" id="casisub" class="form-control border-0 px-0 fs-2 fw-bold text-primary " data-kt-pos-element="item-total" value="0" />
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                                <!-- Campo para la cantidad de descuento -->
                                <div class="d-flex flex-stack  rounded-3 p-6 mb-4">
                                    <td class="pe-0">
                                        <div class="form-floating col-lg-5 mb-4">
                                            <input type="text" class="form-control form-control-solid" name="descuento" id="descuento" placeholder="Descuento" value="0"/>
                                            <label for="descuento" style="padding-left: 25px;">Descuento</label>
                                            <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                        </div>
                                    </td>
                                    <!-- Campo para el IVA -->
                                    <td class="pe-2">
                                        <!--begin::Option-->
                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                            <!--begin::Radio-->
                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                <input class="form-check-input" type="checkbox" value="" name="chkiva" id="chkiva"  />
                                            </span>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <span class="ms-5">
                                                <span class="fs-5 fw-bold text-gray-800 d-block"  Onclick="aplicariva();">Aplicar iva</span>
                                            </span>
                                            <!--end::Info-->
                                        </label>
                                        <!--end::Option-->
                                    </td>
                                </div>
                                <!--begin::Summary-->
                                <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bold text-white">
                                        <span class="d-block lh-1 mb-2">Subtotal</span>
                                        <span class="d-block mb-2">Descuento</span>
                                        <span class="d-block mb-2">IVA</span>
                                        <span class="d-block fs-2qx lh-1">Total</span>
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bold text-white text-end">
                                        <span id="stotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">$0.00</span>
                                        <span id="sdescuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">-$0.00</span>
                                        <span id="siva" name="siva" class="d-block mb-2" data-kt-pos-element="IVA">+$0.00</span>
                                        <span id="total1" name="total1" class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$0.00</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Summary-->
                                <!--begin::Payment Method-->
                                <div class="m-0">
                                    <!--begin::Actions-->
                                    <button class="btn btn-primary fs-1 w-100 py-4">imprimir comprobante</button>
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
<!--end::Row-->					</div>
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


    <script>
       
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Evento para abrir el modal de agregar comercio cuando se hace clic en el enlace
            $('#openAgregarComerciosModal').on('click', function() {
                $('#agregarComercioModal').modal('show');
            });

            // Evento para guardar la información del comercio cuando se hace clic en el botón Guardar
            $('#guardarComercioBtn').on('click', function() {
                // Obtener los valores de los campos del formulario
                var nombreComercio = $('#nombre_comercio').val();
                var telefono = $('#telefono').val();
                var fechaAlta = $('#fecha_alta').val();
                var tipoComercio = $('#tipo_comercio').val();
                var estadoComercio = $('#estado_comercio').val();
                var agenciaRegistro = $('#agencia_registro').val();
                var correoElectronico = $('#correo_electronico').val();

                // Aquí puedes hacer validaciones adicionales si es necesario

                // Crear un objeto con la información del comercio
                var comercio = {
                    nombre: nombreComercio,
                    telefono: telefono,
                    fecha_alta: fechaAlta,
                    tipo: tipoComercio,
                    estado: estadoComercio,
                    agencia_registro: agenciaRegistro,
                    correo: correoElectronico
                };

               
                // Simplemente mostraremos los datos en la consola como ejemplo
                console.log('Información del comercio:', comercio);

                // Cerrar el modal después de guardar
                $('#agregarComercioModal').modal('hide');
            });
        });
    </script>

    <script>
        function comerciosel() {
            const comer = document.getElementById("comercio").value;
            document.getElementById("comerci").value = comer;

        }
    </script>


    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>