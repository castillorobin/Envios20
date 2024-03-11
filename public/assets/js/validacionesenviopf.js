
$(document).ready(function () {
    // Validación solo para el campo "Número de Guía" y permitir solo números
    $("#n_guia").focusout(function () {
        var value = $(this).val();
        if (value.length == 0 || !$.isNumeric(value)) {
            $(this).addClass("is-invalid");
            $(this).removeClass("is-valid");
            console.log('El campo debe contener solo números');
        } else {
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
        }
        console.log('Este campo es obligatorio');
    });

    $(document).ready(function () {
        // Validación para el campo "Destinatario"
        $("#destinatario").focusout(function () {
            var value = $(this).val();
            if (value.trim() === "") {
                $(this).addClass("is-invalid");
                $(this).removeClass("is-valid");
                console.log('El campo "Destinatario" es obligatorio');
            } else {
                $(this).removeClass("is-invalid");
                $(this).addClass("is-valid");
            }
        });
    });

    // Validación para campos de tipo select
    $("select").focusout(function () {
        var value = $(this).val();
        if (value.length == 0) {
            $(this).addClass("is-invalid");
            $(this).removeClass("is-valid");
        } else {
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
        }
        console.log('Este campo es obligatorio');
    });
});

$(document).ready(function () {
    // Función para validar el número de teléfono
    function validarTelefono(telefono) {
        // Expresión regular para validar números de teléfono de 10 dígitos
        var telefonoRegex = /^(?:2|7)\d{7}$/;
        return telefonoRegex.test(telefono);
    }

    // Validación para el campo de teléfono
    $("#telefono").focusout(function () {
        var value = $(this).val().trim();
        if (value === "") {
            $(this).addClass("is-invalid");
            $(this).removeClass("is-valid");
            console.log('El campo "Teléfono" es obligatorio');
        } else if (!validarTelefono(value)) {
            $(this).addClass("is-invalid");
            $(this).removeClass("is-valid");
            console.log('Por favor ingrese un número de teléfono válido');
        } else {
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
        }
    });

    // Modificación para manejar el envío del formulario
    $("#kt_ecommerce_settings_general_localization").submit(function (e) {
        // Validar el campo de teléfono antes de enviar el formulario
        var telefonoValue = $("#telefono").val().trim();
        if (telefonoValue === "" || !validarTelefono(telefonoValue)) {
            e.preventDefault(); // Evitar que el formulario se envíe
            $("#telefono").addClass("is-invalid");
            console.log('Por favor, corrija los errores en el formulario antes de enviar.');
        }
    });
});

$(document).ready(function () {
    // Función para validar valor monetario
    function validarValorMoneda(valor) {
        var valorMonedaRegex = /^\d+(\.\d{1,2})?$/; 
        return valorMonedaRegex.test(valor);
    }

    // Validación para campos de valor monetario
    $(".precio-moneda3").focusout(function () {
        var value = $(this).val().trim();
        if (value !== "" && !validarValorMoneda(value)) {
            $(this).addClass("is-invalid");
            $(this).removeClass("is-valid");
            console.log('Por favor ingrese un valor monetario válido');
        } else {
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
        }
    });
});

$(document).ready(function () {
    // Validación para el campo de fecha de entrega al enviar el formulario
    $("form").submit(function (event) {
        var value = $("#fecha_entrega").val().trim();
        if (value === "") {
            $("#fecha_entrega").addClass("is-invalid");
            $("#fecha_entrega").removeClass("is-valid");
            $("#fechaEntregaValidationFeedback").addClass("invalid-feedback");
            event.preventDefault(); // Evita que el formulario se envíe si la validación falla
        } else {
            $("#fecha_entrega").removeClass("is-invalid");
            $("#fecha_entrega").addClass("is-valid");
        }
    });
});
