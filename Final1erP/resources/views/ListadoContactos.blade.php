<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title> Lista de Contactos </title>
</head>
<body>
    <h1 class="display-1 text-warning text-center"> Listado de Contactos </h1>
    <a href="{{route('rutaForm')}}"> Regresa al formulario </a>
    <a href="{{route('rutaInicio')}}"> Regresa al inicio </a>
</body>
</html>