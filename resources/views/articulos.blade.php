<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos | Houdini</title>
    <link rel="stylesheet" href="css/articulos.css">
</head>
<body class="inicio">

    <div class="header">
        @include('header')
    </div>

    <div class="content">
        <h1>Articulos</h1>
        <ul>
            @foreach($Articulos as $articulo)
                <li>
                    <h2>{{articulo['title']}}</h2>
                    <p class="snippet">{{articulo['snippet']}}</p>
                    <div class="button"><a href="{{$articulo['web_url']}}"></a></div>
                    <p class="lead">{{$articulo['lead_paragraph']}}</p>
                </li>
                <hr>
            @endforeach
        </ul>
    </div>

</body>
</html>