<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/perfil.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
                                        <div class="fw-semibold fs-6 text-black-500 text-center">Direccion</div>
                                        <div class="fw-semibold fs-5 text-black-100 text-center">{{ $empleado[0]->direccion }}</div>
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
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Detalles</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5" href="/empleados/editar/{{$empleado[0]->id}}">Editar</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Logs</a>
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
                            <h3 class="fw-bold m-0">Información detallada del empleado</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="/empleados/editar/{{$empleado[0]->id}}" class="btn btn-sm btn-primary">Editar</a>
                        </div>
                    </div>
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-6">Foto</label>
                            <div class="col-lg-8">
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/fotos/{{$empleado[0]->foto}})"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="id">ID empleado</label>
                            <div class="col-lg-3">
                                <input type="text" name="id" id="id" class="form-control form-control-lg form-control-solid" placeholder="Nombre completo" required readonly value="{{ ($empleado[0]->id < 10) ? '#000' . $empleado[0]->id : '#00' . $empleado[0]->id }}" />
                            </div>
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6" for="fname">Nombre completo</label>
                            <div class="col-lg-3">
                                <input type="text" name="fname" id="fname" class="form-control form-control-lg form-control-solid" placeholder="Nombre completo" required readonly value="{{$empleado[0]->nombre}}" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Dirección</label>
                            <div class="col-lg-8">
                                <input type="text" name="direccion" id="direccion" class="form-control form-control-lg form-control-solid" placeholder="Dirección" required readonly value="{{$empleado[0]->direccion}}" />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de Alta</label>
                            <div class="col-lg-3">
                                <input type="date" name="fecha_alta" id="fecha_alta" class="form-control form-control-lg form-control-solid" placeholder="Fecha de Alta" readonly value="{{$empleado[0]->fecha_alta}}" />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                            <label class="col-lg-2 col-form-label">WhatsApp</label>
                            <div class="col-lg-3">
                                <input type="tel" name="whatsapp" class="form-control form-control-lg form-control-solid" placeholder="WhatsApp" redonly readonly value="{{$empleado[0]->whatsapp}}" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="email">Correo Electrónico</label>
                            <div class="col-lg-3">
                                <input type="email" name="email" id="email" class="form-control form-control-lg form-control-solid" placeholder="Email" required readonly value="{{$empleado[0]->correo}}" />
                                <div class="invalid-feedback">Este campo es obligatorio y debe ser una dirección de correo electrónico válida.</div>
                            </div>
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Fecha de nacimiento</label>
                            <div class="col-lg-3">
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control form-control-lg form-control-solid" placeholder="Fecha de nacimiento" readonly value="{{$empleado[0]->fecha_nacimiento}}" />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">DUI</label>
                            <div class="col-lg-3">
                                <input type="text" name="dui" id="dui" class="form-control form-control-lg form-control-solid" placeholder="DUI" readonly value="{{$empleado[0]->dui}}" />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                            <label class="col-lg-2 col-form-label">Licencia</label>
                            <div class="col-lg-3">
                                <input type="text" name="licencia" class="form-control form-control-lg form-control-solid" placeholder="Licencia" value="{{$empleado[0]->licencia}}" readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="referencia_personal">Referencia Personal</label>
                            <div class="col-lg-3">
                                <input type="text" name="referencia" id="referencia_personal" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->referenciap}}" required readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Telefono</label>
                            <div class="col-lg-3">
                                <input type="tel" name="telefono1" id="telefono1" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->telefonop}}" required readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="referencia_familiar">Referencia Familiar</label>
                            <div class="col-lg-3">
                                <input type="text" name="referencia2" id="referencia_familiar" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->referenciaf}}" required readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Telefono</label>
                            <div class="col-lg-3">
                                <input type="tel" name="telefono2" id="telefono2" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->telefonof}}" required readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-6" for="contacto_emergencia">Contacto de emergencia</label>
                            <div class="col-lg-3">
                                <input type="text" name="contacto_emergencia" id="contacto_emergencia" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->contactonombre}}" required readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Telefono</label>
                            <div class="col-lg-3">
                                <input type="tel" name="telefono3" id="telefono3" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->contactotel}}" required readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label">Número de ISSS</label>
                            <div class="col-lg-3">
                                <input type="text" name="n_isss" class="form-control form-control-lg form-control-solid" placeholder="# de ISSS" readonly value="{{$empleado[0]->n_isss}}" />
                            </div>
                            <label class="col-lg-2 col-form-label">Número de AFP</label>
                            <div class="col-lg-3">
                                <input type="text" name="n_afp" class="form-control form-control-lg form-control-solid" placeholder="# de AFP" readonly value="{{$empleado[0]->n_afp}}" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label">Fecha de baja</label>
                            <div class="col-lg-3">
                                <input type="date" name="fecha_baja" id="fecha_baja" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->fecha_baja}}" readonly />
                            </div>
                            <label class="col-lg-2 col-form-label">Motivo</label>
                            <div class="col-lg-3">
                                <input type="text" name="Motivo" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->motivo}}" readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label ">Salario</label>
                            <div class="col-lg-3">
                                <input type="text" name="salario" id="salario" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->salario}}" readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                            <label class="col-lg-2 col-form-label ">Estado</label>
                            <div class="col-lg-3">
                                <input type="text" name="estado" id="estado" class="form-control form-control-lg form-control-solid" value="{{$empleado[0]->estado}}" readonly />
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label">Nota</label>
                            <div class="col-lg-8">
                                <textarea name="nota" class="form-control form-control-lg form-control-solid" placeholder="Nota" readonly>{{$empleado[0]->nota}}</textarea>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="/empleado" class="btn btn-primary btn-active-light-primary me-2">Regresar a listado</a>
                        </div>
                    </div>
                </div>

                <!--begin::Sign-in Method-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Sign-in Method</h3>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_signin_method" class="collapse show">
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Email Address-->
                            <div class="d-flex flex-wrap align-items-center">
                                <!--begin::Label-->
                                <div id="kt_signin_email">
                                    <div class="fs-6 fw-bold mb-1">Email Address</div>
                                    <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Edit-->
                                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                    <!--begin::Form-->
                                    <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                        <div class="row mb-6">
                                            <div class="col-lg-6 mb-4 mb-lg-0">
                                                <div class="fv-row mb-0">
                                                    <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                                    <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="fv-row mb-0">
                                                    <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Action-->
                                <div id="kt_signin_email_button" class="ms-auto">
                                    <button class="btn btn-light btn-active-light-primary">Change Email</button>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Email Address-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Password-->
                            <div class="d-flex flex-wrap align-items-center mb-10">
                                <!--begin::Label-->
                                <div id="kt_signin_password">
                                    <div class="fs-6 fw-bold mb-1">Password</div>
                                    <div class="fw-semibold text-gray-600">************</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Edit-->
                                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                    <!--begin::Form-->
                                    <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                        <div class="row mb-1">
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                        <div class="d-flex">
                                            <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Action-->
                                <div id="kt_signin_password_button" class="ms-auto">
                                    <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Password-->
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                    <!--begin::Content-->
                                    <div class="mb-3 mb-md-0 fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
                                        <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Sign-in Method-->
    </x-default-layout>
    <script src="{{ asset('assets/js/selectempleados.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>