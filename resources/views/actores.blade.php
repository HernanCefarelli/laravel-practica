<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actor</title>
</head>
<body>
    <h2>
        Actores
    </h2>
     <form action="{{route("actores.search")}}" method="get">
         <input type="text" name="buscar" id="" placeholder="Buscar actor">
         <button type="submit">Buscar</button>
     </form>
     <br>
     <br>
     <br>
            @forelse($actores as $actor)
            <a href="{{route('actor.show',$actor->id)}}">
                 {{$actor->nombreCompleto()}}
            </a>
            <br>

            @empty
             <span>
                 No hay actores
             </span>
            @endforelse

            <form action="{{route("actores.directory")}}" method="get">
                <button type="submit">Limpiar</button>
            </form>
</body>
</html>
