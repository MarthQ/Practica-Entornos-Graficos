<?php

$servername = 'localhost';
$database = 'id21371646_ciudades';
$username = 'id21371646_veterinaria_eg_grupo';
$password = 'a1_Alola';

// Create connection
$link = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>