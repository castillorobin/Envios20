<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/perfil.css') }}">
    <style>
        span {
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <x-default-layout>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container">
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
                        <li class="breadcrumb-item text-muted">Ver comercio</li>
                    </ul>
                </div>

                <div class="card mb-5 mb-xl-10">
                    
                    <div id="kt_account_settings_profile_details" class="collapse show">
                      <div class="card card-flush h-lg-100" id="kt_contacts_main">
    <!--begin::Card header-->
    <div class="card-header pt-7" id="kt_chat_contacts_header">
        <!--begin::Card title-->
        <div class="card-title">
            <i class="ki-duotone ki-badge fs-1 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>            <h2>Datos del Comercio</h2>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar gap-3">
            

          
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-5">
        <!--begin::Profile-->
        <div class="d-flex gap-7 align-items-center">
            <!--begin::Avatar-->
            <div class="symbol symbol-circle symbol-100px">
                <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-6.jpg" alt="image">
            </div>
            <!--end::Avatar-->

            <!--begin::Contact details-->
            <div class="d-flex flex-column gap-2">
                <!--begin::Name-->
                <h3 class="mb-0">{{ $comercio->comercio }}</h3> 
                <!--end::Name-->

                <!--begin::Email-->
                <div class="d-flex align-items-center gap-2">
                     <i class="ki-duotone ki-phone fs-2"><span class="path1"></span><span class="path2"></span></i>                    <a href="tel:+503{{ $comercio->telefono }}" class="text-muted text-hover-primary">{{ $comercio->telefono }}</a>
                </div>
                <!--end::Email-->

                <!--begin::Phone-->
                <div class="d-flex align-items-center gap-2">
                    <i class="ki-duotone ki-whatsapp"><span class="path1"></span><span class="path2"></span></i>                        <a href="https://api.whatsapp.com/send?phone=503{{ $comercio->telefono }}" class="text-muted text-hover-primary">{{ $comercio->telefono }}</a>
                </div>
                <!--end::Phone-->
            </div>
            <!--end::Contact details-->
        </div>
        <!--end::Profile-->

        <!--begin:::Tabs-->
<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8 gap-2" role="tablist">
    <!--begin:::Tab item-->
    <li class="nav-item" role="presentation">
        <a class="nav-link text-active-primary d-flex align-items-center pb-4 active" data-bs-toggle="tab" href="#kt_contact_view_general" aria-selected="true" role="tab">
            <i class="fas fa-user"></i> &nbsp;        Información
        </a>
    </li>
    <!--end:::Tab item-->

    <!--begin:::Tab item-->
    <li class="nav-item" role="presentation">
        <a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_meetings" aria-selected="false" tabindex="-1" role="tab">
           <i class="fas fa-user-edit"></i>   &nbsp;      Editar
        </a>
    </li>
    <!--end:::Tab item-->

    <!--begin:::Tab item-->
    <li class="nav-item" role="presentation">
        <a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_activity" aria-selected="false" tabindex="-1" role="tab">
            <i class="fas fa-address-book"></i>     &nbsp;      Usuario
        </a>
    </li>

    <!--end:::Tab item-->
</ul>
<!--end:::Tabs-->
        <!--begin::Tab content-->
        <div class="tab-content" id="">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="kt_contact_view_general" role="tabpanel">
                
<!--begin::Additional details-->
<div class="d-flex flex-column gap-5 mt-7">
    <!--begin::Informacion-->
   Información






                            <div class="card-body border-top p-9">
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre del titular</label>
                                    <div class="col-lg-8">
                                     <span>{{ $comercio->titular }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre del comercio</label>
                                    <div class="col-lg-8">
                                        <span>{{ $comercio->comercio }}</span>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Dirección del comercio</label>
                                    <div class="col-lg-8">
                                        <span>{{ $comercio->direccion }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Telefono</label>
                                    <div class="col-lg-3">
                                       <span>{{ $comercio->telefono }}</span>
                                    </div>

                                    <label class="col-lg-2 col-form-label">WhatsApp</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->whatsapp }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de Alta</label>
                                    <div class="col-lg-3">
                                       <span>{{ $comercio->f_alta }}</span>
                                    </div>

                                    <label class="col-lg-2 col-form-label">Fecha de baja</label>
                                    <div class="col-lg-3">
                                       <span>{{ $comercio->f_baja }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Tipo de comercio</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->tipo }}</span>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Estado de comercio</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->estado }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Agencia de registro</label>
                                    <div class="col-lg-8">
                                        <span>{{ $comercio->agencia }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Correo Electrónico</label>
                                    <div class="col-lg-8">
                                       <span>{{ $comercio->correo }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Nota</label>
                                    <div class="col-lg-8">
                                        <span>{{ $comercio->nota }}</span>
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
                                        <span>{{ $comercio->titular }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Nombre del banco</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->banco }}</span>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Numero de cuenta</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->cuenta }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Numero de DUI</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->dui }}</span>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Tipo de cuenta</label>
                                    <div class="col-lg-3">
                                       <span>{{ $comercio->tipo_cuenta }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Cuenta de chivo</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->chivo }}</span>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Cuenta tigo money</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->tigo }}</span>
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
                                        <span>{{ $comercio->empresa }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Tipo de contribuyente</label>
                                    <div class="col-lg-3">
                                       <span>{{ $comercio->tipo_contri }}</span>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Giro</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->giro }}</span>
                                    </div>

                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Numero de IVA</label>
                                    <div class="col-lg-3">
                                       <span>{{ $comercio->iva }}</span>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Numero de regristro (NCR)</label>
                                    <div class="col-lg-3">
                                        <span>{{ $comercio->nrc }}</span>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Dirección Fisical</label>
                                    <div class="col-lg-8">
                                        <span>{{ $comercio->d_fiscal }}</span>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <a href="/comercio" class="btn btn-primary btn-active-light-primary me-2">Cancelar</a>
                                    
                                </div>
                            </div>
                      







    <!--end::Informacion-->
