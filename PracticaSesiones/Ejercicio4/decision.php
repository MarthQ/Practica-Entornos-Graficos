<?php
setcookie("tipoTitular", "", time() - 3600); // Esto es para borrar la cookie.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Checkea si la request es POST. 
    if(isset($_POST['tipoTitular']))
    {
        $tipoTitular = $_POST['tipoTitular']; // Esto es lo que se envia desde el formulario.
        
        // Setea la cookie dependiendo de la decision.
        if ($tipoTitular === 'politica') {
            setcookie('tipoTitular', 'politica', time() + 3600, '/'); // La barra al final es para que sea global. lo que significa que la cookie se puede usar en cualquier pagina del sitio.
        } elseif ($tipoTitular === 'economica') {
            setcookie('tipoTitular', 'economica', time() + 3600, '/'); 
        } elseif ($tipoTitular === 'deportiva') {
            setcookie('tipoTitular', 'deportiva', time() + 3600, '/');
        }
    }
    // Redirecciona luego de setear la cookie.
    header("Location: index.php"); // Esto es luego de setear la cookie y no causara ningun problema de "headers already sent".
    exit();
}
?>