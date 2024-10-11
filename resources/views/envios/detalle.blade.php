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
    <link href="https://fonts.cdnfonts.com/css/oswald-4" rel="stylesheet">
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head--> 
<!--begin::Body-->
<style>
    .delabase{
        color: #001295; 
        font-family: 'Oswald', sans-serif;
        font-weight: 600;
        font-size: 16px;
    }
</style>
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load--> <!--begin::Sign-in Method-->
    <x-default-layout>
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Informacion del paquete</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Paquetes</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Perfil del paquete</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">

                            <!--begin::Primary button-->
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                            <!--end::Primary button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        <!--begin::Navbar-->
                        <div class="card mb-5 mb-xl-10">
                            <div class="card-body pt-9 pb-0">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <!--begin: Pic-->
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                            <img src="/assets/media/avatars/300-1.jpg" alt="image" />
                                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <div class="d-flex flex-column">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="text-gray-900 text-hover-primary fs-3 fw-bold me-1" style="white-space: nowrap;">
                                                                
                                                                {{ $comercio[0]->comercio }}
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
                                                        </i> {{ $comercio[0]->telefono }}</a>
                                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                        <i class="ki-duotone ki-geolocation fs-5 me-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i> {{ $comercio[0]->agencia }}</a>
                                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                        <i class="ki-duotone ki-sms fs-5 me-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>{{ $comercio[0]->correo }}</a>
                                                </div>
                                            </div>
                                            <div class="d-flex my-1">
                                                <a href="#" class="btn btn-sm btn-light-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_">Creado</a>
                                                <button class="btn btn-sm btn-danger me-3">Eliminar</button>
                                            </div>


                                        </div>
                                        <div class="d-flex flex-wrap flex-stack ">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                                <!--begin::Stats-->
                                                <div class="d-flex flex-wrap">
                                                    <!--begin::Stat-->
                                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                        <!--begin::Number-->
                                                        <div class="d-flex align-items-center">
                                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $enviostotal }}">0</div>
                                                        </div>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold fs-6 text-gray-400">Paquetes totales</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->
                                                    <!--begin::Stat-->
                                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                        <!--begin::Number-->
                                                        <div class="d-flex align-items-center">
                                                            <i class="ki-duotone ki-arrow-down fs-3 text-success me-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $entregados }}">0</div>
                                                        </div>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold fs-6 text-gray-400">Realizados con exito</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->
                                                    <!--begin::Stat-->
                                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                        <!--begin::Number-->
                                                        <div class="d-flex align-items-center">
                                                            <i class="ki-duotone ki-arrow-up fs-3 text-danger me-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $noentregados }}" >0</div>
                                                        </div>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold fs-6 text-gray-400">No retirados</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Wrapper-->

                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Navs-->
                                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                    <!--begin::Nav item-->
                                    <li class="nav-item mt-2">
                                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Entrega</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item mt-2">
                                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="/envios/editardetalle/{{ $envio[0]->guia }}">Editar Entrega</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                   
                                    <!--end::Nav item-->
                                </ul>
                                <!--begin::Navs-->
                            </div>
                        </div>
                        <!--end::Navbar-->
                        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                            <!--begin::Card header-->
                            <div class="card-header cursor-pointer">
                                <div class="row">
                                <div class="card-title m-0 py-3 col-12">
                                    
                                    <h2 class="fw-bold m-0" style="color:steelblue">{{ $envio[0]->guia }}</h2>
                                    
                                </div>
                                <div class="alert alert-primary d-flex align-items-center text-center " role="alert" style="border-radius: 40px 40px 40px 40px; ">
                                    <i class="fas fa-store-alt ps-6" style="color:steelblue;"></i>
                                    <div style="font-size: 16px; text-center">
                                    &nbsp; &nbsp;  {{ $envio[0]->estado }} </div>
                                  </div>
                                </div>

                            </div>
                            <div class="card mb-5 mb-xl-10 text-center" id="kt_profile_details_view">
 


                            @if( $envio[0]->estado  == "Recepcionado")
                              

                                     
                              <!--begin::Stepper-->
                              <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                              <!--begin::Nav-->
                              <div class="stepper-nav flex-center flex-wrap mb-10">
                                  <!--begin::Step 1-->
                                  <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                      <!--begin::Wrapper-->
                                      <div class="stepper-wrapper d-flex align-items-center">
                                          <!--begin::Icon-->
                                          <div class="stepper-icon w-40px h-40px alert-success" >
                                              <i class="stepper-check fas fa-check"></i>
                                              <span class="stepper-number">1</span>
                                          </div>
                                          <!--end::Icon-->
                              
                                          <!--begin::Label-->
                                          <div class="stepper-label">
                                              <h3 class="stepper-title">
                                              Pedido
                                              </h3>
                              
                                              <div class="stepper-desc">
                                                Recepcionado
                                              </div>
                                          </div>
                                          <!--end::Label-->
                                      </div>
                                      <!--end::Wrapper-->
                              
                                      <!--begin::Line-->
                                      <div class="stepper-line h-40px"></div>
                                      <!--end::Line-->
                                  </div>
                                  <!--end::Step 1-->
                              
                                  <!--begin::Step 2-->
                                  <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                      <!--begin::Wrapper-->
                                      <div class="stepper-wrapper d-flex align-items-center">
                                           <!--begin::Icon-->
                                          <div class="stepper-icon w-40px h-40px">
                                              <i class="stepper-check fas fa-check"></i>
                                              <span class="stepper-number" >2</span>
                                          </div>
                                          <!--begin::Icon-->
                              
                                          <!--begin::Label-->
                                          <div class="stepper-label">
                                              <h3 class="stepper-title">
                                                  Pedido
                                              </h3>
                              
                                              <div class="stepper-desc">
                                                Creado
                                              </div>
                                          </div>
                                          <!--end::Label-->
                                      </div>
                                      <!--end::Wrapper-->
                              
                                      <!--begin::Line-->
                                      <div class="stepper-line h-40px"></div>
                                      <!--end::Line-->
                                  </div>
                                  <!--end::Step 2-->
                              
                                  <!--begin::Step 3-->
                                  <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                      <!--begin::Wrapper-->
                                      <div class="stepper-wrapper d-flex align-items-center" >
                                           <!--begin::Icon-->
                                          <div class="stepper-icon w-40px h-40px" >
                                              <i class="stepper-check fas fa-check"></i>
                                              <span class="stepper-number" >3</span>
                                          </div>
                                          <!--begin::Icon-->
                              
                                          <!--begin::Label-->
                                          <div class="stepper-label">
                                              <h3 class="stepper-title">
                                                  Pedido
                                              </h3>
                              
                                              <div class="stepper-desc">
                                                En Ruta
                                              </div>
                                          </div>
                                          <!--end::Label-->
                                      </div>
                                      <!--end::Wrapper-->
                              
                                      <!--begin::Line-->
                                      <div class="stepper-line h-40px"></div>
                                      <!--end::Line-->
                                  </div>
                                  <!--end::Step 3-->
                              
                                  <!--begin::Step 4-->
                                  <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                      <!--begin::Wrapper-->
                                      <div class="stepper-wrapper d-flex align-items-center">
                                           <!--begin::Icon-->
                                          <div class="stepper-icon w-40px h-40px" >
                                              <i class="stepper-check fas fa-check"></i>
                                              <span class="stepper-number" >4</span>
                                          </div>
                                          <!--begin::Icon-->
                              
                                          <!--begin::Label-->
                                          <div class="stepper-label">
                                              <h3 class="stepper-title">
                                                  Pedido
                                              </h3>
                              
                                              <div class="stepper-desc">
                                                Entregado
                                              </div>
                                          </div>
                                          <!--end::Label-->
                                      </div>
                                      <!--end::Wrapper-->
                              
                                      <!--begin::Line-->
                                      <div class="stepper-line h-40px"></div>
                                      <!--end::Line-->
                                  </div>
                                  <!--end::Step 4-->
                              </div>
                              <!--end::Nav-->
                        
                              
                                                          @endif





                            @if( $envio[0]->estado  == "Creado")
                                          
                              <!--begin::Stepper-->
                              <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                                <!--begin::Nav-->
                                <div class="stepper-nav flex-center flex-wrap mb-10">
                                    <!--begin::Step 1-->
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px" >
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">1</span>
                                            </div>
                                            <!--end::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  Recepcionado
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 1-->
                                
                                    <!--begin::Step 2-->
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                             <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number" >2</span>
                                            </div>
                                            <!--begin::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  Creado
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 2-->
                                
                                    <!--begin::Step 3-->
                                    <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center" >
                                             <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px" >
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number" >3</span>
                                            </div>
                                            <!--begin::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  En Ruta
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 3-->
                                
                                    <!--begin::Step 4-->
                                    <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                             <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px" >
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number" >4</span>
                                            </div>
                                            <!--begin::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  Entregado
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 4-->
                                </div>
                                <!--end::Nav-->
    
                            @endif

                            @if( $envio[0]->estado  == "En ruta")
                             <!--begin::Stepper-->
                             <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                                <!--begin::Nav-->
                                <div class="stepper-nav flex-center flex-wrap mb-10">
                                    <!--begin::Step 1-->
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px" >
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">1</span>
                                            </div>
                                            <!--end::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  Recepcionado
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 1-->
                                
                                    <!--begin::Step 2-->
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                             <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number" >2</span>
                                            </div>
                                            <!--begin::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  Creado
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 2-->
                                
                                    <!--begin::Step 3-->
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center" >
                                             <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px" >
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number" >3</span>
                                            </div>
                                            <!--begin::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  En Ruta
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 3-->
                                
                                    <!--begin::Step 4-->
                                    <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                             <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px" >
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number" >4</span>
                                            </div>
                                            <!--begin::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  Entregado
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 4-->
                                </div>
                                <!--end::Nav-->

                            @endif

                            @if( $envio[0]->estado  == "Entregado")
                            
                                <!--begin::Stepper-->
                             <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                                <!--begin::Nav-->
                                <div class="stepper-nav flex-center flex-wrap mb-10">
                                    <!--begin::Step 1-->
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px" >
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">1</span>
                                            </div>
                                            <!--end::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  Recepcionado
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 1-->
                                
                                    <!--begin::Step 2-->
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                             <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number" >2</span>
                                            </div>
                                            <!--begin::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  Creado
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 2-->
                                
                                    <!--begin::Step 3-->
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center" >
                                             <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px" >
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number" >3</span>
                                            </div>
                                            <!--begin::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  En Ruta
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 3-->
                                
                                    <!--begin::Step 4-->
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                             <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px" >
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number" >4</span>
                                            </div>
                                            <!--begin::Icon-->
                                
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Pedido
                                                </h3>
                                
                                                <div class="stepper-desc">
                                                  Entregado
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 4-->
                                </div>
                                <!--end::Nav-->






                            @endif

                            @if( $envio[0]->estado  == "No entregado")
                            
                            <!--begin::Stepper-->
                         <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                            <!--begin::Nav-->
                            <div class="stepper-nav flex-center flex-wrap mb-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px" >
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->
                            
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                            Pedido
                                            </h3>
                            
                                            <div class="stepper-desc">
                                              Recepcionado
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                            
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 1-->
                            
                                <!--begin::Step 2-->
                                <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper d-flex align-items-center">
                                         <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number" >2</span>
                                        </div>
                                        <!--begin::Icon-->
                            
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Pedido
                                            </h3>
                            
                                            <div class="stepper-desc">
                                              Creado
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                            
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 2-->
                            
                                <!--begin::Step 3-->
                                <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper d-flex align-items-center" >
                                         <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px" >
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number" >3</span>
                                        </div>
                                        <!--begin::Icon-->
                            
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Pedido
                                            </h3>
                            
                                            <div class="stepper-desc">
                                              En Ruta
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                            
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 3-->
                            
                                <!--begin::Step 4-->
                                <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper d-flex align-items-center">
                                         <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px" >
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number" >4</span>
                                        </div>
                                        <!--begin::Icon-->
                            
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Pedido
                                            </h3>
                            
                                            <div class="stepper-desc">
                                              No entregado
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                            
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 4-->
                            </div>
                            <!--end::Nav-->






                        @endif



                               
                               

                            </div>
                        </div>


                        <!--begin::details View-->
                        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                            <!--begin::Card header-->
                            <div class="card-header cursor-pointer">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    
                                    <h3 class="fw-bold m-0" >Detalles del envio</h3>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Action-->
                                <a href="../../demo1/dist/account/settings.html" class="btn btn-sm btn-primary align-self-center">Editar Destinatario</a>
                                <!--end::Action-->
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Estado
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 " style="margin-top: -20px; ">
                                        <span class="badge badge-success" style="float:right;">{{ $envio[0]->estado }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Row-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Destinatario</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px; ">
                                        <span class="delabase" style="float:right;">{{ $envio[0]->destinatario }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold">Dirección</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;"> {{ $envio[0]->direccion }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Telefono Destinatario</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;"> {{ $envio[0]->telefono }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Fecha de entrega </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">{{ $envio[0]->fecha_entrega }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>



                                </div>
                                </div>
                                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                <div class="card-body p-9">
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Tipo de envío
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 " style="margin-top: -20px;">
                                        <span class="badge badge-primary" style="float:right;">{{ $envio[0]->tipo }}</span>
                                    </div>

                                  
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Precio del paquete </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">${{ $envio[0]->precio }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                
                                   
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Precio de envío</label>
                                    <!--begin::Label-->
                                    <!--begin::Label-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">${{ $envio[0]->envio }}</span>
                                    </div>
                                    <!--begin::Label-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Precio total </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">${{ $envio[0]->total }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Cobro de envío</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">{{ $envio[0]->cobro }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Estado del pago</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 " style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">{{ $envio[0]->pago }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Nota</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">{{ $envio[0]->nota }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                </div>
                                </div>
                                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                <div class="card-body p-9">
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold">Repartidor </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">Diego</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Ruta </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">2</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Sub Estado </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;"></span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Fecha de subestado</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;"></span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Nota del repartidor</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">Cliente no contesta</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Ubicación</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" style="margin-top: -20px;">
                                        <span class="delabase" style="float:right;">Bodega</span>
                                    </div>
                                    <!--end::Col-->
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
                                    <h3 class="fw-bold m-0">OTROS DATOS</h3>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <!--begin::Row-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Fecha de creación</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8" >
                                        <span class="delabase">14-mayo-2024</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Usuario</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row" >
                                        <span class="delabase">Melvin</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-semibold ">Agencia de registro</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row" >
                                        <span class="delabase">Santa Ana </span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::details View-->
                        
                    </div>
                    <!--end::details View-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

        </div>
        <!--end::Footer-->
        </div>
        <!--end:::Main-->
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