</div>
<!--end::Additional details-->            </div>
            <!--end:::Tab pane-->

            
            <div class="tab-pane fade" id="kt_contact_view_meetings" role="tabpanel">
      
<!--begin:::Editar-->
 <form action="/comercio/editando" method="POST" id="kt_account_profile_details_form" class="form">
                            @csrf
                            @method('GET')

                            <input type="text" name="idco" value="{{ $comercio->id }} " hidden>
                            <div class="card-body border-top p-9">
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre del titular</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="ftitu" id="ftitu" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $comercio->titular }} " />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre del comercio</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="fname" id="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $comercio->comercio }} " />
                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Dirección del comercio</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" value=" {{ $comercio->direccion }}" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono" class="form-control form-control-lg form-control-solid" value=" {{ $comercio->telefono }}" />
                                    </div>

                                    <label class="col-lg-2 col-form-label">WhatsApp</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="whatsapp" class="form-control form-control-lg form-control-solid" value="{{ $comercio->whatsapp }} " />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Fecha de Alta</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="fecha_alta" class="form-control form-control-lg form-control-solid" id="fecha_alta" value="{{ $comercio->f_alta }} " />
                                    </div>

                                    <label class="col-lg-2 col-form-label">Fecha de baja</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="fecha_baja" class="form-control form-control-lg form-control-solid" id="fecha_baja" value="{{ $comercio->f_baja }} " />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Tipo de comercio</label>
                                    <div class="col-lg-3">
                                        <select name="tipo" id="Tipo" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Tipo de comercio" required>
                                          <option value="{{ $comercio->tipo }}">{{ $comercio->tipo }}</option>  
                                        <option value="Emprendedor">Emprendedor</option>
                                            <option value="Comercio Mediano">Comercio Mediano</option>
                                            <option value="Empresa">Empresa</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Estado de comercio</label>
                                    <div class="col-lg-3">
                                        <select name="estado" id="Estado_comercio" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Estado de comercioo" required>
                                        <option value="{{ $comercio->estado }}">{{ $comercio->estado }}   </option> 
                                        <option value="Alta">Alta</option>{{ $comercio->estado }}
                                            <option value="Baja">Baja</option>
                                            <option value="Lista negra">Lista negra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label required fw-semibold fs-6">Agencia de registro</label>
                                    <div class="col-lg-8">
                                        <select name="agencia_registro" id="Agencia_registro" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Agencia de registro" required>
                                        <option value="{{ $comercio->agencia }}">{{ $comercio->agencia }}</option>    
                                        <option value="San Salvador">San Salvador</option>
                                            <option value="San Miguel">San Miguel</option>
                                            <option value="Santa Ana">Santa Ana</option>
                                            <option value="Centro de distribucion">Centro de distribucion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Correo Electrónico</label>
                                    <div class="col-lg-8">
                                        <input type="email" name="email" class="form-control form-control-lg form-control-solid" value="{{ $comercio->correo }} " />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Nota</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="nota" class="form-control form-control-lg form-control-solid" value="{{ $comercio->nota }} " />
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
                                        <input type="text" name="titular" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $comercio->titular }} " />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Nombre del banco</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="banco" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $comercio->banco }} " />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Numero de cuenta</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="cuenta" class="form-control form-control-lg form-control-solid" value="{{ $comercio->cuenta }} " />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Numero de DUI</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="dui" class="form-control form-control-lg form-control-solid" value="{{ $comercio->dui }} " />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Tipo de cuenta</label>
                                    <div class="col-lg-3">
                                        <select name="tipo_cuenta" id="tipo_cuenta" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Tipo de cuenta" required>
                                            <option value="{{ $comercio->tipo_cuenta }}">{{ $comercio->tipo_cuenta }}</option>
                                            <option value="Ahorros">Ahorros</option>
                                            <option value="Corriente">Corriente</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Cuenta de chivo</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="chivo" class="form-control form-control-lg form-control-solid" value="{{ $comercio->chivo }} " />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Cuenta tigo money</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="tigo" class="form-control form-control-lg form-control-solid" value="{{ $comercio->tigo }} " />
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
                                        <input type="text" name="empresa" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $comercio->empresa }} " />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Tipo de contribuyente</label>
                                    <div class="col-lg-3">
                                        <select name="tipo_contribuyente" id="Tipo_contribuyente" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Seleccionar Tipo de contribuyente" required>
                                            <option value="{{ $comercio->tipo_contri }}">{{ $comercio->tipo_contri }}</option>
                                            <option value="pequeño">Pequeño</option>
                                            <option value="Mediano">Mediano</option>
                                            <option value="Grande">Grande</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Giro</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="giro" class="form-control form-control-lg form-control-solid" value=">{{ $comercio->giro }} "/>
                                    </div>

                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Numero de IVA</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="nit" class="form-control form-control-lg form-control-solid" value="{{ $comercio->iva }} " />
                                    </div>
                                    <label class="col-lg-2 col-form-label">Numero de regristro (NCR)</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="ncr" class="form-control form-control-lg form-control-solid" value="{{ $comercio->nrc }} " />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label">Dirección Fisical</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="direccionf" class="form-control form-control-lg form-control-solid" value="{{ $comercio->d_fiscal }} " />
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <a href="/comercio" class="btn btn-primary btn-active-light-primary me-2">Cancelar</a>
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Editar Cambios</button>
                                </div>
                            </div>
                        </form>







