<?php
    setcookie("tipoTitular", "", time() - 3600); // Esto es para borrar la cookie.
    header("Location: index.php"); // Esto es luego de setear la cookie y no causara ningun problema de "headers already sent".
    exit();
?>