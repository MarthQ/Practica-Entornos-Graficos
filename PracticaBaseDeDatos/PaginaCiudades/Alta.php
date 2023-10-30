<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Usuario</title>
</head>

<body>
    <?php
    include("conexion.inc");
    //Captura datos desde el Form anterior
    $vciudad = $_POST['ciudad'];
    $vpais = $_POST['pais'];
    $vhabitantes = $_POST['habitantes'];
    $vsuperficie = $_POST['superficie'];
    $vtieneMetro = $_POST['tieneMetro'];
    // No esta hecha la validación en caso de que exista una ciudad con el mismo nombre o se realiza un SQL Injection.
    $vSql = "INSERT INTO capitales (id, ciudad, pais, habitantes, superficie, tieneMetro) VALUES (NULL, '$vciudad','$vpais', '$vhabitantes', '$vsuperficie', '$vtieneMetro')";
        mysqli_query($link, $vSql) or die(mysqli_error($link));
        echo ("La ciudad fue registrada satisfactoriamente<br>");
        echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>

</html>