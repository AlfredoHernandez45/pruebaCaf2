<?php
// incluir archivos de configuración de la base de datos
require_once('conexion.php');
$conn=Db::conectar();

// verificar si se recibió el formulario con la información del artículo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['nombre']; 
    $cveArticulo = $_POST['cveArticulo'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $sql = "INSERT INTO carrito (cveArticulo, cantidadProducto, totalPago) VALUES ('$cveArticulo', '$cantidad', '$precio')";
    
    header('Location: mostrar.usuario.php');
} 
?>
