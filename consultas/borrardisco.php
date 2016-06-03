<?php
require_once 'conexion.php';
$id = $_POST['id'];
$sql = "DELETE FROM discos where iddisco='".$id."'";
$res = $con->query($sql);
echo "<script type='text/javascript'> alert('Disco eliminado exitosamente')</script>";
header("Location: ../backend/albumes.php");

