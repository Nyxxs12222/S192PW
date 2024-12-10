<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('rutaInicio') }}" style="padding-left: 3rem;">Inicio</a>
        <ul class="navbar-nav" style="padding-right: 3rem;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('rutaForm') }}">Formulario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('rutaList') }}">Lista</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')
</body>
</html>