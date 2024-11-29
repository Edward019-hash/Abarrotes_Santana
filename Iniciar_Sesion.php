<?php session_start();

// Obtén el idioma actual de la sesión o establece el idioma predeterminado como español
if (isset($_GET['lang'])) {
    $_SESSION['language'] = $_GET['lang'];
}
$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'es';

// Traducciones
$translations = [
    'en' => [
        "Inicio" => "Home",
        "Nosotros" => "About Us",
        "Servicios" => "Services",
        "Recargas" => "Top-ups",
        "Pedidos" => "Orders",
        "Contactanos" => "Contact Us",
        "Idioma" => "Language",
        "Iniciar Sesion" => "Log In",
        "Bienvenido a la Tienda de Abarrotes Santana" => "Welcome to Santana's Grocery Store",
        "Para poder acceder a la tienda o pedir tu mercancia necesitas iniciar sesión" => "To access the store or place an order, please log in",
        "Correo Electronico" => "Email",
        "Contraseña" => "Password",
        "¿No tienes una cuenta?" => "Don't have an account?",
        "Regístrate aquí" => "Register here",
    ],
    'es' => [
        "Inicio" => "Inicio",
        "Nosotros" => "Nosotros",
        "Servicios" => "Servicios",
        "Recargas" => "Recargas",
        "Pedidos" => "Pedidos",
        "Contactanos" => "Contactanos",
        "Idioma" => "Idioma",
        "Iniciar Sesion" => "Iniciar Sesión",
        "Bienvenido a la Tienda de Abarrotes Santana" => "Bienvenido a la Tienda de Abarrotes Santana",
        "Para poder acceder a la tienda o pedir tu mercancia necesitas iniciar sesión" => "Para poder acceder a la tienda o pedir tu mercancia necesitas iniciar sesión",
        "Correo Electronico" => "Correo Electrónico",
        "Contraseña" => "Contraseña",
        "¿No tienes una cuenta?" => "¿No tienes una cuenta?",
        "Regístrate aquí" => "Regístrate aquí",
    ],
];

// Traducciones seleccionadas
$selectedTranslations = $translations[$language];
?>


<!DOCTYPE html>
<html lang="<?php echo $language; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Tienda de Abarrotes</title>
    <link rel="stylesheet" href="css/Abarrotes.css">
</head>

<body>
    <nav>
    
        <ul>
            <li><a href="Inicio.php" data-translate="Inicio"><?php echo $selectedTranslations['Inicio']; ?></a></li>
            <li><a href="Acerca_de_Nosotros.php" data-translate="Nosotros"><?php echo $selectedTranslations['Nosotros']; ?></a></li>
            </li>
            <li><a href="Contactanos.php" data-translate="Contactanos"><?php echo $selectedTranslations['Contactanos']; ?></a></li>
            <li>
                <a href="#" data-translate="Idioma"><?php echo $selectedTranslations['Idioma']; ?></a>
                <ul class="submenu">
                    <li><a href="?lang=en">English</a></li>
                    <li><a href="?lang=es">Español</a></li>
                </ul>
            </li>
            <li><a href="Iniciar_Sesion.php" data-translate="Iniciar Sesion"><?php echo $selectedTranslations['Iniciar Sesion']; ?></a></li>
        </ul>
    </nav>
    <div class="contenedor">

    <div class="logo-principal">
        <img src="css/img/portada.png" alt="Logo de la Tienda Santana's" class="logo-img">
    </div>

    <style> 
        .logo-img {
    height: 200px;
}
    </style>


        <h1 style="text-align: center;" data-translate="Bienvenido a la Tienda de Abarrotes Santana">
            <?php echo $selectedTranslations['Bienvenido a la Tienda de Abarrotes Santana']; ?>
        </h1>
        <h2 style="text-align: center;" data-translate="Para poder acceder a la tienda o pedir tu mercancia necesitas iniciar sesión">
            <?php echo $selectedTranslations['Para poder acceder a la tienda o pedir tu mercancia necesitas iniciar sesión']; ?>
        </h2>
        <form action="Validacion_Usuario.php" method="post">
                <h2>Inicio de sesión</h2>
                <table align="center">  
                    <tr>
                        <td>Usuario:</td>
                        <td><input name="ema_email" type="email" value="admin1@gmail.com" required /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input name="pas_password" type="password" value="123" required /></td> 
                    </tr>
                    <tr>
                        <td></td>
                        
                    <tr>
                        <td></td>
                        <td><input name="iniciar" type="submit" value="Iniciar Sesión" /></td>
                    </tr>
                  </table>
            </form>
        <p data-translate="¿No tienes una cuenta?">
            <?php echo $selectedTranslations['¿No tienes una cuenta?']; ?>
            <a href="Registro.php" data-translate="Regístrate aquí"><?php echo $selectedTranslations['Regístrate aquí']; ?></a>
        </p>
    </div>
</body>
</html>
