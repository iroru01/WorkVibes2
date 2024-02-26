<h1>LISTA DE NOTICIAS</h1>
@foreach($evento as $evento)
    <form action='{{url("eventos/$evento->id")}}' method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Eliminar">
        <a href={{url("eventos/$evento->id/edit")}}>Editar</a>
        <a href={{url("eventos/$evento->id")}}>Ver</a>
         {{$noticia['titulo']}}
    </form>
@endforeach

<p><a href={{url("eventos/create")}}>Crear noticia nueva</a></p>