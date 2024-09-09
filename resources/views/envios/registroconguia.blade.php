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
                                        <input type="text" class="form-control form-control-solid" name="n_guia" id="n_guia" placeholder="# de guia" pattern="[A-Za-z0-9' ]+" required />
                                        <label for="n_guia" style="padding-left: 25px;">Buscar # de guía</label>
                                        <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números, letras y algunos caracteres especiales.</div>
                                    </div>
                                    <div class="form-floating col-lg-5 mb-4">
                                        <button type="submit" class="btn btn-primary btn-kg">Buscar</button>
                                        
                                        <span style="color:red; font-weight:bolder;">{{$nota}}</span>
                                       
                                        
                                    </div>

                                </div>
                            </form>
                            <div class="row my-4 mx-4">
                                <div class="form-floating col-lg-7 mb-4">
                                    <input type="text" class="form-control form-control-solid" name="comercio" id="comercio" placeholder="Aqui cargara automaticamente el comercio" />
                                    <label for="comercio" style="padding-left: 25px;">Nombre de comercio</label>
                                </div>
                                <div class="form-floating col-lg-5 mb-4">
                                    <input type="text" class="form-control form-control-solid" name="destinatariop" id="destinatariop" placeholder="Direccion de recolecta" />
                                    <label for="destinatariop" style="padding-left: 25px;">Direccion de recolecta</label>
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
                                    <input type="text" class="form-control form-control-solid precio-moneda" name="precio" id="precio" placeholder="Aqui cargara automaticamente el precio" />
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
                                    <input type="text" class="form-control form-control-solid" name="cenvio" id="cenvio" placeholder="Aqui cargara automaticamente" />
                                    <label for="cenvio" style="padding-left: 25px;">Cobro del envío</label>
                                </div>
                                <div class="form-floating col-lg-6 mb-4">
                                    <input type="text" class="form-control form-control-solid" name="estado_pago" id="estado_pago" placeholder="Aqui cargara automaticamente" />
                                    <label for="estado_pago" style="padding-left: 25px;">Estado del pago</label>
                                </div>
                            </div>
                            <div class="row my-4 mx-4">

                                <div class="form-floating col-lg-4 mb-4">
                                    <input type="text" class="form-control form-control-solid" name="tipo_envio" id="tipo_envio" placeholder="Aqui cargara automaticamente" />
                                    <label for="tipo_envio" style="padding-left: 25px;">Tipo de envío</label>
                                </div>
                                <div class="form-floating col-lg-4 mb-4">
                                    <input type="text" class="form-control form-control-solid" name="estado_enviop" id="estado_enviop" placeholder="Aqui cargara automaticamente" />
                                    <label for="estado_enviop" style="padding-left: 25px;">Estado del envío</label>
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