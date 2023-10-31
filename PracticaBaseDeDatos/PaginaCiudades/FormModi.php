<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion</title>
</head>

<body>
    <?php
    include("conexion.inc");
    //Captura datos desde el Form anterior
    $vid = $_POST['id'];
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "SELECT * FROM capitales WHERE id ='$vid' ";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));;
    $fila = mysqli_fetch_array($vResultado);
    if (mysqli_num_rows($vResultado) == 0) {
        echo ("<br>Id de ciudad Inexistente...!!! <br>");
        echo ("<A href='FormModiIni.html'>Continuar</A>");
    } else {
    ?>
        <form action="Modi.php" method="POST" name="FormModi">
            <table>
                <input type="hidden" name="id" value="<?php echo $vid; ?>">
                <tr>
                    <td>Ciudad:</td>
                    <td> <input type="TEXT" name="ciudad" size="20" maxlength="45">
                </tr>
                <tr>
                    <td>Pais:</td>
                    <td> <input type="TEXT" name="pais" size="20" maxlength="45"> </td>
                </tr>
                <tr>
                    <td>Habitantes: </td>
                    <td> <input type="number" name="habitantes" size="20" maxlength="20"></td>
                </tr>
                <tr>
                    <td>Superficie: </td>
                    <td> <INPUT TYPE="number" name="superficie" size="20" maxlength="40" step="0.001"> </td>
                </tr>
                <tr>
                    <td>Indique si tiene metro: </td>
                    <td><input type="checkbox" name="tieneMetro"></td>
                </tr>
                <tr>
                    <td colspan="2"> <INPUT TYPE="SUBMIT" name="Submit" value="Modificar">
                        <p><a href="Menu.html">Volver al menu; del ABM</a></p>
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>

</html>