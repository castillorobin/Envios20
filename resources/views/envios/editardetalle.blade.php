<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />

    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load--> <!--begin::Sign-in Method-->
    <x-default-layout>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Informacion del paquete</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Comercios</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Perfil de comercio</li>
                    </ul>
                </div>
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap">
                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="data:image/png;base64,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" alt="image" />
                                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <div class="d-flex flex-column">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="text-gray-900 text-hover-primary fs-3 fw-bold me-1" style="white-space: nowrap;">
                                                        MODA SV
                                                    </a>
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
                                                </i>Telefono</a>
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <i class="ki-duotone ki-geolocation fs-5 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>agencia</a>
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <i class="ki-duotone ki-sms fs-5 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>direccion de comercio</a>
                                        </div>
                                    </div>
                                    <div class="d-flex my-1">
                                        <a href="#" class="btn btn-sm btn-light-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_">Creado</a>
                                        <button class="btn btn-sm btn-danger me-3">Eliminar</button>
                                    </div>


                                </div>
                                <div class="d-flex flex-wrap flex-stack ">
                                    <div class="d-flex flex-column flex-grow-1 mt-6">
                                        <div class="fw-semibold fs-6 text-black-500 text-right">Dirección de recolección</div>
                                        <div class="fw-semibold fs-5 text-black-100 text-right">Punto de San Luis Talpa </div>
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
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="/envios/detalle">Detallas</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Editar pedido</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Historial</a>
                                <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5" href="/envios/detallefoto">Fotos</a>
                            </li>
                            <!--end::Nav item-->
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Información detallada del destinatario</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-primary">Editar</a>
                        </div>
                    </div>
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Estado</label>
                            <div class="col-lg-8">
                                <select name="agencia" id="agencia" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar agencia" required>
                                    <option value="Creado">Creado</option>
                                    <option value="Sin_crear">Sin crear</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="id">Destinatario</label>
                            <div class="col-lg-8">
                                <input type="text" name="id" id="id" class="form-control form-control-lg form-control-solid" placeholder="Nombre completo" required readonly value="Juan Diego López" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="fname">Direccion</label>
                            <div class="col-lg-8">
                                <input type="text" name="fname" id="fname" class="form-control form-control-lg form-control-solid" placeholder="Nombre completo" required readonly value="Calle la sultana av 2, casa 20 Usuluán" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Tipo de envío</label>
                            <div class="col-lg-8">
                                <input type="text" name="Tipo" id="Tipo" class="form-control form-control-lg form-control-solid" placeholder="Tipo" required readonly value="Personalizado" />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de entrega</label>
                            <div class="col-lg-8">
                                <input type="date" name="fecha_alta" id="fecha_alta" class="form-control form-control-lg form-control-solid" placeholder="Fecha de Alta" value="Personalizado" />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="email">Precio del paquete </label>
                            <div class="col-lg-8">
                                <input type="email" name="email" id="email" class="form-control form-control-lg form-control-solid" placeholder="Email" required readonly value="$25.00" />
                                <div class="invalid-feedback">Este campo es obligatorio y debe ser una dirección de correo electrónico válida.</div>
                            </div>

                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Precio de envío</label>
                            <div class="col-lg-8">
                                <input type="text" name="dui" id="dui" class="form-control form-control-lg form-control-solid" placeholder="DUI" readonly value="$2.00" />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="referencia_personal">Precio total </label>
                            <div class="col-lg-8">
                                <input type="text" name="referencia" id="referencia_personal" class="form-control form-control-lg form-control-solid" value="$27.00" required readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="referencia_familiar">Cobro de envío</label>
                            <div class="col-lg-8">
                                <input type="text" name="referencia2" id="referencia_familiar" class="form-control form-control-lg form-control-solid" value="Pendiente" required readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="contacto_emergencia">Estado del pago</label>
                            <div class="col-lg-8">
                                <input type="text" name="contacto_emergencia" id="contacto_emergencia" class="form-control form-control-lg form-control-solid" value="POR PAGAR" required readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label">Nota</label>
                            <div class="col-lg-8">
                                <input type="text" name="n_isss" class="form-control form-control-lg form-control-solid" placeholder="# de ISSS" readonly value="Solo contesta Whatsapp" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label">Repartidor </label>
                            <div class="col-lg-8">
                                <input type="text" name="Repartidor" id="Repartidor" class="form-control form-control-lg form-control-solid" value="Diego" required readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label ">Ruta</label>
                            <div class="col-lg-8">
                                <input type="text" name="salario" id="salario" class="form-control form-control-lg form-control-solid" value="2" readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label">Nota del repartidor </label>
                            <div class="col-lg-8">
                                <textarea name="nota" class="form-control form-control-lg form-control-solid" placeholder="Nota" readonly>Cliente no contesta </textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label ">Ubicación</label>
                            <div class="col-lg-8">
                                <input type="text" name="salario" id="salario" class="form-control form-control-lg form-control-solid" value="Bodega" readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                    </div>
                    <!--begin::Sign-in Method-->
                    <!--begin::details View-->
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">OTROS DATOS</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de creación</label>
                                <div class="col-lg-8">
                                    <input type="date" name="fecha_alta" id="fecha_alta" class="form-control form-control-lg form-control-solid" placeholder="Fecha de Alta" value="Personalizado" />
                                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label">Usuario </label>
                                <div class="col-lg-8">
                                    <input type="text" name="Usuario" id="Usuario" class="form-control form-control-lg form-control-solid" value="Diego" required readonly />
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <label class="col-lg-3 col-form-label">Agencia de registro</label>
                                <div class="col-lg-8">
                                    <input type="text" name="Usuario" id="Usuario" class="form-control form-control-lg form-control-solid" value="Santa Ana" required readonly />
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::details View-->
                    <!--begin::details View-->
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Fotos Del Paquete</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-6">
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                     <!--begin::details View-->
                     <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Fotos De la entrega del paquete</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-6">
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                                <div class="col-lg-2">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/avatars/300-1.jpg')"></div>
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
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <a href="/envios" class="btn btn-primary btn-active-light-primary me-2">Regresar a listado</a>
                    </div>
                </div>
                <!--end::Sign-in Method-->
    </x-default-layout>
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function confirmDelete(url) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        }
    </script>
</body>

</html>