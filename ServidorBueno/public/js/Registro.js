document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form1');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        validateForm();
    });

    function validateForm() {
        const nombreUsuarioValido = validateNombreUsuario();
        const dniValido = validateDNI();
        const nombreValido = validateNombre();
        const apellidoValido = validateApellido();
        const telefonoValido = validateTelefono();
        const direccionValida = validateDireccion();
        const contraseñaValida = validateContraseña();
        const puestoValido = validatePuesto();
        const incorporacionValida = validateIncorporacion();

        if (
            nombreUsuarioValido &&
            dniValido &&
            nombreValido &&
            apellidoValido &&
            telefonoValido &&
            direccionValida &&
            contraseñaValida &&
            puestoValido &&
            incorporacionValida
        ) {
            form.submit();
        } else {
            console.log('Por favor, corrija los errores en el formulario');
        }
    }

    function showError(input, message) {
        const errorSpan = document.getElementById(input.id + '-error');
        errorSpan.textContent = message;
        input.classList.add('is-invalid');
    }

    function hideError(inputId) {
        const errorSpan = document.getElementById(inputId + '-error');
        if (errorSpan) {
            errorSpan.textContent = '';
            const input = document.getElementById(inputId);
            if (input) {
                input.classList.remove('is-invalid');
            }
        }
    }
    

    function validateNombreUsuario() {
        const value = nombreUsuarioInput.value.trim();
        const nombreUsuarioRegex = /^[a-zA-Z0-9]{1,20}$/;
        if (value === '') {
            showError(nombreUsuarioInput, 'El nombre de usuario es obligatorio');
            return false;
        } else if (!nombreUsuarioRegex.test(value)) {
            showError(nombreUsuarioInput, 'El nombre de usuario debe contener entre 1 y 20 caracteres alfanuméricos');
            return false;
        } else {
            hideError(nombreUsuarioInput);
            return true;
        }
    }

    function validateDNI() {
        const value = dniInput.value.trim();
        const dniRegex = /^[0-9]{8}[a-zA-Z]$/;
        if (value === '') {
            showError(dniInput, 'El DNI es obligatorio');
            return false;
        } else if (!dniRegex.test(value)) {
            showError(dniInput, 'El DNI debe tener 8 dígitos seguidos de una letra');
            return false;
        } else {
            hideError(dniInput);
            return true;
        }
    }

    function validateNombre() {
        const value = nombreInput.value.trim();
        const nombreRegex = /^[a-zA-Z]{1,100}$/;
        if (value === '') {
            showError(nombreInput, 'El nombre es obligatorio');
            return false;
        } else if (!nombreRegex.test(value)) {
            showError(nombreInput, 'El nombre solo puede contener letras y tener hasta 100 caracteres');
            return false;
        } else {
            hideError(nombreInput);
            return true;
        }
    }

    function validateApellido() {
        const value = apellidoInput.value.trim();
        const apellidoRegex = /^[a-zA-Z\s]{1,100}$/;
        if (value === '') {
            showError(apellidoInput, 'El apellido es obligatorio');
            return false;
        } else if (!apellidoRegex.test(value)) {
            showError(apellidoInput, 'El apellido solo puede contener letras y tener hasta 100 caracteres');
            return false;
        } else {
            hideError(apellidoInput);
            return true;
        }
    }

    function validateTelefono() {
        const value = telefonoInput.value.trim();
        const telefonoRegex = /^[0-9]{9}$/;
        if (value === '') {
            showError(telefonoInput, 'El teléfono es obligatorio');
            return false;
        } else if (!telefonoRegex.test(value)) {
            showError(telefonoInput, 'El teléfono debe tener 9 dígitos');
            return false;
        } else {
            hideError(telefonoInput);
            return true;
        }
    }

    function validateDireccion() {
        const value = direccionInput.value.trim();
        if (value === '') {
            showError(direccionInput, 'La dirección es obligatoria');
            return false;
        } else {
            hideError(direccionInput);
            return true;
        }
    }

    function validateContraseña() {
        const value = contraseñaInput.value.trim();
        if (value === '') {
            showError(contraseñaInput, 'La contraseña es obligatoria');
            return false;
        } else if (value.length < 8) {
            showError(contraseñaInput, 'La contraseña debe tener al menos 8 caracteres');
            return false;
        } else {
            hideError(contraseñaInput);
            return true;
        }
    }

    function validatePuesto() {
        const value = puestoSelect.value;
        if (value === '') {
            showError(puestoSelect, 'Por favor selecciona tu puesto');
            return false;
        } else {
            hideError(puestoSelect);
            return true;
        }
    }

    function validateIncorporacion() {
        const value = incorporacionInput.value;
        if (value === '') {
            showError(incorporacionInput, 'Por favor selecciona tu fecha de incorporación');
            return false;
        } else {
            hideError(incorporacionInput);
            return true;
        }
    }

    // Obtener referencias a los elementos del formulario
    const nombreUsuarioInput = document.getElementById('nombre_user');
    const dniInput = document.getElementById('dni');
    const nombreInput = document.getElementById('nombre');
    const apellidoInput = document.getElementById('apellido');
    const telefonoInput = document.getElementById('telefono');
    const direccionInput = document.getElementById('direccion');
    const contraseñaInput = document.getElementById('contraseña');
    const puestoSelect = document.getElementById('puesto');
    const incorporacionInput = document.getElementById('incorporacion');
});

