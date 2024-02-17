<!DOCTYPE html>
<html>
<head>
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    input.border-black {
        border: 2px solid black;
    }
    </style>
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
        <form id="kt_docs_formvalidation_text" class="form" action="#" autocomplete="off">
            <hr class="border-dark">
            <h1>Datos Usuarios</h1>
            <div class="fv-row mb-10">
                <label class="required fw-semibold fs-6 mb-2">Nombre</label>
                <input type="text" name="nombre" class="form-control border-black mb-3 mb-lg-0" placeholder="" value="" />
            </div>
            <div class="fv-row mb-10">
                <label class="required fw-semibold fs-6 mb-2">Correo Electrónico</label>
                <input type="email" name="correo" class="form-control border-black mb-3 mb-lg-0" placeholder="" value="" />
            </div>
            <div class="row">
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Contraseña</label>
                    <input type="password" name="contrasena" class="form-control border-black mb-3 mb-lg-0" placeholder="" value="" />
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Confirmar Contraseña</label>           
                    <input type="password" name="confirmar_contrasena" class="form-control border-black mb-3 mb-lg-0" placeholder="" value="" />
                </div>
            </div>
            <hr class="border-dark">
            <h1>Datos personales</h1>
            <div class="fv-row mb-4">
                <div class="col-md">
                    <div class="input-group">
                        <input type="file" class="form-control" accept="image/jpeg, image/png" name="photo" id="photo-upload" style="display: none;" required>
                        <label for="photo-upload" class="input-group-text w-100 bg-dark text-white d-flex justify-content-center align-items-center" style="cursor: pointer;">
                            <i class="fas fa-upload me-2"></i> Subir Foto
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="fv-row  col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Teléfono</label>
                    <div class="input-group">
                        <span class="input-group-text border-black">+503</span>
                        <input type="text" name="telefono" class="form-control border-black " id="telefono" placeholder="" value="" />
                    </div>
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">WhatsApp</label>
                    <div class="input-group">
                        <span class="input-group-text border-black">+503</span>
                        <input type="text" name="whatsapp" class="form-control border-black" id="whatsapp" placeholder="" value="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control border-black" id="fecha_nacimiento" required />
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">DUI</label>
                    <input type="text" name="dui" class="form-control border-black" id="dui" required pattern="[0-9]{8}-[0-9]{1}" title="Por favor, introduce un DUI válido ejemplo xxxxxxxx-x" />
                </div>
            </div>
            <div class="fv-row mb-10">
                <label for="exampleFormControlTextarea1" class="required fw-semibold fs-6 mb-2">Dirección</label>
                <textarea class="form-control border-black border-3" name="direccion" id="direccion" rows="3"></textarea>
            </div>
           
            <hr class="border-dark">
            <h1>Datos laborales</h1>
            <div class="row">              
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Cargo</label>
                    <input type="text" name="cargo" class="form-control border-black" id="cargo" required />
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Fecha de Alta</label>
                    <input type="date" name="fecha_alta" class="form-control border-black" id="fecha_alta" required />
                </div>
            </div>
            <div class="row">
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Número de ISS</label>
                    <input type="text" name="n_iss" class="form-control border-black" id="n_iss" required />
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Número de AFP</label>
                    <input type="text" name="n_afp" class="form-control border-black" id="n_afp" required />
                </div>
            </div>
            <div class="fv-row mb-10">
                <label class="required fw-semibold fs-6 mb-2">Agencia de Registro</label>
                <input type="text" name="agencia_registro" class="form-control border-black" id="agencia_registro" required />
            </div>
            <div class="fv-row mb-10">
                <label class="fw-semibold fs-6 mb-2">Nota</label>
                <textarea name="nota" class="form-control border-black" id="nota"></textarea>
            </div>
            <!--botones-->
            <div class="text-center">
                <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Guarda empleado
                    </span>
                    <span class="indicator-progress">
                        Por favor espere <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
                <button id="regresar" type="button" class="btn btn-primary me-3" onclick="window.location.href='/empleados'">
                    Regresar a Empleados
                </button>
            </div>
        </form>
       
    </x-default-layout>
    <script src="{{ asset('assets/js/validaciones.js') }}"></script>
</body>
</html>
    
    

