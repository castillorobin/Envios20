<!DOCTYPE html>
<html>
<head>
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/perfil.css') }}">
</head>
<body>
    <x-default-layout>
        <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <div class="symbol symbol-150px me-5">
                <img alt="Logo" src="assets/media/avatars/300-1.jpg" style="width: 150px; height: 150px;" />
            </div>
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-4">Max Smith</div>
                <div class="d-flex justify-content-between align-items-center" style="margin-top: 10px;">
                    <div class="d-flex align-items-center me-4">
                        <i class="fas fa-code me-2"></i>
                        <span class="fw-semibold text-muted text-hover-primary fs-5">Developer</span>
                    </div>
                    <div class="d-flex align-items-center me-4">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        <span class="fw-semibold text-muted text-hover-primary fs-5">SF, Bay Area</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope me-2"></i>
                        <span class="fw-semibold text-muted text-hover-primary fs-5">max@kt.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold mb-5 mb-xl-10">
        <li class="nav-item mt-2">
            <a class="nav-link text-active-primary ms-4 me-10 py-5 active" href="../../demo1/dist/account/overview.html">Overview</a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link text-active-primary ms-4 me-10 py-5" href="../../demo1/dist/account/settings.html">Settings</a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link text-active-primary ms-4 me-10 py-5" href="../../demo1/dist/account/security.html">Security</a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link text-active-primary ms-4 me-10 py-5" href="../../demo1/dist/account/activity.html">Activity</a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link text-active-primary ms-4 me-10 py-5" href="../../demo1/dist/account/billing.html">Billing</a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link text-active-primary ms-4 me-10 py-5" href="../../demo1/dist/account/statements.html">Statements</a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link text-active-primary ms-4 me-10 py-5" href="../../demo1/dist/account/referrals.html">Referrals</a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link text-active-primary ms-4 me-10 py-5" href="../../demo1/dist/account/api-keys.html">API Keys</a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link text-active-primary ms-4 me-10 py-5" href="../../demo1/dist/account/logs.html">Logs</a>
        </li>
    </ul>
</div>

    
											
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Información del empleado</h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-primary">Editar</a>
        </div>
    </div>
    <div class="card-body p-9">
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Nombre completo</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">John Doe</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Correo Electrónico</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">johndoe@example.com</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Teléfono</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">12345678</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">WhatsApp</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">12345678</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Fecha de Nacimiento</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">01/01/1990</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">DUI</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">12345678-9</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Dirección</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">123 Main St</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Cargo</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">Desarrollador Web</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Fecha de Alta</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">01/01/2022</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">N° ISSS</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">123456789</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">N° AFP</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">123456789012</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Agencia de Registro</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">SSS</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Nota</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">Lorem ipsum dolor sit amet</span>
            </div>
        </div>
    </div>
</div>

    </x-default-layout>
    <script src="{{ asset('assets/js/selectempleados.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
