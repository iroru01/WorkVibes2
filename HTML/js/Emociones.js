function guardar() {
    // Obtener la fecha actual en formato ISO (YYYY-MM-DD)
    var fechaActual = new Date().toISOString().split('T')[0];
    
    var descripcionInput = document.getElementById('descripcion');
    var descripcionValue = descripcionInput.value;
    var descripcionError = document.getElementById('descripcion-error');

    var emocionesError = document.getElementById('emociones-error');
    var diaEmocionInput = document.getElementById('dia_emocion');
    var diaEmocionValue = diaEmocionInput.value;
    var diaEmocionError = document.getElementById('dia_emocion-error');

    if (descripcionValue.trim() === "") {
        descripcionInput.classList.add('error');
        descripcionError.textContent = "La descripción es obligatoria.";
    } else {
        descripcionInput.classList.remove('error');
        descripcionError.textContent = "";
    }

    var emocionesSeleccionadas = document.querySelectorAll('.btn_emojis.active');
    if (emocionesSeleccionadas.length === 0) {
        emocionesError.textContent = "Debes seleccionar al menos una emoción.";
    } else {
        emocionesError.textContent = "";
    }

    if (diaEmocionValue.trim() === "") {
        diaEmocionInput.classList.add('error');
        diaEmocionError.textContent = "Debes seleccionar una fecha.";
    } else if (diaEmocionValue > fechaActual) { // Comparar con la fecha actual
        diaEmocionInput.classList.add('error');
        diaEmocionError.textContent = "La fecha no puede ser posterior a la fecha actual.";
    } else {
        diaEmocionInput.classList.remove('error');
        diaEmocionError.textContent = "";
    }

    // Si todas las validaciones son exitosas, continuar con la acción de guardar
    if (descripcionValue.trim() !== "" && emocionesSeleccionadas.length > 0 && diaEmocionValue.trim() !== "" && diaEmocionValue <= fechaActual) {
        window.location.href = "fin.html"; 
    }
}
