<?php
// Recibir datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];

// Nombre del archivo XML
$archivo = 'productos.xml';

// Si el archivo ya existe, lo carga; si no, lo crea
if (file_exists($archivo)) {
    $xml = simplexml_load_file($archivo);
} else {
    $xml = new SimpleXMLElement('<productos></productos>');
}

// Agregar un nuevo producto
$producto = $xml->addChild('producto');
$producto->addChild('id', $id);
$producto->addChild('nombre', $nombre);
$producto->addChild('precio', $precio);
$producto->addChild('categoria', $categoria);

// Guardar cambios en el archivo XML
$xml->asXML($archivo);

// Confirmación
echo "<h2>Producto guardado correctamente</h2>";
echo "<a href='a.html'>Volver al formulario</a>";
echo "<br><br><a href='productos.xml' target='_blank'>Ver archivo XML</a>";
echo "<br><br><a href='aa.php' target='_blank'>Ver pedidos</a>";
?>