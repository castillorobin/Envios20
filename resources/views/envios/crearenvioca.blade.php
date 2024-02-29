<x-default-layout>
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="assets/plugins/global/plugins.bundle.js"></script>
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
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5 " href="/envio/crear" aria-selected="true" role="tab">
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
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_products" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-package fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Casillero
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade " id="" role="tabpanel">
                        </div>

                        <div class="tab-pane fade active show" id="kt_ecommerce_settings_products" role="tabpanel">
                            <form id="kt_ecommerce_settings_general_products" class="form fv-plugins-bootstrap5 fv-plugins-framework " action="#">
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
                                        <select class="form-select form-select-solid" name="comercio" id="comercio" aria-label="Floating label select example">
                                            <option selected>selecione el comercio</option>
                                            <option value="1">ejemplo 1</option>
                                            <option value="2">ejemplo 2</option>
                                            <option value="3">ejemplo 3</option>
                                        </select>
                                        <label for="comercio" style="padding-left: 25px;">Comercio</label>
                                        <div id="comercioValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione un comercio.
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-12 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="Destinatario" id="Destinatario" placeholder="Destinatario" />
                                        <label for="Destinatario" style="padding-left: 25px;">Destinatario</label>
                                        <div id="destinatarioValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese el destinatario.
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-7 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="direccion" id="direccion" placeholder="Dirección" />
                                        <label for="direccion" style="padding-left: 25px;">Dirección</label>
                                        <div id="direccionValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese una dirección.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-5 mb-4">
                                        <input type="tel" class="form-control form-control-solid" name="telefono" id="telefono" placeholder="Teléfono" />
                                        <label for="telefono" style="padding-left: 25px;">Teléfono</label>
                                        <div id="telefonoValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un número de teléfono válido.
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="precio4" id="precio4" placeholder="Precio del paquete" />
                                        <label for="precio4" style="padding-left: 25px;">Precio del paquete</label>
                                        <div id="precio4ValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un precio válido para el paquete.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="envio4" id="envio4" placeholder="Precio del envío" />
                                        <label for="envio4" style="padding-left: 25px;">Precio del envío</label>
                                        <div id="envio4ValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un precio válido para el envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-solid" name="total4" id="total4" placeholder="Total a pagar" />
                                        <label for="total4" style="padding-left: 25px;">Total a pagar</label>
                                        <div id="total4ValidationFeedback" class="invalid-feedback">
                                            Por favor ingrese un total válido a pagar.
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-6 mb-4">
                                        <select class="form-select form-select-solid" name="cenvio4" id="cenvio4" aria-label="Floating label select example" required>
                                            <option selected>seleccione el estado cobro</option>
                                            <option value="Pendiente">Pendiente</option>
                                            <option value="Pagado">Pagado</option>
                                        </select>
                                        <label for="cenvio4" style="padding-left: 25px;">Cobro del envío</label>
                                        <div id="cenvio4ValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el estado de cobro del envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-6 mb-4">
                                        <select class="form-select form-select-solid" name="estado_pago" id="estado_pago" aria-label="Floating label select example" required>
                                            <option selected>seleccione el estado del pago</option>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">Pagado</option>
                                        </select>
                                        <label for="estado_pago" style="padding-left: 25px;">Estado del pago</label>
                                        <div id="estadoPagoValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el estado del pago.
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4 mx-4">
                                    <div class="form-floating col-lg-4 mb-4">
                                        <select class="form-select form-select-solid" name="tipo_envio" id="tipo_envio" aria-label="Floating label select example" required>
                                            <option selected>Seleccione el tipo de envío</option>
                                            <option value="Casillero">Casillero</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                        <label for="tipo_envio" style="padding-left: 25px;">Tipo de envío</label>
                                        <div id="tipoEnvioValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el tipo de envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <select class="form-select form-select-solid" name="estado_envio" id="estado_envio" aria-label="Floating label select example" required>
                                            <option selected>Seleccione el estado del envío</option>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entregar">Sin entregar</option>
                                        </select>
                                        <label for="estado_envio" style="padding-left: 25px;">Estado del envío</label>
                                        <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                            Por favor seleccione el estado del envío.
                                        </div>
                                    </div>
                                    <div class="form-floating col-lg-4 mb-4">
                                        <input type="date" class="form-control form-control-solid" name="fecha_entrega" id="fecha_entrega" placeholder="Fecha de entrega" />
                                        <label for="fecha_entrega" style="padding-left: 25px;">Fecha de entrega</label>
                                        <div id="fechaEntregaValidationFeedback" class="invalid-feedback">
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
                                                Cancel
                                            </button>
                                            <button type="submit" id="saveButton" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">
                                                    Save
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

                        <div class="tab-pane fade" id="" role="tabpanel">

                        </div>
                        <div class="tab-pane fade" id="" role="tabpanel">

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
    flatpickr("#fecha_entrega", {
        dateFormat: 'Y-m-d',
    });
</script>
<script src="assets/js/validacionesenvioca.js"></script>
<script>
    $(document).ready(function() {

        // Función para calcular el total
        function calcularTotal() {
            const precioPaquete = parseFloat($("#precio4").val()) || 0;
            const precioEnvio = parseFloat($("#envio4").val()) || 0;
            const estadoCobro = $("#cenvio4").val();
            const estadoPago = $("#estado_pago").val();

            let total = precioPaquete + precioEnvio;

            if (estadoCobro === "Pendiente") {
                total -= precioEnvio;
            }

            if (estadoPago === "por_pagar") {
                total -= precioPaquete;
            }

            $("#total4").val(total.toFixed(2));
        }

        // Calcular total al cargar la página
        calcularTotal();
        $("#precio4").change(calcularTotal);
        $("#envio4").change(calcularTotal);
        $("#cenvio4").change(calcularTotal);
        $("#estado_pago").change(calcularTotal);

        $("#envio4").keyup(calcularTotal);

    });
</script>
