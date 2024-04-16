"use strict";

// Definición de la clase
var KTUsersUpdatePermissions = function () {
    // Variables compartidas
    const element = document.getElementById('kt_modal_update_role');
    const form = element.querySelector('#kt_modal_update_role_form');
    const modal = new bootstrap.Modal(element);

    // Inicialización del modal para actualizar permisos
    var initUpdatePermissions = () => {

        // Inicializar reglas de validación del formulario. Para obtener más información, consulta la documentación oficial del plugin FormValidation: https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'role_name': {
                        validators: {
                            notEmpty: {
                                message: 'El nombre del rol es obligatorio'
                            }
                        }
                    },
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

        // Controlador del botón de cierre
        const closeButton = element.querySelector('[data-kt-roles-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "¿Estás seguro de que deseas cerrar?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Sí, ¡ciérralo!",
                cancelButtonText: "No, regresar",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Ocultar modal				
                }
            });
        });

        // Controlador del botón de cancelar
        const cancelButton = element.querySelector('[data-kt-roles-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "¿Estás seguro de que deseas cancelar?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Sí, ¡cáncelalo!",
                cancelButtonText: "No, regresar",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reiniciar formulario
                    modal.hide(); // Ocultar modal				
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "¡Tu formulario no ha sido cancelado!",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, ¡entendido!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Controlador del botón de enviar
        const submitButton = element.querySelector('[data-kt-roles-modal-action="submit"]');
        submitButton.addEventListener('click', function (e) {
            // Evitar la acción predeterminada del botón
            e.preventDefault();

            // Validar el formulario antes de enviar
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('¡Validado!');

                    if (status == 'Valid') {
                        // Mostrar indicación de carga
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Deshabilitar el botón para evitar clics múltiples
                        submitButton.disabled = true;

                        // Simular el envío del formulario. Para más información, consulta la documentación oficial del plugin: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Quitar indicación de carga
                            submitButton.removeAttribute('data-kt-indicator');

                            // Habilitar botón
                            submitButton.disabled = false;

                            // Mostrar confirmación emergente
                            Swal.fire({
                                text: "¡El formulario se ha enviado correctamente!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, ¡entendido!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();
                                }
                            });

                            //form.submit(); // Enviar formulario
                        }, 2000);
                    } else {
                        // Mostrar advertencia emergente. Para más información, consulta la documentación oficial del plugin: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Lo siento, parece que se han detectado algunos errores, por favor, inténtalo de nuevo.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, ¡entendido!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });
    }

    // Controlador de "Seleccionar todo"
    const handleSelectAll = () => {
        // Definir variables
        const selectAll = form.querySelector('#kt_roles_select_all');
        const allCheckboxes = form.querySelectorAll('[type="checkbox"]');

        // Manejar estado de selección
        selectAll.addEventListener('change', e => {

            // Aplicar estado de selección a todas las casillas de verificación
            allCheckboxes.forEach(c => {
                c.checked = e.target.checked;
            });
        });
    }

    return {
        // Funciones públicas
        init: function () {
            initUpdatePermissions();
            handleSelectAll();
        }
    };
}();

// Cuando el documento esté listo
KTUtil.onDOMContentLoaded(function () {
    KTUsersUpdatePermissions.init();
});
