
// Función para validar el campo de comercio
function validarComercio() {
    var selectValue = document.getElementById('comercio').value;
    var validationFeedback = document.getElementById('comercioValidationFeedback');
    if (selectValue === 'selecione el comercio') {
        document.getElementById('comercio').classList.remove('is-valid');
        document.getElementById('comercio').classList.add('is-invalid');
        validationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById('comercio').classList.remove('is-invalid');
        document.getElementById('comercio').classList.add('is-valid');
        validationFeedback.style.display = 'none';
        return true;
    }
}
// Función para validar el campo de guía
function validarGuia() {
    var n_guiaValue = document.getElementById('n_guia').value;
    var n_guiaValidationFeedback = document.getElementById('n_guiaValidationFeedback');
    if (!n_guiaValue.trim()) {
        document.getElementById('n_guia').classList.remove('is-valid');
        document.getElementById('n_guia').classList.add('is-invalid');
        n_guiaValidationFeedback.textContent = 'Por favor no dejar en blanco, ingrese un número de guía.';
        n_guiaValidationFeedback.style.display = 'block';
        return false;
    } else if (!/^[0-9]+$/.test(n_guiaValue)) {
        document.getElementById('n_guia').classList.remove('is-valid');
        document.getElementById('n_guia').classList.add('is-invalid');
        n_guiaValidationFeedback.textContent = 'Por favor ingrese solo números para la guía.';
        n_guiaValidationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById('n_guia').classList.remove('is-invalid');
        document.getElementById('n_guia').classList.add('is-valid');
        n_guiaValidationFeedback.style.display = 'none';
        return true;
    }
}

// Función para validar el campo de destinatario
function validarDestinatario() {
    var destinatarioValue = document.getElementById('Destinatario').value;
    var destinatarioValidationFeedback = document.getElementById('destinatarioValidationFeedback');
    if (!destinatarioValue.trim()) {
        document.getElementById('Destinatario').classList.remove('is-valid');
        document.getElementById('Destinatario').classList.add('is-invalid');
        destinatarioValidationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById('Destinatario').classList.remove('is-invalid');
        document.getElementById('Destinatario').classList.add('is-valid');
        destinatarioValidationFeedback.style.display = 'none';
        return true;
    }
}
// Función para validar el campo de dirrecion
function validarDireccion() {
    var direccionValue = document.getElementById('direccion').value;
    var direccionValidationFeedback = document.getElementById('direccionValidationFeedback');
    if (!direccionValue.trim()) {
        document.getElementById('direccion').classList.remove('is-valid');
        document.getElementById('direccion').classList.add('is-invalid');
        direccionValidationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById('direccion').classList.remove('is-invalid');
        document.getElementById('direccion').classList.add('is-valid');
        direccionValidationFeedback.style.display = 'none';
        return true;
    }
}
// Función para validar el campo de Telefono
function validarTelefono() {
    var telefonoValue = document.getElementById('telefono').value;
    var telefonoValidationFeedback = document.getElementById('telefonoValidationFeedback');
    var telefonoPattern = /^\d+$/;

    if (!telefonoValue.trim() || !telefonoPattern.test(telefonoValue)) {
        document.getElementById('telefono').classList.remove('is-valid');
        document.getElementById('telefono').classList.add('is-invalid');
        telefonoValidationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById('telefono').classList.remove('is-invalid');
        document.getElementById('telefono').classList.add('is-valid');
        telefonoValidationFeedback.style.display = 'none';
        return true;
    }
}
// Función para validar los cmpos de precio y total
function validarPrecioPaquete() {
    return validarNumeroNoVacio('precio3', 'precio3ValidationFeedback', 'Por favor ingrese un precio válido para el paquete.');
}

function validarPrecioEnvio() {
    return validarNumeroNoVacio('envio3', 'envio3ValidationFeedback', 'Por favor ingrese un precio válido para el envío.');
}

function validarTotalPagar() {
    return validarNumeroNoVacio('total3', 'total3ValidationFeedback', 'Por favor ingrese un total válido a pagar.');
}

function validarNumeroNoVacio(inputId, feedbackId, mensajeError) {
    var inputValue = document.getElementById(inputId).value;
    var validationFeedback = document.getElementById(feedbackId);
    var numberPattern = /^\d+(\.\d{1,2})?$/;

    if (!inputValue.trim() || !numberPattern.test(inputValue)) {
        document.getElementById(inputId).classList.remove('is-valid');
        document.getElementById(inputId).classList.add('is-invalid');
        validationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById(inputId).classList.remove('is-invalid');
        document.getElementById(inputId).classList.add('is-valid');
        validationFeedback.style.display = 'none';
        return true;
    }
}
// Función para validar el campo de cobro de envio
function validarCobroEnvio() {
    var selectValue = document.getElementById('cenvio3').value;
    var validationFeedback = document.getElementById('cenvio3validationFeedback');
    if (selectValue === 'seleccione el estado cobro') {
        document.getElementById('cenvio3').classList.remove('is-valid');
        document.getElementById('cenvio3').classList.add('is-invalid');
        validationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById('cenvio3').classList.remove('is-invalid');
        document.getElementById('cenvio3').classList.add('is-valid');
        validationFeedback.style.display = 'none';
        return true;
    }
}

