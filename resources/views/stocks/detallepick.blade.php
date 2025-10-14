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
<script> 
    function elegircajasuelto() {
var tipo =  document.getElementById('cajasuelto').value;
if(tipo=='caja'){
   // alert("elegiste caja");
   document.getElementById('caja1').hidden = false;
   document.getElementById('caja2').hidden = false;
   document.getElementById('suelto1').hidden = true;
   document.getElementById('suelto2').hidden = true;
}
if(tipo=='suelto'){
    document.getElementById('caja1').hidden = true;
    document.getElementById('caja2').hidden = true;
    document.getElementById('suelto1').hidden = false;
   document.getElementById('suelto2').hidden = false;
}
//document.getElementById('total1').innerText = 0;
//document.getElementById('totalito').innerText = 0;
//document.getElementById('stotal').innerText = 0;
//document.getElementById("tota").value = 0;
////document.getElementById("stota").value = 0;
//alert(total5);

}
</script>
<script>
    /*
    flatpickr("#reenvi", {
        dateFormat: 'Y-m-d',
    });
*/
    
    $("#reenvi").flatpickr();
</script>

<script>
    function doSearch()

{

const tableReg = document.getElementById('shipping_table');

const searchText = document.getElementById('searchTerm').value.toLowerCase();

let total = 0;



// Recorremos todas las filas con contenido de la tabla

for (let i = 1; i < tableReg.rows.length; i++) {

    // Si el td tiene la clase "noSearch" no se busca en su cntenido

    if (tableReg.rows[i].classList.contains("noSearch")) {

        continue;

    }



    let found = false;

    const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

    // Recorremos todas las celdas

    for (let j = 0; j < cellsOfRow.length && !found; j++) {

        const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

        // Buscamos el texto en el contenido de la celda

        if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

            found = true;

            total++;

        }

    }

    if (found) {

        tableReg.rows[i].style.display = '';

    } else {

       

        tableReg.rows[i].style.display = 'none';

    }

}



// mostramos las coincidencias

const lastTR=tableReg.rows[tableReg.rows.length-1];

const td=lastTR.querySelector("td");

lastTR.classList.remove("hide", "red");

if (searchText == "") {

    lastTR.classList.add("hide");

} else if (total) {

    td.innerHTML="";

} else {

    lastTR.classList.add("red");

    td.innerHTML="";

}

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
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Detalle de picking</h1>
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
                                <li class="breadcrumb-item text-muted">Control de stocks</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Detalle de picking</li>
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
                                    
                                                   
                                         <div class="col-auto ">
                                            
                                        </div>
                                       
                                   
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
                                 
                                
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                               
                                    <!--end::Filter-->
                                    <!--begin::Export dropdown-->
                                   
                                                              </div>
                                    <!--end::Filter-->

                                </div>
                                <!--end::Card toolbar-->

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" style="background-color:white; min-height: 610px;  ">

 
                                <!--begin::Table-->
                                
                                            

                                                <div style="border: 1px solid;border-color: #edece8;border-radius: 10px; margin-top: 5px; padding:15px; width: 100%;">
                                                <div class="table-responsive"> 
                                                <table id="shipping_table" name="shipping_table"> 
                                                        <tr><td style="width:200px; font-weight: bolder;">
                                               NUMERO DE GUIA:  
                                                </td>
                                                <td style="width:300px;"> 
                                                    <a href="/envios/detalle/{{$pedidos[0]->guia}}" class="text-gray-900 text-hover-primary">{{$pedidos[0]->guia}} </a></td>
                                                 <td style="width:200px; font-weight: bolder;">TIPO DE UBICACION:</td>
                                                <TD style="width:100px;">{{$envio[0]->ubicacion}} </TD>
                                                <td style="width:500px; " class="text-center" rowspan="5">
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-200px h-200px" style="background-image: url(/fotos/{{$pedidos[0]->foto1}})"></div>
                                    </div>
                                            
                                            
                                                
                                                


                                                 </td>

                                                 
                                            </tr>
                                                 <tr><td style="width:200px; font-weight: bolder;">
                                               COMERCIO:  
                                                </td>
                                                <td style="width:300px;"> {{$pedidos[0]->comercio}}</td>
                                                <td style="width:150px; font-weight: bolder;">RACK:</td>
                                                <TD style="width:100px;">{{$envio[0]->rack}} </TD>
                                                 
                                                  
                                            </tr>
                                                 <tr><td style="width:200px; font-weight: bolder;">
                                               DESTINATARIO:  
                                                </td>
                                                <td style="width:300px;"> {{$pedidos[0]->destinatario}}</td>
                                                <td style="width:150px; font-weight: bolder;">CAJA:</td>
                                                <TD style="width:100px;">{{$envio[0]->caja}} </TD>
                                                 
                                            </tr>
                                                 <tr><td style="width:200px; font-weight: bolder;">
                                               DIRECCION:  
                                                </td>
                                                <td style="width:300px;"> {{$envio[0]->direccion}}</td>

                                                <td style="width:150px; font-weight: bolder;">NIVEL:</td>
                                                <TD style="width:100px;">{{$envio[0]->nivel}} </TD>
                                                
                                            </tr>
                                             </tr>
                                                 <tr><td style="width:150px; font-weight: bolder;">UBICACION:</td>
                                                <TD style="width:100px;"><span class="badge text-bg-dark" style="padding:10px;">{{$envio[0]->agenciaubi}} </span></TD>
                                                
                                                <td style="width:150px; font-weight: bolder;">TARIMA:</td>
                                                <TD style="width:100px;">{{$envio[0]->tarima}} </TD>
                                                
                                            </tr>
                                                 <tr><td style="width:200px; font-weight: bolder;">
                                               TIPO:  
                                                </td>
                                                <td style="width:300px;"> <span class="badge text-bg-dark" style="padding:10px;">{{$envio[0]->tipo}}</span></td>
                                                <td style="width:150px; font-weight: bolder;">CAJA:</td>
                                                <TD style="width:100px;">{{$envio[0]->caja}} </TD>
                                                 
                                            </tr>
                                                 
                                            
                                                </table>

                                            
                                                </div>

                                                
                                                </div>

 <div style="border: 1px solid;border-color: #edece8;border-radius: 10px; margin-top: 5px; padding:15px; width: 100%;">
                                                      <div> 
                                                       <span style="width:250px;background-color: yellow; font-size: 40px; font-weight: bolder;"> Orden: {{ $pedidos[0]->tipo }} </span>
                                                        </div>

                                                        @if ($pedidos[0]->tipo = "Devolucion")
                                                            <div> 
                                                       <span style="width:250px; font-size: 40px; "> Lugar de Devolucion: </span> <span style="width:250px; font-size: 40px; font-weight: bolder;">{{ $pedidos[0]->lugar }} </span>
                                                        </div>
                                                        @endif

                                                        <div> 
                                                       <span style="width:250px; font-size: 40px; "> Fecha programada: </span> <span style="width:250px; font-size: 40px; font-weight: bolder;">{{ $pedidos[0]->fecha_pro }} </span>
                                                        </div>
                                                        <div> 
                                                       <span style="width:250px; font-size: 40px; "> Nota: </span> <span style="width:250px; font-size: 40px; font-weight: bolder;">{{ $pedidos[0]->nota }} </span>
                                                        </div>

                                            <div class="col-12 mb-12" >
                                        <a href="{{ url()->previous() }}">
                                        <button type="button" class="btn btn-secondary  edit2" style="float: right; margin-left:10px; " >Cancelar</button>
                                    </a>
                                   <a href="/stocks/realizado/{{$pedidos[0]->id}}">
                                     
                                        <button type="button" class="btn btn-primary edit "  style="float: right; margin-left:10px; " >Realizado</button>
                                    </a>
                                    </div>



                                                    </div>


                                           
                                        
                                

                               
                                <!--end::Table-->
                            </div>

                            <form action="/stocks/guardarreenvio/" method="GET">
                            <!--Start::Reenvio-->
                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                           
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header mt-5 m-5" >
                                            <h3 class="modal-title">Reenvio</h3>
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Close-->

                                           

                                        </div>
                                        <div class="modal-body">
                                            <div class="row my-2 mx-2 justify-content-center" >
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="usuario" id="usuario" value="{{ Auth::user()->name }}" readonly />
                                                    <label for="rack" style="padding-left: 25px;">Usuario</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="fecha" id="fecha" value="{{ now()->Format('d/m/Y H:i A')}}" readonly/>
                                                    <label for="nivel" style="padding-left: 25px;">Fecha y hora</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                            </div>
                                            
                                            <input type="text" name="idenvio" id="idenvio" hidden>

                                            
                                                <div class="row my-2 mx-2 justify-content-center" name="caja1" id="caja1">
                                                    <div class="form col-lg-12 mb-4">
                                                      
                                                         <input class="form-control form-control-solid" placeholder="Fecha de reenvio" id="kt_datepicker_1" name="reenvi"/>
                                                       <p></p>
                                                        <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                                        
                                                    </div>
                                              
                                                </div>
                                               
                                               
                                            </div>

                                            
                                       
                                        <div class="modal-footer m-5">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                        </div>
                        <!--end::Card body-->
