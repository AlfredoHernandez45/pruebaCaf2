<!-- Inicia Conexion con la base de datos -->
<?php
// Incluye la clase crud-carrito.php y el archivo crud.php
require_once('crud-carrito.php');
require_once('carrito.php');
require_once('crud.php');

$crudCarrito = new CrudCarrito();
$crudArticulo = new crudArticulo();

$listaArticulos = $crudCarrito->mostrar();
?>
<!-- Termina Conexion con la base de datos -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Compra del Carrito</title>
	
	<!-- Estilos css -->
	<link rel="stylesheet" href="css/mainstyle.php">
	<link rel="stylesheet" href="css/style.php">

</head>
<body class="main_carrito">

	<header>
        <a href="#" class="logo">
            <img src="img/logo.png" alt="">
        </a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <ul class="navbar">
            <li><a href="mostrar.usuario.php">Inicio</a></li>   
            <li><a href="mostrar.usuario.php#products">Productos</a></li>
            <li><a href="mostrar.usuario.php#direccion">Dirección y Contacto</a></li>
            <li><a href="sesion.php">Iniciar Sesión</a></li>
        </ul>

        <div class="header-icon">

        </div>
    </header>

	<div class="carrito">
		<div class="content">
			<div class="body_carrito">
				<div class="catalago_productos">
					<h2>Mi Carrito</h2>
					<?php foreach ($listaArticulos as $carrito) {?>
					<div class="item_productos">
						
						<div class="producto">
							<div class="image_producto">
								<img src="./img/mokaa.png" alt="cafe moka" loading="lazy">
							</div>
							<div class="descripcion_producto">
								<?php
								// Obtener el nombre del artículo utilizando la función obtenerArticulo
								$articulo = $crudArticulo->obtenerArticulo($carrito->getCveArticulo());
								$nombreArticulo = $articulo->getNombre();
								?>
								<h3><?php echo $nombreArticulo; ?></h3> <!-- Muestra el nombre del producto -->
								<!-- <p>calletas, pan</p> -->
							</div>
							<div class="cantidad_producto">
								<input type="number" name="cantidad" value="<?php echo $carrito->getCantidadProducto() ?>">
							</div>
							<div class="precio_producto">
								<p><?php echo $carrito->getPrecio() ?></p>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
				<div class="catalago_precios">
					<h2>Resumen Pedido</h2>
					<div class="sub_total">
						<label>Subtotal:</label>
						<p>$20.00</p>
						<label>IVA:</label>
						<p>0.16%</p>
						<label>Envio:</label>
						<p>GRATIS</p>
					</div>
					<div class="total_precio">
						<label>Total:</label>
						<p>$20.00</p>
					</div>
					<div class="fin_compra">
						<button><a href="">Finalizar la compra</a></button>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>