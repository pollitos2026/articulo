<?php
include 'conexion.php';
include 'crud.php';
eliminarArticulo($conexion, $_GET['id']);
header("Location: index.php");
?>