</form>







<form action="/stocks/guardardevol/" method="GET">
                         <!--Start::Devolucion-->
                            <div class="modal fade" tabindex="-1" id="kt_modal_2">
                           
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header mt-5 m-5" >
                                            <h3 class="modal-title">Devolución</h3>
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Close-->

                                           

                                        </div>
                                        <div class="modal-body">
                                            <div class="row my-2 mx-2 justify-content-center" >
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="usuario" id="usuario" value="{{ Auth::user()->name }}" readonly />
                                                    <label for="rack" style="padding-left: 25px;">Usuario</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                                <div class="form-floating col-lg-6 mb-4">
                                                    <input type="text" class="form-control form-control-solid" name="fecha" id="fecha" value="{{ now()->Format('d/m/Y H:i A')}}" readonly/>
                                                    <label for="nivel" style="padding-left: 25px;">Fecha y hora</label>
                                                    <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                </div>
                                            </div>
                                            
                                            <input type="text" name="idenvio2" id="idenvio2" hidden>

                                            
                                                <div class="row my-2 mx-2 justify-content-center" name="caja1" id="caja1">
                                                    <div class="form col-lg-12 mb-4">
                                                      <input type="text" class="form-control form-control-solid" placeholder="Lugar de devolución" id="lugar" name="lugar">
                                                      <br>
                                                         <input class="form-control form-control-solid" placeholder="Fecha de devolución" id="kt_datepicker_2" name="devolucion"/>
                                                       <p></p>
                                                        <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                                        
                                                    </div>
                                              
                                                </div>
                                               
                                               
                                            </div>

                                       
                                        <div class="modal-footer m-5">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            </form>
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
         

           document.getElementById("idenvio").value = cod;
           
      
        });
    });
     
    
     $(document).ready(function(){
        $(document).on('click', '.edit2', function(){
           var cod=$(this).val();
         

           document.getElementById("idenvio2").value = cod;
           
      
        });
    });
    
    
    
    
        </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>


    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
<script src="assets/plugins/global/plugins.bundle.js"></script>

<script>
    $("#kt_datepicker_1" ).flatpickr();
    $("#kt_datepicker_2" ).flatpickr();
</script>

</body>
<!--end::Body-->

</html>