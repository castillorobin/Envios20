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
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="/empleados" class="btn btn-link btn-color-gray-500 btn-active-color-primary me-5 mb-2">Empleados</a>
                </li>
                <li class="nav-item">
                    <a href="/crear" class="btn btn-link btn-color-gray-500 btn-active-color-primary me-5 mb-2">Agregar</a>
                </li>
            </ul>
        </div>
        <div class="border rounded">
            <select id="kt_docs_select2_rich_content" class="form-select form-select-primary" name="empleado" data-placeholder="Seleccione un empleado">
                <option></option>
                <option value="0" data-kt-rich-content-subcontent="..." data-kt-rich-content-icon="assets/media/avatars/300-6.jpg">Option Label 1</option>
                <option value="1" data-kt-rich-content-subcontent="..." data-kt-rich-content-icon="assets/media/avatars/300-6.jpg">Option Label 1</option>
            </select>
        </div>
        <br>
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
    <br>
    <div class="table-responsive">
        <table class="table table-striped gy-7 gs-7">
            <thead>
               <h1>Informacion del empleado</h1>
            </thead>
            <tbody>
                <tr>
                    <td><b>Nombre completo</b></td>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <td><b>Correo Electrónico</b></td>
                    <td>johndoe@example.com</td>
                </tr>
                <tr>
                    <td><b>Teléfono</b></td>
                    <td>12345678</td>
                </tr>
                <tr>
                    <td><b>WhatsApp</b></td>
                    <td>12345678</td>
                </tr>
                <tr>
                    <td><b>Fecha de Nacimiento</b></td>
                    <td>01/01/1990</td>
                </tr>
                <tr>
                    <td><b>DUI</b></td>
                    <td>12345678-9</td>
                </tr>
                <tr>
                    <td><b>Dirección</b></td>
                    <td>123 Main St</td>
                </tr>
                <tr>
                    <td><b>Cargo</b></td>
                    <td>Desarrollador Web</td>
                </tr>
                <tr>
                    <td><b>Fecha de Alta</b></td>
                    <td>01/01/2022</td>
                </tr>
                <tr>
                    <td><b>N° ISSS</b></td>
                    <td>123456789</td>
                </tr>
                <tr>
                    <td><b>N° AFP</b></td>
                    <td>123456789012</td>
                </tr>
                <tr>
                    <td><b>Agencia de Registro</b></td>
                    <td>SSS</td>
                </tr>
                <tr>
                    <td><b>Nota</b></td>
                    <td>Lorem ipsum dolor sit amet</td>
                </tr>
            </tbody>
        </table>
    </div>
    </x-default-layout>
    <script src="{{ asset('assets/js/selectempleados.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
