<?php session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['tipo']) ){
        echo "Usuario no Logueado";
        header('Location: Iniciar_Sesion.php'); 
        exit();
    }
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/Abarrotes.css">
</head>

    </div>
    <div class="contenedor2">
        <div id="section">
            <!-- ************  CONTENIDO  *************** -->
            <h1>Bienvenido cliente <?php echo $_SESSION['usuario']; ?></h1>
            <p>En que te ayudamos el dia de hoy</p>
        </div>            
    </div>
<body>
    <nav>
        <ul>
            <li><a href="Inicio.php">Inicio</a></li>
            <li><a href="Acerca_de_Nosotros.php">Nosotros</a></li>
            <li><a href="Servicios.php">Servicios</a>
            <ul class="submenu">
                <li><a href="Recargas.php">Recargas</a></li>
                <li><a href="Pedidos.php">Pedidos</a></li>
            </ul></li> 
            <li><a href="Contactanos.php">Contactanos</a></li>
            <li><a href="#">Idioma</a>
                <ul class="submenu">
                    <li><a href="#">Inglés</a></li>
                    <li><a href="#">Español</a></li>
                </ul>
            </li>
            <li><a href="Cerrar_Sesion.php">Cerrar Sesión</a></li>
        </ul>
    </nav>