<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie | Houdini</title>
    <link rel="stylesheet" href="css/serie.css">
</head>
<body>

    <div class="menu">
        @include('header')
    </div>

    <div class="content">
        <div class="title">
            <h2>Serie The Master Mystery</h2>
        </div>
        <div class="serie">
            @foreach($episodios as $episodio)
                <div class="episodio">
                    <div class="episodio-video">
                        <iframe src="{{$episodio['url']}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="episodio-info">
                        <h3>{{$episodio['nombre']}} episodio {{$episodio['id']}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>

</body>
</html>