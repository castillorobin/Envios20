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


function redireccionarPagina(){
    window.setTimeout( abrirURL, 2000 ); // 3 segundos
};
    
function abrirURL(){
    
   // window.location = "http://127.0.0.1:8000/registro-orden";
   window.location = "https://meloexpress.site/registro-orden";
};

function agregariva() {



    const subtotal = parseFloat(document.getElementById('precio1').value);
    const subtotal2 = parseFloat(document.getElementById("precio2").value);
    const subtotal3 = parseFloat(document.getElementById("precio3").value);
    const subtotal4 = parseFloat(document.getElementById("precio4").value);
    const subtotal5 = parseFloat(document.getElementById("precio5").value);

    const total = subtotal + subtotal2 + subtotal3 + subtotal4 + subtotal5;
    const coniva = total * 0.13;

    const totalfin = (total + coniva);

    $('#total1').text(totalfin.toFixed(2));
    document.getElementById("total2").value = totalfin.toFixed(2) ;
    $('#ivam').text(coniva.toFixed(2));
    document.getElementById("iva2").value = coniva.toFixed(2) ;
    //$('#siva').text("+$" + coniva);
    //checkbox.checked = false;

    document.getElementById('aiva').hidden = true;
    document.getElementById('siva').hidden = false;
    
};

function quitariva() {



const subtotal = parseFloat(document.getElementById('precio1').value);
const subtotal2 = parseFloat(document.getElementById("precio2").value);
const subtotal3 = parseFloat(document.getElementById("precio3").value);
const subtotal4 = parseFloat(document.getElementById("precio4").value);
const subtotal5 = parseFloat(document.getElementById("precio5").value);

const total = subtotal + subtotal2 + subtotal3 + subtotal4 + subtotal5;
//const coniva = total * 0.13;

//const totalfin = (total + coniva);

$('#total1').text(total.toFixed(2));
document.getElementById("total2").value = total ;
$('#ivam').text("0.00");
document.getElementById("iva2").value = "0.00" ;
//$('#siva').text("+$" + coniva);
//checkbox.checked = false;

document.getElementById('siva').hidden = true;
document.getElementById('aiva').hidden = false;

};
function descontar() {


document.getElementById('descuent').hidden = false;
document.getElementById('nota').hidden = false;

};


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

    function aumentar1() {
 nombre = parseFloat(document.getElementById("cantidad1").value);
 nom= nombre + 1;
 document.getElementById("cantidad1").value = parseFloat(nom);
 document.getElementById("guia").value = " ";

}
function aumentar2() {
 nombre = parseFloat(document.getElementById("cantidad2").value);
 nom= nombre + 1;
 document.getElementById("cantidad2").value = parseFloat(nom);
 document.getElementById("guia2").value = " ";
}
 function aumentar3() {
 nombre = parseFloat(document.getElementById("cantidad3").value);
 nom= nombre + 1;
 document.getElementById("cantidad3").value = parseFloat(nom);
 document.getElementById("guia3").value = " ";

}
function aumentar4() {
 nombre = parseFloat(document.getElementById("cantidad4").value);
 nom= nombre + 1;
 document.getElementById("cantidad4").value = parseFloat(nom);
 document.getElementById("guia4").value = " ";

}
function aumentar5() {
 nombre = parseFloat(document.getElementById("cantidad5").value);
 nom= nombre + 1;
 document.getElementById("cantidad5").value = parseFloat(nom);
 document.getElementById("guia5").value = " ";

}

function limpiar1() {
 document.getElementById("guia").value = "";
 document.getElementById("cantidad1").value = "0";
 document.getElementById("precio1").value = "0";
}
function limpiar2() {
 document.getElementById("guia2").value = "";
 document.getElementById("cantidad2").value = "0";
 document.getElementById("precio2").value = "0";
}
function limpiar3() {
 document.getElementById("guia3").value = "";
 document.getElementById("cantidad3").value = "0";
 document.getElementById("precio3").value = "0";
}
function limpiar4() {
 document.getElementById("guia4").value = "";
 document.getElementById("cantidad4").value = "0";
 document.getElementById("precio4").value = "0";
}
function limpiar5() {
 //document.getElementById("guia5").value = "";
 document.getElementById("cantidad5").value = "0";
 document.getElementById("precio5").value = "0";
}



    
    </script>

    <script>
        

