<?php
include 'conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'crud.php';
    crearArticulo($conexion, $_POST['titulo'], $_POST['descripcion'], $_POST['precio'], $_POST['categoria']);
    header("Location: index.php");
}
?>
<!DOCTYPE html><html><head><style>body{font-family:Arial;padding:20px} input,select{width:100%;padding:8px;margin:5px 0}</style></head><body>
<h2>Registrar Artículos (Create)</h2>
<form method="POST">
Titulo: <input type="text" name="titulo" placeholder="Ej: Laptop Nueva" required><br>
Descripción: <input type="text" name="descripcion" placeholder="Descripción del nuevo producto"><br>
Precio: <input type="number" step="0.01" name="precio" required><br>
Categoría: <select name="categoria">
<?php $c=$conexion->query("SELECT * FROM categoria"); while($r=$c->fetch_assoc()) echo "<option value='{$r['id_categoria']}'>{$r['nombre']}</option>"; ?>
</select><br><br>
<button type="submit">Guardar</button>
</form>
<a href="index.php">Volver al listado</a>
</body></html>