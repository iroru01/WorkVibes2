<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    
    <title>WORK VIBES | Lista de Emociones</title>
    
    <link rel="icon" type="image/png" href="{{ asset('imgs/fav_icon_WV.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('css/estilos.css') }}">
    <link href="https://fonts.googleapis.com/css?family=lato:300i,400,700&display=swap" rel="stylesheet">
    <!--FUENTES E ICONOS DE GOOGLE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script_menu.js') }}"></script>
    <script src="{{ asset('js/Emociones.js') }}"></script>
</head>
<header>
        <!-- MENU -->
        <nav id="mainnav" role="navigation">
            <ul>
                <li><a href='{{ url("lista/emociones") }}'><i class="fas fa-list-ul"></i><span>Lista de emociones</span></a></li>
                <li><a href='{{ url("login") }}'><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesion</span></a></li>
                <li><a href='{{ url("index") }}'><i class="fas fa-home"></i><span>Inicio</span></a></li>
                <li><a href=""><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
</header>
<!-- Barra de usuario -->
<div class="barra_usuario">
    Usuario: nombre user<!-- Reemplazar "Nombre del Usuario" con el nombre real del usuario que ha iniciado sesión -->
</div>
<body>
<br>
<div class="container-fluid">
    <img src="{{ asset('imgs/lista_emociones_img.png') }}" class="img_lista_emociones" alt="img_lista_emociones">
    <strong><p class="ml-5">**COLOCAR QUE NO EXISTEN EMOCIONES REGISTRADAS**</p></strong>
    <br>
    <div class="row ml-5">
        <div class="col-12 col-md-6">
            <table id="stilo_tabla" class="col-12 col-md-8">
                <strong><p>**fecha de registro de emocion**</p></strong>
                <th><div class="col-12 col-md-12">Emocion <img src="{{ asset('imgs/emojis/feliz.png') }}" id="emoji_emociones" alt=""></div></th>
                <tr>
                    <td>AQUI TEXTO DE LA EMOCION</td>
                </tr>
            </table>
        </div>
        <div class="col-12 col-md-6"><br>
            <div class="row">
                <div class="col-12 col-md-3">
                    <!--ELIMINAR HREF-->
                    <a href="{{url('emociones')}}"><button class="boton_anadir mb-3" id="anadir" name="anadir">AÑADIR</button></a>
                    <a href="{{url('emociones')}}"><img src="{{ asset('imgs/icons/aniadir.png') }}" id="img_aniadir" class="btns_emociones" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <button class="boton_anadir mb-2">EDITAR</button>
                    <img src="{{ asset('imgs/icons/edit_btn.png') }}" id="img_editar" class="btns_emociones" alt="">
                </div>
                <div class="col-12 col-md-3">
                    <button class="boton_anadir mb-2">ELIMINAR</button>
                    <img src="{{ asset('imgs/icons/papelera.png') }}" id="img_eliminar" class="btns_emociones" alt="img_eliminar">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</body>
</html>