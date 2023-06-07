<?php
//incluye la clase crud y articulo
require_once('crud.php');
require_once('articulo.php');
$crud = new crudArticulo();
$articulo = new Articulos();
//obtiene todos los articulos con el método mostrar de la clase crud
$listaArticulos = $crud->mostrar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cafeteria</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
	<a name="inicio"></a><!-- Vinculos del menu a direccionar Productos -->
	<a name="index.html"></a><!-- Vinculos del menu a direccionar sesion -->
	<a name="sesion.php"></a>
	<a name="registro.php"></a>

	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<header>
		<a href="#" class="logo">
			<img src="img/logo.png" alt="">
		</a>
		Eliminar
		<i class='bx bx-menu' id="menu-icon"></i>
		<ul class="navbar">
			<li><a href="#inicio">Inicio</a></li>
			<li><a href="#producttos">Productos</a></li> <!-- Vinculos del menu a direccionar -->
			<li><a href="#direccion">Dirección y Contacto</a></li>
			<li><a href="sesion.php">Iniciar Sesión</a></li> <!-- iniciar sesion -->
		</ul>

		<div class="header-icon">
			<a href="carrito.php"><i class='bx bx-cart-alt'></i></a>
		</div>
	</header>
	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<section class="home" id="home">
		<div class="home-text">
			<h1>¿Listo para despertar?</h1>
			<p>Bienvenido seas a nuestra cafeteria, contamos con gran variedad de sabores.</p>
		</div>

		<div class="home-img"><!-- Imagen de inicio-->
			<img src="img/main.png" alt="">
		</div>
	</section>
	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<center>
		<a name="producttos"></a> <!-- Vinculos del menu a direccionar Productos -->
		<section class="products" id="products">
			<div class="heading">
				<h2>Productos</h2>
			</div>

			<!-- FOR que imprime todos los productos -->
			<?php foreach ($listaArticulos as $articulo) {?>
			<div class="products-container">
				<div class="box">
					<img src="img/frape.png" alt="cafe">
					<h3>
						<?php echo $articulo->getNombre(); ?>
					</h3>
					<div class="content">
						<span>$
							<?php echo $articulo->getPrecio(); ?> Varos
						</span>
						<a href="#" class="agregar-carrito" data-articulo-id="<?php echo $articulo->getCveArticulo(); ?>">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<?php }?>

			<br>
			<!-- Tabla para ingresar más productos -->
		</section>
	</center>
	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<a name="direccion"></a> <!-- Vinculos del menu a direccionar Productos -->
	<div class="footer">
		<p>
		<h3> Contacto: 9831234567 <br> Dirección: Av. Andres Quintana Roo entre Insurgentes y Juan José Siorda!
			https://goo.gl/maps/ik7cVLSPsWrWVMNT9</h3>
		</p>
	</div>
	<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
	<df-messenger chat-title="Cafeteria_IA" agent-id="39350e75-1a68-444d-bc1d-66843bd6dca3"
		language-code="es"></df-messenger>
</body>

<script>
	$(document).ready(function () {
		$('.agregar-carrito').click(function (e) {
			e.preventDefault();

			var articuloID = $(this).data('articulo-id');

			$.ajax({
				url: 'agregar_al_carrito.php', // Ruta a tu script PHP que maneja la inserción en la base de datos
				method: 'POST',
				data: { articuloID: articuloID },
				success: function (response) {
					alert('Artículo agregado al carrito con éxito');
					// Realiza cualquier otra acción que desees después de agregar al carrito
				},
				error: function () {
					alert('Error al agregar el artículo al carrito');
				}
			});
		});
	});
</script>
</html>
