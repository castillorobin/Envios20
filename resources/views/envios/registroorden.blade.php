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
/*
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('.mi-selector').select2();
           
            $('#comercio').on('select2:select', function (e) { 
                
              alert("Hola mundo");
            });
    
        });
       
       
    });
    */
    
    
    </script>

<script>
    function valor() {

       // alert("hola");
       
        nombre =  document.getElementById("comercio").value;
        nom=document.getElementById("dir" + nombre).value;
        document.getElementById("direccion").value = nom;

        corr=document.getElementById("cor" + nombre).value;
        document.getElementById("correo").value = corr;

        tele=document.getElementById("tel" + nombre).value;
        document.getElementById("telefono").value = tele;
        
       
    }
    
    </script>

<body id="kt_body" class="" style="background-color:white; ">
    <x-default-layout>
       




        

<!--end::Footer-->    </div>
<!--end::Sidebar-->                
                            
            
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                                            
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " 
     
         >

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
            
    

<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
        Crear
            </h1>
    <!--end::Title-->

            
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    <a href="/metronic8/demo1/index.html" class="text-muted text-hover-primary">
                                Inicio                            </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                                        
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    Cobros                                           </li>
                                <!--end::Item-->
                                        
                    </ul>
        <!--end::Breadcrumb-->
    </div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Filter menu-->
       
        <!--end::Filter menu-->
    
    
    <!--begin::Secondary button-->
        <!--end::Secondary button-->
    
    <!--begin::Primary button-->
            <a href="#" class="btn btn-sm fw-bold btn-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
            Crear     </a>
        <!--end::Primary button-->
</div>
<!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->                                        
                    
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >
    
           
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Layout-->
<div class="d-flex flex-column flex-lg-row">
    <!--begin::Content-->
    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
        <!--begin::Card--> 