$(document).ready(function() {

    $("#pago").change(function() {
                                                                    
    const pago =parseFloat($(this).val());
    const cambio = parseFloat(document.getElementById("total2").value); 
    
                                                           
    const total = pago - cambio ;
     //const total = subtotal;               
     //$('#subto').text(total);
     //document.getElementById("cambio").value = total ;    
     $('#cambio').val(total.toFixed(2));

                 });


 
                      $("#precio1").change(function() {
                                                                    
         const subtotal =parseFloat($(this).val());
         const subtotal2 = parseFloat(document.getElementById("precio2").value); 
         const subtotal3 = parseFloat(document.getElementById("precio3").value); 
         const subtotal4 = parseFloat(document.getElementById("precio4").value); 
         const subtotal5 = parseFloat(document.getElementById("precio5").value); 

         const total = subtotal + subtotal2 + subtotal3 + subtotal4 + subtotal5 ;
         //const total = subtotal;               
         $('#subto').text(total);
         $('#total1').text(total.toFixed(2));
         document.getElementById("total2").value = total ; 
         document.getElementById("pre1").value = subtotal ;

                   });

                $("#precio2").change(function() {
                                                                    
         const subtotal =parseFloat($(this).val());
         const subtotal2 = parseFloat(document.getElementById("precio1").value); 
         const subtotal3 = parseFloat(document.getElementById("precio3").value); 
         const subtotal4 = parseFloat(document.getElementById("precio4").value); 
         const subtotal5 = parseFloat(document.getElementById("precio5").value); 

         const total = subtotal + subtotal2 + subtotal3 + subtotal4 + subtotal5 ;
         //const total = subtotal;               
         $('#subto').text(total);
         $('#total1').text(total.toFixed(2));
         document.getElementById("total2").value = total ;
         document.getElementById("pre2").value = subtotal ;
                   });

                $("#precio3").change(function() {
                                                                    
         const subtotal =parseFloat($(this).val());
         const subtotal2 = parseFloat(document.getElementById("precio1").value); 
         const subtotal3 = parseFloat(document.getElementById("precio2").value); 
         const subtotal4 = parseFloat(document.getElementById("precio4").value); 
         const subtotal5 = parseFloat(document.getElementById("precio5").value); 

         const total = subtotal + subtotal2 + subtotal3 + subtotal4 + subtotal5 ;
         //const total = subtotal;               
         $('#subto').text(total);
         $('#total1').text(total.toFixed(2));
         document.getElementById("total2").value = total ;
         document.getElementById("pre3").value = subtotal ;

                   });
                
                   $("#precio4").change(function() {
                                                                    
         const subtotal =parseFloat($(this).val());
         const subtotal2 = parseFloat(document.getElementById("precio1").value); 
         const subtotal3 = parseFloat(document.getElementById("precio3").value); 
         const subtotal4 = parseFloat(document.getElementById("precio2").value); 
         const subtotal5 = parseFloat(document.getElementById("precio5").value); 

         const total = subtotal + subtotal2 + subtotal3 + subtotal4 + subtotal5 ;
         //const total = subtotal;               
         $('#subto').text(total);
         $('#total1').text(total.toFixed(2));
         document.getElementById("total2").value = total ;
         document.getElementById("pre4").value = subtotal ;

                   });
                
                   $("#cantidad5").change(function() {
                                                                    
         const subtotal =parseFloat($(this).val());
         const subtotal2 = parseFloat(document.getElementById("precio1").value); 
         const subtotal3 = parseFloat(document.getElementById("precio3").value); 
         const subtotal4 = parseFloat(document.getElementById("precio4").value); 
         const subtotal5 = parseFloat(document.getElementById("precio2").value); 
         document.getElementById("precio5").value = subtotal ;           
         const total = subtotal + subtotal2 + subtotal3 + subtotal4 + subtotal5 ;
         //const total = subtotal;               
         $('#subto').text(total);
         $('#total1').text(total.toFixed(2));
         document.getElementById("total2").value = total ;

         document.getElementById("pre5").value = subtotal ;
                   });


                  
 
 $("#descuent").change(function() {
    //alert("Hola");

    const descu =parseFloat($(this).val());

    const total =parseFloat($('#total1').text());

    const totalsin = total - descu ;
 
    $('#total1').text(totalsin.toFixed(2));
    document.getElementById("total2").value = totalsin.toFixed(2) ;

    });





                });
    </script>

<body id="kt_body" class="" style="background-color:white; ">
    <x-default-layout>
       


        <input type="text" value="{{date_default_timezone_set('America/El_Salvador') }}" hidden>

        

