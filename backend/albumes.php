<!doctype html>
<?php
require_once '../consultas/conexion.php';
$sql = "select * from discos as ds INNER JOIN bandas as bd on ds.banda = bd.id inner join generos as gn on ds.genero = gn.id";
$res = $con->query($sql);
?>
<html>
    <head>
        <title>Listado de Discos</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Año</td>
                    <td>Banda</td>
                    <td>Genero</td>
                    <td>Portada</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($r = mysqli_fetch_array($res, MYSQLI_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $r['nombre'] ?></td>
                        <td><?php echo $r['anio'] ?></td>
                        <td><?php echo $r['banda'] ?></td>
                        <td><?php echo $r['genero'] ?></td>
                        <td><img src="../uploads/<?php echo $r['portada'] ?>" alt="<?php echo $r['nombre'] ?>" width="100" height="75"></td>
                        <td>
                            <form action="../consultas/borrardisco.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $r['iddisco'] ?>">
                                <button type="submit" name="submit_mult" value="Borrar" title="Borrar">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
