<?php
session_start();
require_once 'conexion.php';
$consultar = "SELECT * FROM users WHERE nombre = '" . $_POST['name'] . "' and password = '" . $_POST['pass'] . "'";
$sql = $con->query($consultar);
if (mysqli_num_rows($sql) == 0) {
    ?>

    <script type='text/javascript'> alert('El usuario no existe'); window.location = '../index.php'</script>

    <?php

} else {

    $_SESSION['usuario'] = $_POST['name'];
    echo '<script type="text/javascript"> alert("Bienvenido a The Metal Tavern!!");</script>';
    header("Location: ../bienvenido.php");
}
?>