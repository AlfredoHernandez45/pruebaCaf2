<?php
    session_start();
    error_reporting(0);// Esto permite que no se muestre ningun error, esto solo usarlo cuando se termine el proyecto
    $varsesion = $_SESSION['usuario'];
    echo $varsesion;
    // print_r($_SESSION);
    if ($varsesion == null || $varsesion == '') {
        echo 'Sesion no iniciada, usted no tiene autorizacion';
        die();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Panel de administracion</h1>
    <!-- <h2>Bienvenido: <?php echo $_SESSION['usuario'] ?></h2> -->
    <h2>Bienvenido: <?php echo $varsesion; ?></h2>
    <a href="cerrar-sesion.php">cerrar sesion</a>
</body>
</html>