<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

        
                @if (session('exito'))
                    <x-Alert tipo="success">{{ session('exito') }}</x-Alert>
                @endif

                @session('exito')
                <x-Alert tipo="danger"> {{ $value }}</x-Alert>
                @endif

                @session('exito')
                <script>
                    
                    Swal.fire({
                        title: "Good job!",
                        text: '{{ $value }}',
                        icon: "success"
                    });
                </script>
                @endsession

        <form action="/enviarCliente" method="POST">

        @csrf

        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="email" class="form-control" name="txtcorreo">
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="password" class="form-control" name="txtcontraseña">
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="numeric" class="form-control" name="txtedad" >
        </div>

        <button type="submit" class="btn btn-danger "> Guardar Usuario</button>
        </form>

    </div>
</body>
</html>