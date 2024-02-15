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
            <h1>Datos usuarios</h1>
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
            <h1>Datos personales</h1>
            <div class="container mt-5">
                <div class="row mb-4">
                    <div class="col-md">
                        <div class="input-group">
                            <input type="file" class="form-control" accept="image/jpeg, image/png" name="photo" id="photo-upload" style="display: none;" require>
                            <label for="photo-upload" class="input-group-text w-100 bg-dark text-white d-flex justify-content-center align-items-center" style="cursor: pointer;">
                                <i class="fas fa-upload me-2"></i> Subir Foto
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" required pattern="[0-9]+" title="Por favor, introduce solo números">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="whatsapp" class="form-label">WhatsApp</label>
                        <input type="text" class="form-control" id="whatsapp" required pattern="[0-9]+" title="Por favor, introduce solo números">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dui" class="form-label">DUI</label>
                        <input type="text" class="form-control" id="dui" required pattern="[0-9]{8}-[0-9]{1}" title="Por favor, introduce un DUI válido ejemplo xxxxxxxx-x">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <textarea class="form-control" id="direccion" required></textarea>
                    </div>
                </div>
            </div>
            <h1>Datos laborales</h1>
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
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary me-2">Agregar empleado</button>
                    <a href="/empleados" class="btn btn-primary ms-2">Regresar a empleados</a>
                </div>
            </div>

        </form>
    </x-default-layout>
    <script>
         // Obtener la fecha actual
    let today = new Date();
    let formattedDate = today.toISOString().substr(0, 10);
    document.getElementById('fecha_alta').value = formattedDate;
    </script>
</body>
</html>