<!--end::Editar-->           
 </div>





            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_contact_view_activity" role="tabpanel">
            






            <div class="card  mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Datos de acceso</h3>
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
                    <div class="fs-6 fw-bold mb-1">Correo</div>
                    <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                </div>
                <!--end::Label-->

                <!--begin::Edit-->
                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                        <div class="row mb-6">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="fv-row mb-0 fv-plugins-icon-container">
                                    <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Ingrese el correo nuevo</label>
                                    <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Correo" name="emailaddress" value="comercio@appmeloexpress.com">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-0 fv-plugins-icon-container">
                                    <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirmar Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button id="kt_signin_submit" type="button" class="btn btn-primary  me-2 px-6">Actualizar Email</button>
                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancelar</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->

                <!--begin::Action-->
                <div id="kt_signin_email_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Cambiar Email</button>
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
                    <form id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <div class="fv-row mb-0 fv-plugins-icon-container">
                                    <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Password Actual</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="currentpassword" id="currentpassword">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fv-row mb-0 fv-plugins-icon-container">
                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">Password Nuevo</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="newpassword" id="newpassword">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="fv-row mb-0 fv-plugins-icon-container">
                                    <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirmar Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="confirmpassword" id="confirmpassword">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            </div>
                        </div>
                        
                        <div class="form-text mb-5">Password debe tener al menos 8 caracteres</div>

                        <div class="d-flex">
                            <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Actualizar Password</button>
                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancelar</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->

                <!--begin::Action-->
                <div id="kt_signin_password_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Resetear Password</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Password-->

            
<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
            <!--begin::Icon-->
        <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Proteja su cuenta</h4>
                
                                    <div class="fs-6 text-gray-700 pe-7">La autenticación de dos factores añade una capa adicional de seguridad a tu cuenta. Para iniciar sesión, también deberás proporcionar un código de 6 dígitos.</div>
                            </div>
            <!--end::Content-->
        
                    <!--begin::Action-->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication"> 
                Activar          </a>
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







            <!--end:::Tab pane-->
        </div>
        <!--end::Tab content-->
 
        
    </div>
    <!--end::Card body-->
</div>
                    </div>
                </div>
            </div>
        </div>
    </x-default-layout>
    <script src="{{ asset('assets/js/selectempleados.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    
    

</body>

</html>