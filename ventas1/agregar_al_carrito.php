<?php
// incluir archivos de configuración de la base de datos
require_once('conexion.php');

// verificar si se recibió el formulario con la información del artículo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['nombre']; // Cambié 'correo' por 'nombre' ya que en el formulario el campo se llama 'nombre'
    $cveArticulo = $_POST['cveArticulo'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $sql = "INSERT INTO carrito (correo, cveArticulo, cantidadProducto, totalPago) VALUES ('$usuario','$cveArticulo', '$cantidad', '$precio')";
    if ($conn && $conn->query($sql) === TRUE) {
        echo 'Artículo agregado al carrito con éxito';
    } else {
        echo 'Error al agregar el artículo al carrito: ' . $conn->error;
    }
} else {
    echo 'No se recibió la información del artículo';
}
?>