// Función para validar el campo de estado del pago
function validarEstadoPago() {
    var selectValue = document.getElementById('estado_pago').value;
    var validationFeedback = document.getElementById('estadoPagoValidationFeedback');
    if (selectValue === 'seleccione el estado del pago' || !selectValue.trim()) {
        document.getElementById('estado_pago').classList.remove('is-valid');
        document.getElementById('estado_pago').classList.add('is-invalid');
        validationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById('estado_pago').classList.remove('is-invalid');
        document.getElementById('estado_pago').classList.add('is-valid');
        validationFeedback.style.display = 'none';
        return true;
    }
}

// Función para validar el campo de tipo de envio
function validarTipoEnvio() {
    var selectValue = document.getElementById('tipo_envio').value;
    var validationFeedback = document.getElementById('tipoEnvioValidationFeedback');
    if (selectValue === 'Seleccione el tipo de envío') {
        document.getElementById('tipo_envio').classList.remove('is-valid');
        document.getElementById('tipo_envio').classList.add('is-invalid');
        validationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById('tipo_envio').classList.remove('is-invalid');
        document.getElementById('tipo_envio').classList.add('is-valid');
        validationFeedback.style.display = 'none';
        return true;
    }
}
// Función para validar el campo de estado del envio
function validarEstadoEnvio() {
    var selectValue = document.getElementById('estado_envio').value;
    var validationFeedback = document.getElementById('estadoEnvioValidationFeedback');
    if (selectValue === 'Seleccione el estado del envío') {
        document.getElementById('estado_envio').classList.remove('is-valid');
        document.getElementById('estado_envio').classList.add('is-invalid');
        validationFeedback.style.display = 'block';
        return false;
    } else {
        document.getElementById('estado_envio').classList.remove('is-invalid');
        document.getElementById('estado_envio').classList.add('is-valid');
        validationFeedback.style.display = 'none';
        return true;
    }
}
// Función para validar el campo de fecha
function validarFechaEntrega() {
    var inputElement = document.getElementById('fecha_entrega');
    var validationFeedback = document.getElementById('fechaEntregaValidationFeedback');

    if (inputElement.value === '') {
        inputElement.classList.remove('is-valid');
        inputElement.classList.add('is-invalid');
        validationFeedback.style.display = 'block';
        return false; // Valor inválido
    } else {
        inputElement.classList.remove('is-invalid');
        inputElement.classList.add('is-valid');
        validationFeedback.style.display = 'none';
        return true; // Valor válido
    }
}
// Evento para validar el campo de comercio al cambiar
document.getElementById('comercio').addEventListener('change', validarComercio);
// Evento para validar el campo de guía al escribir
document.getElementById('n_guia').addEventListener('input', validarGuia);
// Evento para validar el campo destinatario
document.getElementById('Destinatario').addEventListener('input', validarDestinatario);
// Evento para validar el campo de dirección al escribir
document.getElementById('direccion').addEventListener('input', validarDireccion);
// Evento para validar el campo de teléfono al escribir
document.getElementById('telefono').addEventListener('input', validarTelefono);
// Eventos para validar los campos al precio y total
document.getElementById('precio3').addEventListener('input', validarPrecioPaquete);
document.getElementById('envio3').addEventListener('input', validarPrecioEnvio);
document.getElementById('total3').addEventListener('input', validarTotalPagar);
// Evento para validar el campo al cambiar la selección
document.getElementById('cenvio3').addEventListener('change', validarCobroEnvio);
// Evento para validar el campo de estado de pago al perder el foco
document.getElementById('estado_pago').addEventListener('blur', validarEstadoPago);

// Evento para validar el campo al cambiar la selección
document.getElementById('tipo_envio').addEventListener('change', validarTipoEnvio);
// Evento para validar el campo al cambiar la selección
document.getElementById('estado_envio').addEventListener('change', validarEstadoEnvio);
// Evento para validar el campo al cambiar la fecha
document.getElementById('fecha_entrega').addEventListener('change', validarFechaEntrega);



// Evento para validar el formulario antes de enviar
document.getElementById('kt_ecommerce_settings_general_localization').addEventListener('submit', function(event) {
    var comercioValido = validarComercio();
    var guiaValida = validarGuia();
    var destinatarioValido = validarDestinatario();
    var direccionValida = validarDireccion();
    var telefonoValido = validarTelefono();
    var precioPaqueteValido = validarPrecioPaquete();
    var precioEnvioValido = validarPrecioEnvio();
    var totalPagarValido = validarTotalPagar();
    var cobroEnvioValido = validarCobroEnvio();
    var estadoPagoValido = validarEstadoPago();
    var tipoEnvioValido = validarTipoEnvio();
    var estadoEnvioValido = validarEstadoEnvio();
    var fechaEntregaValida = validarFechaEntrega();

    if (!comercioValido || !guiaValida) {
        event.preventDefault(); // Detener el envío del formulario
    }

    // Validar campos vacíos
    var camposVacios = [];
    var inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(function(input) {
        if (!input.value.trim()) {
            camposVacios.push(input);
        }
    });

    if (camposVacios.length > 0) {
        event.preventDefault();
        camposVacios[0].focus();
        camposVacios.forEach(function(campo) {
            campo.classList.add('is-invalid');
        });
    }
});