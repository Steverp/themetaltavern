<?php
session_start();
unset($_SESSION['usuario']);
session_Destroy();
echo "<script type='text/javascript'> alert('Hasta Luego Hpta'); window.location='../index.php' </script>";


