<!doctype html>
<?php
session_start();
require_once 'consultas/conexion.php';
$res = $con->query("select * from users where nombre = '" . $_SESSION['usuario'] . "' and rango = 1");
$ar = $res->num_rows;
?>
<?php if ($_SESSION['usuario']) { ?>
    <html>
        <head>
            <style type="text/css">
                ul{
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: #333;
                }

                li{
                    display: inline;
                    float: left;
                }

                h2{
                    color: #ff0000;
                    background-color: #333;
                    height: 50px;
                    margin: 0 auto;
                    text-align: center;
                    font-family: fantasy;
                    font-size: 48px;
                }

                .enlace{
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                }
                
                .enlace:hover{
                    background-color: #111;
                }



            </style>
        </head>
        <body>
            <div>
                <h2>The Metal Tavern</h2>
                <ul>
                    <li><a class="enlace" href="bienvenido.php">Inicio</a></li>
                    <li><a class="enlace" href="inicio.php">Música</a></li>
                    <?php if ($ar > 0) { ?>
                        <li><a class="enlace" href="backend/discos.php">Agregar Música</a></li>
                        <?php } ?>
                    <li><a class="enlace" href="salir.php">Salir</a></li>
                </ul>
            </div>
        </body>
    </html>
<?php } else { ?>
    <script type="text/javascript">
        alert("No Estas Logueado");
        window.location = "index.php";
    </script>

<?php } ?>
