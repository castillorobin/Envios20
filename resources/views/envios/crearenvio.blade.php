<x-default-layout>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    

    <style>
        label.required::after {
            content: none;
        }
    </style>




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
                                        <input type="text" class="form-control form-control-solid" name="n_guia" id="n_guia" placeholder="# de guia" />
                                        <label for="n_guia" style="padding-left: 25px;"># de guia</label>
                                        <div id="n_guiaValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese solo números para la guía.
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-12 mb-4">
                                        <select class="form-select form-select-solid" data-control="select2" name="comer">
                                      
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
                                        <input type="text" class="form-control form-control-solid" name="destinatariop" id="destinatariop" placeholder="Destinatario" />
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
                                        <div id="direccionValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese una dirección.
                                        </div>
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
                                        <input type="text" class="form-control form-control-solid" name="precio" id="precio" placeholder="Precio del paquete" />
                                        <label for="precio" style="padding-left: 25px;">Precio del paquete</label>
                                        <div id="precioValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un precio válido para el paquete.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="envio" id="envio" placeholder="Precio del envío" />
                                        <label for="envio" style="padding-left: 25px;">Precio del envío</label>
                                        <div id="envioValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un precio válido para el envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="total" id="total" placeholder="Total a pagar" />
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
<script>
    flatpickr("#fecha_entregap", {
        dateFormat: 'Y-m-d',
    });
