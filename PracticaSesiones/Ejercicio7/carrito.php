<?php
$vItem = $_POST['item'];
session_start();
$_SESSION['carrito'][] = $vItem;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Carrito</title>
</head>
<body>
    <?php
    include("conexion.inc");
    echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Producto</th><th>Precio</th></tr>";
        foreach ($_SESSION['carrito'] as $vItem) {
            $vResultado = mysqli_query($link, "select * from catalogo where id = '$vItem'");
            $fila = mysqli_fetch_array($vResultado);
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['producto'] . "</td>";
            echo "<td>" . $fila['precio'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
?>
<div class="botones">
    <a href="catalogo.php">Volver al Catalogo</a>    
    <input type="submit" value="Comprar">  
    <form action="vaciar.php" method="post">
        <input type="submit" value="Vaciar Carrito">
    </form>
</div>
</body>
</html>