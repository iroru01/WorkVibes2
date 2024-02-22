function guardar() {
    var descripcionInput = document.getElementById('descripcion');
    var descripcionValue = descripcionInput.value;
    var descripcionError = document.getElementById('descripcion-error');

    var emocionesError = document.getElementById('emociones-error');
    var diaEmocionInput = document.getElementById('dia_emocion');
    var diaEmocionValue = diaEmocionInput.value;
    var diaEmocionError = document.getElementById('dia_emocion-error');

    // Validar si la descripción está vacía
    if (descripcionValue.trim() === "") {
        descripcionInput.classList.add('error');
        descripcionError.textContent = "La descripción es obligatoria.";
    } else {
        descripcionInput.classList.remove('error');
        descripcionError.textContent = "";
    }

    // Validar si se ha seleccionado al menos una emoción
    var emocionesSeleccionadas = document.querySelectorAll('.btn_emojis.active');
    if (emocionesSeleccionadas.length === 0) {
        emocionesError.textContent = "Debes seleccionar al menos una emoción.";
    } else {
        emocionesError.textContent = "";
    }

    // Validar si se ha seleccionado una fecha
    if (diaEmocionValue.trim() === "") {
        diaEmocionInput.classList.add('error');
        diaEmocionError.textContent = "Debes seleccionar una fecha.";
    } else {
        diaEmocionInput.classList.remove('error');
        diaEmocionError.textContent = "";
    }

    // Si todas las validaciones son exitosas, continuar con la acción de guardar
    if (descripcionValue.trim() !== "" && emocionesSeleccionadas.length > 0 && diaEmocionValue.trim() !== "") {
        window.location.href = "fin.html"; // Cambiar la URL a la página de destino
    }
}

function seleccion_Emoji(button) {
    button.classList.toggle('active');
}
