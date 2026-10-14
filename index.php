<?php

include 'crud.php';
$lista_articulos = obtenerArticulos($conexion);
?>
<!DOCTYPE html>
<html>
<head>
<title>IDEAS DE ARTICULOS</title>
<style>
body { font-family: Arial; background: #f4f6f9; padding: 20px; }
.container { max-width: 1000px; margin: auto; background: white; padding: 20px; border-radius: 12px; }
table { width: 100%; border-collapse: collapse; }
th { background: #2c3e50; color: white; padding: 10px; }
td { padding: 8px; border-bottom: 1px solid #ddd; }
.btn { padding: 6px 12px; border-radius: 5px; text-decoration: none; color: white; display: inline-block; }
.btn-crear { background: #27ae60; }
.btn-editar { background: #f39c12; }
.btn-eliminar { background: #e74c3c; }
</style>
</head>
<body>
<div class="container">
<h1>📦 Artículos </h1>

<a href="crear_articulo.php" class="btn btn-crear">+ Registrar Artículo (Create)</a>
<a href="index.php?ver=fav" class="btn" style="background:#8e44ad">⭐ Ver Favoritos</a>

<br><br>
<table>
<tr><th>ID</th><th>Título</th><th>Descripción</th><th>Precio</th><th>Categoría</th><th>Acciones</th></tr>

<?php
// Validamos que no sea nulo
if($lista_articulos && $lista_articulos->num_rows > 0){
    while($art = $lista_articulos->fetch_assoc()){
        echo "<tr>
        <td>{$art['id_articulo']}</td>
        <td>{$art['titulo']}</td>
        <td>{$art['descripcion']}</td>
        <td>Bs {$art['precio']}</td>
        <td>{$art['categoria']}</td>
        <td>
        <a href='editar_articulo.php?id={$art['id_articulo']}' class='btn btn-editar'>Modificar</a>
        <a href='eliminar_articulo.php?id={$art['id_articulo']}' class='btn btn-eliminar' onclick=\"return confirm('¿Eliminar?')\">Eliminar</a>
        </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No hay ningun artículos o productos en la base de datos. Crea uno.</td></tr>";
}
?>
</table>
</div>
</body>
</html>