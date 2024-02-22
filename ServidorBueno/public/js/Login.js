document.addEventListener('DOMContentLoaded', function() {
    const nombreInput = document.getElementById('nombre');
    const contraseñaInput = document.getElementById('contraseña');

    const btnIniciarSesion = document.getElementById('btn_entrar');
    btnIniciarSesion.addEventListener('click', function(event) {
        event.preventDefault(); 

        let nombreValue = nombreInput.value;
        let contraseñaValue = contraseñaInput.value;
        let nombreRegex = /^[a-zA-Z0-9]{1,20}$/; 
        let contraseñaRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,16}$/;

        if (!nombreValue.trim()) {
            nombreInput.classList.add('error');
            document.getElementById('nombre-error').textContent = "El nombre de usuario es obligatorio";
        } else if (!nombreRegex.test(nombreValue)) {
            nombreInput.classList.add('error');
            document.getElementById('nombre-error').textContent = "El nombre de usuario debe contener al menos un número o una letra y tener entre 1 y 20 caracteres";
        } else {
            nombreInput.classList.remove('error');
            document.getElementById('nombre-error').textContent = "";
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
    });
});