<!--end::Footer-->    </div>
<!--end::Sidebar-->                
                            
            
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                                            
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " >

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
                                                    Cobros Listado                                           </li>
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
        Agregar comercio
      </button>
        <!--end::Primary button-->
</div>
<!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->                                        
            




<form action="/cobro/agregarcomercio" id="kt_invoice_form" method="POST">
    @csrf
    @method('GET')

<!--end::Toolbar-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLabel">Agregar Comercio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Aquí puedes poner el contenido del formulario o cualquier otra información -->
                <form>
                    <div class="row mb-6">
                        <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre del comercio</label>
                        <div class="col-lg-8">
                            <input type="text" name="fname" id="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Nombre del comercio" />
                            <div class="invalid-feedback">Este campo es obligatorio.</div>
                        </div>
                    </div> 

                    <div class="row mb-6">
                        <label class="col-lg-3 col-form-label">Dirección del comercio</label>
                        <div class="col-lg-8">
                            <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Dirección del comercio" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-3 col-form-label">Telefono</label>
                        <div class="col-lg-8">
                            <input id="kt_inputmask_2" type="tel" name="telefono" class="form-control form-control-lg form-control-solid" placeholder="Telefono" />
                        </div>
                    </div>
                    <div class="row mb-6">
                                        <label class="col-lg-3 col-form-label">Whatsapp</label>
                                        <div class="col-lg-8">
                                            <input id="kt_inputmask_2" type="tel" name="whatsapp" class="form-control form-control-lg form-control-solid" placeholder="Whatsapp" />
                                        </div>
                                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-3 col-form-label">Tipo de comercio</label>
                        <div class="col-lg-8">
                            <select name="tipo" id="Tipo" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Tipo de comercio" required>
                                <option value="Emprendedor">Emprendedor</option>
                                <option value="Comercio Mediano">Comercio Mediano</option>
                                <option value="Empresa">Empresa</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Estado de comercio</label>
                        <div class="col-lg-8">
                            <select name="estado" id="estado" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Estado de comercioo" required>
                                <option value="Alta">Alta</option>
                                <option value="baja">Baja</option>
                                <option value="Lista_negra">Lista negra</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-3 col-form-label required fw-semibold fs-6">Agencia de registro</label>
                        <div class="col-lg-8">
                            <select name="agencia_registro" id="Agencia_registro" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Agencia de registro" required>
                                <option value="San_Salvador">San Salvador</option>
                                <option value="San_Miguel">San Miguel</option>
                                <option value="Santa_ana">Santa Ana</option>
                                <option value="Centro de distribucion">Centro de distribucion</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-3 col-form-label">Correo Electrónico</label>
                        <div class="col-lg-8">
                            <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-3 col-form-label">Nota</label>
                        <div class="col-lg-8">
                            <input type="text" name="nota" class="form-control form-control-lg form-control-solid" placeholder="Nota" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
</form>





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
        <form action="/cobro/ticketpartes" id="kt_invoice_form" method="POST"> 
        @csrf
        @method('GET')
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-start flex-xxl-row">
                <!--begin::Input group-->
                <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" >
                    <!--begin::Date-->
                    <div class="fs-6 fw-bold text-gray-700 text-nowrap">Fecha:</div>  
                    <!--end::Date-->                    

                    <!--begin::Input-->
                    <div class="position-relative d-flex align-items-center w-150px">
                        <!--begin::Datepicker-->
                        <input class="form-control form-control-transparent fw-bold pe-5" value="{{ date("d-m-Y") }}" name="fecha"/>
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
                    <span class="fs-2x fw-bold text-gray-800">Ticket #</span> 
                    <input type="text" class="form-control form-control-flush fw-bold text-muted fs-3 w-125px" value="{{$ticketactual[0]->codigo}}" name="codigo" id="codigo" />
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
                            <input type="text" class="form-control form-control-solid" name="comercio" id="comercio" value="{{$ticketactual[0]->comercio}}"/>
                        </div>

                      

                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <input type="text" class="form-control form-control-solid" value="{{$ticketactual[0]->correo}}" name="correo" id="correo" />
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
                            <input type="text" class="form-control form-control-solid" placeholder="Direccion" name="direccion" id="direccion" value="{{$ticketactual[0]->direccion}}"/>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <input type="text" class="form-control form-control-solid" value="{{$ticketactual[0]->telefono}}" name="telefono" id="telefono" />
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
                                <th class="min-w-300px w-475px">Tipo</th>
                                <th class="min-w-100px w-100px">Cantidad</th>
                                <th class="min-w-150px w-150px">Precio</th>
                                <th class="min-w-150px w-150px">Accion</th>
                                
                                
                            </tr>
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody>
                            <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                <td class="pe-7">                                            
                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> Personalizado</label>
                                    
                                    <br>
