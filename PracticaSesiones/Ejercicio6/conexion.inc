<?php

$servername = 'localhost';
$database = 'base2';
$username = 'mq';
$password = 'lol';

// Create connection
$link = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

?>