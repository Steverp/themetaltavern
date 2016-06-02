<!DOCTYPE html>
<?php

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login MetalForever</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style type="text/css">
            .login{
                background-image: url("uploads/jarro.jpg");
                position: absolute;
                left: 50%;
                top: 50%;
                width: 400px;
                height: 300px;
                text-align: center;
                margin: -100px 0 0 -200px;
            }

            label{
                color: #ffcc33;
            }
            
            form
            {
                position: absolute;
                right: 50%;
                top: 25%;
            }
            
            a{
                text-decoration: none;
            }
            
            p{
                color: #5cb85c;
            }
            .titulo{
                color: #ffcc33;
                text-align: center;
                font: oblique bold 700% cursive;
            }
        </style>
    </head>
    <body style="background-color: #000000">
        <audio src="uploads/vodka.mp3" autoplay>
</audio>
        <p class="titulo">The Metal Tavern</p>
        <div class="login">
            <form action="consultas/login.php" method="post">
                <label>Ingresa Tu Nombre: </label>
                <input type="text" name="name" maxlength="20">
                <br>
                <label>Ingresa Tu Contraseña</label>
                <input type="password" name="pass" maxlength="12">
                <br>
                <button type="submit" class="btn btn-primary">Acceder</button>
            <p>¿No Estas Registrado?</p>
            <a href="signin.php" class="btn btn-primary btn-lg active" role="button">Registrarme</a>
            </form>
        </div>
    </body>
</html>
