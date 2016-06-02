<?php
require_once 'conexion.php';
$usuario = $_POST['nombre'];
$correo = $_POST['mail'];
$pass = $_POST['pass'];
$cons2 = "select * from users where correo = '".$correo."'";
$res3 = $con->query($cons2);
$consulta = "select * from users where usuario = '".$usuario."'";
$res2 = $con->query($consulta);
if(mysqli_num_rows($res2) == 0 and mysqli_num_rows($res3) == 0){
$guardar = "INSERT INTO users VALUES('null','".$usuario."','".$correo."','".$pass."')";
$res = $con->query($guardar);
?>
<script type="text/javascript"> 
    alert("Te has Registrado en The Metal Tavern!!");
    window.location="../index.php";
</script>
<?php
}elseif(mysqli_num_rows($res3) > 0){
    echo "<script type='text/javascript'> alert('Ya existe un usuario con ese correo');</script>";
    echo "<script type='text/javascript'> window.location='../signin.php'</script>";
}else{ 
    echo "<script type='text/javascript'> alert('Ya existe un usuario con ese nombre'); </script>";
    echo "<script type='text/javascript'> window.location='../signin.php'</script>";
}