<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/perfil.css') }}">
</head>

<body>
    <x-default-layout>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Informacion del empleado </h1>
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
                        <li class="breadcrumb-item text-muted">Perfil de empleado</li>
                    </ul>
                </div>
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap">
                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="/fotos/{{$empleado[0]->foto}}" alt="image" />
                                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <div class="d-flex flex-column">
                                        <div class="row">
                                            <!-- Primer bloque -->
                                            <div class="col-lg-6 mb-2">
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">{{$empleado[0]->nombre}}</a>
                                                    <a href="#">
                                                        <i class="ki-duotone ki-verify fs-1 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap fw-semibold">
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>{{$empleado[0]->cargo}}</a>
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <i class="ki-duotone ki-geolocation fs-5 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>{{$empleado[0]->agencia}}</a>
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <i class="ki-duotone ki-sms fs-5 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>{{$empleado[0]->telefono}}</a>
                                        </div>
                                    </div>
                                    <div class="d-flex my-1">
                                        <a href="#" class="btn btn-sm btn-light-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_">Alta</a>
                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Eliminar</a>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-stack ">
                                    <div class="d-flex flex-column flex-grow-1 mt-6">
                                        <div class="fw-semibold fs-6 text-black-500 text-right">Direccion</div>
                                        <div class="fw-semibold fs-5 text-black-100 text-right">{{ $empleado[0]->direccion }}</div>
                                    </div>

                                    <div class="d-flex align-items-center w-200px w-sm-250px flex-column mt-3">
                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                            <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                            <span class="fw-bold fs-6">50%</span>
                                        </div>
                                        <div class="h-5px mx-3 w-100 bg-light mb-1">
                                            <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/empleados/{{$empleado[0]->id}}">Detalles</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="/empleados/editar/{{$empleado[0]->id}}">Editar</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5" href="/faltas/listafaltas">Historial de faltas</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Información del empleado</h3>
                        </div>
                        <div class="card-toolbar">

                        </div>
                    </div>

                    <form action="/empleado/update/{{$empleado[0]->id}}" method="POST" id="kt_account_profile_details_form" class="form" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <div class="card-body border-top p-9">
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label fw-semibold fs-6">Foto</label>
                                <div class="col-lg-8">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/fotos/{{$empleado[0]->foto}})"></div>
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
                                    <input type="text" name="fname" id="fname" class="form-control form-control-lg form-control-solid" placeholder="Nombre completo" required value="{{$empleado[0]->nombre}}" />
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Dirección</label>
                                <div class="col-lg-8">
                                    <input type="text" name="direccion" id="direccion" class="form-control form-control-lg form-control-solid" placeholder="Dirección" required value="{{$empleado[0]->direccion}}" />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Dirección</label>
                                <div class="col-lg-8">
                                    <input type="text" name="direccion" id="direccion" class="form-control form-control-lg form-control-solid" placeholder="Dirección" required value="{{$empleado[0]->direccion}}" />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Agencia de registro</label>
                                <div class="col-lg-8">
                                    <input type="text" name="agencia" id="agencia" class="form-control form-control-lg form-control-solid" placeholder="Agencia de registro" value="{{$empleado[0]->agencia}}">
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Telefono</label>
                                <div class="col-lg-3">
                                    <input type="tel" name="telefono" id="telefono" class="form-control form-control-lg form-control-solid" placeholder="Telefono" required value="{{$empleado[0]->telefono}}" />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                                <label class="col-lg-2 col-form-label">WhatsApp</label>
                                <div class="col-lg-3">
                                    <input type="tel" name="whatsapp" class="form-control form-control-lg form-control-solid" placeholder="WhatsApp" redonly value="{{$empleado[0]->whatsapp}}" />
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="email">Correo Electrónico</label>
                                <div class="col-lg-3">
                                    <input type="email" name="email" id="email" class="form-control form-control-lg form-control-solid" placeholder="Email" required value="{{$empleado[0]->correo}}" />
                                    <div class="invalid-feedback">Este campo es obligatorio y debe ser una dirección de correo electrónico válida.</div>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-semibold fs-6">Fecha de nacimiento</label>
                                <div class="col-lg-3">
                                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control form-control-lg form-control-solid" placeholder="Fecha de nacimiento" value="{{$empleado[0]->fecha_nacimiento}}" />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">DUI</label>
                                <div class="col-lg-3">
                                    <input type="text" name="dui" id="dui" class="form-control form-control-lg form-control-solid" placeholder="DUI" value="{{$empleado[0]->dui}}" />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                                <label class="col-lg-2 col-form-label">Licencia</label>
                                <div class="col-lg-3">
                                    <input type="text" name="licencia" class="form-control form-control-lg form-control-solid" placeholder="Licencia" value="{{$empleado[0]->licencia}}" />
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="referencia_personal">Referencia Personal</label>
                                <div class="col-lg-3">
                                    <input type="text" name="referencia" id="referencia_personal" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->referenciap}}" required />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-semibold fs-6">Telefono</label>
                                <div class="col-lg-3">
                                    <input type="tel" name="telefono1" id="telefono1" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->telefonop}}" required />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="referencia_familiar">Referencia Familiar</label>
                                <div class="col-lg-3">
                                    <input type="text" name="referencia2" id="referencia_familiar" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->referenciaf}} " required />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-semibold fs-6">Telefono</label>
                                <div class="col-lg-3">
                                    <input type="tel" name="telefono2" id="telefono2" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->telefonof}}" required />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="contacto_emergencia">Contacto de emergencia</label>
                                <div class="col-lg-3">
                                    <input type="text" name="contacto_emergencia" id="contacto_emergencia" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->contactonombre}}" required />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-semibold fs-6">Telefono</label>
                                <div class="col-lg-3">
                                    <input type="tel" name="telefono3" id="telefono3" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->contactotel}}" required />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Cargo</label>
                                <div class="col-lg-3">
                                    <select name="cargo" id="cargo" class="form-control form-control-lg form-control-solid" data-control="select2" required>
                                        <option>{{$empleado[0]->cargo}}</option>
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
                                    </select>
                                    <div class="invalid-feedback">Por favor, seleccione un cargo.</div>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-semibold fs-6">Fecha de Alta</label>
                                <div class="col-lg-3">
                                    <input type="date" name="fecha_alta" id="fecha_alta" class="form-control form-control-lg form-control-solid" placeholder="Fecha de Alta" value="{{$empleado[0]->fecha_alta}}" />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label">Número de ISSS</label>
                                <div class="col-lg-3">
                                    <input type="text" name="n_isss" class="form-control form-control-lg form-control-solid" placeholder="# de ISSS" value="{{$empleado[0]->n_isss}}" />
                                </div>
                                <label class="col-lg-2 col-form-label">Número de AFP</label>
                                <div class="col-lg-3">
                                    <input type="text" name="n_afp" class="form-control form-control-lg form-control-solid" placeholder="# de AFP" value="{{$empleado[0]->n_afp}}" />
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label">Fecha de baja</label>
                                <div class="col-lg-3">
                                    <input type="date" name="fecha_baja" id="fecha_baja" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->fecha_baja}}" />
                                </div>
                                <label class="col-lg-2 col-form-label">Motivo</label>
                                <div class="col-lg-3">
                                    <input type="text" name="Motivo" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->motivo}}" />
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Salario</label>
                                <div class="col-lg-3">
                                    <input type="text" name="salario" id="salario" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->salario}}" />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                                <label class="col-lg-2 col-form-label">Estado</label>
                                <div class="col-lg-3">
                                    <select name="estado" id="estado" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar estado" required>
                                        <option>{{$empleado[0]->estado}}</option>
                                        <option value="Alta">Alta</option>
                                        <option value="Baja">Baja</option>¿
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label">Nota</label>
                                <div class="col-lg-8">
                                    <textarea name="nota" class="form-control form-control-lg form-control-solid">{{$empleado[0]->nota}}</textarea>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <a href="/empleado" class="btn btn-primary btn-active-light-primary me-2">Regresar a listado</a>
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Guardar Cambios</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
    </x-default-layout>
    <script src="{{ asset('assets/js/selectempleados.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>}
    <script src="assets/js/custom/account/settings/signin-methods.js"></script>

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
            // Función para validar el número de teléfono
            function validarTelefono(telefono) {
                // Expresión regular para validar números de teléfono de 10 dígitos
                var telefonoRegex = /^[267]\d{7}$/;
                return telefonoRegex.test(telefono);
            }

            // Validación para el campo de teléfono
            $("#telefono").focusout(function() {
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
            $("#kt_account_profile_details_form").submit(function(e) {
                // Validar el campo de teléfono antes de enviar el formulario
                var telefonoValue = $("#telefono").val().trim();
                if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
                    e.preventDefault(); // Evitar que el formulario se envíe
                    $("#telefono").addClass("is-invalid");
                    console.log('Por favor, corrija los errores en el formulario antes de enviar.');
                }
                // Puedes agregar más lógica de validación aquí si es necesario
            });
        });
        $(document).ready(function() {
            // Función para validar el número de teléfono
            function validarTelefono(telefono) {
                // Expresión regular para validar números de teléfono de 10 dígitos
                var telefonoRegex = /^[267]\d{7}$/;
                return telefonoRegex.test(telefono);
            }

            // Validación para el campo de teléfono
            $("#telefono1").focusout(function() {
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
            $("#kt_account_profile_details_form").submit(function(e) {
                // Validar el campo de teléfono antes de enviar el formulario
                var telefonoValue = $("#telefono1").val().trim();
                if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
                    e.preventDefault(); // Evitar que el formulario se envíe
                    $("#telefono1").addClass("is-invalid");
                    console.log('Por favor, corrija los errores en el formulario antes de enviar.');
                }
                // Puedes agregar más lógica de validación aquí si es necesario
            });
        });
        $(document).ready(function() {
            // Función para validar el número de teléfono
            function validarTelefono(telefono) {
                // Expresión regular para validar números de teléfono de 10 dígitos
                var telefonoRegex = /^[267]\d{7}$/;
                return telefonoRegex.test(telefono);
            }

            // Validación para el campo de teléfono
            $("#telefono2").focusout(function() {
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
            $("#kt_account_profile_details_form").submit(function(e) {
                // Validar el campo de teléfono antes de enviar el formulario
                var telefonoValue = $("#telefono2").val().trim();
                if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
                    e.preventDefault(); // Evitar que el formulario se envíe
                    $("#telefono2").addClass("is-invalid");
                    console.log('Por favor, corrija los errores en el formulario antes de enviar.');
                }
                // Puedes agregar más lógica de validación aquí si es necesario
            });
        });
        $(document).ready(function() {
            // Función para validar el número de teléfono
            function validarTelefono(telefono) {
                // Expresión regular para validar números de teléfono de 10 dígitos
                var telefonoRegex = /^[267]\d{7}$/;
                return telefonoRegex.test(telefono);
            }

            // Validación para el campo de teléfono
            $("#telefono3").focusout(function() {
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
            $("#kt_account_profile_details_form").submit(function(e) {
                // Validar el campo de teléfono antes de enviar el formulario
                var telefonoValue = $("#telefono3").val().trim();
                if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
                    e.preventDefault(); // Evitar que el formulario se envíe
                    $("#telefono3").addClass("is-invalid");
                    console.log('Por favor, corrija los errores en el formulario antes de enviar.');
                }
                // Puedes agregar más lógica de validación aquí si es necesario
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