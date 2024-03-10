<x-default-layout>
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

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
            // Función para validar el número de teléfono
            function validarTelefono(telefono) {
                // Expresión regular para validar números de teléfono de 10 dígitos
                var telefonoRegex = /^(?:2|7)\d{7}$/;
                return telefonoRegex.test(telefono);
            }

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



    <div class="app-content flex-column-fluid">
        <div class="app-container container-xxl">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-4">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Melo Express</h1>
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
                    <li class="breadcrumb-item text-muted">Crear envio</li>
                </ul>
            </div>
            <div class="card card-flush">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general" aria-selected="true" role="tab">
                                <i class="ki-duotone ki-home fs-2 me-2"></i> Personalizado
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5" href="/enviopd" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-shop fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Personalizado Departamental
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5" href="/enviopf" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-compass fs-2 me-2"><span class="path1"></span><span class="path2"></span></i> Punto fijo
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5" href="/envioca" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-package fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Casillero
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="kt_ecommerce_settings_general" role="tabpanel">

                            <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="/envioguardarp" method="POST">
                                @csrf
                                @method('GET')

                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-3 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="n_guia" id="n_guia" placeholder="# de guia" pattern="[0-9]+" required />
                                        <label for="n_guia" style="padding-left: 25px;"># de guía</label>
                                        <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                    </div>

                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-12 mb-4">
                                        <select class="form-select form-select-solid" data-control="select2" name="comercio">

                                            @foreach ($vendedores as $vendedor)

                                            <option value="{{$vendedor->nombre}}">{{ $vendedor->nombre }} </option>
                                            @endforeach

                                        </select>
                                        <label for="comer" style="padding-left: 25px;">Buscar Comercio</label>
                                        <div id="comercioValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione un comercio.
                                        </div>
                                    </div>
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
                                    <div class="form-floating col-lg-7 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="direccionp" id="direccionp" placeholder="Dirección" />
                                        <label for="direccionp" style="padding-left: 25px;">Dirección</label>
                                    </div>
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
                                        <input type="text" class="form-control form-control-solid precio-moneda" name="precio" id="precio" placeholder="Precio del paquete" />
                                        <label for="precio" style="padding-left: 25px;">Precio del paquete</label>
                                        <div id="precioValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un precio válido para el paquete.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid precio-moneda" name="envio" id="envio" placeholder="Precio del envío" />
                                        <label for="envio" style="padding-left: 25px;">Precio del envío</label>
                                        <div id="envioValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un precio válido para el envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid precio-moneda" name="total" id="total" placeholder="Total a pagar" />
                                        <label for="total" style="padding-left: 25px;">Total a pagar</label>
                                        <div id="totalValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un total válido a pagar.
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-6 mb-4">
                                        <select class="form-select form-select-solid" name="cenvio" id="cenvio" aria-label="Floating label select example" required>

                                            <option value="Pendiente">Pendiente</option>
                                            <option value="Pagado">Pagado</option>
                                        </select>
                                        <label for="cenvio" style="padding-left: 25px;">Cobro del envío</label>
                                        <div id="cenviovalidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el estado de cobro del envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-6 mb-4">
                                        <select class="form-select form-select-solid" name="estado_pagop" id="estado_pagop" aria-label="Floating label select example" required>

                                            <option value="Por pagar">Por pagar</option>
                                            <option value="Pagado">Pagado</option>
                                        </select>
                                        <label for="estado_pago" style="padding-left: 25px;">Estado del pago</label>
                                        <div id="estadoPagoValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el estado del pago.
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-4 mb-4">
                                        <select class="form-select form-select-solid" name="tipo_enviop" id="tipo_enviop" aria-label="Floating label select example" required>

                                            <option value="Personalizado">Personalizado </option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                        <label for="tipo_envio" style="padding-left: 25px;">Tipo de envío</label>
                                        <div id="tipoEnvioValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el tipo de envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <select class="form-select form-select-solid" name="estado_enviop" id="estado_enviop" aria-label="Floating label select example" required>

                                            <option value="Creado">Creado</option>
                                            <option value="sin_entregar">Sin entregar</option>
                                        </select>
                                        <label for="estado_enviop" style="padding-left: 25px;">Estado del envío</label>
                                        <div id="estadoEnviopValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el estado del envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="date" class="form-control form-control-solid" name="fecha_entregap" id="fecha_entregap" placeholder="Fecha de entrega" />
                                        <label for="fecha_entregap" style="padding-left: 25px;">Fecha de entrega</label>
                                        <div id="fechaEntregapValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione una fecha de entrega.
                                        </div>
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
                                            <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                                                Cancelar
                                            </button>
                                            <button type="submit" id="saveButton" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">
                                                    Guardar
                                                </span>
                                                <span class="indicator-progress">
                                                    Por favor espere... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Termina form de envio personalizado -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-default-layout>


<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    flatpickr("#fecha_entregap", {
        dateFormat: 'Y-m-d',
    });
</script>

<script>
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
</script>