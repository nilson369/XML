<?php
// Archivo XML
$archivo = 'productos.xml';
// Verificar si existe
if (!file_exists($archivo)) {
    die("<h2>No existe el archivo productos.xml aún.</h2>
    <a href='a.html'>Agregar un producto</a>");
}
// Cargar XML
$xml = simplexml_load_file($archivo);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos (XML)</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        table { width: 80%; margin: auto; border-collapse: collapse; background: white; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        th { background: #0078D7; color: white; }
        caption { font-size: 1.8em; margin-bottom: 10px; }
        a { margin-left: 10%; display: inline-block; margin-bottom: 20px; }
    </style>
</head>
<body>
<a href="a.html">Agregar nuevo producto</a>
<table>
    <caption>Productos registrados en XML</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio (S/.)</th>
            <th>Categoría</th>
        </tr>
    </thead>
    <tbody>

    <?php
    // Recorrer XML y mostrar productos
    foreach ($xml->producto as $p) {
        echo "<tr>";
        echo "<td>{$p->id}</td>";
        echo "<td>{$p->nombre}</td>";
        echo "<td>{$p->precio}</td>";
        echo "<td>{$p->categoria}</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>
