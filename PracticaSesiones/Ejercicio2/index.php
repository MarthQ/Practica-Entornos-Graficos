<?php
// Checkea si la cookie está seteada y si no lo está, la setea con valor 1
if (!isset($_COOKIE["contador"])) {
    $value = 1;
    setcookie("contador", $value);
} else {
    $value = $_COOKIE["contador"] + 1;
    setcookie("contador", $value);
}

// Ahora, dependiendo el valor, se muestra el mensaje correspondiente.
if ($value === 1) {
    echo "<p>Bienvenido!. Esta es la primera vez que usted ingresa a la página</p>";
} else {
    echo "<p>Se visitó {$value} veces.</p>";
}
