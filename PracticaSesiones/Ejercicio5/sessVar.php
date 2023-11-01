<?php 

$vNombre=$_POST['nombre'];
$vClave=$_POST['clave'];

session_start();
$_SESSION['nombre']=$vNombre;
$_SESSION['clave']=$vClave;

header("Location: sessVarRecover.php");
exit;
?>
