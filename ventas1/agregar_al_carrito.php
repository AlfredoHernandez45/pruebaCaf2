<?php
// incluir archivos de configuración de la base de datos
require_once('conexion.php');
// verificar si se recibió el ID del artículo
if (isset($_POST['articuloID'])) {
    $articuloID = $_POST['articuloID'];

    // Aquí deberías realizar las validaciones necesarias y asegurarte de que el artículo exista y sea válido antes de realizar la inserción en la base de datos.

    // Ejemplo de inserción en la tabla del carrito
    $sql = "INSERT INTO carrito (id_compra) VALUES ($articuloID)";
    if ($conn->query($sql) === TRUE) {
        echo 'Artículo agregado al carrito con éxito';
    } else {
        echo 'Error al agregar el artículo al carrito: ' . $conn->error;
    }
} else {
    echo 'No se recibió el ID del artículo';
}
?>
