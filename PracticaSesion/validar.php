<?php
    session_start();
    $_SESSION['usuario'] = 'Pedro';
    header("Location:panel.php");
?>