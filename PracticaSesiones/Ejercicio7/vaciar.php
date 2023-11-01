<?php
session_start();
session_destroy();
header("Location: catalogo.php");
?>