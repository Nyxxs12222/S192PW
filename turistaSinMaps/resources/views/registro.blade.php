<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        body, html {
            height: 100%;
            position: relative;
        }
        .logo {
            position: absolute;
            top: 15px;
            left: 5rem;
            font-size: 22px;
            text-decoration: none; 
            color: inherit;
        }
        .logo a {
            color: black; 
        }
        .d-flex {
            min-height: 100vh;
        }
    </style>
    <title>Registro</title>
</head>
<body>
    <div class="logo">
        <a href="{{ route('rutainicio') }}">TuristaSinMaps <i class="bi bi-geo-alt fs-4"></i></a>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <h2 class="text-center">Registro</h2>
            <form>
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre completo" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Crea una contraseña" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu contraseña" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Registrarse</button>
                <div class="text-center mt-3">
                    <p>¿Ya tienes una cuenta? <a href="{{ route('rutasesion') }}">Inicia sesión aquí</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
