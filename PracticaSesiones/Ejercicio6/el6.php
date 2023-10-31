<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 6</title>
</head>
<body>
<?php
include ("conexion.inc");

$mail = $_POST['mail'];

$vsql = "select * FROM alumnos WHERE mail = '$mail'";
$resultado = mysqli_query($link, $vsql) or die (mysqli_error($link));
$fila = mysqli_fetch_array($resultado);
if (mysqli_num_rows($resultado) == 0) {
    echo ("No existe el alumno.");
}
else {
    $_SESSION['usuario'] = $fila['nombre'];
}

?>

<a href="resultado.php">Ingresar a pagina principal</a>;
</body>
</html>