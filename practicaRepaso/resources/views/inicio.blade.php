<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    
    <style>
        body, html {
            height: 100%;
            
        }

        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">Roberto Uriel Martínez Martínez</h1>
        <p>Estudiante de ingenieria en sistemas computacionales</p>
        <a href="{{route('rutarepaso1')}}" class="btn btn-primary">Repaso1</a>
    </div>
</body>
</html>