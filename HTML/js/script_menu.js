// funcion de dejar selecionado el boton
function seleccion_Emoji(btn) {
    // Remover la clase 'active' de todos los botones de emojis
    document.querySelectorAll('.btn_emojis').forEach(btn => {
      btn.classList.remove('active');
    });

    // Agregar la clase 'active' solo al botón clickeado
    btn.classList.add('active');
  }

  document.addEventListener('DOMContentLoaded', function() {
    // Agrega un event listener a la imagen
    const imgAniadir = document.getElementById('img_aniadir');
    imgAniadir.addEventListener('click', function() {
        // Redirecciona a otra página
        window.location.href = 'emociones.html';
    });
});