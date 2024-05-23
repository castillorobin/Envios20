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

            const subtotal = parseFloat($(this).val());
            const subtotal2 = parseFloat(document.getElementById("persosub").value);
            const subtotal3 = parseFloat(document.getElementById("fijosub").value);
            const subtotal4 = parseFloat(document.getElementById("casisub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;

            $('#stotal').text("$" + total);

        });


        $("#persosub").change(function() {

            const subtotal = parseFloat($(this).val());
            const subtotal2 = parseFloat(document.getElementById("depasub").value);
            const subtotal3 = parseFloat(document.getElementById("fijosub").value);
            const subtotal4 = parseFloat(document.getElementById("casisub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;

            $('#stotal').text("$" + total);

        });


        $("#fijosub").change(function() {

            const subtotal = parseFloat($(this).val());
            const subtotal2 = parseFloat(document.getElementById("depasub").value);
            const subtotal3 = parseFloat(document.getElementById("persosub").value);
            const subtotal4 = parseFloat(document.getElementById("casisub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;

            $('#stotal').text("$" + total);

        });



        $("#casisub").change(function() {

            const subtotal = parseFloat($(this).val());
            const subtotal2 = parseFloat(document.getElementById("depasub").value);
            const subtotal3 = parseFloat(document.getElementById("persosub").value);
            const subtotal4 = parseFloat(document.getElementById("fijosub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;

            $('#stotal').text("$" + total);

        });


        $("#descuento").change(function() {

            const descu = parseFloat($(this).val());
            //var sutotal=$('#stotal').text();




            $('#sdescuento').text("-$" + descu);

            var checkbox = document.getElementById('chkiva');
            if (checkbox.checked != false) {
            const subtotal = parseFloat(document.getElementById('fijosub').value);

            const subtotal2 = parseFloat(document.getElementById("depasub").value);
            const subtotal3 = parseFloat(document.getElementById("persosub").value);
            const subtotal4 = parseFloat(document.getElementById("casisub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;
            const coniva = total * 0.13;
            
            const totalfin = (total + coniva) - descu;
            
            $('#total1').text("$" + totalfin);

           

        } else {
            const subtotal = parseFloat(document.getElementById('fijosub').value);

            const subtotal2 = parseFloat(document.getElementById("depasub").value);
            const subtotal3 = parseFloat(document.getElementById("persosub").value);
            const subtotal4 = parseFloat(document.getElementById("casisub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;
            //const coniva = total * 0.13;
            
            const totalfin = (total  - descu);

            
            
            $('#total1').text("$" + totalfin);
        }



           
        });

    });

    function aplicariva() {

        const descu = parseFloat(document.getElementById('descuento').value);

        var checkbox = document.getElementById('chkiva');

        if (checkbox.checked != false) {
            const subtotal = parseFloat(document.getElementById('fijosub').value);

            const subtotal2 = parseFloat(document.getElementById("depasub").value);
            const subtotal3 = parseFloat(document.getElementById("persosub").value);
            const subtotal4 = parseFloat(document.getElementById("casisub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;
            const coniva = total * 0.13;

            const totalfin = (total + coniva) - descu;

            $('#total1').text("$" + totalfin);
            $('#siva').text("+$" + coniva);

            

        } else {

            const subtotal = parseFloat(document.getElementById('fijosub').value);

            const subtotal2 = parseFloat(document.getElementById("depasub").value);
            const subtotal3 = parseFloat(document.getElementById("persosub").value);
            const subtotal4 = parseFloat(document.getElementById("casisub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;
            //const coniva = total * 0.13;
            
            const totalfin = (total  - descu);

            
            
            $('#total1').text("$" + totalfin);

            $('#siva').text("+$0.00");
        }

    };

        

</script>

<body id="kt_body" class="">
    <x-default-layout>
        <!--begin::Container-->
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start"> 

            <!--begin::Post-->
            <div class="content flex-row-fluid p-4" id="kt_content" style="background-color:white; ">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Cobro de envios </h1>
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
                        <li class="breadcrumb-item text-muted">Cobro</li>
                    </ul>
                </div>

                <div class="row m-1" style="background-color:white; ">
                    

                    <div class="col-4 m-2">
                        <select class="form-control form-control-lg " data-control="select2" name="comercio" id="comercio">
                            <option value=" ">Buscar comercio</option>
                            @foreach ($comercios as $comercio)
                            <option value="{{$comercio->comercio}}">{{$comercio->comercio}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-1 m-2">
                        <button type="button" class="btn btn-info" id="seleccionarBtn" onclick="comerciosel()"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>

                    <div class="col-1 m-2 ">
                        <button type="button" class="btn btn-info" id="seleccionarBtn"><i class="fa-solid fa-circle-plus"></i></button>
                    </div>


                </div>




                <div class="row m-2 " style="background-color:white; ">
                    <div class="col-7 m-2">
                        <ul class="nav row " style="background-color:white; ">
                            <li class="nav-item col-12 col-lg mb-lg-0 ">
                                <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-10 h-1250px h-lg-185px active" data-bs-toggle="tab" href="#kt_general_widget_1_1">

                                    <img src="assets/media/stock/food/paque.jpeg" class="w-50px" alt="" />

                                    Personalizado
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-10 h-1250px h-lg-185px " data-bs-toggle="tab" href="#kt_general_widget_1_2">

                                    <img src="assets/media/stock/food/paque.jpeg" class="w-50px" alt="" />
                                    <span class="fs-6 fw-bold">
                                        Departamental </span>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-10 h-1250px h-lg-185px" data-bs-toggle="tab" href="#kt_general_widget_1_3">

                                    <img src="assets/media/stock/food/paque.jpeg" class="w-50px" alt="" />
                                    <span class="fs-6 fw-bold">
                                        Punto fijo </span>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-10 h-1250px h-lg-185px " data-bs-toggle="tab" href="#kt_general_widget_1_4">

                                    <img src="assets/media/stock/food/paque.jpeg" class="w-50px" alt="" />
                                    <span class="fs-6 fw-bold">
                                        Casillero </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    
                <br>
                </div>
                <!--begin::Row-->
                <div class="row gy-0 gx-10 mt-8">
                    <!--begin::Col-->
                    <div class="col-xl-8 ">

                        <!--begin::General Widget 1-->
                        <div class="mb-5 mb-lg-10 ">
                            <!--begin::Tabs-->


                            <!--begin::Tab content-->
                            <div class="tab-content border shadow" style="height:480px;">
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
                                                            <input type="text" value="Personalizado" class="visually-hidden" name="tipo" id="tipo">
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
                                                <table class="table align-middle table-row-dashed fs-6 gy-3">
                                                    <thead> 
                                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                            <th># DE GUÍA</th>
                                                            <th>COMERCIO</th>
                                                            <th>TIPO DE ENVÍO </th>
                                                            <th>AGENCIA</th>
                                                            <th>FECHA DE RECEPCIÓN</th>
                                                            <th>BORRAR</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="fw-bold text-gray-600">
                                                        @foreach ($pedidos as $pedido)
                                                        @if ($pedido->tipo == "Personalizado")


                                                        <tr>



                                                            <td>{{$pedido->guia}}</td>
                                                            <td>{{$pedido->comercio}}</td>
                                                            <td ><span class="badge py-3 px-4 fs-7 badge-light-danger">{{$pedido->tipo}}</span></td>
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
                                                <table class="table align-middle table-row-dashed fs-6 gy-3">
                                                    <thead> 
                                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                            <th># DE GUÍA</th>
                                                            <th>COMERCIO</th>
                                                            <th>TIPO DE ENVÍO </th>
                                                            <th>AGENCIA</th>
                                                            <th>FECHA DE RECEPCIÓN</th>
                                                            <th>BORRAR</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="fw-bold text-gray-600">
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
                                <div class="tab-pane fade " id="kt_general_widget_1_3">

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
                                                            <input type="text" value="Punto fijo" class="visually-hidden" name="tipo" id="tipo">
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
                                                <table class="table align-middle table-row-dashed fs-6 gy-3">
                                                    <thead> 
                                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                            <th># DE GUÍA</th>
                                                            <th>COMERCIO</th>
                                                            <th>TIPO DE ENVÍO </th>
                                                            <th>AGENCIA</th>
                                                            <th>FECHA DE RECEPCIÓN</th>
                                                            <th>BORRAR</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="fw-bold text-gray-600">
                                                        @foreach ($pedidos as $pedido)
                                                        @if ($pedido->tipo == "Punto fijo")


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
<div class="tab-pane fade border" id="kt_general_widget_1_4">

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
                                                            <input type="text" value="Casillero" class="visually-hidden" name="tipo" id="tipo">
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
                                                <table class="table align-middle table-row-dashed fs-6 gy-3">
                                                    <thead> 
                                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                            <th># DE GUÍA</th>
                                                            <th>COMERCIO</th>
                                                            <th>TIPO DE ENVÍO </th>
                                                            <th>AGENCIA</th>
                                                            <th>FECHA DE RECEPCIÓN</th>
                                                            <th>BORRAR</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="fw-bold text-gray-600">
                                                        @foreach ($pedidos as $pedido)
                                                        @if ($pedido->tipo == "Casillero")


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


                            </div>


                            <!--end::Tab content-->
                        </div>









                        <div class="card mb-5 mb-xl-10 border shadow">
                            <!--begin::Header-->
                            <div class=" pt-1">

                                                       
                            <div class="bg-body "  id="kt_pos_form">
                                <!--begin::Header-->
                                <div class="card-header cursor-pointer pt-1 ">
                                    <div class="card-title m-0">                                    <h3 class="card-title fw-bold text-gray-800 fs-2qx">Ordenes</h3>
                                    </div>

                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <input type="text" value="0" id="ordenpre" hidden>
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
                                                <div class="card-body p-9">
                                                    <!--begin::Row-->
                                                    <div class="row mb-7">
                                                        <!--begin::Label-->
                                                       

                                                        
                                                            <span class="fw-semibold text-muted col-lg-4">Personalizado</span>
                                                        <!--end::Label-->
                                            
                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">                    
                                                            <span class="fw-bold fs-6 text-gray-800"><input type="text" class="border-0 fw-bold text-gray-800" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value=" {{ $cobrodepa }}" /></span>                
                                                        </div>
                                                        <div class="col-lg-4">                    
                                                            <span class="fw-bold fs-6 text-gray-800"><input type="text" name="depasub" id="depasub" class="border-0 px-0 fs-2 fw-bold text-primary " data-kt-pos-element="item-total" value="0" onfocus="calcuperso()" /></span>                
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>

                                                    <!--end::Row-->

                                                     <!--begin::Row-->
                                                     <div class="row mb-7">
                                                        <!--begin::Label-->
                                                       

                                                        
                                                            <span class="fw-semibold text-muted col-lg-4">Personalizado Departamental</span>
                                                        <!--end::Label-->
                                            
                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">                    
                                                            <span class="fw-bold fs-6 text-gray-800"><input type="text" class="border-0 fw-bold text-gray-800" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value=" {{ $cobroperdepa }}" /></span>                
                                                        </div>
                                                        <div class="col-lg-4">                    
                                                            <span class="fw-bold fs-6 text-gray-800"><input type="text" name="persosub" id="persosub" class="border-0 px-0 fs-2 fw-bold text-primary " data-kt-pos-element="item-total" value="0" onfocus="calcudepa()" /></span>                
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    
                                                    <!--end::Row-->

                                                     <!--begin::Row-->
                                                     <div class="row mb-7">
                                                        <!--begin::Label-->
                                                      
                                                            <span class="fw-semibold text-muted col-lg-4">Punto fijo</span>
                                                        <!--end::Label-->
                                            
                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">                    
                                                            <span class="fw-bold fs-6 text-gray-800"><input type="text" class="border-0 fw-bold text-gray-800" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value=" {{ $cobropfijo }}" /></span>                
                                                        </div>
                                                        <div class="col-lg-4">                    
                                                            <span class="fw-bold fs-6 text-gray-800"><input type="text" name="fijosub" id="fijosub" class="border-0 px-0 fs-2 fw-bold text-primary " data-kt-pos-element="item-total" value="0" onfocus="calcupf()" /></span>                
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    
                                                    <!--end::Row-->


                                                    
                                                     <!--begin::Row-->
                                                     <div class="row mb-7">
                                                        <!--begin::Label-->
                                                      
                                                            <span class="fw-semibold text-muted col-lg-4">Casillero</span>
                                                        <!--end::Label-->
                                            
                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">                    
                                                            <span class="fw-bold fs-6 text-gray-800"><input type="text" class="border-0 fw-bold text-gray-800" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value=" {{ $cobrocasi }}"  /></span>                
                                                        </div>
                                                        <div class="col-lg-4">                    
                                                            <span class="fw-bold fs-6 text-gray-800"><input type="text" name="casisub" id="casisub" class="border-0 px-0 fs-2 fw-bold text-primary " data-kt-pos-element="item-total" value="0" onfocus="calcucasi()" /></span>                
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    
                                                    <!--end::Row-->
                                                


                                               

                                               
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                    <!-- Campo para la cantidad de descuento -->
                                   
                                    <!--begin::Summary-->
                                  
                                    <!--end::Summary-->
                                    <!--begin::Payment Method-->
                                    
                                    <!--end::Payment Method-->
                                </div>
                                <!--end: Card Body-->



                            </div>

                                

                                

                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                           
                            <!--end::Body-->
                        </div>













                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-4 ">

<!--begin::Calculadora-->
                                <div class="col-xl-12 border shadow p-4">


                                <div class="col-12 mb-3 pt-4">


                                    <input type="text" class="form-control" id="calculo">

                                </div>
                                <div class="row">

                                <div class="col-3 px-2">

                                    <button type="button" class="btn btn-info w-100 " id="uno" onclick="calcu()" value="1">1</button>

                                </div>

                                <div class="col-3 px-2">

                                    <button type="button" class="btn btn-info w-100 px-2" id="dos" onclick="calcu2()" value="2">2</button>

                                </div>

                                <div class="col-3 px-2">

                                    <button type="button" class="btn btn-info w-100 px-2" id="tres" onclick="calcu3()" value="3">3</button>

                                </div>

                                <div class="col-3 px-2">

                                    <button type="button" class="btn btn-info w-100 px-2" id="ce" onclick="calcuc()" value="C">C</button>

                                </div>

                                </div>

                                <div class="row">
                                <div class="col-3 px-2 mt-2">

                                    <button type="button" class="btn btn-info w-100 " id="cuatro" onclick="calcu4()" value="4">4</button>

                                </div>

                                <div class="col-3 px-2 mt-2">

                                    <button type="button" class="btn btn-info w-100 px-2" id="cinco" onclick="calcu5()" value="5">5</button>

                                </div>

                                <div class="col-3 px-2 mt-2">

                                    <button type="button" class="btn btn-info w-100 px-2" id="seis" onclick="calcu6()" value="6">6</button>

                                </div>

                                <div class="col-3 px-2 mt-2">

                                    <button type="button" class="btn btn-info w-100 px-2" id="borrar" onclick="calcuborrar()" value="Borrar">Borrar</button>

                                </div>

                                </div>


                                <div class="row">
                                <div class="col-3 px-2 mt-2">

<button type="button" class="btn btn-info w-100 " id="siete" onclick="calcu7()" value="7">7</button>

</div>

<div class="col-3 px-2 mt-2">

<button type="button" class="btn btn-info w-100 px-2" id="ocho" onclick="calcu8()" value="8">8</button>

</div>

<div class="col-3 px-2 mt-2">

<button type="button" class="btn btn-info w-100 px-2" id="nueve" onclick="calcu9()" value="9">9</button>

</div>

<div class="col-3 px-2 mt-2">

<button type="button" class="btn btn-info px-2" style="height:100px; position:absolute; width:6%;" id="enter" onclick="calcuenter()" value="Enter">Enter</button>

</div>
                                </div>


                                <div class="row">
                                
                                <div class="col-3 px-2 mt-2">

                                    <button type="button" class="btn btn-info w-100 " id="cero" onclick="calcu0()" value="0">0</button>

                                </div>

                                <div class="col-3 px-2 mt-2">

                                    <button type="button" class="btn btn-info w-100 px-2" id="cerocero" onclick="calcu00()" value="00">00</button>

                                </div>

                                <div class="col-3 px-2 mt-2">

                                    <button type="button" class="btn btn-info w-100 px-2" id="punto" onclick="calcupunto()" value=".">.</button>

                                </div>
                                <div class="col-3 px-2 mt-2">

</div>

                                </div>

                                </div>






<!--End::Calculadora-->

















<br>


                        <!--begin::Mixed Widget 12-->
                        <div class="card mb-5 mb-lg-10">
                            <!--begin::Header-->


                            <div class="card card-flush bg-body" id="kt_pos_form">
                                <!--begin::Header-->
                                

                                <!--begin::Body-->
                                <div class="card-body pt-0">
                                    
                                   
                                    
                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold text-white">
                                            
                                            <span class="d-block fs-2qx lh-1">Total</span>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold text-white text-end">
                                            
                                            <span id="total1" name="total1" class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$0.00</span>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Summary-->
                                    <!--begin::Payment Method-->
                                    <div class="m-0 text-center">
                                        <!--begin::Actions-->
                                        <div class="row">
                                            <div class="col-8">
                                        <a href="/cobro/limpiar">
                                        <button class="btn btn-primary  py-3">Guardar e imprimir</button>
                                    </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="/cobro/limpiar">
                                            <button class="btn btn-primary py-3">Limpiar</button>
                                        </a>

                                        </div>
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
                <!--end::Row-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Container-->




    </x-default-layout>

    <script>
        function calcu() {



            var calculo = document.getElementById("calculo").value;
            var uno = document.getElementById("uno").value;
            document.getElementById("calculo").value = calculo + uno;
            //            alert(calculo);

            //document.getElementById("comerci").value = comer;
        }

        function calcu2() {
            var calculo = document.getElementById("calculo").value;
            var uno = document.getElementById("dos").value;
            document.getElementById("calculo").value = calculo + uno;
        }

        function calcu3() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("tres").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu4() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("cuatro").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu5() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("cinco").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu6() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("seis").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu7() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("siete").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu8() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("ocho").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu9() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("nueve").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu0() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("cero").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu00() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("cerocero").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcupunto() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("punto").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcuborrar() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("calculo").value = " ";
        }

        function calcuc() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("calculo").value = " ";
        }

        function calcuenter() {
            var orden = document.getElementById("ordenpre").value;
            var calc = document.getElementById("calculo").value;
            if (orden == "0") {

                document.getElementById("depasub").value = calc;


            }
            if (orden == "1") {
                document.getElementById("persosub").value = calc;
            }
            if (orden == "2") {
                document.getElementById("fijosub").value = calc;
            }
            if (orden == "3") {
                document.getElementById("casisub").value = calc;
            }
            desdeenter();
            calcuborrar();

        }
        function desdeenter() {
            
            const subtotal = parseFloat(document.getElementById("depasub").value);
            const subtotal2 = parseFloat(document.getElementById("persosub").value);
            const subtotal3 = parseFloat(document.getElementById("fijosub").value);
            const subtotal4 = parseFloat(document.getElementById("casisub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;

            $('#stotal').text("$" + total);
            $('#total1').text("$" + total);

            //alert('hola');




        }

        function calcuperso() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("ordenpre").value = 0;
        }

        function calcudepa() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("ordenpre").value = 1;
        }

        function calcupf() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("ordenpre").value = 2;
        }

        function calcucasi() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("ordenpre").value = 3;
        }
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