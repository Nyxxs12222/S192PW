<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>@yield('titulo')</title>
    <style>

        .navbar {
            background-color: #FF7F50;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .navbar .navbar-brand, 
        .navbar .nav-link {
            color: #ffffff; 
        }

        .navbar .nav-link:hover {
            color: #ffdd57; 
        }

        .navbar-nav .nav-item  {
            margin-right: 5rem;
        }

        .navbar-brand{
            margin-left: 5rem;
        }

        .textcontainer {
            padding: 40px 100px 0 100px;
        }

        .textcontainer p {
            text-align: center;
        }
        .textcontainer h1 {
            padding-bottom: 15px;
            text-align: center;
        }
        .button {
            padding-bottom: 3rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('rutainicio') }}">TuristaSinMaps <i class="bi bi-geo-alt fs-4"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaagregarvuelo') ? 'text-dark' : '' }}" aria-current="page" href="{{ route('rutaagregarvuelo') }}">{{__('Vuelos')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaagregarhotel') ? 'text-dark' : '' }}" aria-current="page" href="{{ route('rutaagregarhotel') }}">{{__('Hospedajes')}}</a>
                    </li>
            </div>
        </div>
    </nav>
    
    @yield('contenido')
</body>
</html>