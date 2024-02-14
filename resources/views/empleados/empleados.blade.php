<!DOCTYPE html>
<html>
<head>
    <title>Empleados</title>
    
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
    </x-default-layout>

    

</body>
</html>
