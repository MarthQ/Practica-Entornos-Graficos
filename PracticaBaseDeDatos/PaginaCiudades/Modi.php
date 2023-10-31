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
    $vciudad = $_POST['ciudad'];
    $vpais = $_POST['pais'];
    $vhabitantes = $_POST['habitantes'];
    $vsuperficie = $_POST['superficie'];
    if (isset($_POST['tieneMetro'])) {
        $vtieneMetro = 1;
    } else {
        $vtieneMetro = 0;
    }
    
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "UPDATE capitales set ciudad='$vciudad', pais='$vpais', habitantes='$vhabitantes', superficie='$vsuperficie', tieneMetro='$vtieneMetro'  where id='$vid'";
    mysqli_query($link, $vSql) or die(mysqli_error($link));
    echo ("<br>La ciudad fue modificada<br>");
    echo ("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>

</html>