<!doctype html>
<?php

?>
<html>
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <form action="consultas/guardar.php" method="post">
            <label>*Usuario: </label>
            <input type="text" name="nombre">
            <br>
            <label>*Correo: </label>
            <input type="email" name="mail">
            <br>
            <label>*Contraseña: </label>
            <input type="password" name="pass">
            <button type="submit" class="btn btn-success">Registrarme</button>
        </form>
    </body>
</html>