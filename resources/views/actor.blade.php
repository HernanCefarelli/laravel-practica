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
        Actor
    </h2>
    @if(isset($actor))
     <p>
         Nombre : {{$actor->first_name}}
     </p>
     <p>
         Apellido : {{$actor->last_name}}
    </p>
    <p>
        Rating : {{$actor->rating}}
   </p>
   <p>
      Pelicula Favorita : {{$actor->favorite_movie_id}}
</p>
    @else
     <p>
         No se encontro el actor
     </p>
    @endif
</body>
</html>