<div class="card">     
    <!--begin::Card body-->
    <div class="card-body p-12">
        <!--begin::Form-->
        <form action="" action="" id="kt_invoice_form">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-start flex-xxl-row">
                <!--begin::Input group-->
                <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Specify invoice date">
                    <!--begin::Date-->
                    <div class="fs-6 fw-bold text-gray-700 text-nowrap">Fecha:</div>  
                    <!--end::Date-->                    

                    <!--begin::Input-->
                    <div class="position-relative d-flex align-items-center w-150px">
                        <!--begin::Datepicker-->
                        <input class="form-control form-control-transparent fw-bold pe-5" value="{{ date("d-m-Y") }}" name="invoice_date"/>
                        <!--end::Datepicker-->
                        
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-down fs-4 position-absolute ms-4 end-0"></i>                        <!--end::Icon-->
                    </div>
                    <!--end::Input-->                
                </div>                
                <!--end::Input group--> 

                <!--begin::Input group-->
                <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                    
                </div>                
                <!--end::Input group--> 

                <!--begin::Input group-->
                <div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Specify invoice due date">
                    <!--begin::Date-->
                    <span class="fs-2x fw-bold text-gray-800">Factura #</span> 
                    <input type="text" class="form-control form-control-flush fw-bold text-muted fs-3 w-125px" value="2024001" placehoder="..."/>
                    <!--end::Input-->                
                </div>                
                <!--end::Input group--> 
            </div>                
            <!--end::Top-->       

            <!--begin::Separator-->
            <div class="separator separator-dashed my-10"></div>
            <!--end::Separator-->         

            <!--begin::Wrapper-->
            <div class="mb-0">
                <!--begin::Row-->
                <div class="row gx-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Factura de</label>

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <select class="form-select form-select-solid mi-selector" data-control="select2" name="comercio" id="comercio" onchange="valor()">
                                <option value=" ">Buscar comercio</option>
                                @foreach ($comercios as $comercio)
                                <option value="{{$comercio->comercio}}">{{$comercio->comercio}}</option>
                                @endforeach
                            </select>
                        </div>

                        @foreach ($comercios as $comercio)
                        <input hidden id="dir{{$comercio->comercio}}" value="{{ $comercio->direccion }} ">
                        <input hidden id="cor{{$comercio->comercio}}" value="{{ $comercio->correo }} ">
                        <input hidden id="tel{{$comercio->comercio}}" value="{{ $comercio->telefono }} ">
                            
                                @endforeach

                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <input type="text" class="form-control form-control-solid" placeholder="Correo" name="correo" id="correo" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                           
                        </div>
                        <!--end::Input group-->
                    </div>                
                    <!--end::Col--> 

                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <input type="text" class="form-control form-control-solid" placeholder="Direccion" name="direccion" id="direccion" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <input type="text" class="form-control form-control-solid" placeholder="Telefono" name="telefono" id="telefono" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                           
                        </div>
                        <!--end::Input group-->
                    </div>                
                    <!--end::Col--> 
                </div>                
                <!--end::Row--> 

                <!--begin::Table wrapper-->
                <div class="table-responsive mb-10">
                     <!--begin::Table-->
                    <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700" data-kt-element="items">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                                <th class="min-w-300px w-475px">Item</th>
                                <th class="min-w-100px w-100px">QTY</th>
                                <th class="min-w-150px w-150px">Price</th>
                                <th class="min-w-100px w-150px text-end">Total</th>
                                <th class="min-w-75px w-75px text-end">Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody>
                            <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                <td class="pe-7">                                            
                                    <input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name"/>

                                    <input type="text" class="form-control form-control-solid" name="description[]" placeholder="Description"/>     
                                </td>

                                <td class="ps-0">                                            
                                    <input type="text" class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" value="1" data-kt-element="quantity"/>
                                </td>

                                <td>   
                                    <input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" value="0.00" data-kt-element="price"/>
                                </td>
                                
                                <td class="pt-8 text-end text-nowrap">
                                    $<span data-kt-element="total">0.00</span>
                                </td>

                                <td class="pt-5 text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
                                        <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                                    </button>                             
                                </td>
                            </tr>          
                        </tbody>
                        <!--end::Table body-->

                        <!--begin::Table foot-->
                        <tfoot>
                            <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                <th class="text-primary">
                                    <button class="btn btn-link py-1" data-kt-element="add-item">Add item</button>
                                </th>  

                                <th colspan="2" class="border-bottom border-bottom-dashed ps-0">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="fs-5">Subtotal</div> 

                                        <button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Coming soon">Add tax</button>

                                        <button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Coming soon">Add discount</button>
                                    </div>
                                </th> 

                                <th colspan="2" class="border-bottom border-bottom-dashed text-end">
                                    $<span data-kt-element="sub-total">0.00</span>
                                </th> 
                            </tr>    
                            
                            <tr class="align-top fw-bold text-gray-700">
                                <th></th>
                                
                                <th colspan="2" class="fs-4 ps-0">Total</th> 

                                <th colspan="2" class="text-end fs-4 text-nowrap">
                                    $<span data-kt-element="grand-total">0.00</span>
                                </th> 
                            </tr>          
                        </tfoot>
                        <!--end::Table foot-->
                    </table>
                </div>  
                <!--end::Table-->

                <!--begin::Item template-->
                <table class="table d-none" data-kt-element="item-template">
                    <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                        <td class="pe-7">                                            
                            <input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name"/>

                            <input type="text" class="form-control form-control-solid" name="description[]" placeholder="Description"/>     
                        </td>

                        <td class="ps-0">                                            
                            <input type="text" class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" data-kt-element="quantity"/>
                        </td>

                        <td>   
                            <input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" data-kt-element="price"/>
                        </td>
                        
                        <td class="pt-8 text-end">
                            $<span data-kt-element="total">0.00</span>
                        </td>

                        <td class="pt-5 text-end">
                            <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
                                <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                            </button>                             
                        </td>
                    </tr>
                </table>

                <table class="table d-none" data-kt-element="empty-template">
                    <tr data-kt-element="empty">
                        <th colspan="5" class="text-muted text-center py-10">
                            No items
                        </th>
                    </tr>
                </table>
                <!--end::Item template-->

                <!--begin::Notes-->            
                <div class="mb-0">
                    <label class="form-label fs-6 fw-bold text-gray-700">Notes</label>

                    <textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Thanks for your business"></textarea>
                </div>                        
                <!--end::Notes--> 
            </div>   
            <!--end::Wrapper-->          
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card body-->
</div>     
<!--end::Card-->         
    </div>  
    <!--end::Content-->

    <!--begin::Sidebar-->
    <div class="flex-lg-auto min-w-lg-300px">
        <!--begin::Card-->
