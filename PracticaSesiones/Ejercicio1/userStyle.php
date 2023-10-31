<?php
if (isset($_POST["estilo"])) {
  $estilo = $_POST["estilo"];
  setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
} else {
  if (isset($_COOKIE["estilo"])) {
    $estilo = $_COOKIE["estilo"];
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies en php</title>
</head>
<?php
if (isset($estilo)) {
  echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
}
?>
</head>

<body>
  <form action="userStyle.php" method="post">
    <br>
    <select name="estilo">
      <option value="color">Color picker
      <option value="black">Black
      <option value="green">Green
      <option value="pink">Pink
    </select>
    <input type="submit" value="Actualizar el estilo">
  </form>
</body>

</html>