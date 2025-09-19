<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only) 
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
   -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />

    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />


    <!--end::Global Stylesheets Bundle-->
    <style>
        .table th,
        .table td {
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }

        .file-input-control {
    height: 0.1px;
    width: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

.file-input-label {
    background-color: #009cf5;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    display: inline-block;
    cursor: pointer;
}

.file-input-label:hover {
    background-color: #009cf5;
}

      
        
    </style>

</head>

<script>
   function loadFile(event, contenedorClass) {
    const contenedor = document.querySelector(`.${contenedorClass}`);
    contenedor.classList.remove("d-none");
    contenedor.innerHTML = "";

    for (let i = 0; i < event.target.files.length; i++) {
        let image = document.createElement('img');
        image.src = URL.createObjectURL(event.target.files[i]);
        image.width = 125;
        image.height = 125;
        image.style.margin = "5px";
        image.style.cursor = "pointer";

        // 👇 al hacer clic abre el modal con la imagen en grande
        image.addEventListener("click", function() {
            document.getElementById("previewImage").src = this.src;
            let modal = new bootstrap.Modal(document.getElementById("previewModal"));
            modal.show();
        });

        contenedor.appendChild(image);
    }
}

function esconder1(){
    
    document.getElementById('file1l').style.display = 'none';
    document.getElementById('file2l').style.display = '';

 };
 function esconder2(){
    
    document.getElementById('file2l').style.display = 'none';
    document.getElementById('file3l').style.display = '';

 };
 function esconder3(){
    
    document.getElementById('file3l').style.display = 'none';
    document.getElementById('file4l').style.display = '';

 };

</script>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<input type="text" value="{{date_default_timezone_set('America/El_Salvador') }}" hidden>
    <x-default-layout>
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main" >
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid" >
                <!--begin::Toolbar-->
                <div id="kkt_content" class="content flex-column-fluid">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack" style="margin-top: 15px;">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center ">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Captura de fotografia</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="/dashboard" class="text-muted text-hover-primary">Inicio</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span> 
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Control de stocks</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Captura de fotografia</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_content" class="content flex-column-fluid container-xxl" style="margin-top: 15px;">
                    <!--begin::Content container-->




<div class="card">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title fs-3 fw-bold">Guia: {{ $envio[0]->guia }}</div>
        <!--end::Card title-->
        <a href="/stocks/agregarfoto" class="w-200" style="float:right; margin-top:20px; font-size:20px;">
            <i class="fas fa-window-close" style="font-size:40px; color:red;"></i>
        </a>
    </div>
    <!--end::Card header-->

    <!--begin::Form-->
    <form action="/guardandofoto" method="POST" id="kt_account_profile_details_form" class="form" enctype="multipart/form-data">
                                @csrf
                            @method('GET')
                        <input type="text" value="{{ $envio[0]->guia }}" class="visually-hidden" name="guia2" id="guia2">
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-5">
                 <!--begin::Row--> 
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Comercio:</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $envio[0]->comercio }}">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Destinatario:</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $envio[0]->destinatario }}">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Direccion:</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $envio[0]->direccion }}">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
            </div>
            <!--end::Row-->
                
                <div class="row">
    <!-- Imagen 1 -->
    <div class="col-12 col-md-2 d-flex justify-content-center" style="margin-top: 20px">
        <div class="image-input image-input-outline" data-kt-image-input="true" 
             style="background-image: url('/metronic8/demo1/assets/media/svg/avatars/blank.svg')">
            <div class="image-input-wrapper w-125px h-125px bgi-position-center cont1 d-none"></div>
            <!-- ... igual que el anterior pero con avatar1 -->         
        </div>
    </div>

    <!-- Imagen 2 -->
    <div class="col-12 col-md-2 d-flex justify-content-center" style="margin-top: 20px">
        <div class="image-input image-input-outline" data-kt-image-input="true" 
             style="background-image: url('/metronic8/demo1/assets/media/svg/avatars/blank.svg')">
            <div class="image-input-wrapper w-125px h-125px bgi-position-center cont2 d-none"></div>
            <!-- ... igual que el anterior pero con avatar2 -->
        </div>
    </div>

    <!-- Imagen 3 -->
    <div class="col-12 col-md-2 d-flex justify-content-center" style="margin-top: 20px">
        <div class="image-input image-input-outline" data-kt-image-input="true" 
             style="background-image: url('/metronic8/demo1/assets/media/svg/avatars/blank.svg')">
            <div class="image-input-wrapper w-125px h-125px bgi-position-center cont3 d-none"></div>
            <!-- ... igual que el anterior pero con avatar3 -->
        </div>
    </div>
</div>
            </div>
            <br>
            <!--end::Row-->
            
<div class="row justify-content-end">
    <!-- Botón Borrar -->
    <div class="col-sm-12 col-md-2 py-2">
        <button type="button" class="btn btn-light btn-active-light-primary w-100"
        onclick="location.reload();">
    Borrar
</button>
    </div>

    <!-- Botón Capturar foto -->
    <div class="col-sm-12 col-md-2 py-2">
        <input type="file" class="inputfile file-input-control w-100" name="foto1" id="file" onchange="loadFile(event, 'cont1')" onclick="esconder1()">
        <label for="file" class="file-input-label btn btn-primary w-100" id="file1l">
            <i class="fas fa-camera"></i> Abrir cámara
        </label>

        <input type="file" class="inputfile file-input-control w-100" name="foto2" id="file2" onchange="loadFile(event, 'cont2')" onclick="esconder2()">
        <label for="file2" class="file-input-label btn btn-primary w-100" id="file2l" style="display: none;">
            <i class="fas fa-camera"></i> Abrir cámara
        </label>

        <input type="file" class="inputfile file-input-control w-100" name="foto3" id="file3" onchange="loadFile(event, 'cont3')" onclick="esconder3()">
        <label for="file3" class="file-input-label btn btn-primary w-100" id="file3l" style="display: none;">
            <i class="fas fa-camera"></i> Abrir cámara
        </label>
    </div>
</div>

<!-- Botón Guardar -->
<div class="row justify-content-end">
    <div class="col-sm-12 col-md-2 py-2">
        <button type="submit" class="btn btn-primary w-100" id="kt_project_settings_submit">Guardar</button>
    </div>
</div>
        <!--end::Card footer-->
    <input type="hidden"></form>
    <!--end:Form-->
</div>
</div>



                 
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

<!-- Modal para mostrar imagen -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body text-center">
        <img id="previewImage" src="" class="img-fluid rounded" alt="Preview">
      </div>
    </div>
  </div>
</div>

    </x-default-layout>
    <!--begin::Javascript-->
    <script>

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

</body>
<!--end::Body-->

</html>