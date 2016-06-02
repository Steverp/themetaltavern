<?php
require_once 'conexion.php';
$banda = $_POST['banda'];
$historia = $_POST['historia'];
$fund = $_POST['fundacion'];
$gen = $_POST['genero'];
$imaget = $_FILES['bandaf']['tmp_name'];
$imagen = $_FILES['bandaf']['name'];
$imagec = str_replace(" ","_",$imagen);
copy($imaget,"../uploads",$imagen);
$sql = "insert into bandas (null, '".$banda."','".$historia."'.'".$gen."','".$imagen."','".$fund."')";
$res = $con->query($sql);
echo "<script type='text/javascript'> alert('Banda Agregada Exitosamente'); window.location = '../inicio.php'</script>";