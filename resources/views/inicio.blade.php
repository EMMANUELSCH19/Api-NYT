<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Houdini</title>
    <link rel="stylesheet" href="css/inicio.css">
</head>

<body>

    <div class="header">
        @include('header')
    </div>

    <div class="info-table">
        <div class="container-all">
            <div class="image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/57/Houdini_in_Handcuffs%2C_1918.JPG" alt="">
            </div>
            <div class="subcontainer">
                <div class="name">
                    <h1>Harry Houdini</h1>
                </div>
                <div class="personal-info">
                    <div class="table">
                        <div class="important">
                            <div class="row">Nombre de Nacimiento</div>
                            <div class="row">Apodo</div>
                            <div class="row">Nacimiento</div>
                            <div class="row">Fallecimiento</div>
                            <div class="row">Causa de Muerte</div>
                            <div class="row">Lengua Materna</div>
                        </div>
                        <div class="column">
                            <div class="row">Erich Weiss</div>
                            <div class="row">El Gran Houdini</div>
                            <div class="row">
                                24 de marzo de 1874 <br>
                                Budapest, Imperio Austro-Húngaro
                            </div>
                            <div class="row">
                                1 de octubre de 1926 <br>
                                (52 años) <br>
                                Detroit, Estados Unidos
                            </div>
                            <div class="row">Peritonitis</div>
                            <div class="row">Inglés</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="conteiner-media">
        <div class="section">
            <b>Documentales</b>
        </div>
        <div class="videos">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gDRgHh280Ss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wZdYjThTHyo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xAytDYSzaO4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</body>

</html>