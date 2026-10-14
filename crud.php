<?php
include 'conexion.php';

function obtenerArticulos($conexion){
    $sql = "SELECT a.*, c.nombre as categoria 
            FROM articulo a 
            LEFT JOIN categoria c ON a.id_categoria = c.id_categoria";
    return $conexion->query($sql);
}
function crearArticulo($conexion, $titulo, $descripcion, $precio, $id_categoria){
    $sql = "INSERT INTO articulo (titulo, descripcion, precio, id_categoria) VALUES ('$titulo', '$descripcion', $precio, $id_categoria)";
    return $conexion->query($sql);
}
function obtenerArticuloPorId($conexion, $id){
    return $conexion->query("SELECT * FROM articulo WHERE id_articulo=$id")->fetch_assoc();
}
function actualizarArticulo($conexion, $id, $titulo, $descripcion, $precio){
    return $conexion->query("UPDATE articulo SET titulo='$titulo', descripcion='$descripcion', precio=$precio WHERE id_articulo=$id");
}
function eliminarArticulo($conexion, $id){
    return $conexion->query("DELETE FROM articulo WHERE id_articulo=$id");
}
?>