<!-- Inicia Conexion con la base de datos -->
<?php
//incluye la clase crud y articulo
require_once('crud-carrito.php');
require_once('carrito.php');
$crud=new CrudCarrito();
$carrito= new Carrito();
//obtiene todos los articulos con el método mostrar de la clase crud
$listaArticulos=$crud->mostrar();
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
								<!-- Nombre del cafe -->
								<h3><?php echo $carrito->getCveArticulo() ?></h3> <!--Muestra el nombre del producto -->
								<!-- <p>calletas, pan</p> -->
							</div>
							<div class="cantidad_producto">
								<!-- Cantidad de cafes -->
								<input type="number" name="cantidad" value="<?php echo $carrito->getCantidadProducto() ?>">
							</div>
							<div class="precio_producto">
								<!-- Precio unitario del cafe -->
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