<div class="row">
                                                                <div class="col-8">
                                                                    <input type="text" class="form-control form-control-solid " id="guia" name="guia" placeholder="Ingrese guía" >
                                                                    <input type="text" value="Personalizado" class="visually-hidden" name="tipo1" id="tipo1">
                                                        </div>
                                                        <div class="col-4">
                                                            <button type="submit" class="btn btn-primary mb-3" >Agregar</button>
                                                            
                                                        </div>

                                                        </div>
                                </td>

                                <td class="ps-0">   
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>                                         
                                    <input type="text" class="form-control form-control-solid" id="cantidad1" name="cantidad1"  value="{{$cobroperso}}" />
                                </td>

                                <td>   
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>
                                    <input type="text" class="form-control form-control-solid text-end" name="precio1" id="precio1" value="{{$precio1}}" data-kt-element="price"/>
                                </td>
                                
                                <td >
                                <input type="text" value="{{ $tipo11='Personalizado'; }}" class="visually-hidden" name="tipo11" id="tipo11">
                                    

                                    <a href="/cobro/limpieza/{{ $tipo11}}/{{$ticketactual[0]->codigo}}">
                                    <button type="button" class="btn btn-primary mt-9" ><i class="fas fa-broom"></i></button>

                                    </a>
                                </td>
                                

                                
                            </tr>    
                            <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                <td class="pe-7">                                            
                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> Personalizado departamental</label>
                                    
                                    <br>
<div class="row">
                                                                <div class="col-8">
                                                                    <input type="text" class="form-control form-control-solid " id="guia2" name="guia2" placeholder="Ingrese guía">
                                                                    <input type="text" value="Personalizado departamental" class="visually-hidden" name="tipo2" id="tipo2">
                                                        </div>
                                                        <div class="col-4">
                                                            <button type="submit" class="btn btn-primary mb-3" >Agregar</button>
                                                            
                                                        </div>

                                                        </div>
                                </td>

                                <td class="ps-0">          
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3">&nbsp;</label>                                  
                                    <input type="text" class="form-control form-control-solid" id="cantidad2" name="cantidad2" value="{{$cobroperdepa}}" />
                                </td>

                                <td>   
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>
                                    <input type="text" class="form-control form-control-solid text-end" name="precio2" id="precio2" value="{{$precio2}}" data-kt-element="price"/>
                                </td>
                                
                                
                                <td >
                                <input type="text" value="{{ $tipo11='Personalizado departamental'; }}" class="visually-hidden" name="tipo11" id="tipo11">
                                    

                                    <a href="/cobro/limpieza/{{ $tipo11}}/{{$ticketactual[0]->codigo}}">
                                    <button type="button" class="btn btn-primary mt-9" ><i class="fas fa-broom"></i></button>

                                    </a>
                                </td>
                                
                            </tr>     
                            <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                <td class="pe-7">                                            
                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> Punto fijo</label>
                                    
                                    <br>
<div class="row">
                                                                <div class="col-8">
                                                                    <input type="text" class="form-control form-control-solid " id="guia3" name="guia3" placeholder="Ingrese guía" autofocus>
                                                                    <input type="text" value="Punto fijo" class="visually-hidden" name="tipo3" id="tipo3">
                                                                    <span style="font-weight: 200;font-family: 'Roboto', serif;font-size:13px; color: #dc3545;"> {{ $nota }} &nbsp; </span>
                                                        </div>
                                                        <div class="col-4">
                                                            <button type="submit" class="btn btn-primary mb-3" >Agregar</button>
                                                            
                                                        </div>

                                                        </div>
                                </td>

                                <td class="ps-0">      
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>                                      
                                <input type="text" class="form-control form-control-solid" id="cantidad3" name="cantidad3" value="{{$cobropfijo}}" />
                                </td>

                                <td>   
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>
                                    <input type="text" class="form-control form-control-solid text-end" name="precio3" id="precio3" value="{{$precio3}}" data-kt-element="price"/>
                                </td>
                                
                                <td >
                                <input type="text" value="{{ $tipo11='Punto fijo'; }}" class="visually-hidden" name="tipo11" id="tipo11">
                                    

                                    <a href="/cobro/limpieza/{{ $tipo11}}/{{$ticketactual[0]->codigo}}">
                                    <button type="button" class="btn btn-primary mt-9" ><i class="fas fa-broom"></i></button>

                                    </a>
                                </td>

                                
                            </tr>    
                            <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                <td class="pe-7">                                            
                                    <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Casillero</label>
                                    
                                    <br>
