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
    {{-- <script src="js/Registro.js"></script> --}}
 
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
        
        <form id="form1" method="POST" action="{{ route('guardar.usuario') }}">
            @csrf
            <input type="text" name="nombre_user" class="form-control col-8" placeholder="Nombre de Usuario:" id="nombre_user" required>
            
            <input type="text" class="form-control col-8" name="dni" id="dni" placeholder="DNI" required>

            <input type="text" class="form-control col-8" name="nombre" id="nombre" placeholder="Nombre:" required>

            <input type="text" name="apellidos" class="form-control col-8" placeholder="Apellidos:" id="apellido" required>

            <input type="text" name="telefono" class="form-control col-8" placeholder="Teléfono:" id="telefono" required>

            <input type="text" name="direccion" class="form-control col-8" id="direccion" placeholder="Dirección:" required>

            <input type="password" name="contraseña" class="form-control col-8" id="contraseña" placeholder="Contraseña:" required>
        </div>
<<<<<<< HEAD

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
        
=======
>>>>>>> ec5dce01966e1efc174f1521205bbac54eaedca9
        <div class="row" id="section_encargado">
            <div class="col-12">
                <h4>¿Eres jefe o empleado?</h4>
                <label for="puesto">Puesto:</label>
                <select class="form-control" name="puesto" id="puesto">
                    <option value="Jefe">Jefe</option>
                    <option value="Empleado">Empleado</option>
                </select>
                <br>
                <label for="incorporacion">Fecha de Incorporación:</label>
                <input class="form-control" type="date" name="incorporacion" id="incorporacion" required>
        
                <button id="btn_next" type="submit" class="form-control col-8">Guardar Usuario</button>
            </div>
        </div>

    </div>
</div>

</body>
</html>
{{-- --}}
