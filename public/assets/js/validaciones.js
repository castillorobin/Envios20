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
                        text: "Formulario Guadado con Exto",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "regresar a vista empleado",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "/empleados";
                        }
                    });
                }, 2000);
            }
        });
    }
});