</script>
<script>
    // Función para validar el campo de comercio
    function validarComercio() {
        var selectValue = document.getElementById('comercio').value;
        var validationFeedback = document.getElementById('comercioValidationFeedback');
        if (selectValue === 'selecione el comercio') {
            document.getElementById('comercio').classList.remove('is-valid');
            document.getElementById('comercio').classList.add('is-invalid');
            validationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById('comercio').classList.remove('is-invalid');
            document.getElementById('comercio').classList.add('is-valid');
            validationFeedback.style.display = 'none';
            return true;
        }
    }

    // Función para validar el campo de guía
    function validarGuia() {
        var n_guiaValue = document.getElementById('n_guia').value;
        var n_guiaValidationFeedback = document.getElementById('n_guiaValidationFeedback');
        if (!n_guiaValue.trim()) {
            document.getElementById('n_guia').classList.remove('is-valid');
            document.getElementById('n_guia').classList.add('is-invalid');
            n_guiaValidationFeedback.textContent = 'Por favor no dejar en blanco, ingrese un número de guía.';
            n_guiaValidationFeedback.style.display = 'block';
            return false;
        } else if (!/^[0-9]+$/.test(n_guiaValue)) {
            document.getElementById('n_guia').classList.remove('is-valid');
            document.getElementById('n_guia').classList.add('is-invalid');
            n_guiaValidationFeedback.textContent = 'Por favor ingrese solo números para la guía.';
            n_guiaValidationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById('n_guia').classList.remove('is-invalid');
            document.getElementById('n_guia').classList.add('is-valid');
            n_guiaValidationFeedback.style.display = 'none';
            return true;
        }
    } 

    // Función para validar el campo de destinatario
    function validarDestinatario() {
        var destinatarioValue = document.getElementById('destinatariop').value;
        var destinatarioValidationFeedback = document.getElementById('destinatarioValidationFeedback');
        if (!destinatarioValue.trim()) {
            document.getElementById('destinatariop').classList.remove('is-valid');
            document.getElementById('destinatariop').classList.add('is-invalid');
            destinatarioValidationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById('destinatariop').classList.remove('is-invalid');
            document.getElementById('destinatariop').classList.add('is-valid');
            destinatarioValidationFeedback.style.display = 'none';
            return true;
        }
    }
    // Función para validar el campo de dirrecion
    function validarDireccion() {
        var direccionValue = document.getElementById('direccionp').value;
        var direccionValidationFeedback = document.getElementById('direccionValidationFeedback');
        if (!direccionValue.trim()) {
            document.getElementById('direccionp').classList.remove('is-valid');
            document.getElementById('direccionp').classList.add('is-invalid');
            direccionValidationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById('direccionp').classList.remove('is-invalid');
            document.getElementById('direccionp').classList.add('is-valid');
            direccionValidationFeedback.style.display = 'none';
            return true;
        }
    }
    // Función para validar el campo de Telefono
    function validarTelefono() {
        var telefonoValue = document.getElementById('telefonop').value;
        var telefonoValidationFeedback = document.getElementById('telefonoValidationFeedback');
        var telefonoPattern = /^\d+$/;

        if (!telefonoValue.trim() || !telefonoPattern.test(telefonoValue)) {
            document.getElementById('telefonop').classList.remove('is-valid');
            document.getElementById('telefonop').classList.add('is-invalid');
            telefonoValidationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById('telefonop').classList.remove('is-invalid');
            document.getElementById('telefonop').classList.add('is-valid');
            telefonoValidationFeedback.style.display = 'none';
            return true;
        }
    }
    // Función para validar los cmpos de precio y total
    function validarPrecioPaquete() {
        return validarNumeroNoVacio('precio', 'precioValidationFeedback', 'Por favor ingrese un precio válido para el paquete.');
    }

    function validarPrecioEnvio() {
        return validarNumeroNoVacio('envio', 'envioValidationFeedback', 'Por favor ingrese un precio válido para el envío.');
    }

    function validarTotalPagar() {
        return validarNumeroNoVacio('total', 'totalValidationFeedback', 'Por favor ingrese un total válido a pagar.');
    }

    function validarNumeroNoVacio(inputId, feedbackId, mensajeError) {
        var inputValue = document.getElementById(inputId).value;
        var validationFeedback = document.getElementById(feedbackId);
        var numberPattern = /^\d+(\.\d{1,2})?$/;

        if (!inputValue.trim() || !numberPattern.test(inputValue)) {
            document.getElementById(inputId).classList.remove('is-valid');
            document.getElementById(inputId).classList.add('is-invalid');
            validationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById(inputId).classList.remove('is-invalid');
            document.getElementById(inputId).classList.add('is-valid');
            validationFeedback.style.display = 'none';
            return true;
        }
    }
    // Función para validar el campo de cobro de envio
    function validarCobroEnvio() {
        var selectValue = document.getElementById('cenvio').value;
        var validationFeedback = document.getElementById('cenviovalidationFeedback');
        if (selectValue === 'seleccione el estado cobro') {
            document.getElementById('cenvio').classList.remove('is-valid');
            document.getElementById('cenvio').classList.add('is-invalid');
            validationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById('cenvio').classList.remove('is-invalid');
            document.getElementById('cenvio').classList.add('is-valid');
            validationFeedback.style.display = 'none';
            return true;
        }
    }

    // Función para validar el campo de estado del pago
    function validarEstadoPago() {
        var selectValue = document.getElementById('estado_pago').value;
        var validationFeedback = document.getElementById('estadoPagoValidationFeedback');
        if (selectValue === 'seleccione el estado del pago') {
            document.getElementById('estado_pago').classList.remove('is-valid');
            document.getElementById('estado_pago').classList.add('is-invalid');
            validationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById('estado_pago').classList.remove('is-invalid');
            document.getElementById('estado_pago').classList.add('is-valid');
            validationFeedback.style.display = 'none';
            return true;
        }
    }

    // Función para validar el campo de tipo de envio
    function validarTipoEnvio() {
        var selectValue = document.getElementById('tipo_envio').value;
        var validationFeedback = document.getElementById('tipoEnvioValidationFeedback');
        if (selectValue === 'Seleccione el tipo de envío') {
            document.getElementById('tipo_envio').classList.remove('is-valid');
            document.getElementById('tipo_envio').classList.add('is-invalid');
            validationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById('tipo_envio').classList.remove('is-invalid');
            document.getElementById('tipo_envio').classList.add('is-valid');
            validationFeedback.style.display = 'none';
            return true;
        }
    }
    // Función para validar el campo de estado del envio
    function validarEstadoEnvio() {
        var selectValue = document.getElementById('estado_enviop').value;
        var validationFeedback = document.getElementById('estadoEnviopValidationFeedback');
        if (selectValue === 'Seleccione el estado del envío') {
            document.getElementById('estado_enviop').classList.remove('is-valid');
            document.getElementById('estado_enviop').classList.add('is-invalid');
            validationFeedback.style.display = 'block';
            return false;
        } else {
            document.getElementById('estado_enviop').classList.remove('is-invalid');
            document.getElementById('estado_enviop').classList.add('is-valid');
            validationFeedback.style.display = 'none';
            return true;
        }
    }
    // Función para validar el campo de fecha
    function validarFechaEntrega() {
        var inputElement = document.getElementById('fecha_entregap');
        var validationFeedback = document.getElementById('fechaEntregapValidationFeedback');

        if (inputElement.value === '') {
            inputElement.classList.remove('is-valid');
            inputElement.classList.add('is-invalid');
            validationFeedback.style.display = 'block';
            return false; // Valor inválido
        } else {
            inputElement.classList.remove('is-invalid');
            inputElement.classList.add('is-valid');
            validationFeedback.style.display = 'none';
            return true; // Valor válido
        }
    }
    // Evento para validar el campo de comercio al cambiar
    document.getElementById('comercio').addEventListener('change', validarComercio);
    // Evento para validar el campo de guía al escribir
    document.getElementById('n_guia').addEventListener('input', validarGuia);
    // Evento para validar el campo destinatario
    document.getElementById('destinatariop').addEventListener('input', validarDestinatario);
    // Evento para validar el campo de dirección al escribir
    document.getElementById('direccionp').addEventListener('input', validarDireccion);
    // Evento para validar el campo de teléfono al escribir
    document.getElementById('telefonop').addEventListener('input', validarTelefono);
    // Eventos para validar los campos al precio y total
    document.getElementById('precio').addEventListener('input', validarPrecioPaquete);
    document.getElementById('envio').addEventListener('input', validarPrecioEnvio);
    document.getElementById('total').addEventListener('input', validarTotalPagar);
    // Evento para validar el campo al cambiar la selección
    document.getElementById('cenvio').addEventListener('change', validarCobroEnvio);
    // Evento para validar el campo de estado de pago al perder el foco
    document.getElementById('estado_pago').addEventListener('change', validarEstadoPago);

    // Evento para validar el campo al cambiar la selección
    document.getElementById('tipo_envio').addEventListener('change', validarTipoEnvio);
    // Evento para validar el campo al cambiar la selección
    document.getElementById('estado_enviop').addEventListener('change', validarEstadoEnvio);
    // Evento para validar el campo al cambiar la fecha
    document.getElementById('fecha_entregap').addEventListener('change', validarFechaEntrega);



    // Evento para validar el formulario antes de enviar
    document.getElementById('kt_ecommerce_settings_general_form').addEventListener('submit', function(event) {
        var comercioValido = validarComercio();
        var guiaValida = validarGuia();
        var destinatarioValido = validarDestinatario();
        var direccionValida = validarDireccion();
        var telefonoValido = validarTelefono();
        var precioPaqueteValido = validarPrecioPaquete();
        var precioEnvioValido = validarPrecioEnvio();
        var totalPagarValido = validarTotalPagar();
        var cobroEnvioValido = validarCobroEnvio();
        var estadoPagoValido = validarEstadoPago();
        var tipoEnvioValido = validarTipoEnvio();
        var estadoEnvioValido = validarEstadoEnvio();
        var fechaEntregaValida = validarFechaEntrega();

        if (!comercioValido || !guiaValida) {
            event.preventDefault(); // Detener el envío del formulario
        }

        // Validar campos vacíos
        var camposVacios = [];
        var inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(function(input) {
            if (!input.value.trim()) {
                camposVacios.push(input);
            }
        });

        if (camposVacios.length > 0) {
            event.preventDefault();
            camposVacios[0].focus();
            camposVacios.forEach(function(campo) {
                campo.classList.add('is-invalid');
            });
        }
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