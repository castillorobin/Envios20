<x-default-layout>
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
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_store" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-shop fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Personalizado Departamental
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-compass fs-2 me-2"><span class="path1"></span><span class="path2"></span></i> Punto fijo
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_products" aria-selected="false" role="tab" tabindex="-1">
                                <i class="ki-duotone ki-package fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Casillero
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="kt_ecommerce_settings_general" role="tabpanel">

                            <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Numero de guia</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="n_guia" class="form-control form-control-lg form-control-solid" placeholder="# de guia" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Destinatario</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Destinatario" class="form-control form-control-lg form-control-solid" placeholder="Destinatario" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Direccion</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Direccion" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono" class="form-control form-control-lg form-control-solid" placeholder="Telefono" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Cobro del envío</label>
                                    <div class="col-lg-4">
                                        <select name="cobro_envio" class="form-select form-select-solid" id="cobro_envio" required>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="pagado">Pagado</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Precio del paquete</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="paquete" placeholder="Precio del paquete" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Precio del envio</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="precio_envio" placeholder="Precio del envio" value="" />
                                        </div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Total a pagar</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="total_pagar" placeholder="total a pagar" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Estado del envio</label>
                                    <div class="col-lg-4">
                                        <select name="estado_envio" class="form-select form-select-solid" id="estado_envio" required>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entragar">sin entragar</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Estado del pago</label>
                                    <div class="col-lg-3">
                                        <select name="estado_pago" class="form-select form-select-solid" id="estado_pago" required>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">pagado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Tipo del envio</label>
                                    <div class="col-lg-4">
                                        <select name="tipo_envio" class="form-select form-select-solid" id="tipo_envio" required>
                                            <option value="personalizado">Personalizado</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Fecha de entrega</label>
                                    <div class="col-lg-3">
                                        <div class="fv-row">
                                            <input type="date" name="fecha_entrega" class="form-control form-control-solid" id="fecha_entrega" placeholder="Fecha de entrega" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Nota</label>
                                    <div class="col-lg-10">
                                        <textarea name="nota" class="form-control form-control-lg form-control-solid" id="nota" placeholder="Nota"></textarea>
                                    </div>
                                </div>
                                <div class="row py-5">
                                    <div class="col-md-12 text-end">
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                                                Cancel
                                            </button>
                                            <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">
                                                    Save
                                                </span>
                                                <span class="indicator-progress">
                                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                            <form id="kt_ecommerce_settings_general_store" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Numero de guia</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="n_guia" class="form-control form-control-lg form-control-solid" placeholder="# de guia" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Destinatario</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Destinatario" class="form-control form-control-lg form-control-solid" placeholder="Destinatario" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Direccion</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Direccion" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono" class="form-control form-control-lg form-control-solid" placeholder="Telefono" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Cobro del envío</label>
                                    <div class="col-lg-4">
                                        <select name="cobro_envio" class="form-select form-select-solid" id="cobro_envio" required>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="pagado">Pagado</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Precio del paquete</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="paquete" placeholder="Precio del paquete" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Precio del envio</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="precio_envio" placeholder="Precio del envio" value="" />
                                        </div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Total a pagar</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="total_pagar" placeholder="total a pagar" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Estado del envio</label>
                                    <div class="col-lg-4">
                                        <select name="estado_envio" class="form-select form-select-solid" id="estado_envio" required>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entragar">sin entragar</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Estado del pago</label>
                                    <div class="col-lg-3">
                                        <select name="estado_pago" class="form-select form-select-solid" id="estado_pago" required>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">pagado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Tipo del envio</label>
                                    <div class="col-lg-4">
                                        <select name="tipo_envio" class="form-select form-select-solid" id="tipo_envio" required>
                                            <option value="personalizado_departamental">Personalizado departamental</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Fecha de entrega</label>
                                    <div class="col-lg-3">
                                        <div class="fv-row">
                                            <input type="date" name="fecha_entrega" class="form-control form-control-solid" id="fecha_entrega" placeholder="Fecha de entrega" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Nota</label>
                                    <div class="col-lg-10">
                                        <textarea name="nota" class="form-control form-control-lg form-control-solid" id="nota" placeholder="Nota"></textarea>
                                    </div>
                                </div>
                                <div class="row py-5">
                                    <div class="col-md-12 text-end">
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                                                Cancel
                                            </button>
                                            <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">
                                                    Save
                                                </span>
                                                <span class="indicator-progress">
                                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">

                            <form id="kt_ecommerce_settings_general_localization" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 me-2">Numero de guia</label>
                                    <div class="col-lg-2 ms-2">
                                        <input type="text" name="n_guia" class="form-control form-control-lg form-control-solid" placeholder="# de guia" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Destinatario</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Destinatario" class="form-control form-control-lg form-control-solid" placeholder="Destinatario" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Direccion</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Direccion" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono" class="form-control form-control-lg form-control-solid" placeholder="Telefono" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Cobro del envío</label>
                                    <div class="col-lg-4">
                                        <select name="cobro_envio" class="form-select form-select-solid" id="cobro_envio" required>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="pagado">Pagado</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Precio del paquete</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="paquete" placeholder="Precio del paquete" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Precio del envio</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="precio_envio" placeholder="Precio del envio" value="" />
                                        </div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Total a pagar</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="total_pagar" placeholder="total a pagar" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Estado del envio</label>
                                    <div class="col-lg-4">
                                        <select name="estado_envio" class="form-select form-select-solid" id="estado_envio" required>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entragar">sin entragar</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Estado del pago</label>
                                    <div class="col-lg-3">
                                        <select name="estado_pago" class="form-select form-select-solid" id="estado_pago" required>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">pagado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Tipo del envio</label>
                                    <div class="col-lg-4">
                                        <select name="tipo_envio" class="form-select form-select-solid" id="tipo_envio" required>
                                            <option value="punto_fijo">Punto fijo</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Fecha de entrega</label>
                                    <div class="col-lg-3">
                                        <div class="fv-row">
                                            <input type="date" name="fecha_entrega" class="form-control form-control-solid" id="fecha_entrega" placeholder="Fecha de entrega" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Nota</label>
                                    <div class="col-lg-10">
                                        <textarea name="nota" class="form-control form-control-lg form-control-solid" id="nota" placeholder="Nota"></textarea>
                                    </div>
                                </div>
                                <div class="row py-5">
                                    <div class="col-md-12 text-end">
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                                                Cancel
                                            </button>
                                            <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">
                                                    Save
                                                </span>
                                                <span class="indicator-progress">
                                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">
                            <form id="kt_ecommerce_settings_general_products" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Numero de guia</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="n_guia" class="form-control form-control-lg form-control-solid" placeholder="# de guia" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Destinatario</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Destinatario" class="form-control form-control-lg form-control-solid" placeholder="Destinatario" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Direccion</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Direccion" />
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Telefono</label>
                                    <div class="col-lg-3">
                                        <input type="tel" name="telefono" class="form-control form-control-lg form-control-solid" placeholder="Telefono" />
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Cobro del envío</label>
                                    <div class="col-lg-4">
                                        <select name="cobro_envio" class="form-select form-select-solid" id="cobro_envio" required>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="pagado">Pagado</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Precio del paquete</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="paquete" placeholder="Precio del paquete" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Precio del envio</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="precio_envio" placeholder="Precio del envio" value="" />
                                        </div>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Total a pagar</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="total_pagar" placeholder="total a pagar" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Estado del envio</label>
                                    <div class="col-lg-4">
                                        <select name="estado_envio" class="form-select form-select-solid" id="estado_envio" required>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entragar">sin entragar</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Estado del pago</label>
                                    <div class="col-lg-3">
                                        <select name="estado_pago" class="form-select form-select-solid" id="estado_pago" required>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">pagado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Tipo del envio</label>
                                    <div class="col-lg-4">
                                        <select name="tipo_envio" class="form-select form-select-solid" id="tipo_envio" required>
                                            <option value="asillero">Casillero</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6 ms-3">Fecha de entrega</label>
                                    <div class="col-lg-3">
                                        <div class="fv-row">
                                            <input type="date" name="fecha_entrega" class="form-control form-control-solid" id="fecha_entrega" placeholder="Fecha de entrega" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">Nota</label>
                                    <div class="col-lg-10">
                                        <textarea name="nota" class="form-control form-control-lg form-control-solid" id="nota" placeholder="Nota"></textarea>
                                    </div>
                                </div>
                                <div class="row py-5">
                                    <div class="col-md-12 text-end">
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                                                Cancel
                                            </button>
                                            <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">
                                                    Save
                                                </span>
                                                <span class="indicator-progress">
                                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
</x-default-layout>
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script>
    flatpickr("#fecha_entrega", {
        dateFormat: 'Y-m-d',
    });
</script>