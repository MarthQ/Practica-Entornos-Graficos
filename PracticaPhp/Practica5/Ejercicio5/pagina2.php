<?php
session_start();

if (isset($_POST['destroy_session'])) {
    $visitas = $_SESSION['contador'];
    // Limpiar la sesión y las cookies
    setcookie('PHPSESSID', '', time() - 42000);
    session_destroy();

    echo "<script>window.onload = function() { alert('Session destroyed. The number of visits was {$visitas}.'); }</script>";

    $url = 'index.php';
    echo '<meta http-equiv="refresh" content="0;url='.$url.'">';
}

if (!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
    echo "<p>Se visitó {$_SESSION['contador']} veces.</p>";
}
?>

<a href="index.php">Link para ir a la página 1.</a>
<br>

<form method="post">
    <button type="submit" name="destroy_session">Destroy Session</button>
</form>
