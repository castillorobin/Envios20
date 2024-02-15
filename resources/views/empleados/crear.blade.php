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
        <form id="kt_docs_formvalidation_text" class="form" action="#" autocomplete="off">
            <hr class="border-dark">
            <h1>Datos Usuarios</h1>
            <div class="fv-row mb-10">
                <label class="required fw-semibold fs-6 mb-2">Nombre</label>
                <input type="text" name="nombre" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="" />
            </div>
            <div class="fv-row mb-10">
                <label class="required fw-semibold fs-6 mb-2">Correo Electrónico</label>
                <input type="email" name="correo" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="" />
            </div>
            <div class="row">
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Contraseña</label>
                    <input type="password" name="contrasena" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="" />
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Confirmar Contraseña</label>           
                    <input type="password" name="confirmar_contrasena" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="" />
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
                        <span class="input-group-text">+503</span>
                        <input type="text" name="telefono" class="form-control form-control-solid" id="telefono" placeholder="" value="" />
                    </div>
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">WhatsApp</label>
                    <div class="input-group">
                        <span class="input-group-text">+503</span>
                        <input type="text" name="whatsapp" class="form-control form-control-solid" id="whatsapp" placeholder="" value="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control form-control-solid" id="fecha_nacimiento" required />
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">DUI</label>
                    <input type="text" name="dui" class="form-control form-control-solid" id="dui" required pattern="[0-9]{8}-[0-9]{1}" title="Por favor, introduce un DUI válido ejemplo xxxxxxxx-x" />
                </div>
            </div>
            <div class="fv-row mb-10">
                <label class="required fw-semibold fs-6 mb-2">Dirección</label>
                <input type="text" name="direccion" class="form-control form-control-solid border-3" id="direccion" required />
            </div>
            <hr class="border-dark">
            <h1>Datos laborales</h1>
            <div class="row">              
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Cargo</label>
                    <input type="text" name="cargo" class="form-control form-control-solid" id="cargo" required />
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Fecha de Alta</label>
                    <input type="date" name="fecha_alta" class="form-control form-control-solid" id="fecha_alta" required />
                </div>
            </div>
            <div class="row">
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Número de ISS</label>
                    <input type="text" name="n_iss" class="form-control form-control-solid" id="n_iss" required />
                </div>
                <div class="fv-row col-md-6 mb-3">
                    <label class="required fw-semibold fs-6 mb-2">Número de AFP</label>
                    <input type="text" name="n_afp" class="form-control form-control-solid" id="n_afp" required />
                </div>
            </div>
            <div class="fv-row mb-10">
                <label class="required fw-semibold fs-6 mb-2">Agencia de Registro</label>
                <input type="text" name="agencia_registro" class="form-control form-control-solid" id="agencia_registro" required />
            </div>
            <div class="fv-row mb-10">
                <label class="fw-semibold fs-6 mb-2">Nota</label>
                <textarea name="nota" class="form-control form-control-solid" id="nota"></textarea>
            </div>
            <!--botones-->
            <div class="text-center">
                <button id="regresar" type="button" class="btn btn-primary me-3" onclick="window.location.href='/empleados'">
                    Regresar a Empleados
                </button>
                <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Validation Form
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
            </div>

        </form>

    </x-default-layout>
   
    <script>
    const form = document.getElementById('kt_docs_formvalidation_text');
    var validator = FormValidation.formValidation(
        form,
        {
            fields: {
        'nombre': {
            validators: {
                notEmpty: {
                    message: 'El nombre es requerido'
                }
            }
        },
        'correo': {
            validators: {
                notEmpty: {
                    message: 'El correo electrónico es requerido'
                },
                emailAddress: {
                    message: 'El correo electrónico no es válido'
                }
            }
        },
        'contrasena': {
            validators: {
                notEmpty: {
                    message: 'La contraseña es requerida'
                },
                stringLength: {
                    min: 6,
                    message: 'La contraseña debe tener al menos 6 caracteres'
                }
            }
        },
        'confirmar_contrasena': {
            validators: {
                notEmpty: {
                    message: 'Por favor, confirme su contraseña'
                },
                identical: {
                    compare: function() {
                        return form.querySelector('[name="contrasena"]').value;
                    },
                    message: 'Las contraseñas no coinciden'
                }
            }
        },
        'photo': {
            validators: {
                notEmpty: {
                    message: 'Por favor, suba una foto'
                }
            }
        },
        'telefono': {
            validators: {
                notEmpty: {
                    message: 'El teléfono es requerido'
                },
                regexp: {
                    regexp: /^[0-9\s]+$/,
                    message: 'El teléfono solo puede contener números'
                }
            }
        },
        'whatsapp': {
            validators: {
                notEmpty: {
                    message: 'El WhatsApp es requerido'
                },
                regexp: {
                    regexp: /^[0-9\s]+$/,
                    message: 'El WhatsApp solo puede contener números'
                }
            }
        },
        'fecha_nacimiento': {
            validators: {
                notEmpty: {
                    message: 'La fecha de nacimiento es requerida'
                }
            }
        },
        'dui': {
            validators: {
                notEmpty: {
                    message: 'El DUI es requerido'
                },
                regexp: {
                    regexp: /^[0-9]{8}-[0-9]{1}$/,
                    message: 'Por favor, introduce un DUI válido un ejemplo xxxxxxxx-x'
                }
            }
        },
        'direccion': {
            validators: {
                notEmpty: {
                    message: 'La dirección es requerida'
                }
            }
        },
        'cargo': {
            validators: {
                notEmpty: {
                    message: 'El cargo es requerido'
                }
            }
        },
        'fecha_alta': {
            validators: {
                notEmpty: {
                     message: 'La fecha de alta es requerida'
                }
            }
        },
        'n_iss': {
                validators: {
                    notEmpty: {
                        message: 'El número de ISS es requerido'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'El número de ISS debe contener solo números'
                    }
                }
            },
            'n_afp': {
                validators: {
                    notEmpty: {
                        message: 'El número de AFP es requerido'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'El número de AFP debe contener solo números'
                    }
                }
            },
            'agencia_registro': {
                validators: {
                    notEmpty: {
                        message: 'La agencia de registro es requerida'
                    }
                }
            },
            'nota': {
                validators: {
                    notEmpty: {
                        message: 'La nota es requerida'
                    }
                }
            }
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

    //mascara para los campos telefono y whatsapp
    $(document).ready(function() {
        $('#telefono').inputmask('999 999 9999', { placeholder: ' ' });
        $('#whatsapp').inputmask('999 999 9999', { placeholder: ' ' });
    });
    //condicion para llenar automaticamente el campo fecha alta
    const fechaAltaInput = document.getElementById('fecha_alta');
    fechaAltaInput.valueAsDate = new Date();

    const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
    submitButton.addEventListener('click', function (e) {
        e.preventDefault();
        if (validator) {
            validator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    submitButton.setAttribute('data-kt-indicator', 'on');
                    submitButton.disabled = true;
                    setTimeout(function () {
                        submitButton.removeAttribute('data-kt-indicator');
                        submitButton.disabled = false;
                        Swal.fire({
                            text: "El formulario se ha guardado correctamente!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Regresar a vista empleado",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }, 2000);
                }
            });
        }
    });

    </script>

</body>
</html>
