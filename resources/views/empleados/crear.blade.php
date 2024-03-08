<!DOCTYPE html>
<html>

<head>
    <title>Empleados</title>
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
                        <form action="/empleadoguardar" method="POST" id="kt_account_profile_details_form" class="form">
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
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
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
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre</label>
                                    <div class="col-lg-8">
                                        <div class="col-lg-10 fv-row">
                                            <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Nombre completo" value="Max" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Correo Electrónico</label>
                                    <div class="col-lg-8">
                                        <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" />
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
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de Nacimiento</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_nacimiento" class="form-control form-control-lg form-control-solid" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">DUI</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="dui" class="form-control form-control-lg form-control-solid" placeholder="DUI" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Dirección</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Dirección" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Cargo</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="cargo" class="form-control form-control-lg form-control-solid" placeholder="Cargo" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Fecha de Alta</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_alta" class="form-control form-control-lg form-control-solid" />
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6 ">Número de ISSS</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="n_isss" class="form-control form-control-lg form-control-solid" placeholder="N de ISSS" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Número de AFP</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="n_afp" class="form-control form-control-lg form-control-solid" placeholder="N de AFP" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de baja</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_baja" class="form-control form-control-lg form-control-solid" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Motivo</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="Motivo" class="form-control form-control-lg form-control-solid" placeholder="Motivo" />
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nota</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="nota" class="form-control form-control-lg form-control-solid" placeholder="Nota" />
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
</body>

</html>