<?php
// require_once('usuario.php');
// require_once('crud_usuario.php');

// session_start();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $correo = $_POST['usuario'];
//     $password = $_POST['contrasena'];
//     $nombre = ''; // Agrega el valor del campo de nombre del formulario aquí

//     $usuario = new Usuario();
//     $usuario->setCorreo($correo);
//     $usuario->setPassword($password);
//     $usuario->setNombre($nombre);

//     $crudUsuario = new CrudUsuario();

//     if ($crudUsuario->insertar($usuario)) {
//         echo 'Usuario insertado con éxito';
//     } else {
//         echo 'Error al insertar el usuario';
//     }
// }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Estilos css -->
	<link rel="stylesheet" href="css/mainstyle.php">
	<link rel="stylesheet" href="css/style.php">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<style>
  body {font-family: Arial, Helvetica, sans-serif; background-image: url("/cafeteria/public/img/bg.png");}
  form {border: 3px solid #f1f1f1; width: 500px; height: 520px; background-color:#ffffff; border-radius: 25px 25px 25px 25px;} /*Tamaño del contenedor del registro*/

  input[type=email], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
  }

  button {
	background-color: #04AA6D;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
	border-radius: 25px 25px 25px 25px;
  }

  button:hover {
	opacity: 0.8;
  }

  .cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
	
  }

  .imgcontainer {
	text-align: center;
	/*margin: 24px 0 12px 0;*/
	margin: 0px 0 5px 0;
	
  }
  /*Contenedor de la imagen del login  */
  img.avatar {
	width: 25%;
	border-radius: 50%;
  }

  .container {
	padding: 16px;
  }

  span.psw {
	float: right;
	padding-top: 16px;
  }

  .sesion_body {
	margin: 80px auto;
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
	span.psw {
	  display: block;
	  float: none;
	}
	.cancelbtn {
	  width: 100%;
	}
  }
</style>
</head>
<body>
	<!-- INICIO - Aquí se encuentra la estructura del encabezado -->
	<header>
		<a href="#" class="logo">
			<img src="img/logo.png" alt="">
		</a>
		<i class='bx bx-menu' id="menu-icon"></i>
		<ul class="navbar">
			<li><a href="mostrar-usuario.php">Inicio</a></li>   
			<li><a href="mostrar-usuario.php#products">Productos</a></li>
			<li><a href="mostrar-usuario.php#direccion">Dirección y Contacto</a></li>
			<li><a href="sesion.php">Iniciar Sesión</a></li>
		</ul>

		<div class="header-icon">
		</div>
	</header>
	<!-- FINAL - Aquí se encuentra la estructura del encabezado -->

<center class="sesion_body">
	<a name="sesion"></a><!-- Vinculos del menu a direccionar sesion -->
	<form action="crud-sesion.php" method="post">
		<div class="imgcontainer">
			<img src="./img/login.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
				
			<!--email-->
			<label for="uname"><b>Correo Electronico</b></label>
			<input type="email" id="usuario" name="usuario" value="" placeholder="Ingresa Correo" required>
			<!--contraseña-->
			<label for="psw"><b>Contraseña</b></label>
			<input type="password" id="contrasena" name="contrasena" Value="" placeholder="Ingresa Contraseña" required>


			<button type="submit">Login</button>
			<label>
				<input type="checkbox" checked="checked" name="remember"> ¿Recordar contraseña xD?
			</label>
			<div class="container" style="background-color:#f1f1f1">
				<form action="regresa">
					
					<button type="button" class="cancelbtn"> <a href="mostrar.php">Regresarar</a></button>
					<!--<button type="button" class="cancelbtn">Regresar</button>-->
					<!-- </form> -->
				</form>
				<br><br>
				<strong>¿No tienes cuenta?</strong><br><a href="registro.php">Registrate </a>
			</div>
			<?php
				// IICIALIZA LA SESION DEL USUARIO QUE YA DEBE ESTAR LOGEADO
				session_start();
				error_reporting(0);// Esto permite que no se muestre ningun error, esto solo usarlo cuando se termine el proyecto
				// OBTENEMOS EL USUARIO O EL CORREO DEL USUARIO
				$varsesion = $_SESSION['usuario'];
				echo $varsesion;
				// print_r($_SESSION);

				// AQUI VALIDAMOS SI NO HA INICIADO SESION NO PUEDE CONTINUAR
				// if ($varsesion == null || $varsesion == '') {
				//     echo 'Sesion no iniciada, usted no tiene autorizacion';
				//     die();
				// }
				
			?>
			<!-- <a href="index.php">Regresa</a> -->
		</div>
	</form>
</center>

</body>
</html>
