<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="utf-8" />
    
    <title>WORK VIBES | Registro</title>
    
    <link rel="icon" type="image/png" href="imgs/fav_icon_WV.svg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=lato:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fuentes_awesome/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="js/Registro.js"></script>
 
</head>
<body>
<br>
<div class="container">
    <div class="row align-items-center"> 
        <!-- <div class="col-12 col-md-6">
            <img src="imgs/fav_icon_WV.svg" alt="logo_mw" class="logo_seccion">
        </div>
        <div class="col-12 col-md-6">
            <h5>FORMULARIO DE REGISTRO</h5> 
        </div> -->
        <img src="imgs/formulario_reg_img.png" class="img_registro" alt="">
    </div>
</div>

<div class="container-fluid">
    <div class="row align-center">
        <div class="col-12 col-md-5 offset-md-2">
            <h5>Introduce tus datos personales</h5>
            <form method="POST" action="{{ route('usuarios.store') }}">
                @csrf
                <input type="text" placeholder="Nombre de usuario"value="" class="form-control col-8" id="nombre_usuario" name="nombre_usuario" required>
                <div class="error-message" id="nombre_usuario-error"></div>
                <input type="text" placeholder="Nombre"value=""  class="form-control col-8" id="nombre" name="nombre" required>
                <div class="error-message" id="nombre-error"></div>
                <input type="text" placeholder="Apellido" value="" class="form-control col-8" id="apellido" name="apellido">
                <div class="error-message" id="apellido-error"></div>
                <input type="text" placeholder="DNI" value="" class="form-control col-8" id="dni" name="dni">
                <div class="error-message" id="dni-error"></div>
                <input type="text" placeholder="Teléfono" value="" class="form-control col-8" id="telefono" name="telefono">
                <div class="error-message" id="telefono-error"></div>
                <input type="text" placeholder="Dirección" value="" class="form-control col-8" id="direccion" name="direccion">
                <div class="error-message" id="direccion-error"></div>
                <input type="password" placeholder="Contraseña" value="" class="form-control col-8" id="contraseña" name="contraseña">
                <div class="error-message" id="contraseña-error"></div>
                <input type="password" placeholder="Confirmar contraseña" class="form-control col-8" id="confirma_contraseña" name="confirma_contraseña">
                <div class="error-message" id="confirma_contraseña-error"></div>

                <!-- QUITAR HREF -->
                <div class="row justify-content-center"> <!-- Añadido para centrar el botón -->
                    <button type="submit" class="form-control col-6" id="btn_next" name="button" required>Siguiente</button>
                </div>
            </form>
        </div>

        <form method="POST" action="{{ route('guardar.usuario') }}">
        @csrf

        <label for="nombre_user">Nombre de Usuario:</label>
        <input type="text" name="nombre_user" required><br>

        <label for="dni">DNI:</label>
        <input type="text" name="dni" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required><br>

        <label for="puesto">Puesto:</label>
        <input type="text" name="puesto" required><br>

        <label for="incorporacion">Fecha de Incorporación:</label>
        <input type="date" name="incorporacion" required><br>

        <label for="id_departamento">ID del Departamento:</label>
        <input type="text" name="id_departamento"><br>

        <label for="id_evento">ID del Evento:</label>
        <input type="text" name="id_evento"><br>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" required><br>

        <button type="submit">Guardar Usuario</button>
        
        <div class="row" id="section_encargado">
            <div class="col-12">
                <h4>¿Eres Jefe o Empleado</h4>
                <div class="row justify-content-center">
                    <div class="col-auto mr-2">
                        <input type="radio" class="btn_radio" name="jefe" value="puesto"><span class="span_text">Jefe</span>
                    </div>
                    <div class="col-auto">
                        <input type="radio" class="btn_radio" name="empleado" value="puesto"><span class="span_text">Empleado</span>
                    </div>
                </div>
                <div class="error-message" id="jefe-error"></div>
                <br>
                <h4>¿Cuándo te incorporaste a la empresa?</h4>
                <div class="row justify-content-center">
                    <input type="date" name="fecha" class="form-control col-8" id="fecha">
                    <div class="error-message" id="fecha-error"></div>
                </div>
                
            </div>
        </div>
    </div>
</div>

</body>
</html>
