<?php
include 'conexion.php';
include 'crud.php';
actualizarArticulo($conexion, $_POST['id'], $_POST['titulo'], $_POST['descripcion'], $_POST['precio']);
header("Location: index.php");
?>