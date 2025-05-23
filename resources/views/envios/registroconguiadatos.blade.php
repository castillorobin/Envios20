<x-default-layout>

    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <style>
        label.required::after {
            content: none;
        }

        /* Estilos para resaltar el campo cuando hay un error */
        .precio-moneda.is-invalid {
            border-color: #dc3545;
        }

        .precio-moneda.is-invalid+label {
            color: #dc3545;
        }

        .precio-moneda.is-invalid~.invalid-feedback {
            display: block;
            color: #dc3545;
        }

        .precio-moneda.is-valid {
            border-color: #28a745;
        }

        .precio-moneda.is-valid+label {
            color: #28a745;
        }
     
            </style>
    <script>




        $(document).ready(function() {
            $("#fecha_entregap").flatpickr();
            /*
            $("#fecha_entregap").flatpickr({
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    mode: "range"
});
*/
            // Validación solo para el campo "Número de Guía" y permitir solo números
            $("#n_guia").focusout(function() {
                var value = $(this).val();
                if (value.length == 0 || !$.isNumeric(value)) {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('El campo debe contener solo números');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
                console.log('Este campo es obligatorio');
            });

            $(document).ready(function() {
                // Validación para el campo "Destinatario"
                $("#destinatariop").focusout(function() {
                    var value = $(this).val();
                    if (value.trim() === "") {
                        $(this).addClass("is-invalid");
                        $(this).removeClass("is-valid");
                        console.log('El campo "Destinatario" es obligatorio');
                    } else {
                        $(this).removeClass("is-invalid");
                        $(this).addClass("is-valid");
                    }
                });
            });

            // Validación para campos de tipo select
            $("select").focusout(function() {
                var value = $(this).val();
                if (value.length == 0) {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
                console.log('Este campo es obligatorio');
            });
        });

        $(document).ready(function() {

            // Validación para el campo de teléfono
            $("#telefonop").focusout(function() {
                var value = $(this).val().trim();
                if (value === "") {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('El campo "Teléfono" es obligatorio');
                } else if (!validarTelefono(value)) {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('Por favor ingrese un número de teléfono válido');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
            });

            // Modificación para manejar el envío del formulario
            $("#kt_ecommerce_settings_general_form").submit(function(e) {
                // Validar el campo de teléfono antes de enviar el formulario
                var telefonoValue = $("#telefonop").val().trim();
                if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
                    e.preventDefault(); // Evitar que el formulario se envíe
                    $("#telefonop").addClass("is-invalid");
                    console.log('Por favor, corrija los errores en el formulario antes de enviar.');
                }
                // Puedes agregar más lógica de validación aquí si es necesario
            });
        });

        $(document).ready(function() {
            // Función para validar valor monetario
            function validarValorMoneda(valor) {
                // Expresión regular para validar números o formatos de moneda válidos
                var valorMonedaRegex = /^\d+(\.\d{1,2})?$/; // Acepta números con hasta 2 decimales
                return valorMonedaRegex.test(valor);
            }

            // Validación para campos de valor monetario
            $(".precio-moneda").focusout(function() {
                var value = $(this).val().trim();
                if (value !== "" && !validarValorMoneda(value)) {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('Por favor ingrese un valor monetario válido');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
            });
        });
        $(document).ready(function() {
            // Validación para el campo de fecha de entrega al enviar el formulario
            $("form").submit(function(event) {
                var value = $("#fecha_entregap").val().trim();
                if (value === "") {
                    $("#fecha_entregap").addClass("is-invalid");
                    $("#fecha_entregap").removeClass("is-valid");
                    $("#fechaEntregapValidationFeedback").addClass("invalid-feedback");
                    event.preventDefault(); // Evita que el formulario se envíe si la validación falla
                } else {
                    $("#fecha_entregap").removeClass("is-invalid");
                    $("#fecha_entregap").addClass("is-valid");
                }
            });
        });
    </script>
<style>
       .select2-container .select2-selection--single {
  height: 50px;
}
</style>
    <div class="app-content flex-column-fluid">
        <div class="app-container container-xxl">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-4">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Registro con guia</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="/" class="text-muted text-hover-primary">Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Gestion de envios</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Registro con guia</li>
                </ul>
            </div>
            <div class="card card-flush">
                <div class="card-body">
                    <h1>Registro con guia</h1>
                    <br>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="kt_ecommerce_settings_general" role="tabpanel">

                            <form action="/envios/conguia" id="kt_invoice_form" method="POST"> 
                                @csrf
                                @method('GET')

                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-3 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="n_guia" id="n_guia" placeholder="# de guia" />
                                        
                                        <label for="n_guia" style="padding-left: 25px;">Buscar # de guía</label>
                                        
                                        <div class="invalid-feedback">Este campo es obligatorio</div>
                                       
                                    </div>
                                    <div class="form-floating col-lg-5 mb-4">
                                        <button type="submit" class="btn btn-primary btn-kg">Buscar</button>
                                        <span style="color:red; font-weight:bolder;">{{$nota}}</span>
                                    </div>
                                </div> 
                            </form>
                            
                            <form action="/envios/guardarconguia/{{$pedido[0]->id}}" id="kt_invoice_form" method="POST"> 
                                @csrf
                                @method('GET')

                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-7 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="comercio" id="comercio" value="{{$pedido[0]->comercio}}" readonly/>
                                        <label for="comercio" style="padding-left: 25px;">Nombre de comercio</label>
                                    </div>
                                    <div class="form-floating col-lg-5 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="destinatariop" id="destinatariop" placeholder="Direccion de recolecta" value="{{$pedido[0]->entrega}}" />
                                        <label for="destinatariop" style="padding-left: 25px;">Direccion de recolecta</label>
                                    </div> 

                                    <input type="text" value="{{ Auth::user()->name }}" name="usuario" hidden>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-12 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="destinatariop" id="destinatariop" placeholder="Destinatario" required />
                                        <label for="destinatariop" style="padding-left: 25px;">Destinatario</label>
                                        <div id="destinatarioValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese el destinatario.
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">

                                    @if ($pedido[0]->tipo == "Punto fijo" )
                                    <div class="form-floating col-lg-7 mb-4" style="height: 50px;" >
                                    <select class="form-select form-select-solid mi-selector" data-control="select2" name="punto" id="punto"  >
                                        <option value="" style="height: 50px;"> </option>
                                        @foreach ($puntos as $punto)
                                        <option value="{{$punto->id}}">{{$punto->punto}} </option>
                                        @endforeach
                                    </select>
                                    <label for="direccionp" style="padding-left: 25px; height: 50px;">Buscar punto</label>
                                    <br>
                                </div>
                                    @else


                                    <div class="form-floating col-lg-7 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="direccionp" id="direccionp" placeholder="Dirección" value="{{$pedido[0]->direccion}}" />
                                        <label for="direccionp" style="padding-left: 25px;">Dirección</label>
                                    </div>

                                    @endif

                                    <div class="form-floating col-lg-5 mb-4">
                                        <input type="tel" class="form-control form-control-solid" name="telefonop" id="telefonop" placeholder="Teléfono" />
                                        <label for="telefonop" style="padding-left: 25px;">Teléfono</label>
                                        <div id="telefonoValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un número de teléfono válido.
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-4">
                                        <input type="text" class="form-control form-control-solid precio-moneda" name="precio" id="precio" value="0" onClick="this.select()" />
                                        <label for="precio" style="padding-left: 25px;">Precio del paquete</label>
                                        <div id="precioValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un precio válido para el paquete.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid precio-moneda" name="envio" id="envio" value="0" onClick="this.select()" />
                                        <label for="envio" style="padding-left: 25px;">Precio del envío</label>
                                        <div id="envioValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un precio válido para el envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid precio-moneda" name="total" id="total" value="0" onClick="this.select()" readonly/>
                                        <label for="total" style="padding-left: 25px;">Total a pagar</label>
                                        <div id="totalValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un total válido a pagar.
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-6 mb-4">
                                        

                                        <select class="form-select form-select-solid" name="cenvio" id="cenvio" aria-label="Floating label select example" required>
                                            <option value="{{$pedido[0]->cobro}}">{{$pedido[0]->cobro}}</option>
                                            <option value="Pendiente">Pendiente</option>
                                            <option value="Pagado">Pagado</option>
                                        </select>
                                        <label for="cenvio" style="padding-left: 25px;">Cobro del envío</label>
                                    </div>
                                    <div class="form-floating col-lg-6 mb-4">
                                        <select class="form-select form-select-solid" name="estado_pago" id="estado_pago" aria-label="Floating label select example" required>
                                            <option value="Por pagar">Por pagar</option>
                                            <option value="Pagado">Pagado</option>
                                        </select>
                                       
                                        <label for="estado_pago" style="padding-left: 25px;">Estado del pago</label>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">

                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="tipo_envio" id="tipo_envio" value="{{$pedido[0]->tipo}}" readonly/>
                                        <label for="tipo_envio" style="padding-left: 25px;">Tipo de envío</label>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="estado_enviop" id="estado_enviop" value="Creado" readonly/>
                                        <label for="estado_enviop" style="padding-left: 25px;">Estado del envío</label>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input class="form-control form-control-solid" name="fecha_entregap" id="fecha_entregap"  />
                                        <label for="fecha_entregap" style="padding-left: 25px;">Fecha de entrega</label>
                                        
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating mb-4">
                                        <textarea name="nota" class="form-control form-control-solid" placeholder="Nota" id="nota" style="height: 80px"></textarea>
                                        <label for="nota" style="padding-left: 25px;">Nota</label>
                                    </div>
                                </div> 
                                <div class="row py-5">
                                    <div class="col-md-12 text-end">
                                        <div class="d-flex justify-content-end">
                                            <a href="/envios/lista" class="btn btn-light me-3">Cancelar</a>

                                            <button type="submit" id="saveButton" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">
                                                    Guardar envio
                                                </span>
                                                <span class="indicator-progress">
                                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>

                                    </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-default-layout>
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<script src="assets/plugins/global/plugins.bundle.js"></script>

<script>


$(document).ready(function() {
  
  $("#envio").change(function() {
                                   //alert($(this).val());
const tenv = document.getElementById("cenvio").value;
const preci = parseFloat(document.getElementById("precio").value);						                                                    
const envi =parseFloat($(this).val()); 

if(tenv=="Pagado")
{
document.getElementById("total").value = preci;
}else{
document.getElementById("total").value = preci - envi;
}


                                   //const castot = parseFloat(document.getElementById("totalc").value);
                                   //document.getElementById("ptotal").value = castot ; 

});

$("#precio").change(function() {
                                   //alert($(this).val());
const tenv2 = document.getElementById("cenvio").value;
const envi2 = parseFloat(document.getElementById("envio").value);						                                                    
const preci2 =parseFloat($(this).val()); 

if(tenv2=="Pagado")
{
document.getElementById("total").value = preci2;
}else{
document.getElementById("total").value = preci2 - envi2;
}


                                   //const castot = parseFloat(document.getElementById("totalc").value);
                                   //document.getElementById("ptotal").value = castot ; 

});


$("#cenvio").change(function() {
                                   //alert($(this).val());
const tenv3 = document.getElementById("precio").value;
const envi3 = parseFloat(document.getElementById("envio").value);						                                                    
const preci3 =document.getElementById("cenvio").value; 

if(preci3=="Pagado")
{
document.getElementById("total").value = tenv3;
}else{
document.getElementById("total").value = tenv3 - envi3;
}


                                   //const castot = parseFloat(document.getElementById("totalc").value);
                                   //document.getElementById("ptotal").value = castot ; 

});

                       });

/*

    
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

            $("#total").val(total.toFixed(2));
        }

        // Calcular total al cargar la página
        calcularTotal();
        $("#precio").change(calcularTotal);
        $("#envio").change(calcularTotal);
        $("#cenvio").change(calcularTotal);
        $("#estado_pago").change(calcularTotal);

        $("#envio").keyup(calcularTotal);

    });
    */
</script>