<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Completo</title>
</head>

<body>
    <?php
    include("conexion.inc");
    $vSql = "SELECT * FROM capitales";
    $vResultado = mysqli_query($link, $vSql);
    $total_registros = mysqli_num_rows($vResultado);
    ?>
    <table>
        <tr>
            <td><b>Id</b></td>
            <td><b>ciudad</b></td>
            <td><b>Pais</b></td>
            <td><b>Habitantes</b></td>
            <td><b>Superficie</b></td>
            <td><b>Tiene metro</b></td>
        </tr>
        <?php
        while ($fila = mysqli_fetch_array($vResultado)) {
        ?>
            <tr>
                <td><?php echo ($fila['id']); ?></td>
                <td><?php echo ($fila['ciudad']); ?></td>
                <td><?php echo ($fila['pais']); ?></td>
                <td><?php echo ($fila['habitantes']); ?></td>
                <td><?php echo ($fila['superficie']); ?></td>
                <td>
                    <?php
                    if ($fila['tieneMetro'] == 1) {
                        echo ("SI");
                    } else {
                        echo ("NO");
                    }
                    ?>
                </td>
            </tr>
        <?php }; ?>
    </table>
                
    <?php
        // Liberar conjunto de resultados
        mysqli_free_result($vResultado);
        // Cerrar la conexion
        mysqli_close($link);
    ?>
    <p>&nbsp;</p>
    <p><a href="Menu.html">Volver al menu; del ABM</a></p>

</body>
</html>