<div class="row">
                                                                <div class="col-8">
                                                                    <input type="text" class="form-control form-control-solid " id="guia4" name="guia4" placeholder="Ingrese guía" >
                                                                    <input type="text" value="Casillero" class="visually-hidden" name="tipo4" id="tipo4">
                                                        </div>
                                                        <div class="col-4">
                                                            <button type="submit" class="btn btn-primary mb-3" >Agregar</button>
                                                            
                                                        </div>

                                                        </div>
                                </td>

                                <td class="ps-0">            
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>                                
                                    <input type="text" class="form-control form-control-solid" id="cantidad4" name="cantidad4" value="{{ $cobrocasi }}" />
                                </td>

                                <td>   
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>
                                    <input type="text" class="form-control form-control-solid text-end" name="precio4" id="precio4" value="{{$precio4}}" data-kt-element="price"/>
                                </td>
                                
                                
                                <td >
                                <input type="text" value="{{ $tipo11='Casillero'; }}" class="visually-hidden" name="tipo11" id="tipo11">
                                    

                                    <a href="/cobro/limpieza/{{ $tipo11}}/{{$ticketactual[0]->codigo}}">
                                    <button type="button" class="btn btn-primary mt-9" ><i class="fas fa-broom"></i></button>

                                    </a>
                                </td>
                                
                            </tr>       
                            <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                <td class="pe-7">                                            
                                    <td class="pe-7">                                            
                                   
                                    
                                        <br>
                                                <div class="row">
                                                                    <div class="col-8 pt-6">
                                                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> Guias</label>
                                                            </div>
                                                            <div class="col-4">
                                                                
                                                            </div>
    
                                                            </div>
                                    </td>
                                   

                                <td class="ps-0">       
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>                                     
                                    <input type="text" class="form-control form-control-solid" id="cantidad5" name="cantidad5"  value="0" />
                                </td>

                                <td>   
                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3"> &nbsp;</label>
                                    <input type="text" class="form-control form-control-solid text-end" name="precio5" id="precio5" value="{{$precio5}}" data-kt-element="price"/>
                                </td>
                                
                                
                                <td >
                                <label class="form-label fs-6 fw-bold text-gray-700 mt-3"> &nbsp;</label>
                                <button type="button" class="btn btn-primary mt-9" onclick="limpiar5()"><i class="fas fa-broom"></i></button>
                                </td>
                                
                            </tr>         
                        </tbody>
                    </form> 
                    <!--end::Table body-->
                    <form action="/cobro/ticket" id="kt_invoice_form" method="POST"> 
                        @csrf
                        @method('GET')
                        <tfoot>
                            <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                <span style="font-size:18px; color: red;"> {!! \Session::get('success') !!} </span>
                                <th class="text-primary">
                                   
                                </th>  
                            
                            
                                <th colspan="2" class="border-bottom border-bottom-dashed ps-0">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="fs-5">Subtotal</div> 

                                        <button type="button" class="btn btn-link py-1" id="aiva" onclick="agregariva()">Agregar IVA</button>
                                        <button type="button" class="btn btn-link py-1" id="siva" onclick="quitariva()" hidden>Quitar IVA</button>
                                        
                                        <button type="button" class="btn btn-link py-1" onclick="descontar()" >Agregar descuento</button>
                                        <input type="text" class="form-control form-control-solid" id="descuent" name="descuent"  value="0" hidden/>
                                        <textarea class="form-control form-control-solid mt-1" id="nota" name="nota" rows="3" cols="20" hidden/>Ingresar nota </textarea>
                                    </div>
                                </th> 

                                <th colspan="2" class="border-bottom border-bottom-dashed text-end">
                                    $ <span data-kt-element="sub-total" id="subto">0.00</span>
                                    <br>
                                    $ <span data-kt-element="sub-total" id="ivam">0.00</span>
                                </th> 
                            </tr>    
                            
                            <tr class="align-top fw-bold text-gray-700">
                                <th></th>
                                
                                <th colspan="2" class="fs-4 ps-0" >Total</th> 

                                <th colspan="2" class="text-end fs-4 text-nowrap">
                                   $ <span data-kt-element="grand-total" id="total1">0.00</span>
                                </th> 
                            </tr>          
                        </tfoot>
                        <!--end::Table foot-->
                    </table>
                </div>  
                <!--end::Table-->

               

                <!--begin::Notes-->            
                <div class="mb-0">
                   
                    <!--Donde estaba la nota hasta abajo--> 
                </div>                        
                <!--end::Notes--> 
            </div>   
            <!--end::Wrapper-->          
        
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
            <label class="form-label fw-bold fs-6 text-gray-700">Cajero:</label><br>
            <input type="text" name="cajero" class="form-control form-control-solid text-end" value="{{ Auth::user()->name }}" readonly>
            
            <!--end::Label
            <label class="form-label fw-bold fs-6 text-gray-400">{{ Auth::user()->name }}</label>
            -->

                
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
                    Metodo de pago
                </span>
          
            </label>
            
            <select class="form-select form-select-solid" name="metodo" id="metodo">
                <option value="Efectivo">Efectivo</option>
                <option value="Deposito">Deposito</option>
                <option value="Transferencia a la empresa">Transferencia a la empresa</option>
                <option value="Transferencia al comercio">Transferencia al comercio</option>
                <option value="Tigo Money ">Tigo money</option>
                <option value="Chivo">Chivo</option>

                
            </select>  
            <!--end::Option-->

        </div>

        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-bold fs-6 text-gray-700">Pago:</label><br>
            <input type="text" class="form-control form-control-solid text-end" name="pago" id="pago" placeholder="0" value="0" data-kt-element="price" onClick="this.select()" />
            <!--end::Label-->

                
            <!--end::Select-->
        </div>
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-bold fs-6 text-gray-700">Cambio:</label><br>
            <input type="text" class="form-control form-control-solid text-end" name="cambio" id="cambio" placeholder="0" value="0" data-kt-element="price" onClick="this.select()" />
            <!--end::Label-->

            <input type="text" class="form-control form-control-solid text-end" name="total2" id="total2" data-kt-element="price" hidden/>  
            <input type="text" class="form-control form-control-solid text-end" name="iva2" id="iva2" data-kt-element="price" hidden/>  

            <input type="text" class="form-control form-control-solid text-end" name="pre1" id="pre1" data-kt-element="price" value="{{$precio1}}"  hidden/>
            <input type="text" class="form-control form-control-solid text-end" name="pre2" id="pre2" data-kt-element="price" value="{{$precio2}}" hidden/>
            <input type="text" class="form-control form-control-solid text-end" name="pre3" id="pre3" data-kt-element="price" value="{{$precio3}}" hidden/>
            <input type="text" class="form-control form-control-solid text-end" name="pre4" id="pre4" data-kt-element="price" value="{{$precio4}}" hidden/>
            <input type="text" class="form-control form-control-solid text-end" name="pre5" id="pre5" data-kt-element="price" value="{{$precio5}}" hidden/> 
            <input type="text" class="form-control form-control-solid text-end" name="ticketnum" id="ticketnum" data-kt-element="price" value="{{$ticketactual[0]->codigo}}" hidden/>   
            <input type="text" class="form-control form-control-solid text-end" name="ticketid" id="ticketid" data-kt-element="price" value="{{$ticketactual[0]->id}}" hidden/> 
            <!--end::Select-->
        </div>
        <!--end::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-bold fs-6 text-gray-700">Comprobante:</label><br>
            <select class="form-select form-select-solid" name="comprobante" id="comprobante">
                <option value="Comprobante de Cobro">Comprobante de Cobro</option>
                <option value="Crédito fiscal">Crédito fiscal</option>
                <option value="Factura consumidor final">Factura consumidor final</option>
                <option value="Nota de Remisión">Nota de Remisión</option>
               


            </select>
            <!--end::Label-->


            <!--end::Select-->
        </div>
        <!--begin::Separator-->
        <div class="separator separator-dashed mb-8"></div>
        <!--end::Separator-->
                              
        <!--begin::Actions-->
        <div class="mb-0">
            <!--begin::Row-->
          
            <!--end::Row-->
            
            <button type="submit" class="btn btn-primary w-100 mb-3" onclick="redireccionarPagina()" id="kt_invoice_submit_button" formtarget="_blank"> <i class="ki-duotone ki-triangle fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Guardar e imprimir
            </button>

            <a href="/envios/cancelar/{{$ticketactual[0]->codigo}}">
                <button type="button" class="btn btn-danger w-100">Cancelar</button>
            </a>
        </div> 
        </form>               
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