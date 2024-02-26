<!DOCTYPE html>
<html>

<head>
    <title>Comercio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/perfil.css') }}">
    <style>
        label.required::after {
            content: none;

        }
    </style>
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
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Nombre del comercio" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Dirección del comercio</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Dirección del comercio" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono" class="form-control form-control-lg form-control-solid" placeholder="Telefono" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">WhatsApp</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="whatsapp" class="form-control form-control-lg form-control-solid" placeholder="WhatsApp" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de Alta</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_alta" class="form-control form-control-lg form-control-solid" id="fecha_alta" placeholder="Fecha de alta" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Fecha de baja</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_baja" class="form-control form-control-lg form-control-solid" id="fecha_baja" placeholder="Fecha de baja" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Tipo de comercio</label>
                                    <div class="col-lg-3">
                                        <select name="estado_pagop" class="form-select form-select-solid" id="estado_pagop" required>
                                            <option value="Pequeño">Pequeño</option>
                                            <option value="grande">grande</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Estado de comercio</label>
                                    <div class="col-lg-3">
                                        <select name="estado_pagop" class="form-select form-select-solid" id="estado_pagop" required>
                                            <option value="Alta">Alta</option>
                                            <option value="baja">baja</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Agencia de registro</label>
                                    <div class="col-lg-8">
                                        <select name="estado_pagop" class="form-select form-select-solid" id="estado_pagop" required>
                                            <option value="Santa_ana">Santa ana</option>
                                            <option value="San_Salvador">San Salvador</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Correo Electrónico</label>
                                    <div class="col-lg-8">
                                        <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nota</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="nota" class="form-control form-control-lg form-control-solid" placeholder="Nota" />
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre del titular de la cuenta</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Ingrese el nombre del titular de la cuenta" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre del banco</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Ingrese el nombre del banco" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Numero de cuenta</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="cuenta" class="form-control form-control-lg form-control-solid" placeholder="Ingrese el numero de cuenta" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Tipo de cuenta</label>
                                    <div class="col-lg-8">
                                        <select name="estado_pagop" class="form-select form-select-solid" id="estado_pagop" required>
                                            <option value="Ahorros">Ahorros</option>
                                            <option value="natural">natural</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Cuenta de chivo</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="chivo" class="form-control form-control-lg form-control-solid" placeholder="# de chivo" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Cuenta tigo money</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="tigo" class="form-control form-control-lg form-control-solid" placeholder="# de tigo money" />
                                    </div>
                                </div>



                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre de la empresa</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Ingrese el nombre de la empresa o persona natural" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Giro</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="giro" class="form-control form-control-lg form-control-solid" placeholder="Ingrese el giro de la empresa" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Tipo de contribuyente</label>
                                    <div class="col-lg-3">
                                        <select name="contribuyente" class="form-select form-select-solid" id="contribuyente" required>
                                            <option value="Ahorros">pequeña</option>
                                            <option value="natural">natural</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Numero de DUI</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="dui" class="form-control form-control-lg form-control-solid" placeholder="DUI" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Numero de IVA</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="nit" class="form-control form-control-lg form-control-solid" placeholder="Ingrese el NIT de la empresa" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Numero de regristro (NCR)</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="NCR" class="form-control form-control-lg form-control-solid" placeholder="Ingrese el numero de NCR" />
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Dirección Fisical</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Ingrese la dirección fiscal de la empresa" />
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset" class="btn btn-primary btn-active-light-primary me-2">Descartar</button>
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
            dateFormat: 'Y-m-d',
        });
        flatpickr("#fecha_baja", {
            dateFormat: 'Y-m-d',
        });
    </script>

</body>

</html>