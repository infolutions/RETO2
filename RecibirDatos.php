<html>
<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo_formulario.css">
    <link rel="stylesheet" type="cookie" href="cookie.html">

    <?php

        $name = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $gen = $_POST["Genero"];
        $tel = $_POST["telefono"];
        $email = $_POST["email"];
        $dni = $_POST["dni"];
        $ciudad = $_POST["ciudad"];
        $mensaje = $_POST["mensaje"];

        $contenido = "
        Nombre: $name
        Apellidos: $apellido
        Género: $gen
        Teléfono: $tel
        eMail: $email
        DNI: $dni
        Ciudad: $ciudad
        Mensaje: $mensaje";

        $archivo = fopen("DatosClientes/$name $apellido.txt","w");
        fwrite($archivo, $contenido);
    ?>
</head>
<body>
    <header>
        <div class="wrap">
            <div class="cube">
                <div class="front"><img src="INFOLUTIONS_LOGO.PNG" class="logoinfo"></div>
                <div class="back"><img src="INFOLUTIONS_LOGO.PNG" class="logoinfo"></div>
                <div class="top">INFOLUTIONS</div>
                <div class="bottom">INFOLUTIONS</div>
                <div class="left">INFOLUTIONS</div>
                <div class="right">INFOLUTIONS</div>
            </div>
        </div>
        <nav id="block">
            <ul id="menu">
                <li><a href="#" class="three-d">
                    <span class="three-d-box">
                        <span class="frente">Quienes Somos</span>
                        <span class="atras">Conoce a nuestros profesionales</span>
                    </span>
                </a></li>
                <li><a href="#" class="three-d">
                    <span class="three-d-box">
                        <span class="frente">Nuestra Empresa</span>
                        <span class="atras">Nuestra Historia</span>
                    </span>
                </a></li>
                <li><a href="#" class="three-d">
                    <span class="three-d-box">
                        <span class="frente">Que Ofrecemos</span>
                        <span class="atras">Descubre nuestro producto</span>
                    </span>
                </a></li>
                <li><a href="index.html" class="three-d">
                    <span class="three-d-box">
                        <span class="frente">Inicio</span>
                        <span class="atras">Volver al Inicio</span>
                    </span>
                </a></li>
            </ul>
        </nav>
        <nav id="login">
            <ul>
                <li><a href="#" title="Iniciar Sesion">Log In</a></li>
                <li><a href="#" title="¿No tienes cuenta? ¡Registrate!">Registro</a></li>
            </ul>
        </nav>
    </header>
    Formulario enviado!
</body>
</html>