<div class="card"
    data-kt-sticky="true"
    data-kt-sticky-name="invoice"
    data-kt-sticky-offset="{default: false, lg: '200px'}"
    data-kt-sticky-width="{lg: '250px', lg: '300px'}"
    data-kt-sticky-left="auto"
    data-kt-sticky-top="150px"
    data-kt-sticky-animation="false"
    data-kt-sticky-zindex="95">

    <!--begin::Card body-->
    <div class="card-body p-10">  
        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-bold fs-6 text-gray-700">Currency</label>
            <!--end::Label-->

            <!--begin::Select-->           
            <select name="currnecy" aria-label="Select a Timezone" data-control="select2"  class="form-select form-select-solid">
                <option value=""></option>

                                    <option data-kt-flag="flags/united-states.svg" value="USD"><b>USD</b>&nbsp;-&nbsp;USA dollar</option>
                                    <option data-kt-flag="flags/united-kingdom.svg" value="GBP"><b>GBP</b>&nbsp;-&nbsp;British pound</option>
                                    <option data-kt-flag="flags/australia.svg" value="AUD"><b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
                                    <option data-kt-flag="flags/japan.svg" value="JPY"><b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
                                    <option data-kt-flag="flags/sweden.svg" value="SEK"><b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
                                    <option data-kt-flag="flags/canada.svg" value="CAD"><b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
                                    <option data-kt-flag="flags/switzerland.svg" value="CHF"><b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
                            </select>            
            <!--end::Select-->
        </div>
        <!--end::Input group-->

        <!--begin::Separator-->
        <div class="separator separator-dashed mb-8"></div>
        <!--end::Separator--> 

        <!--begin::Input group-->
        <div class="mb-8">
            <!--begin::Option-->
            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">
                    Payment method
                </span>

                <input class="form-check-input" type="checkbox" checked="checked" value=""/>               
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">
                    Late fees
                </span>

                <input class="form-check-input" type="checkbox" value=""/>               
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">
                    Notes
                </span>

                <input class="form-check-input" type="checkbox" value=""/>               
            </label>
            <!--end::Option-->
        </div>
        <!--end::Input group-->

        <!--begin::Separator-->
        <div class="separator separator-dashed mb-8"></div>
        <!--end::Separator-->
                              
        <!--begin::Actions-->
        <div class="mb-0">
            <!--begin::Row-->
            <div class="row mb-5">
                <!--begin::Col-->
                <div class="col">
                    <a href="#" class="btn btn-light btn-active-light-primary w-100">Preview</a>                
                </div>   
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col">
                    <a href="#" class="btn btn-light btn-active-light-primary w-100">Download</a>
                </div>  
                <!--end::Col-->
            </div>   
            <!--end::Row-->
            
            <button type="submit" href="#" class="btn btn-primary w-100" id="kt_invoice_submit_button"><i class="ki-duotone ki-triangle fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                Send Invoice
            </button>
        </div>                
        <!--end::Actions-->    
    </div>
    <!--end::Card body-->
</div>     
<!--end::Card-->         
    </div>  
    <!--end::Sidebar-->
</div>
<!--end::Layout-->              </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->	

                                    </div>
                <!--end::Content wrapper-->





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


<!--begin::Vendors Javascript(used for this page only)-->
     <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
 <!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
     <script src="assets/js/custom/apps/invoices/create.js"></script>
     <script src="assets/js/widgets.bundle.js"></script>
     <script src="assets/js/custom/widgets.js"></script>
     <script src="assets/js/custom/apps/chat/chat.js"></script>
     <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
     <script src="assets/js/custom/utilities/modals/create-app.js"></script>
     <script src="assets/js/custom/utilities/modals/users-search.js"></script>


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