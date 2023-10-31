<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja</title>
</head>

<body>
    <?php
    include("conexion.inc");
    $vId = $_POST['id'];
    $vSql = "SELECT * FROM capitales WHERE id='$vId'";
    $vResultado = mysqli_query($link, $vSql);
    if (mysqli_num_rows($vResultado) == 0) {
        echo ("Usuario Inexistente...!!! <br>");
        echo ("<A href='FormBajaIni.html'>Continuar</A>");
    } else {
        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "DELETE FROM capitales WHERE id = '$vId' ";
        mysqli_query($link, $vSql);
        echo ("El Usuario fue Borrado<br>");
        echo ("<A href='Menu.html'>Volver al Menu del ABM</A>");
    }
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>

</html>