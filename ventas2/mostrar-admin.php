<!-- Inicia Conexion con la base de datos -->
<?php
 //incluye la clase crud y articulo
 require_once('crud.php');
 require_once('articulo.php');
 $crud=new crudArticulo();
 $articulo= new Articulos();
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
    <title>Cafeteria</title>
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>

<header>
    <!-- logo de cafeteria -->
    <a href="#" class="logo">
        <img src="img/logo.png" alt="">
    </a>
    
    <!-- Menu -->
    <ul class="navbar">
        <li><a href="#inicio">Inicio</a></li>   
        <li><a href="#producttos">Productos</a></li>
        <li><a href="#direccion">Dirección y Contacto</a></li>
        <li><a href="sesion.php">Iniciar Sesión</a></li>
    </ul>

    <!-- logo carrito -->
    <div class="header-icon">
        <a href="carrito-principal.php"><img src="img/carrito.png" alt="carrito" loading="lazy"></a>
    </div>
</header>
  
<section class="home" id="home">
    <div class="home-text">
        <h1>¿Listo para despertar?</h1>
        <p>Bienvenido seas a nuestra cafetería, contamos con gran variedad de sabores</p>
    </div>
    
    <div class="home-img">
        <img src="img/main.png" alt="">
    </div>
</section>

<center>
    <table border="1" cellpadding="0" cellspacing="5" width="30%" bgcolor="FFFFFF">
        <tr>
            <td><a href="ingresar.php">Ingresar Más Productos</a></td>
            <td><a href="mostrar.php">Refrescar Productos</a></td>
        </tr>
    </table>

    <section class="products" id="products">
        <div class="heading">        
            <h2>Productos</h2>
        </div>

        <?php foreach ($listaArticulos as $articulo) { ?>
            <div class="products-container">
                <div class="box">
                    <img src="img/frape.png" alt="">
                    <h3><?php echo $articulo->getNombre() ?></h3>
                    <div class="content">
                        <span>$<?php echo $articulo->getPrecio() ?> Pesos</span>
                        <a href="actualizar.php?cveArticulo=<?php echo $articulo->getCveArticulo() ?>&accion=a">Actualizar</a>
                        <a href="admin_articulo.php?cveArticulo=<?php echo $articulo->getCveArticulo() ?>&accion=e">Eliminar</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>cveArticulos</th>
                    <th>nombre</th>
                    <th>precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaArticulos as $articulo) { ?>
                    <tr>
                        <td><?php echo $articulo->getCveArticulo() ?></td>
                        <td><?php echo $articulo->getNombre() ?></td>
                        <td><?php echo $articulo->getPrecio() ?></td>
                        <td><a href="actualizar.php?cveArticulo=<?php echo $articulo->getCveArticulo() ?>&accion=a">Actualizar</a></td>
                        <td><a href="admin_articulo.php?cveArticulo=<?php echo $articulo->getCveArticulo() ?>&accion=e">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <br>
        <table border="1" cellspacing="5" width="30%" bgcolor="FFFFFF">
            <tr>
                <td><a href="ingresar.php">Ingresar Más Productos</a></td>
                <td><a href="mostrar.php">Refrescar Productos</a></td>
            </tr>
        </table>
    </section>

    <a name="direccion"></a>
    <div class="footer">
        <p><h3>Contacto: 9831234567 <br> Dirección: Av. Andres Quintana Roo entre Insurgentes y Juan José Siorda! https://goo.gl/maps/ik7cVLSPsWrWVMNT9</h3></p>
    </div>

    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
        chat-title="Cafeteria_IA"
        agent-id="39350e75-1a68-444d-bc1d-66843bd6dca3"
        language-code="es"
    ></df-messenger>
</center>

</body>
</html>
