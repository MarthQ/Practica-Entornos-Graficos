<?php 
session_start();
if(isset($_SESSION['nombre']) && isset($_SESSION['clave'])){
    echo "Nombre: ".$_SESSION['nombre']."<br>";
    echo "Clave: ".$_SESSION['clave']."<br>";
}
else{
    echo "No se han definido las variables de sesión <br>";
}

echo '<a href="Formulario.html">Volver a la pagina del formulario</a>'
?>