<x-default-layout>
    <style>
        label.required::after {
            content: none;
        }
    </style>
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
    <div class="app-content flex-column-fluid">

        <div class="app-container container-xxl">


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
                                <div class="col-md-9 offset-md-3">
                                    <h2>Personalizado</h2>
                                </div>
                                <div class="fv-row col-md-12 mb-3">
                                    <label class="required fw-semibold fs-6 mb-2">Destinatario</label>
                                    <input type="text" name="destinatario" class="form-control form-control-solid" id="destinatario" required />
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Direccion</label>
                                        <input type="text" name="direccion" class="form-control form-control-solid" id="direccion" required />
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Telefono</label>
                                        <input type="text" name="telefono" class="form-control form-control-solid" id="telefono" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Cobro del envío</label>
                                        <select name="cobro_envio" class="form-select form-select-solid" id="cobro_envio" required>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="pagado">Pagado</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Precio del paquete</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="paquete" placeholder="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Precio del envio</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="precio_envio" class="form-control form-control-solid" id="precio_envio" placeholder="" value="" />
                                        </div>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">total a pagar</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="total_pagar" class="form-control form-control-solid" id="total_pagar" placeholder="" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Estado del envio</label>
                                        <select name="estado_envio" class="form-select form-select-solid" id="estado_envio" required>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entragar">sin entragar</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Estado del pago</label>
                                        <select name="estado_pago" class="form-select form-select-solid" id="estado_pago" required>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">pagado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Tipo del envio</label>
                                        <select name="tipo_envio" class="form-select form-select-solid" id="tipo_envio" required>
                                            <option value="personalizado">Personalizado</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <div class="fv-row col-md-12 mb-3">
                                            <label class="required fw-semibold fs-6 mb-2">Fecha de entegra</label>
                                            <input type="date" name="fecha_entrega" class="form-control form-control-solid" id="fecha_entrega" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fw-semibold fs-6 mb-2">Nota</label>
                                    <textarea name="nota" class="form-control form-control-solid" id="nota"></textarea>
                                </div>
                                <div class="row py-5">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="d-flex">
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
                                <div class="row mb-7">
                                    <div class="col-md-9 offset-md-3">
                                        <h2>Personalizado Departamental
                                        </h2>
                                    </div>
                                </div>
                                <div class="fv-row col-md-12 mb-3">
                                    <label class="required fw-semibold fs-6 mb-2">Destinatario</label>
                                    <input type="text" name="destinatario" class="form-control form-control-solid" id="destinatario" required />
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Direccion</label>
                                        <input type="text" name="direccion" class="form-control form-control-solid" id="direccion" required />
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Telefono</label>
                                        <input type="text" name="telefono" class="form-control form-control-solid" id="telefono" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Cobro del envío</label>
                                        <select name="cobro_envio" class="form-select form-select-solid" id="cobro_envio" required>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="pagado">Pagado</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">precio del paquete</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="paquete" placeholder="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">precio del envio</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="precio_envio" class="form-control form-control-solid" id="precio_envio" placeholder="" value="" />
                                        </div>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">total a pagar</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="total_pagar" class="form-control form-control-solid" id="total_pagar" placeholder="" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Estado del envio</label>
                                        <select name="estado_envio" class="form-select form-select-solid" id="estado_envio" required>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entragar">sin entragar</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Estado del pago</label>
                                        <select name="estado_pago" class="form-select form-select-solid" id="estado_pago" required>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">pagado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Tipo del envio</label>
                                        <select name="tipo_envio" class="form-select form-select-solid" id="tipo_envio" required>
                                            <option value="personalizado">Personalizado departalmental</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <div class="fv-row col-md-12 mb-3">
                                            <label class="required fw-semibold fs-6 mb-2">Fecha de entegra</label>
                                            <input type="date" name="fecha_entrega" class="form-control form-control-solid" id="fecha_entrega" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fw-semibold fs-6 mb-2">Nota</label>
                                    <textarea name="nota" class="form-control form-control-solid" id="nota"></textarea>
                                </div>
                                <div class="row py-5">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="d-flex">
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
                                <div class="row mb-7">
                                    <div class="col-md-9 offset-md-3">
                                        <h2>Punto fijo</h2>
                                    </div>
                                </div>
                                <div class="fv-row col-md-12 mb-3">
                                    <label class="fw-semibold fs-6 mb-2">Destinatario</label>
                                    <input type="text" name="destinatario" class="form-control form-control-solid" id="destinatario" required />
                                </div>

                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Direccion</label>
                                        <input type="text" name="direccion" class="form-control form-control-solid" id="direccion" required />
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Telefono</label>
                                        <input type="text" name="telefono" class="form-control form-control-solid" id="telefono" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Cobro del envío</label>
                                        <select name="cobro_envio" class="form-select form-select-solid" id="cobro_envio" required>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="pagado">Pagado</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Precio del paquete</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="paquete" placeholder="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Precio del envio</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="precio_envio" class="form-control form-control-solid" id="precio_envio" placeholder="" value="" />
                                        </div>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Total a pagar</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="total_pagar" class="form-control form-control-solid" id="total_pagar" placeholder="" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Estado del envio</label>
                                        <select name="estado_envio" class="form-select form-select-solid" id="estado_envio" required>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entragar">sin entragar</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Estado del pago</label>
                                        <select name="estado_pago" class="form-select form-select-solid" id="estado_pago" required>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">pagado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Tipo del envio</label>
                                        <select name="tipo_envio" class="form-select form-select-solid" id="tipo_envio" required>
                                            <option value="personalizado">Punto fijo</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <div class="fv-row col-md-12 mb-3">
                                            <label class="required fw-semibold fs-6 mb-2">Fecha de entegra</label>
                                            <input type="date" name="fecha_entrega" class="form-control form-control-solid" id="fecha_entrega" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fw-semibold fs-6 mb-2">Nota</label>
                                    <textarea name="nota" class="form-control form-control-solid" id="nota"></textarea>
                                </div>
                                <div class="row py-5">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="d-flex">
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
                                <div class="row mb-7">
                                    <div class="col-md-9 offset-md-3">
                                        <h2>Casillero</h2>
                                    </div>
                                </div>
                                <div class="fv-row col-md-12 mb-3">
                                    <label class="required fw-semibold fs-6 mb-2">Destinatario</label>
                                    <input type="text" name="destinatario" class="form-control form-control-solid" id="destinatario" required />
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Direccion</label>
                                        <input type="text" name="direccion" class="form-control form-control-solid" id="direccion" required />
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Telefono</label>
                                        <input type="text" name="telefono" class="form-control form-control-solid" id="telefono" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Precio del paquete</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="paquete" placeholder="" value="" style="border: none;">
                                        </div>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Precio del paquete</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="paquete" class="form-control form-control-solid" id="paquete" placeholder="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Precio del envio</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="precio_envio" class="form-control form-control-solid" id="precio_envio" placeholder="" value="" />
                                        </div>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Total a pagar</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="border: none;">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                            <input type="text" name="total_pagar" class="form-control form-control-solid" id="total_pagar" placeholder="" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Estado del envio</label>
                                        <select name="estado_envio" class="form-select form-select-solid" id="estado_envio" required>
                                            <option value="Creado">Creado</option>
                                            <option value="sin_entragar">sin entragar</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Estado del pago</label>
                                        <select name="estado_pago" class="form-select form-select-solid" id="estado_pago" required>
                                            <option value="por_pagar">Por pagar</option>
                                            <option value="pagado">pagado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fv-row col-md-6 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2">Tipo del envio</label>
                                        <select name="tipo_envio" class="form-select form-select-solid" id="tipo_envio" required>
                                            <option value="casillero">casillero</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>
                                    <div class="fv-row col-md-6 mb-3">
                                        <div class="fv-row col-md-12 mb-3">
                                            <label class="required fw-semibold fs-6 mb-2">Fecha de entegra</label>
                                            <input type="date" name="fecha_entrega" class="form-control form-control-solid" id="fecha_entrega" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fw-semibold fs-6 mb-2">Nota</label>
                                    <textarea name="nota" class="form-control form-control-solid" id="nota"></textarea>
                                </div>
                                <div class="row py-5">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="d-flex">
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