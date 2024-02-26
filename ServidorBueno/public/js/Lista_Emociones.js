document.addEventListener('DOMContentLoaded', function () {
    // Obtener el ícono de añadir
    var iconoAnadir = document.querySelector('#img_aniadir');

    // Función para redirigir a la página de emociones al hacer clic en el ícono de añadir
    function redireccionarEmociones(event) {
        event.preventDefault(); // Evita que el enlace se active
        window.location.href = 'emociones.html'; // Redirige a la página de emociones
    }

    // Agregar evento clic al ícono de añadir
    iconoAnadir.addEventListener('click', redireccionarEmociones);
});
