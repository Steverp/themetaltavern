<!doctype html>
<?php
require_once("header.php");
require_once '../consultas/conexion.php';
$sql = "SELECT * FROM generos";
$res = $con->query($sql);
?>
<html>
    <head>
        <title>Agregar Banda</title>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="css/background.css">
        <style>
            #contenedor{
                width: 500px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -250px;
                margin-left: -250px;
                background-color: black;
            }

            label{
                font-weight: bold;
                color: #ffff33;
                font-size: 14px;
            }

            input{
                font-size: 14px;
            }

            input[type="text"]
            {
                margin: 10px 0;
                background: #fff;
                border: 1px solid #ccc;
                color: #777;
                display: block;
                max-width: 100%;
                outline: none;
                padding: 7px 8px;
            }

            input[type="number"]
            {
                margin: 10px 0;
                background: #fff;
                border: 1px solid #ccc;
                color: #777;
                display: block;
                max-width: 100%;
                outline: none;
                padding: 7px 8px;
            }

            textarea
            {
                margin: 10px 0;
                background: #fff;
                border: 1px solid #ccc;
                color: #777;
                display: block;
                max-width: 100%;
                outline: none;
                padding: 7px 8px;
            }

            select
            {
                margin: 10px 0;
                background: #fff;
                border: 1px solid #ccc;
                color: #777;
                display: block;
                max-width: 100%;
                outline: none;
                padding: 7px 8px;
            }

            body{
                background-color: black;
            }

            .formbnd{

            }
        </style>
    </head>
    <body class="bdback">
        <div id="contenedor">
            <form class="formbnd" action="../consultas/guardar_banda.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Agregar Nueva Banda</legend>
                    <div class="contenedor-formulario">
                        <div class="input-group">
                            <input type="text" id="band" name="banda">
                            <label for="band">Banda: </label>
                        </div>
                        <div class="input-group">
                            <input type="text" id="historia" name="historia">
                            <label for="historia">Historia: </label>
                        </div>
                        <div class="input-group">
                            <input type="number" id="fund" name="fundacion">
                            <label for="fund">Fundación: </label>
                        </div>
                        <select name="genero" id="gen">
                            <?php while ($r = mysqli_fetch_array($res)) { ?>
                                <option><?php echo $r[1] ?></option>
                            <?php } ?>
                        </select>
                        <label for="gen">Genero: </label>
                        <div class="input-group">
                            <textarea id="his" name="historia" placeholder="Ingrese la Historia de la Banda" cols="30" rows="5"></textarea>
                            <label for="his">Historia: </label>
                        </div>
                        <input type="file" name="bandaf">
                        <input type="submit" id="btn-submit" value="Enviar">

                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>

