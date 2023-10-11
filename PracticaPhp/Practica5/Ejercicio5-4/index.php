<?php
session_start();
if (!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
   }else{
    $_SESSION["contador"]++;
    echo "<p>Se visitó {$_SESSION['contador']} veces.</p>";
   }
?>
<a href="pagina2.php">Link para ir a la página 2.</a>
