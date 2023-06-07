<?php
// incluir archivos de configuración de la base de datos
require_once('conexion.php');

// verificar si se recibió el formulario con la información del artículo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener la información del formulario
    $nombre = $_POST['nombre'];
    $cveArticulo = $_POST['cveArticulo'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    // Aquí deberías realizar las validaciones necesarias y asegurarte de que la información del artículo sea válida antes de realizar la inserción en la base de datos.

    // Ejemplo de inserción en la tabla del carrito
    $sql = "INSERT INTO carrito (cveArticulo, cantidadProducto, totalPago) VALUES ('$cveArticulo', '$cantidad', '$precio')";
    if ($conn->query($sql) === TRUE) {
        echo 'Artículo agregado al carrito con éxito';
    } else {
        echo 'Error al agregar el artículo al carrito: ' . $conn->error;
    }
} else {
    echo 'No se recibió la información del artículo';
}
?>
