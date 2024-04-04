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
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-4 ms-2">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Melo Express</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Comercio</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Crear comercio</li>
                    </ul>
                </div>

                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Crear comercio</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <form action="#" method="POST" id="kt_account_profile_details_form" class="form">
                            @csrf
                            @method('GET')
                            <div class="card-body border-top p-9">
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
                                    <div class="col-lg-3">
                                        <input id="kt_inputmask_2" type="tel" name="telefono" class="form-control form-control-lg form-control-solid" placeholder="Telefono" />
                                    </div>

                                    <label class="col-lg-2 col-form-label">WhatsApp</label>
                                    <div class="col-lg-3">
                                        <input id="kt_inputmask_3" type="tel" name="whatsapp" class="form-control form-control-lg form-control-solid" placeholder="WhatsApp" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de Alta</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="fecha_alta" class="form-control form-control-lg form-control-solid" id="fecha_alta" placeholder="Fecha de alta" readonly />
                                    </div>

                                    <label class="col-lg-2 col-form-label">Fecha de baja</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_baja" class="form-control form-control-lg form-control-solid" id="fecha_baja" placeholder="Fecha de baja" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Tipo de comercio</label>
                                    <div class="col-lg-3">
                                        <select name="Tipo" id="Tipo" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Tipo de comercio" required>
                                            <option value="Emprendedor">Emprendedor</option>
                                            <option value="Comercio Mediano">Comercio Mediano</option>
                                            <option value="Empresa">Empresa</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Estado de comercio</label>
                                    <div class="col-lg-3">
                                        <select name="Estado_comercio" id="Estado_comercio" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Estado de comercioo" required>
                                            <option value="Alta">Alta</option>
                                            <option value="baja">Baja</option>
                                            <option value="Lista_negra">Lista negra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Agencia de registro</label>
                                    <div class="col-lg-8">
                                        <select name="Agencia_registro" id="Agencia_registro" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Agencia de registro" required>
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
                                <div class="separator my-10"></div>
                                <h4 class="text-center">
                                    Datos Bancarios
                                </h4>
                                <br>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Nombre del titular de la cuenta</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Ingrese el nombre del titular de la cuenta" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Nombre del banco</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Ingrese el nombre del banco" />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Numero de cuenta</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="cuenta" class="form-control form-control-lg form-control-solid" placeholder="Ingrese el numero de cuenta" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Numero de DUI</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="dui" class="form-control form-control-lg form-control-solid" placeholder="DUI" />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Tipo de cuenta</label>
                                    <div class="col-lg-3">
                                        <select name="Tipo_cuenta" id="Tipo_cuenta" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Tipo de cuenta" required>
                                            <option></option>
                                            <option value="Ahorros">Ahorros</option>
                                            <option value="Corriente">Corriente</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Cuenta de chivo</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="chivo" class="form-control form-control-lg form-control-solid" placeholder="# de chivo" />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Cuenta tigo money</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="tigo" class="form-control form-control-lg form-control-solid" placeholder="# de tigo money" />
                                    </div>
                                </div>
                                <div class="separator my-10"></div>
                                <h4 class="text-center">
                                    Datos de la empresa
                                </h4>
                                <br>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Nombre de la empresa</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Ingrese el nombre de la empresa o persona natural" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Tipo de contribuyente</label>
                                    <div class="col-lg-3">
                                        <select name="Tipo_contribuyente" id="Tipo_contribuyente" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Tipo de contribuyente" required>
                                            <option></option>
                                            <option value="pequeño">Pequeño</option>
                                            <option value="Mediano">Mediano</option>
                                            <option value="Grande">Grande</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Giro</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="giro" class="form-control form-control-lg form-control-solid" placeholder="Ingrese el giro de la empresa" />
                                    </div>

                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Numero de IVA</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="nit" class="form-control form-control-lg form-control-solid" placeholder="Ingrese el NIT de la empresa" />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Numero de regristro (NCR)</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="NCR" class="form-control form-control-lg form-control-solid" placeholder="Ingrese el numero de NCR" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Dirección Fisical</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Ingrese la dirección fiscal de la empresa" />
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <a href="/comercio" class="btn btn-primary btn-active-light-primary me-2">Descartar</a>
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Guardar Cambios</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-default-layout>
    <script src="{{ asset('assets/js/selectempleados.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        flatpickr("#fecha_alta", {
            defaultDate: "today",
            clickOpens: false,
            allowInput: false,
            showClose: false,
            showClear: false,
            disableMobile: true
        });
        flatpickr("#fecha_baja", {
            dateFormat: 'Y-m-d',
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#fname").focusout(function() {
                var value = $(this).val();
                if (value.trim() === "") {
                    $(this).addClass("is-invalid");
                    $(this).removeClass("is-valid");
                    console.log('El campo "Nombre del comercio" es obligatorio');
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                }
            });
            $("#kt_account_profile_details_submit").click(function() {
                var nombreValue = $("#fname").val().trim();
                if (nombreValue === "") {
                    $(".invalid-feedback").show();
                } else {
                    $(".invalid-feedback").hide();
                    $("#kt_account_profile_details_form").submit();
                }
            });

        });


        Inputmask({
            "mask": "(+999) 9999-9999"
        }).mask("#kt_inputmask_2");

        Inputmask({
            "mask": "(+999) 9999-9999"
        }).mask("#kt_inputmask_3");
    </script>

</body>

</html>