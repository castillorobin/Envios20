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

     <li class="nav-item" role="presentation">
        <a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#nota" aria-selected="false" tabindex="-1" role="tab">
            <i class="fas fa-book"></i>     &nbsp;      Nota
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
    <!--begin::Company name-->
   Información
    <!--end::Notes-->
</div>
<!--end::Additional details-->            </div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_contact_view_meetings" role="tabpanel">
      Editar
<!--end::Tab Content-->            </div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_contact_view_activity" role="tabpanel">
             Usuario
            <!--end:::Tab pane-->
        </div>
        <!--end::Tab content-->
 <div class="tab-pane fade" id="nota" role="tabpanel">
             Nota
            <!--end:::Tab pane-->
        </div>
        
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