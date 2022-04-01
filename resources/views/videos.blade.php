<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos | Houdini</title>
    <link rel="stylesheet" href="css/videos.css">
</head>

<body>

    <div class="header">
        @include('header')
    </div>

    <div class="content">
    
        <div class="title">
            <h2>Video de houdini</h2>
        </div>

        <div class="videos">
        
            @foreach ($Videos as $Video)
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/{{$Video['video_id']}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            @endforeach

        </div>

    </div>

</body>

</html>