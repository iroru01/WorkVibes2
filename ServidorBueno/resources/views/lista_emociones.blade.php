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
                <li><a href='{{ url("/emociones") }}'><i class="fas fa-list-ul"></i><span>Insertar Emocion</span></a></li>
                <li><a href='{{ url("login") }}'><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesion</span></a></li>
                <li><a href='{{ url("index") }}'><i class="fas fa-home"></i><span>Inicio</span></a></li>
                <li><a href=""><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
</header>
<!-- Barra de usuario -->
<div class="barra_usuario">
    Usuario: {{ auth()->user()->nombre_user }}  <!-- Reemplazar "Nombre del Usuario" con el nombre real del usuario que ha iniciado sesión -->
</div>
<body>
<br>
<div class="container-fluid">
    <img src="{{ asset('imgs/lista_emociones_img.png') }}" class="img_lista_emociones" alt="img_lista_emociones">
    <br>
    <br>
    <div class="row ml-5">
        <div class="col-12 col-md-6">
            <?php if (isset($evento) && count($evento) > 0 || isset($otrasEmociones) && count($otrasEmociones) > 0): ?>
                <table id="stilo_tabla" class="col-12 col-md-8">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Emoción</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($evento) && count($evento) > 0)
                            @foreach ($evento as $emocion)
                                <tr>
                                    <td>{{ $emocion->dia_emocion }}</td>
                                    <td>
                                        @switch ($emocion->emocion)
                                            @case (1)
                                                Muy triste
                                                @break
                                            @case (2)
                                                Triste
                                                @break
                                            @case (3)
                                                Contento
                                                @break
                                            @case (4)
                                                Muy contento
                                                @break
                                        @endswitch
                                    </td>
                                    <td>{{ $emocion->descripcion }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">No hay emociones registradas.</td>
                            </tr>
                        @endif
                        
                        @if (isset($otrasEmociones) && count($otrasEmociones) > 0)
                            @foreach ($otrasEmociones as $otraEmocion)
                                <tr>
                                    <td>{{ $otraEmocion->dia_emocion }}</td>
                                    <td>
                                        @switch ($otraEmocion->emocion)
                                            @case (1)
                                                Muy triste
                                                @break
                                            @case (2)
                                                Triste
                                                @break
                                            @case (3)
                                                Contento
                                                @break
                                            @case (4)
                                                Muy contento
                                                @break
                                        @endswitch
                                    </td>
                                    <td>{{ $otraEmocion->descripcion }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">No hay otras emociones registradas.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            <?php else: ?>
                <h5>La lista de emociones está vacía.</h5>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-6"><br>
            <div class="row">
                <div class="col-4 col-md-3">
                    <!--ELIMINAR HREF-->
                    <a href="{{url('emociones')}}"><img src="{{ asset('imgs/icons/mas_azul.svg') }}" id="img_aniadir" class="btns_emociones" alt="añadir" title="añadir">
                    </a>
                </div>
                <div class="col-4 col-md-3">
                   <a href=""><img src="{{ asset('imgs/icons/papel.svg') }}" id="img_editar" class="btns_emociones" alt="editar" title="editar"></a> 
                </div>
                <div class="col-4 col-md-3">
                   <a href=""><img src="{{ asset('imgs/icons/basura.svg') }}" id="img_eliminar" class="btns_emociones" alt="eliminar" title="eliminar"></a> 
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</body>
</html>
