document.addEventListener('DOMContentLoaded', function() {
    const nombreUsuarioInput = document.getElementById('nombre_usuario');
    const nombreInput = document.getElementById('nombre');
    const apellidoInput = document.getElementById('apellido');
    const dniInput = document.getElementById('dni');
    const telefonoInput = document.getElementById('telefono');
    const direccionInput = document.getElementById('direccion');
    const contraseñaInput = document.getElementById('contraseña');
    const confirmarContraseñaInput = document.getElementById('confirma_contraseña');
    const fechaInput = document.getElementById('fecha');
    const fechaError = document.getElementById('fecha-error'); // Cambio aquí
    const jefeInputs = document.querySelectorAll('input[name="jefe"]');

    const btnNext = document.getElementById('btn_next'); 
    btnNext.addEventListener('click', function(event) { 
        event.preventDefault(); 

        let nombreUsuarioValue = nombreUsuarioInput.value;
        let nombreValue = nombreInput.value;
        let apellidoValue = apellidoInput.value;
        let dniValue = dniInput.value;
        let telefonoValue = telefonoInput.value;
        let direccionValue = direccionInput.value;
        let contraseñaValue = contraseñaInput.value;
        let confirmarContraseñaValue = confirmarContraseñaInput.value;
        let fechaValue = fechaInput.value;

        let nombreUsuarioRegex = /^[a-zA-Z0-9]{1,20}$/; 
        let nombreRegex = /^[a-zA-Z]{1,100}$/;
        let apellidoRegex = /^[a-zA-Z]{1,100}$/;
        let dniRegex = /^[0-9]{8}[a-zA-Z]$/;
        let telefonoRegex = /^[6-7][0-9]{8}$/;
        let direccionRegex = /^.{1,100}$/;
        let contraseñaRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,16}$/;
        
        if (!nombreUsuarioValue.trim()) {
            nombreUsuarioInput.classList.add('error'); 
            document.getElementById('nombre_usuario-error').textContent = "El nombre de usuario es obligatorio"; 
        } else if (!nombreUsuarioRegex.test(nombreUsuarioValue)) {
            nombreUsuarioInput.classList.add('error'); 
            document.getElementById('nombre_usuario-error').textContent = "El nombre de usuario debe contener entre 1 y 20 caracteres alfanuméricos";  
        } else {
            nombreUsuarioInput.classList.remove('error'); 
            document.getElementById('nombre_usuario-error').textContent = "";
        }

        if (!nombreValue.trim()) {
            nombreInput.classList.add('error');
            document.getElementById('nombre-error').textContent = "El nombre es obligatorio";
        } else if (!nombreRegex.test(nombreValue)) {
            nombreInput.classList.add('error');
            document.getElementById('nombre-error').textContent = "El nombre solo puede contener letras y tener hasta 100 caracteres";
        } else {
            nombreInput.classList.remove('error');
            document.getElementById('nombre-error').textContent = "";
        }

        if (!apellidoValue.trim()) {
            apellidoInput.classList.add('error');
            document.getElementById('apellido-error').textContent = "El apellido es obligatorio";
        } else if (!apellidoRegex.test(apellidoValue)) {
            apellidoInput.classList.add('error');
            document.getElementById('apellido-error').textContent = "El apellido solo puede contener letras y tener hasta 100 caracteres";
        } else {
            apellidoInput.classList.remove('error');
            document.getElementById('apellido-error').textContent = "";
        }

        if (!dniValue.trim()) {
            dniInput.classList.add('error');
            document.getElementById('dni-error').textContent = "El DNI es obligatorio";
        } else if (!dniRegex.test(dniValue)) {
            dniInput.classList.add('error');
            document.getElementById('dni-error').textContent = "El DNI debe tener 8 dígitos seguidos de una letra";
        } else {
            dniInput.classList.remove('error');
            document.getElementById('dni-error').textContent = "";
        }

        if (!telefonoValue.trim()) {
            telefonoInput.classList.add('error');
            document.getElementById('telefono-error').textContent = "El teléfono es obligatorio";
        } else if (!telefonoRegex.test(telefonoValue)) {
            telefonoInput.classList.add('error');
            document.getElementById('telefono-error').textContent = "El teléfono debe tener 9 dígitos y empezar por 6 o 7";
        } else {
            telefonoInput.classList.remove('error');
            document.getElementById('telefono-error').textContent = "";
        }

        if (!direccionValue.trim()) {
            direccionInput.classList.add('error');
            document.getElementById('direccion-error').textContent = "La dirección es obligatoria";
        } else if (!direccionRegex.test(direccionValue)) {
            direccionInput.classList.add('error');
            document.getElementById('direccion-error').textContent = "La dirección debe tener hasta 100 caracteres";
        } else {
            direccionInput.classList.remove('error');
            document.getElementById('direccion-error').textContent = "";
        }

        if (!contraseñaValue.trim()) {
            contraseñaInput.classList.add('error');
            document.getElementById('contraseña-error').textContent = "La contraseña es obligatoria";
        } else if (!contraseñaRegex.test(contraseñaValue)) {
            contraseñaInput.classList.add('error');
            document.getElementById('contraseña-error').textContent = "Contraseña inválida. Los requisitos son 1 Mayúscula, 1 Minúscula, 1 Carácter especial y 1 Número.";
        } else {
            contraseñaInput.classList.remove('error');
            document.getElementById('contraseña-error').textContent = "";
        }

        if (!contraseñaValue.trim() && !confirmarContraseñaValue.trim()) {
            confirmarContraseñaInput.classList.add('error');
            document.getElementById('confirma_contraseña-error').textContent = "Debes ingresar la contraseña y confirmarla";
        } else if (contraseñaValue !== confirmarContraseñaValue) {
            confirmarContraseñaInput.classList.add('error');
            document.getElementById('confirma_contraseña-error').textContent = "Las contraseñas no coinciden";
        } else {
            confirmarContraseñaInput.classList.remove('error');
            document.getElementById('confirma_contraseña-error').textContent = "";
        }

        let jefeSelected = false;
        jefeInputs.forEach(function(input) {
            if (input.checked) {
                jefeSelected = true;
            }
        });
        if (!jefeSelected) {
            document.getElementById('jefe-error').textContent = "Debes seleccionar si eres Jefe o Empleado";
        } else {
            document.getElementById('jefe-error').textContent = "";
        }

        // Validar fecha
        let today = new Date(); // Obtener la fecha actual
        let selectedDate = new Date(fechaValue); // Convertir la fecha seleccionada por el usuario a objeto Date

        if (!fechaValue.trim()) { // Verificar si la fecha está en blanco
            fechaInput.classList.add('error');
            fechaError.textContent = "Debes seleccionar una fecha es obligatoria"; // Cambio aquí
        } else if (selectedDate > today) { 
            fechaInput.classList.add('error'); 
            fechaError.textContent = "La fecha no puede ser posterior a la fecha actual"; // Cambio aquí
        } else {
            fechaInput.classList.remove('error'); // Quitar la clase de estilo para el borde rojo
            fechaError.textContent = ""; // Cambio aquí
        }

        if (!document.querySelectorAll('.error').length) {
            window.location.href = "{{url('lista_emociones.php')}}"; 
        }
    });
});
