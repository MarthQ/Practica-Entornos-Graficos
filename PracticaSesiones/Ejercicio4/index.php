<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de noticia</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE['tipoTitular'])) {
    ?>
        <form action="decision.php" method="post">
            <input type="radio" name="tipoTitular" value="politica"> Noticia Politica
            <input type="radio" name="tipoTitular" value="economica"> Noticia Economica
            <input type="radio" name="tipoTitular" value="deportiva"> Noticia Deportiva
            <br>
            <input type="submit" value="Submit">
        </form>
    <?php
    } else {
        echo '<a href="borrarcookie.php">Volver a definir los tipos de titulares.</a>';
        if (isset($_COOKIE['tipoTitular'])) {
            $tipoTitular = $_COOKIE['tipoTitular'];
            if ($tipoTitular === 'politica') {
                echo "<h1>Noticia Politica</h1>";
            } elseif ($tipoTitular === 'economica') {
                echo "<h1>Noticia Economica</h1>";
            } elseif ($tipoTitular === 'deportiva') {
                echo "<h1>Noticia Deportiva</h1>";
            }
        } else {
            echo "<h1>No se seleccionó ningún tipo de titular.</h1>";
        }
    }
    ?>
</body>

</html>