<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/infoenf.css') }}">

    @vite(['resources/js/app.js'])
</head>
<body>

    <div class="doble-columna">
        <div class="card-efermedad">
            <div class="card-body">
                <h1 class="titulo">Bipolaridad</h1>
                <text class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis rerum amet nihil possimus aliquid ipsam fugiat expedita quaerat quod? Quidem aspernatur commodi consectetur dolore cumque ipsam similique illo unde maxime.
                </text>
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('img/xbipolaridad.png') }}" alt="">
        </div>
    </div>

    <div class="consejos-container">
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora facilis voluptate velit itaque sit amet doloremque, fugiat porro? Illum numquam sunt sed exercitationem commodi ratione eveniet quasi et quaerat ut.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora facilis voluptate velit itaque sit amet doloremque, fugiat porro? Illum numquam sunt sed exercitationem commodi ratione eveniet quasi et quaerat ut.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora facilis voluptate velit itaque sit amet doloremque, fugiat porro? Illum numquam sunt sed exercitationem commodi ratione eveniet quasi et quaerat ut.
                </text>
            </div>
        </div>
    </div>

    <div class="logged-message">
        @auth
        
            <h1>¡Consulta con un especialista!</h1>
            <p>
            Contamos con especialistas que te ayudarán a darle un seguimiento más profesional a tu salud mental
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the 
            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with 
            the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
            software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <div class="button-container">
                <button class="btn-custom">Directorio de especialistas</button>
            </div>
            
        @endauth
    </div>
</body>
</html>