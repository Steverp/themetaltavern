<!doctype html>
<?php
include("header.php");
require_once 'consultas/conexion.php';
$sql = "select * from discos inner join bandas on discos.banda = bandas.id INNER JOIN generos on discos.genero = generos.id order by nombre desc";
$res = $con->query($sql);
if ($_SESSION['usuario']) {
    ?>
    <html>
        <head>
            <title>Principal</title>
            <style type="text/css">
                embed{
                    /*                    display: none;*/
                }
                #contenedor54{
                    width: 500px;
                    position: absolute;
                    top: 50%;
                    left:50%;
                    margin-top: -250px;
                    margin-left: -250px;
                    background-color: #000;
                    text-align: center;
                }

                .titdis{
                    font-size: 36px;
                    color: #337ab7;
                }
                
                body{
                    background: url("uploads/370799.jpg");
                }

                hr {border: 0; 
                    height: 0; 
                    border-top: 4px double white; 
                    text-align:center;}
                hr:after {position: relative; top: -22px; content:"\25cf\25cf\25cf"; font-size: 34px;line-height: 34px; color: white;}
            </style>
            <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        </head>
        <body>
            <div id="contenedor54"> 
                <?php while ($reg = mysqli_fetch_array($res, MYSQLI_ASSOC)) { ?>
                    <p class="titdis"> <?php echo "Album: ", $reg['nombre']; ?></p>
                    <p class="titdis"> <?php echo "Genero: ", $reg['genero']; ?></p>
                    <p class="titdis"> <?php echo "Fecha: ", $reg['anio'] ?></p>
                    <p class="titdis"> <?php echo "Banda: ", $reg['banda'] ?></p>
                    <img src="uploads/<?php echo $reg['portada']; ?>" alt="<?php echo $reg['nombre'] ?>" width="320" height="240">
                    <p><a href="<?php echo $reg['enlace'] ?>" class="titdis">Descargar</a></p>
                    <p class="titdis"> <?php echo $reg['historia']; ?> </p>
                    <hr>
                <?php } ?>
            </div>
        </body>
    </html>
    <?php
} else {
    echo "<script type=text/javascript> alert('No estas Registrado')</script>";
    header('Location: index.php');
}
