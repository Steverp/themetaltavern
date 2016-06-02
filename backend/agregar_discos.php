<!doctype html>
<?php
require_once("header.php");
require_once '../consultas/conexion.php';
$sql = "select * from generos";
$res = $con->query($sql);
$sql2 = "select * from bandas";
$res2 = $con->query($sql2);
?>
<html>
    <head>
        <title>Agregar Discos</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="css/background.css">
        <link rel="stylesheet" href="css/estilos.css">
        <script TYPE="text/javascript">
            window.onload = function () {
                document.formularioContacto.nombre.focus();
                document.formularioContacto.addEventListener('submit', validarFormulario);
            }

            function validarFormulario(evObject) {
                evObject.preventDefault();
                var todoCorrecto = true;
                var formulario = document.formularioContacto;
                for (var i = 0; i < formulario.length; i++) {
                    if (formulario[i].type == 'text') {
                        if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)) {
                            alert(formulario[i].name + ' no puede estar vacío o contener sólo espacios en blanco');
                            todoCorrecto = false;
                        }
                    }
                }
                if (todoCorrecto == true) {
                    formulario.submit();
                }
            }

        </script>
       
    </head>
    <body class="bdback">
        <div id="contenedor">
            <form name="formularioContacto" action="../consultas/guardar_discos.php" method="POST" enctype="multipart/form-data">  
                <fieldset>
                    <legend> Agregar Nuevos Discos </legend>
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" name="dnombre" id="nombre" placeholder="Nombre del Disco">
                    <label for="anio">Año: </label>
                    <input type="text" name="danio" id="anio">
                    <label>Banda: </label>
                    <select class="form-control" name="banda">
                        <?php foreach ($res2 as $r2) { ?>
                            <option value="<?php echo $r2['id'] ?>"><?php echo $r2['banda'] ?></option>
                        <?php } ?>
                    </select>
                    <label for="resenia">Reseña: </label>
                    <input type="text" name="dresenia" id="resenia">
                    <label>Genero: </label>
                    <select name="genero">
                        <?php foreach ($res as $r) { ?>
                            <option value="<?php echo $r['id'] ?>"> <?php echo $r['genero']; ?></option>
                        <?php } ?>
                    </select>
                    <label>Portada: </label>
                    <input type="file" name="portada">
                    <label>Enlace: </label>
                    <input type="text" name="denlace">
                    <button type="submit" class="btn btn-default" onclick="validarFormulario">Guardar Disco</button>
                </fieldset>
            </form>
            <a href="../inicio.php" id="atras"><button class="btn btn-success">Atras</button></a>
        </div>
    </body>
</html>