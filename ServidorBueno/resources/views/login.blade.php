<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
    <meta charset="utf-8" />
    <title>WORK VIBES | Login</title>
    <link rel="icon" type="image/png" href="imgs/fav_icon_WV.svg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=lato:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fuentes_awesome/all.css">
=======
	<meta charset="utf-8" />
	
	<title>WORK VIBES | Login</title>
	
	<link rel="icon" type="image/png" href="imgs/fav_icon_WV.svg">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=lato:300i,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="fuentes_awesome/all.css">
    <script src="Login.js"></script>
>>>>>>> 6da1508d7cea541e7181fd0473189c415d28feac
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
</head>
<body>
<br>
<div class="container" id="padding_container">
    <div class="row">
        <div class="col-12 col-md-6">
            <img src="imgs/Logo_WV.jpg" class="img_logo" alt="logo_mw">
        </div>
        <div class="col-12 col-md-6 inicio_Ses_Form">
            <h4>Inicio de sesión</h4>
            <br>
<<<<<<< HEAD
            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <input type="text" placeholder="Nombre de usuario" class="form-control col-12 col-md-8" id="nombre_user" name="nombre_user" required>
                    <span class="error-msg" id="nombre_user-error"></span>
=======
            <!-- <form id="miFormulario" action="" method="GET"> -->
            <form method="POST" action="{{route('inicia-sesion')}}">
                @csrf
                <div>
                    <input  type="text"  name="nombre_user" required placeholder="Nombre de usuario" class="form-control col-12 col-md-8"  id="nombre_user" >
                    <span class="error-msg" id="nombre-error"></span>
>>>>>>> 6da1508d7cea541e7181fd0473189c415d28feac
                </div>
                <div>
                    <input type="password" placeholder="Contraseña" class="form-control col-12 col-md-8" id="contraseña" name="contraseña" required>
                    <span class="error-msg" id="contraseña-error"></span>
                </div>
<<<<<<< HEAD
                <button type="submit" class="form-control col-12 col-md-8" id="btn_entrar">Iniciar Sesión</button>
=======
                @if(session('error'))
                    <div class="form-control col-12 col-md-8 alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <button type="submit" class="form-control col-12 col-md-8" id="btn_entrar" name="button">Iniciar Sesión</button>
                    
                <a href="{{ route('crear.usuario') }}">
                    <button type="button" class="form-control col-12 col-md-8" id="btn_registrar" name="button" required>Registrarse</button>
                </a>
                
>>>>>>> 6da1508d7cea541e7181fd0473189c415d28feac
            </form>
            <a href="{{ route('crear.usuario') }}">
                <button type="button" class="form-control col-12 col-md-8" id="btn_registrar" name="button">Registrarse</button>
            </a>
        </div>
    </div>
</div>
</body>
</html>
