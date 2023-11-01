<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="carrito.php" method="post">
        <input type="text" placeholder="ID del Producto" name="item">
        <input type="submit" value="Agregar">
    </form>

    <h1>Catalogo</h1>
    <?php
        session_start();
        include("conexion.inc");
        $vSql = "SELECT * FROM catalogo";
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);
    if ($total_registros > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Producto</th><th>Precio</th></tr>";
        while ($fila = mysqli_fetch_array($vResultado)) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['producto'] . "</td>";
            echo "<td>" . $fila['precio'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se han encontrado registros";
    }
        mysqli_close($link);
        ?>
</body>
</html>