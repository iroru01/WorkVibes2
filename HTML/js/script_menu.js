document.addEventListener('DOMContentLoaded', function () {
  var menuToggle = document.querySelector('#mainnav .fa-bars');
  var menu = document.querySelector('#mainnav ul.menu');

  // Función para mostrar u ocultar el menú al hacer clic en el ícono de menú
  function toggleMenu(event) {
      event.preventDefault(); // Evita que el enlace se active
      event.stopPropagation(); // Evita que el clic se propague a otros elementos
      menu.classList.toggle('active');
      
      // Si el menú se abre, agregamos un event listener para cerrarlo al hacer clic fuera de él
      if (menu.classList.contains('active')) {
          document.addEventListener('click', closeMenuOutside);
      } else {
          document.removeEventListener('click', closeMenuOutside);
      }
  }

  // Agregar evento clic al ícono del menú
  menuToggle.addEventListener('click', toggleMenu);

  // Función para cerrar el menú si se hace clic fuera de él
  function closeMenuOutside(event) {
      var isClickInsideMenu = menu.contains(event.target);
      var isClickOnMenuToggle = menuToggle.contains(event.target);
      
      if (!isClickInsideMenu && !isClickOnMenuToggle) {
          menu.classList.remove('active');
          document.removeEventListener('click', closeMenuOutside);
      }
  }

  // Evitar que el menú se cierre al hacer clic en los elementos del menú
  menu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function (event) {
          event.stopPropagation();
      });
  });
});
// funcion de dejar selecionado el boton
function seleccion_Emoji(btn) {
    // Remover la clase 'active' de todos los botones de emojis
    document.querySelectorAll('.btn_emojis').forEach(btn => {
      btn.classList.remove('active');
    });

    // Agregar la clase 'active' solo al botón clickeado
    btn.classList.add('active');
  }