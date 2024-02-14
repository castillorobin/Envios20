<!DOCTYPE html>
<html>
<head>
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        
        <form id="formularios">
            <div class="container mt-5">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="confirmar_contrasena" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="confirmar_contrasena" required>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="foto" class="form-label">Subir Foto</label>
                        <input type="file" class="form-control" id="foto" required>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                         <input type="text" class="form-control" id="telefono" required>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="whatsapp" class="form-label">WhatsApp</label>
                        <input type="text" class="form-control" id="whatsapp" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dui" class="form-label">DUI</label>
                        <input type="text" class="form-control" id="dui" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <textarea class="form-control" id="direccion" required></textarea>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cargo" class="form-label">Cargo</label>
                        <input type="text" class="form-control" id="cargo" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="fecha_alta" class="form-label">Fecha de Alta</label>
                        <input type="date" class="form-control" id="fecha_alta" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="n_isss" class="form-label">N° de ISSS</label>
                        <input type="text" class="form-control" id="n_isss" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="n_afp" class="form-label">N° de AFP</label>
                        <input type="text" class="form-control" id="n_afp" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="agencia_registro" class="form-label">Agencia de Registro</label>
                    <input type="text" class="form-control" id="agencia_registro" required>
                </div>
                <div class="mb-3">
                    <label for="nota" class="form-label">Nota</label>
                    <textarea class="form-control" id="nota" required></textarea>
                </div>
            </div>

            <div class="container mt-5">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </form>
    </x-default-layout>

    <script>
        document.getElementById('formularios').addEventListener('submit', function(event) {
            event.preventDefault();
            // Aquí puedes obtener los datos de los tres formularios y enviarlos al servidor
            var usuarioFormData = new FormData(document.getElementById('usuarioForm'));
            var datosPersonalesFormData = new FormData(document.getElementById('datosPersonalesForm'));
            var datosLaboralesFormData = new FormData(document.getElementById('datosLaboralesForm'));

            // Luego, puedes enviar los datos al servidor usando fetch() u otra técnica de tu elección
        });
    </script>
</body>
</html>
