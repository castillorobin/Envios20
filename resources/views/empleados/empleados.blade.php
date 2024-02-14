<!DOCTYPE html>
<html>
<head>
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    @include('partials.general._form-tooltip-hint')

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

        <div class="container mt-5">
            <h2>Lista de Empleados</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Fecha de Nacimiento</th>
                        <th>DUI</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre del empleado</td>
                        <td>Correo del empleado</td>
                        <td>Teléfono del empleado</td>
                        <td>Fecha de nacimiento del empleado</td>
                        <td>DUI del empleado</td>
                        <td>Dirección del empleado</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                 
                </tbody>
            </table>
        </div>
    </x-default-layout>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
