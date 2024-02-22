<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        
        <title>WORK VIBES | Emociones</title>
        
        <link rel="icon" type="image/png" href="imgs/fav_icon_WV.svg">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="all" href="css/estilos.css">
        <link href="https://fonts.googleapis.com/css?family=lato:300i,400,700&display=swap" rel="stylesheet">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="js/Emociones.js"></script>
        <script src="js/script_menu.js"></script>
        
    </head>
    <header>
            <!-- MENU -->
            <nav id="mainnav" role="navigation">
                <ul>
                    <li><a href="lista_emociones.html"><i class="fas fa-list-ul"></i><span>Lista de emociones</span></a></li>
                    <li><a href="login.html"><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesion</span></a></li>
                    <li><a href="Index.html"><i class="fas fa-home"></i><span>Inicio</span></a></li>
                    <li><a href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
    </header>
    <!-- Barra de usuario -->
    <div class="barra_usuario">
        Usuario: Nombre del Usuario <!-- Reemplazar "Nombre del Usuario" con el nombre real del usuario que ha iniciado sesión -->
    </div>
<body>
<br>
<br>
<div class="container">
    <h4>¿Qué actividad has realizado?</h4>
    <div class="row">
            <div class="col-12 col-md-12">
                <form action="">
                    <input type="text" class="text-area col-12 col-md-12" placeholder="Describe la actividad que has realizado" id="descripcion">
                <p id="descripcion-error" class="error"></p>
                </form>
            </div>
    </div>
    <h4>¿Cómo te has sentido?</h4>
    <br>
    <div class="row justify-content-center">
        <div class="col-6 col-md-2 mb-3">
            <button class="btn_emojis" onclick="seleccion_Emoji(this)" value="muy_triste" name="emocion"><img src="imgs/emojis/muy_triste.png" class="emojis" alt="Muy Triste"><p><br>MUY TRISTE</p></button>
        </div>
        <div class="col-6 col-md-2 mb-3">
            <button class="btn_emojis" onclick="seleccion_Emoji(this)"value="triste" ><img src="imgs/emojis/triste.png" class="emojis" alt="Triste"><p><br>TRISTE</p></button>
        </div>
        <div class="col-6 col-md-2 mb-3">
            <button class="btn_emojis" onclick="seleccion_Emoji(this)" value="contento"><img src="imgs/emojis/cotnento.png"  class="emojis" alt="Contento"><p><br>CONTENTO</p></button>
        </div>
        <div class="col-6 col-md-2 mb-3">
            <button class="btn_emojis" onclick="seleccion_Emoji(this)" value="muy_contento"><img src="imgs/emojis/feliz.png" class="emojis" alt="Muy Contento"><p><br>MUY CONTENTO</p></button>
        </div>
    </div>
    <p id="emociones-error" class="error"></p>
    <!-- NUEVO DIV-->
    <div class="row justify-content-center">
        <h4>¿Qué día realizaste la actividad?</h4>
    </div>
    <div class="row justify-content-center">
        <input type="date" class="form-control" id="dia_emocion">
        <p id="dia_emocion-error" class="error"></p> 
    </div>
    <div class="row justify-content-center">
       <button type="button" class="form-control col-12" id="btn_next" name="button" required onclick="guardar()">GUARDAR</button><br>
    </div>
</div>
</body>
</html>