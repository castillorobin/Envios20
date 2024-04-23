<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/perfil.css') }}">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</head>

<body>
    <x-default-layout>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-4 ms-2">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Melo Express</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Empleados</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Crear</li>
                    </ul>
                </div>
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Crear Empleado</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <form action="/empleadoguardar" method="POST" id="kt_account_profile_details_form" class="form" enctype="multipart/form-data">
                            @csrf
                            @method('GET')
                            <div class="card-body border-top p-9">
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">Foto</label>
                                    <div class="col-lg-8">
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/300-1.jpg)"></div>
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                <i class="ki-duotone ki-pencil fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="file" name="foto" accept=".png, .jpg, .jpeg" capture="camera" /> <!-- Agregar capture="camera" -->
                                                <input type="hidden" name="avatar_remove" />
                                            </label>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="fname">Nombre completo</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="fname" id="fname" class="form-control form-control-lg form-control-solid" placeholder="Nombre completo" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Dirección</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="direccion" id="direccion" class="form-control form-control-lg form-control-solid" placeholder="Dirección" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Agencia de registo</label>
                                    <div class="col-lg-8">
                                        <select name="agencia" id="agencia" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar agencia" required>
                                            <option value="Santa Ana">Santa ana</option>
                                            <option value="San Miguel">San Miguel</option>
                                            <option value="San Salvador">San salvador </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono" id="telefono" class="form-control form-control-lg form-control-solid" placeholder="Telefono" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <label class="col-lg-2 col-form-label">WhatsApp</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="whatsapp" id="whatsapp" class="form-control form-control-lg form-control-solid" placeholder="WhatsApp" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="email">Correo Electrónico</label>
                                    <div class="col-lg-3">
                                        <input type="email" name="email" id="email" class="form-control form-control-lg form-control-solid" placeholder="Email" required />
                                        <div class="invalid-feedback">Este campo es obligatorio y debe ser una dirección de correo electrónico válida.</div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Fecha de nacimiento</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control form-control-lg form-control-solid" placeholder="Fecha de nacimiento" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">DUI</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="dui" id="dui" class="form-control form-control-lg form-control-solid" placeholder="DUI" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Licencia</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="licencia" class="form-control form-control-lg form-control-solid" placeholder="Licencia" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="referencia_personal">Referencia Personal</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="referencia" id="referencia_personal" class="form-control form-control-lg form-control-solid" placeholder="Referencia Personal" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono1" id="telefono1" class="form-control form-control-lg form-control-solid" placeholder="Telefono" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="referencia_familiar">Referencia Familiar</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="referencia2" id="referencia_familiar" class="form-control form-control-lg form-control-solid" placeholder="Referencia Familiar " required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono2" id="telefono2" class="form-control form-control-lg form-control-solid" placeholder="Telefono" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>

                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="contacto_emergencia">Contacto de emergencia</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="contacto_emergencia" id="contacto_emergencia" class="form-control form-control-lg form-control-solid" placeholder="Nombre de Contacto" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono3" id="telefono3" class="form-control form-control-lg form-control-solid" placeholder="Telefono" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Cargo</label>
                                    <div class="col-lg-3">
                                        <select name="cargo" id="cargo" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar cargo" required>
                                            <option></option>
                                            <option value="CEO">CEO</option>
                                            <option value="Director general">Director general</option>
                                            <option value="Gerente general">Gerente general</option>
                                            <option value="Gerente de recursos humanos">Gerente de recursos humanos</option>
                                            <option value="Gerente financiero">Gerente financiero</option>
                                            <option value="Gerente de ventas">Gerente de ventas</option>
                                            <option value="Gerente de procesos">Gerente de procesos</option>
                                            <option value="Gerente de agencia">Gerente de agencia</option>
                                            <option value="Jefe de atencion al cliente">Jefe de atención al cliente</option>
                                            <option value="Jefe de digitado">Jefe de digitado</option>
                                            <option value="Jefe de almacen">Jefe de almacén</option>
                                            <option value="Jefe de reparto domicilios">Jefe de reparto domicilios</option>
                                            <option value="Jefe de reparto departamental">Jefe de reparto departamental</option>
                                            <option value="Ejecutivo de atencion al cliente">Ejecutivo de atención al cliente</option>
                                            <option value="Ejecutivo de digitacion">Ejecutivo de digitación</option>
                                            <option value="Profesional de reparto de domicilios">Profesional de reparto de domicilios</option>
                                            <option value="Profesional de reparto en ruta">Profesional de reparto en ruta</option>
                                            <option value="Auxiliar de reparto">Auxiliar de reparto</option>
                                            <option value="Encargado de limpieza">Encargado de limpieza</option>
                                            <option value="Operario de almacen">Operario de almacen</option>
                                        </select>
                                        <div class="invalid-feedback">Por favor, seleccione un cargo.</div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Fecha de Alta</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_alta" id="fecha_alta" class="form-control form-control-lg form-control-solid" placeholder="Fecha de Alta" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Número de ISSS</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="n_isss" class="form-control form-control-lg form-control-solid" placeholder="# de ISSS" />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Número de AFP</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="n_afp" class="form-control form-control-lg form-control-solid" placeholder="# de AFP" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Fecha de baja</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_baja" id="fecha_baja" class="form-control form-control-lg form-control-solid" placeholder="Fecha de baja" />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Motivo</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="Motivo" class="form-control form-control-lg form-control-solid" placeholder="Motivo" />
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Salario</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="salario" id="salario" class="form-control form-control-lg form-control-solid" placeholder="$" required />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Estado</label>
                                    <div class="col-lg-3">
                                        <select name="estado" id="estado" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar estado" required>
                                            <option value="Alta">Alta</option>
                                            <option value="Baja">Baja</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Nota</label>
                                    <div class="col-lg-8">
                                        <textarea name="nota" class="form-control form-control-lg form-control-solid" placeholder="Nota"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                <!--begin::Content-->
                                <div class="mb-3 mb-md-0 fw-semibold">
                                </div>
                                <!--end::Content-->
                                <!--begin::Action-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <a href="/empleado" class="btn btn-primary btn-active-light-primary me-2">Descartar</a>
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Guardar Cambios</button>
                                </div> <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                        </form>
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Sign-in Method-->
        </div>
        </div>

    </x-default-layout>
    <script src="{{ asset('assets/js/selectempleados.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

    <script>
        flatpickr("#fecha_nacimiento", {
            dateFormat: 'Y-m-d',
        });
    </script>
    <script>
        flatpickr("#fecha_alta", {
            dateFormat: 'Y-m-d',
            defaultDate: new Date().toISOString().split('T')[0] // Esto establece la fecha predeterminada como la fecha actual
        });
    </script>

    <script>
        flatpickr("#fecha_baja", {
            dateFormat: 'Y-m-d',
        });
    </script>
    <script>
        Inputmask({
            "mask": "(+999) 9999-9999"
        }).mask("#whatsapp");
    </script>

    <script>
        $(document).ready(function() {
            // Validación solo para el campo "Número de Guía" y permitir solo números
            $("#id").focusout(function() {
                var value = $("#id").val();
                if (value.length == 0 || !$.isNumeric(value)) {
                    $("#id").addClass("is-invalid");
                    $("#id").removeClass("is-valid");
                    console.log('El campo debe contener solo números');
                } else {
                    $("#id").removeClass("is-invalid");
                    $("#id").addClass("is-valid");
                }
                console.log('Este campo es obligatorio');
            });

        });
        $(document).ready(function() {
            // Validación para el campo "Destinatario"
            $("#fname").focusout(function() {
                var value = $(this).val();
                if (value.trim() === "") {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('El campo "Nombre completo" es obligatorio');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
            });
        });
        $(document).ready(function() {
            // Validación para el campo "Destinatario"
            $("#direccion").focusout(function() {
                var value = $(this).val();
                if (value.trim() === "") {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('El campo "Direccion" es obligatorio');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
            });
        });

        $(document).ready(function() {
            // Máscara y validación para el campo de teléfono
            Inputmask({
                mask: "(+999) 9999-9999",
                clearIncomplete: true
            }).mask("#telefono");

            // Función para validar el número de teléfono de El Salvador
            function validarTelefono(telefono) {
                // Expresión regular para validar números de teléfono de El Salvador
                var telefonoRegex = /^\(\+503\)\s\d{4}-\d{4}$/;
                return telefonoRegex.test(telefono);
            }

            // Validación al perder el foco
            $("#telefono").focusout(function() {
                var telefonoValue = $(this).val().trim();
                if (telefonoValue === "") {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    $(this).next(".invalid-feedback").text("Este campo es obligatorio.").show();
                } else if (!validarTelefono(telefonoValue)) {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    $(this).next(".invalid-feedback").text("Por favor ingrese un número de teléfono válido.").show();
                } else {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                    $(this).next(".invalid-feedback").hide();
                }
            });

            // Modificación para manejar el envío del formulario
            $("#kt_account_profile_details_form").submit(function(e) {
                var telefonoValue = $("#telefono").val().trim();
                if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
                    e.preventDefault();
                    $("#telefono").removeClass("is-valid").addClass("is-invalid");
                    $("#telefono").next(".invalid-feedback").text("Por favor, corrija los errores en el formulario antes de enviar.").show();
                }
            });
        });

        $(document).ready(function() {
            // Máscara y validación para el campo de teléfono
            Inputmask({
                mask: "(+999) 9999-9999",
                clearIncomplete: true
            }).mask("#telefono1");

            // Función para validar el número de teléfono de El Salvador
            function validarTelefono(telefono) {
                // Expresión regular para validar números de teléfono de El Salvador
                var telefonoRegex = /^\(\+503\)\s\d{4}-\d{4}$/;
                return telefonoRegex.test(telefono);
            }

            // Validación al perder el foco
            $("#telefono1").focusout(function() {
                var telefonoValue = $(this).val().trim();
                if (telefonoValue === "") {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    $(this).next(".invalid-feedback").text("Este campo es obligatorio.").show();
                } else if (!validarTelefono(telefonoValue)) {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    $(this).next(".invalid-feedback").text("Por favor ingrese un número de teléfono válido.").show();
                } else {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                    $(this).next(".invalid-feedback").hide();
                }
            });

            // Modificación para manejar el envío del formulario
            $("#kt_account_profile_details_form").submit(function(e) {
                var telefonoValue = $("#telefono1").val().trim();
                if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
                    e.preventDefault();
                    $("#telefono1").removeClass("is-valid").addClass("is-invalid");
                    $("#telefono1").next(".invalid-feedback").text("Por favor, corrija los errores en el formulario antes de enviar.").show();
                }
            });
        });

        $(document).ready(function() {
            // Máscara y validación para el campo de teléfono
            Inputmask({
                mask: "(+999) 9999-9999",
                clearIncomplete: true
            }).mask("#telefono2");

            // Función para validar el número de teléfono de El Salvador
            function validarTelefono(telefono) {
                // Expresión regular para validar números de teléfono de El Salvador
                var telefonoRegex = /^\(\+503\)\s\d{4}-\d{4}$/;
                return telefonoRegex.test(telefono);
            }

            // Validación al perder el foco
            $("#telefono2").focusout(function() {
                var telefonoValue = $(this).val().trim();
                if (telefonoValue === "") {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    $(this).next(".invalid-feedback").text("Este campo es obligatorio.").show();
                } else if (!validarTelefono(telefonoValue)) {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    $(this).next(".invalid-feedback").text("Por favor ingrese un número de teléfono válido.").show();
                } else {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                    $(this).next(".invalid-feedback").hide();
                }
            });

            // Modificación para manejar el envío del formulario
            $("#kt_account_profile_details_form").submit(function(e) {
                var telefonoValue = $("#telefono2").val().trim();
                if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
                    e.preventDefault();
                    $("#telefono2").removeClass("is-valid").addClass("is-invalid");
                    $("#telefono2").next(".invalid-feedback").text("Por favor, corrija los errores en el formulario antes de enviar.").show();
                }
            });
        });

        $(document).ready(function() {
            // Máscara y validación para el campo de teléfono
            Inputmask({
                mask: "(+999) 9999-9999",
                clearIncomplete: true
            }).mask("#telefono3");

            // Función para validar el número de teléfono de El Salvador
            function validarTelefono(telefono) {
                // Expresión regular para validar números de teléfono de El Salvador
                var telefonoRegex = /^\(\+503\)\s\d{4}-\d{4}$/;
                return telefonoRegex.test(telefono);
            }

            // Validación al perder el foco
            $("#telefono3").focusout(function() {
                var telefonoValue = $(this).val().trim();
                if (telefonoValue === "") {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    $(this).next(".invalid-feedback").text("Este campo es obligatorio.").show();
                } else if (!validarTelefono(telefonoValue)) {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    $(this).next(".invalid-feedback").text("Por favor ingrese un número de teléfono válido.").show();
                } else {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                    $(this).next(".invalid-feedback").hide();
                }
            });

            // Modificación para manejar el envío del formulario
            $("#kt_account_profile_details_form").submit(function(e) {
                var telefonoValue = $("#telefono3").val().trim();
                if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
                    e.preventDefault();
                    $("#telefono3").removeClass("is-valid").addClass("is-invalid");
                    $("#telefono3").next(".invalid-feedback").text("Por favor, corrija los errores en el formulario antes de enviar.").show();
                }
            });
        });

        $(document).ready(function() {
            // Validación para el campo "Destinatario"
            $("#email").focusout(function() {
                var value = $(this).val();
                if (value.trim() === "") {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('El campo "Email" es obligatorio');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
            });
        });
        $(document).ready(function() {
            // Validación para el campo de fecha de entrega al enviar el formulario
            $("form").submit(function(event) {
                var value = $("#fecha_nacimiento").val().trim();
                if (value === "") {
                    $("#fecha_nacimiento").addClass("is-invalid");
                    $("#fecha_nacimiento").removeClass("is-valid");
                    $("#fechaEntregapValidationFeedback").addClass("invalid-feedback");
                    event.preventDefault(); // Evita que el formulario se envíe si la validación falla
                } else {
                    $("#fecha_nacimiento").removeClass("is-invalid");
                    $("#fecha_nacimiento").addClass("is-valid");
                }
            });
        });
        $(document).ready(function() {
            // Validación para el campo "dui"
            $("#dui").focusout(function() {
                var value = $(this).val();
                if (value.trim() === "") {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('El campo "dui" es obligatorio');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
            });
            Inputmask({
                "mask": "99999999-9",
                "clearIncomplete": true // Permite que el usuario borre el contenido incompleto
            }).mask("#dui");
        });
        $(document).ready(function() {
            // Validación para el campo "dui"
            $("#referencia_personal").focusout(function() {
                var value = $(this).val();
                if (value.trim() === "") {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('El campo "referencia" es obligatorio');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
            });
        });
        $(document).ready(function() {
            // Validación para el campo "dui"
            $("#referencia_familiar").focusout(function() {
                var value = $(this).val();
                if (value.trim() === "") {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('El campo "referencia" es obligatorio');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
            });
        });
        $(document).ready(function() {
            // Validación para el campo "dui"
            $("#contacto_emergencia").focusout(function() {
                var value = $("#contacto_emergencia").val();
                if (value.trim() === "") {
                    $("#contacto_emergencia").addClass("is-invalid");
                    $("#contacto_emergencia").removeClass("is-valid");
                    console.log('El campo "contacto emergencia" es obligatorio');
                } else {
                    $("#contacto_emergencia").removeClass("is-invalid");
                    $("#contacto_emergencia").addClass("is-valid");
                }
            });
        });
        $(document).ready(function() {
            // Validación para el campo de fecha de entrega al enviar el formulario
            $("form").submit(function(event) {
                var value = $("#fecha_alta").val().trim();
                if (value === "") {
                    $("#fecha_alta").addClass("is-invalid");
                    $("#fecha_alta").removeClass("is-valid");
                    $("#fechaEntregapValidationFeedback").addClass("invalid-feedback");
                    event.preventDefault(); // Evita que el formulario se envíe si la validación falla
                } else {
                    $("#fecha_alta").removeClass("is-invalid");
                    $("#fecha_alta").addClass("is-valid");
                }
            });
        });

        $("cargo").focusout(function() {
            var value = $("cargo").val();
            if (value.length == 0) {
                $("cargo").addClass("is-invalid");
                $("cargo").removeClass("is-valid");
            } else {
                $("cargo").removeClass("is-invalid");
                $("cargo").addClass("is-valid");
            }
            console.log('Este campo es obligatorio');
        });
    </script>
</body>

</html>