<?php
require_once 'conexion.php';
$fdnombre = $_FILES['portada']['name'];
$fdtemp = $_FILES['portada']['tmp_name'];
$fnombrec = str_replace(" ","_",$fdnombre);
copy($fdtemp,"../uploads/".$fnombrec);
$sql = "insert into discos values(null,'".$_POST['dnombre']."','".$_POST['danio']."','".$_POST['banda']."','".$_POST['genero']."','".$_POST['denlace']."','".$fnombrec."')";
$res = $con->query($sql);
if($res){
    echo "<script type='text/javascript'> window.location='../backend/discos.php'</script>";
}else{
    echo "<pre>", var_dump($con->error);
    die;
}


