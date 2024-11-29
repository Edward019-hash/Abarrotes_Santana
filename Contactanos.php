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
        "Contacta con Nosotros" => "Contact Us",
        "Si tienes alguna duda o necesitas asistencia, no dudes en ponerte en contacto con nosotros a través de nuestro correo electrónico" => "If you have any questions or need assistance, do not hesitate to contact us via email",
        "Ubicación" => "Location",
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
        "Contacta con Nosotros" => "Contacta con Nosotros",
        "Si tienes alguna duda o necesitas asistencia, no dudes en ponerte en contacto con nosotros a través de nuestro correo electrónico" => "Si tienes alguna duda o necesitas asistencia, no dudes en ponerte en contacto con nosotros a través de nuestro correo electrónico",
        "Ubicación" => "Ubicación",
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
    <title><?php echo $selectedTranslations['Inicio']; ?> - Tienda de Abarrotes</title>
    <link rel="stylesheet" href="css/Abarrotes.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="Inicio.php" data-translate="Inicio"><?php echo $selectedTranslations['Inicio']; ?></a></li>
            <li><a href="Acerca_de_Nosotros.php" data-translate="Nosotros"><?php echo $selectedTranslations['Nosotros']; ?></a></li>
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

    <div class="contenedor2">
        <div class="nosotros">
            <h1 data-translate="Contacta con Nosotros">
                <?php echo $selectedTranslations['Contacta con Nosotros']; ?>
            </h1>
            <p>
                <?php echo $selectedTranslations['Si tienes alguna duda o necesitas asistencia, no dudes en ponerte en contacto con nosotros a través de nuestro correo electrónico']; ?>:
                <a href="mailto:InfoAbarrotesSantana@gmail.com">InfoAbarrotesSantana@gmail.com</a> o
                llamando al teléfono: +52 447 187 01 07.
            </p>

            <section id="ubicacion" class="contenedor5">
                <h2 data-translate="Ubicación">
                    <?php echo $selectedTranslations['Ubicación']; ?>
                </h2>
                <div class="mapa-fondo">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d849.512931173929!2d-100.3529560195141!3d19.75645517472389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2c5616cd8f965%3A0xb4bb4776bbbdae32!2sFerre%20Lubricantes%20%22El%20Chivito%22!5e1!3m2!1ses-419!2smx!4v1730927692222!5m2!1ses-419!2smx"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
