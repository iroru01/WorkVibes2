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

    if (
      descripcionValue.trim() !== "" &&
      emocionesSeleccionadas.length > 0 &&
      diaEmocionValue.trim() !== "" &&
      diaEmocionValue <= fechaActual
    ) {
      guardarEmocion(descripcionValue, emocionValue, diaEmocionValue); // Llama a la función guardarEmocion()
    }
  }
  
  function seleccion_Emoji(elemento) {
    var emocion = elemento.value;
    document.getElementById("emocion_value").value = emocion;
    var emojis = document.getElementsByClassName("btn_emojis");
    for (var i = 0; i < emojis.length; i++) {
        emojis[i].classList.remove("btn_emojis_selected");
    }
    elemento.classList.add("btn_emojis_selected");
}
  
  function guardarEmocion(descripcion, emocion, dia_emocion) {
    // Envía los datos al servidor utilizando fetch
    const formData = new FormData();
    formData.append("descripcion", descripcion);
    formData.append("emocion", emocion);
    formData.append("dia_emocion", dia_emocion);
  
    fetch("{{ route('emociones.guardar') }}", { // Utiliza la ruta de Laravel para guardar la emoción
      method: "POST",
      body: formData,
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Error al guardar la emoción. Por favor, inténtalo de nuevo.");
        }
        return response.text();
      })
      .then((data) => {
        // Laravel debería devolver "success" si la emoción se guarda correctamente
        if (data === "success") {
          alert("Emoción guardada correctamente.");
          // Laravel se encargará de redirigir a la página de éxito (fin)
        } else {
          throw new Error("Error al guardar la emoción. Por favor, inténtalo de nuevo.");
        }
      })
      .catch((error) => {
        console.error("Error:", error.message);
        alert(error.message);
      });
}