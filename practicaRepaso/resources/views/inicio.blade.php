<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    
    <style>
        .content{
            padding: 5rem;
            text-align: center;
        }

        p{
            padding:2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1 class="display-1"><b>Roberto Uriel Martinez Martinez</b></h1><br>
            <p>Estudiante de ingenieria en sistemas computacionales</p>
            <a href="{{route('rutarepaso1')}}" class="btn btn-dark">Repaso1</a>
        </div>

    </div>
</body>
</html>