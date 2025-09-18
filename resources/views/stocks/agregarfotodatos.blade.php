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
    var loadFile = function(event) {
  for (let i = 0; i < event.target.files.length; i++) {
    var image = document.createElement('img');
    image.src = URL.createObjectURL(event.target.files[i]);
    image.id = "output";
    image.width = "200";
    image.style.margin = "10px";
    document.querySelector(".cont").appendChild(image);
  }
};

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
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
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
                <div id="kt_content" class="content flex-column-fluid " >
                    <!--begin::Content container-->
                    <div id="kt_content_container" class="app-container container-xxl">
                        <!--begin::Products-->
                        <div class="card card-flush ">
                            <!--begin::Card header-->
                           
                            <!--end::Card header-->
                            <!--begin::Card body-->
  <div class="row" style="margin-top: 20px;">

                                        <div class="col-md-6">
                                            Captura de fotografia
                                        </div>
                                   
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                        <div class="col-md-6">
                                            <div style="width: 80%; text-align: right; margin-top: 15px;">
                                                <span style="font-size: 18px; font-weight: bolder;">Guia: {{ $envio[0]->guia }}</span>
                                            </div>
                                        </div>
                                    </div>
                                <hr style="width: 100%; color: #000000ff; height: 2px; background-color: #000000ff; margin-top: 15px;"> 
                            <form action="/guardandofoto" method="POST" id="kt_account_profile_details_form" class="form" enctype="multipart/form-data">
                                @csrf
                            @method('GET')
                        
                            <div class="card-body pt-0" style="background-color:white; min-height: 605px;">

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" value="{{ $envio[0]->guia }}" class="visually-hidden" name="guia2" id="guia2">
                            <br>
                            <span style="font-size: 12px; font-weight: bolder;"> Comercio: </span>
                            <input type="text" value="{{ $envio[0]->comercio }}" name="comercio2" id="comercio2" class="form-control form-control-solid mb-3 mb-lg-0 " readonly>
                            <br>
                            <span style="font-size: 12px; font-weight: bolder;"> Destinatario:</span>
                            <input type="text" value="{{ $envio[0]->destinatario }}" name="destinatario" id="destinatario" class="form-control form-control-solid mb-3 mb-lg-0 " readonly>
                            <br>
                            <span style="font-size: 12px; font-weight: bolder;"> Direccion: </span>
                            <input type="text" value="{{ $envio[0]->direccion }}" name="direccion" id="direccion" class="form-control form-control-solid mb-3 mb-lg-0 " readonly>
                           
                            <p></p>

                                </div>
                                <div class="col-md-6 text-center">
                                     <p><input type="file" class="inputfile file-input-control" name="foto1" id="file" onchange="loadFile(event)" onclick="esconder1()" style="">
                                <label for="file" class="file-input-label" id="file1l"><i class="fas fa-camera" style="color: #fff;"></i> Abrir camara</label>
                            </p>
                                <input type="file" class="inputfile file-input-control" name="foto2" id="file2" onchange="loadFile(event)" onclick="esconder2()">
                                <label for="file2" class="file-input-label" id="file2l" style="display: none;"><i class="fas fa-camera" style="color: #fff;"></i> Abrir camara</label>

                                <input type="file" class="inputfile file-input-control" name="foto3" id="file3" onchange="loadFile(event)" onclick="esconder3()">
                                <label for="file3" class="file-input-label" id="file3l" style="display: none;"><i class="fas fa-camera" style="color: #fff;"></i> Abrir camara</label>
                                <p></p>
                                <a href="/stocks/agregarfoto">
                                        <button type="button" class="btn btn-danger mb-3" style="margin-left: 5px;">&nbsp;&nbsp; &nbsp;&nbsp;<i class="fas fa-trash-alt"></i> Borrar &nbsp; &nbsp;</button>
                                    </a>
                                    <br>
                                    <button type="submit" class="btn btn-primary mb-3" style="width:140px;"><i class="fas fa-save"></i> Guardar</button> 
                                </div>

                                </div>
                                


                            </div>

                            <div class="row">
                                <div class="col-md-12" style="height: 300px;">
                                    <p class="cont" name="imagen" style="padding: 15px; margin-top: 50px;"></p>
                                </div>
                                

                            </div>


                        </div>
                        <!--end::Card body-->
                    </form>
                    </div>
                    <!--end::Products-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->



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