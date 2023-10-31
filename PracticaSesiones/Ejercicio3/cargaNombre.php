<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php 
  if (isset($_COOKIE["nombre"])){
    echo "<p> Hola " . $_COOKIE["nombre"] . "</p>";
  } else {
    echo "<p> Hola desconocido </p>";
  }
  ?>
  <form method="post">
    <input type="text" name="nombre" placeholder="Nombre de usuario">
    <input type="submit" name="submit" value="Enviar">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        setcookie("nombre", $nombre, time() + 3600);
      }
  ?>
</body>

</html>