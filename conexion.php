<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "registro"; 

$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("La conexion a la base de datos ha fallado: " . mysqli_connect_error());
}
?>
