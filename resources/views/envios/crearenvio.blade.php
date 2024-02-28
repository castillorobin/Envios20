<x-default-layout>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        $(document).ready(function() {

            $("#envio").change(function() {
                //alert($(this).val());
                const tenv = document.getElementById("cenvio").value;
                const preci = parseFloat(document.getElementById("precio").value);
                const envi = parseFloat($(this).val());

                if (tenv == "Pagado") {
                    document.getElementById("total").value = preci;
                } else {
                    document.getElementById("total").value = preci - envi;
                }


                //const castot = parseFloat(document.getElementById("totalc").value);
                //document.getElementById("ptotal").value = castot ; 

            });

            $("#precio").change(function() {
                //alert($(this).val());
                const tenv2 = document.getElementById("cenvio").value;
                const envi2 = parseFloat(document.getElementById("envio").value);
                const preci2 = parseFloat($(this).val());

                if (tenv2 == "Pagado") {
                    document.getElementById("total").value = preci2;
                } else {
                    document.getElementById("total").value = preci2 - envi2;
                }

                //const castot = parseFloat(document.getElementById("totalc").value);
                //document.getElementById("ptotal").value = castot ; 

            });


            $("#cenvio").change(function() {
                //alert($(this).val());
                const tenv3 = document.getElementById("precio").value;
                const envi3 = parseFloat(document.getElementById("envio").value);
                const preci3 = document.getElementById("cenvio").value;

                if (preci3 == "Pagado") {
                    document.getElementById("total").value = tenv3;
                } else {
                    document.getElementById("total").value = tenv3 - envi3;
                }


                //const castot = parseFloat(document.getElementById("totalc").value);														//document.getElementById("ptotal").value = castot ; 

            });

        });
    </script>

    <script>
        $(document).ready(function() {

            $("#envio2").change(function() {
                //alert($(this).val());
                const tenv = document.getElementById("cenvio2").value;
                const preci = parseFloat(document.getElementById("precio2").value);
                const envi = parseFloat($(this).val());

                if (tenv == "Pagado") {
                    document.getElementById("total2").value = preci;
                } else {
                    document.getElementById("total2").value = preci - envi;
                }


                //const castot = parseFloat(document.getElementById("totalc").value);
                //document.getElementById("ptotal").value = castot ; 

            });

            $("#precio2").change(function() {
                //alert($(this).val());
                const tenv2 = document.getElementById("cenvio2").value;
                const envi2 = parseFloat(document.getElementById("envio2").value);
                const preci2 = parseFloat($(this).val());

                if (tenv2 == "Pagado") {
                    document.getElementById("total2").value = preci2;
                } else {
                    document.getElementById("total2").value = preci2 - envi2;
                }

                //const castot = parseFloat(document.getElementById("totalc").value);
                //document.getElementById("ptotal").value = castot ; 

            });


            $("#cenvio2").change(function() {
                //alert($(this).val());
                const tenv3 = document.getElementById("precio2").value;
                const envi3 = parseFloat(document.getElementById("envio2").value);
                const preci3 = document.getElementById("cenvio2").value;

                if (preci3 == "Pagado") {
                    document.getElementById("total2").value = tenv3;
                } else {
                    document.getElementById("total2").value = tenv3 - envi3;
                }


                //const castot = parseFloat(document.getElementById("totalc").value);														//document.getElementById("ptotal").value = castot ; 

            });

        });
    </script>

    <script>
        $(document).ready(function() {

            $("#envio3").change(function() {
                //alert($(this).val());
                const tenv = document.getElementById("cenvio3").value;
                const preci = parseFloat(document.getElementById("precio3").value);
                const envi = parseFloat($(this).val());

                if (tenv == "Pagado") {
                    document.getElementById("total3").value = preci;
                } else {
                    document.getElementById("total3").value = preci - envi;
                }


                //const castot = parseFloat(document.getElementById("totalc").value);
                //document.getElementById("ptotal").value = castot ; 

            });

            $("#precio3").change(function() {
                //alert($(this).val());
                const tenv2 = document.getElementById("cenvio3").value;
                const envi2 = parseFloat(document.getElementById("envio3").value);
                const preci2 = parseFloat($(this).val());

                if (tenv2 == "Pagado") {
                    document.getElementById("total3").value = preci2;
                } else {
                    document.getElementById("total3").value = preci2 - envi2;
                }

                //const castot = parseFloat(document.getElementById("totalc").value);
                //document.getElementById("ptotal").value = castot ; 

            });


            $("#cenvio3").change(function() {
                //alert($(this).val());
                const tenv3 = document.getElementById("precio3").value;
                const envi3 = parseFloat(document.getElementById("envio3").value);
                const preci3 = document.getElementById("cenvio3").value;

                if (preci3 == "Pagado") {
                    document.getElementById("total3").value = tenv3;
                } else {
                    document.getElementById("total3").value = tenv3 - envi3;
                }


                //const castot = parseFloat(document.getElementById("totalc").value);														//document.getElementById("ptotal").value = castot ; 

            });

        });
    </script>

    <script>
        $(document).ready(function() {

            $("#envio4").change(function() {
                //alert($(this).val());
                const tenv = document.getElementById("cenvio4").value;
                const preci = parseFloat(document.getElementById("precio4").value);
                const envi = parseFloat($(this).val());

                if (tenv == "Pagado") {
                    document.getElementById("total4").value = preci;
                } else {
                    document.getElementById("total4").value = preci - envi;
                }


                //const castot = parseFloat(document.getElementById("totalc").value);
                //document.getElementById("ptotal").value = castot ; 

            });

            $("#precio4").change(function() {
                //alert($(this).val());
                const tenv2 = document.getElementById("cenvio4").value;
                const envi2 = parseFloat(document.getElementById("envio4").value);
                const preci2 = parseFloat($(this).val());

                if (tenv2 == "Pagado") {
                    document.getElementById("total4").value = preci2;
                } else {
                    document.getElementById("total4").value = preci2 - envi2;
                }

                //const castot = parseFloat(document.getElementById("totalc").value);
                //document.getElementById("ptotal").value = castot ; 

            });


            $("#cenvio4").change(function() {
                //alert($(this).val());
                const tenv3 = document.getElementById("precio4").value;
                const envi3 = parseFloat(document.getElementById("envio4").value);
                const preci3 = document.getElementById("cenvio4").value;

                if (preci3 == "Pagado") {
                    document.getElementById("total4").value = tenv3;
                } else {
                    document.getElementById("total4").value = tenv3 - envi3;
                }


                //const castot = parseFloat(document.getElementById("totalc").value);														//document.getElementById("ptotal").value = castot ; 

            });

        });
    </script>

    <style>
        label.required::after {
            content: none;
        }
    </style>

    <div class="app-content flex-column-fluid">
        <div class="app-container container-xxl">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-4">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Melo Express</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="/" class="text-muted text-hover-primary">Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Gestion de envios</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Crear envio</li>
                </ul>
            </div>
            <div class="card card-flush">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general" aria-selected="true" role="tab">
                                <i class="ki-duotone ki-home fs-2 me-2"></i> Personalizado
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5" href="/enviopd" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-shop fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Personalizado Departamental
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5" href="/enviopf" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-compass fs-2 me-2"><span class="path1"></span><span class="path2"></span></i> Punto fijo
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5" href="/envioca" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-package fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Casillero
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="kt_ecommerce_settings_general" role="tabpanel">

                            <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="/envioguardarp" method="POST">
                                @csrf
                                @method('GET')

                                <div class="row mb-6">
                                    <div class="form-floating col-lg-3">
                                        <input type="text" class="form-control form-control-solid" name="n_guia" id="n_guia" placeholder="# de guia" />
                                        <label for="n_guia"># de guia</label>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <div class="form-floating col-lg-12">
                                        <select class="form-select form-select-solid" name="comercio" id="comercio" aria-label="Floating label select example">
                                            <option selected>selecione el comercio</option>
                                            <option value="1">ejemplo 1</option>
                                            <option value="2">ejemplo 2</option>
                                            <option value="3">ejemplo 3</option>
                                        </select>
                                        <label for="comercio">Comercio</label>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <div class="form-floating col-lg-12">
                                        <input type="text" class="form-control form-control-solid" name="destinatariop" id="destinatariop" placeholder="Destinatario" />
                                        <label for="destinatariop">Destinatario</label>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <div class="form-floating col-lg-7">
                                        <input type="text" class="form-control form-control-solid" name="direccionp" id="direccionp" placeholder="Dirección" />
                                        <label for="direccionp">Dirección</label>
                                    </div>
                                    <div class="form-floating col-lg-5">
                                        <input type="tel" class="form-control form-control-solid" name="telefonop" id="telefonop" placeholder="Telefono" />
                                        <label for="telefonop">Teléfono</label>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <div class="form-floating col-lg-4">
                                        <input type="text" class="form-control form-control-solid" name="precio" id="precio" placeholder="Precio del paquete" />
                                        <label for="precio">Precio del paquete</label>
                                    </div>
                                    <div class="form-floating col-lg-4">
                                        <input type="text" class="form-control form-control-solid" name="envio" id="envio" placeholder="Precio del envio" />
                                        <label for="envio">Precio del envio</label>
                                    </div>
                                    <div class="form-floating col-lg-4">
                                        <input type="text" class="form-control form-control-solid" name="total" id="total" placeholder="Total a pagar" />
                                        <label for="total">Total a pagar</label>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <div class="form-floating col-lg-6">
                                        <select class="form-select form-select-solid" name="cenvio" id="cenvio" aria-label="Floating label select example" required>
                                            <option selected>selecione el estado cobro</option>
                                            <option value="Pendiente">Pendiente</option>
                                            <option value="pagado">pagado</option>
                                        </select>
                                        <label for="cenvio">Cobro del envío</label>
                                    </div>
                                    <div class="form-floating col-lg-6">
                                        <select class="form-select form-select-solid" name="estado_pagop" id="estado_pagop" aria-label="Floating label select example" required>
                                            <option selected>selecione el estado del pago</option>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">Pagado</option>
                                        </select>
                                        <label for="estado_pagop">Estado del pago</label>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <div class="form-floating col-lg-4">
                                        <select class="form-select form-select-solid" name="tipo_enviop" id="tipo_enviop" aria-label="Floating label select example" required>
                                            <option selected>selecione el tipo de envio</option>
                                            <option value="Personalizado">Personalizado</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                        <label for="tipo_enviop">Tipo de envio</label>
                                    </div>
                                    <div class="form-floating col-lg-4">
                                        <select class="form-select form-select-solid" name="estado_enviop" id="estado_enviop" aria-label="Floating label select example" required>
                                            <option selected>selecione el estado del envio</option>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entragar">sin entragar</option>
                                        </select>
                                        <label for="estado_enviop">Estado del envio</label>
                                    </div>
                                    <div class="form-floating col-lg-4">
                                        <input type="date" class="form-control form-control-solid" name="fecha_entregap" id="fecha_entregap" placeholder="Fecha de entrega" />
                                        <label for="fecha_entregap">Fecha de entregar</label>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <div class="form-floating">
                                        <textarea name="notap" class="form-control form-control-solid" placeholder="Nota" id="notap" style="height: 80px"></textarea>
                                        <label for="notap">Nota</label>
                                    </div>
                                </div>
                                <div class="row py-5">
                                    <div class="col-md-12 text-end">
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                                                Cancelar
                                            </button>
                                            <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">
                                                    Guardar
                                                </span>
                                                <span class="indicator-progress">
                                                    Por favor espere... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Termina form de envio personalizado -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-default-layout>
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script>
    flatpickr("#fecha_entregap", {
        dateFormat: 'Y-m-d',
    });
</script>