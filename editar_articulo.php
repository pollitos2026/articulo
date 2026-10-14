<?php
include 'conexion.php';
include 'crud.php';
$art = obtenerArticuloPorId($conexion, $_GET['id']);
?>
<h2>Modificar Artículo (Update)</h2>
<form action="actualizar_articulo.php" method="POST">
<input type="hidden" name="id" value="<?= $art['id_articulo'] ?>">
Titulo: <input type="text" name="titulo" value="<?= $art['titulo'] ?>"><br>
Descripción: <input type="text" name="descripcion" value="<?= $art['descripcion'] ?>"><br>
Precio: <input type="text" name="precio" value="<?= $art['precio'] ?>"><br>
<button>Actualizar</button>
</form>