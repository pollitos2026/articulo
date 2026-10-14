<?php
$conexion = new mysqli("localhost", "root", "", "articulos");
if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}
echo "estas en la base de datos...";
?>