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
        "Acerca de Nosotros" => "About Us",
        "Nuestra Historia" => "Our History",
        "Nuestros Valores" => "Our Values",
        "Misión" => "Mission",
        "Visión" => "Vision",
        "Objetivo" => "Objective",
        "Calidad" => "Quality",
        "Compromiso" => "Commitment",
        "Confianza" => "Trust",
        "Bienvenido a nuestra tienda de abarrotes Santana" => "Welcome to our Santana grocery store",
        "Nuestra tienda fue fundada en 2020" => "Our store was founded in 2020",
        "Brindar productos de calidad a precios accesibles" => "Provide quality products at affordable prices",
        "Ser la tienda de abarrotes preferida en nuestra comunidad" => "Be the preferred grocery store in our community",
        "Ofrecer una variedad de productos de primera necesidad a precios competitivos" => "Offer a variety of essential products at competitive prices",
        "Garantizar una atención amable, rápida y eficiente" => "Ensure friendly, fast, and efficient service",
        "Mantener siempre un inventario adecuado" => "Always maintain an adequate inventory",
        "Apoyar la economía local mediante la venta de productos de proveedores de la región" => "Support the local economy by selling products from regional suppliers",
        "Mejorar constantemente las instalaciones" => "Constantly improve the facilities",
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
        "Acerca de Nosotros" => "Acerca de Nosotros",
        "Nuestra Historia" => "Nuestra Historia",
        "Nuestros Valores" => "Nuestros Valores",
        "Misión" => "Misión",
        "Visión" => "Visión",
        "Objetivo" => "Objetivo",
        "Calidad" => "Calidad",
        "Compromiso" => "Compromiso",
        "Confianza" => "Confianza",
        "Bienvenido a nuestra tienda de abarrotes Santana" => "Bienvenido a nuestra tienda de abarrotes Santana",
        "Nuestra tienda fue fundada en 2020" => "Nuestra tienda fue fundada en 2020",
        "Brindar productos de calidad a precios accesibles" => "Brindar productos de calidad a precios accesibles",
        "Ser la tienda de abarrotes preferida en nuestra comunidad" => "Ser la tienda de abarrotes preferida en nuestra comunidad",
        "Ofrecer una variedad de productos de primera necesidad a precios competitivos" => "Ofrecer una variedad de productos de primera necesidad a precios competitivos",
        "Garantizar una atención amable, rápida y eficiente" => "Garantizar una atención amable, rápida y eficiente",
        "Mantener siempre un inventario adecuado" => "Mantener siempre un inventario adecuado",
        "Apoyar la economía local mediante la venta de productos de proveedores de la región" => "Apoyar la economía local mediante la venta de productos de proveedores de la región",
        "Mejorar constantemente las instalaciones" => "Mejorar constantemente las instalaciones",
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
    <title><?php echo $selectedTranslations['Acerca de Nosotros']; ?> - Tienda de Abarrotes</title>
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
            <h1 data-translate="Acerca de Nosotros"><?php echo $selectedTranslations['Acerca de Nosotros']; ?></h1>
            <p>Bienvenido a nuestra tienda de abarrotes Santana, un lugar en el que encontrarás una gran variedad de productos esenciales, siempre frescos y a precios competitivos. Nos enorgullecemos de servir a nuestra comunidad y ofrecer productos de alta calidad, desde alimentos básicos hasta productos de limpieza y otros artículos del hogar.</p>
        </div>
    </div>

    <div class="contenedor2">
        <div class="nosotros">
            <h1 data-translate="Nuestra Historia"><?php echo $selectedTranslations['Nuestra Historia']; ?></h1>
            <p>Nuestra tienda fue fundada en 2020 asi que es algo joven, con la misión de proporcionar productos de primera necesidad a nuestra comunidad. Desde entonces, hemos trabajado arduamente para crecer y mejorar, siempre manteniendo el compromiso de ofrecer un servicio cercano y de confianza a nuestros clientes.</p>
        </div>
    </div>

    <div class="contenedor2">
        <div class="nosotros">
            <h1 data-translate="Nuestros Valores"><?php echo $selectedTranslations['Nuestros Valores']; ?></h1>
            <ul>
                <li><strong><?php echo $selectedTranslations['Calidad']; ?>:</strong> Nos aseguramos de ofrecer productos de alta calidad.</li>
                <li><strong><?php echo $selectedTranslations['Compromiso']; ?>:</strong> Estamos comprometidos con el bienestar y la satisfacción de nuestros clientes.</li>
                <li><strong><?php echo $selectedTranslations['Confianza']; ?>:</strong> Creemos en la importancia de construir una relación de confianza con la comunidad.</li>
            </ul>
        </div>
    </div>

    <div class="contenedor2">
        <div class="nosotros">
            <h1 data-translate="Misión"><?php echo $selectedTranslations['Misión']; ?></h1>
            <p>Brindar productos de calidad a precios accesibles para satisfacer las necesidades diarias de nuestros clientes, ofreciéndoles un servicio cercano y confiable que mejore su experiencia de compra en su comunidad.</p>
        </div>
    </div>

    <div class="contenedor2">
        <div class="nosotros">
            <h1 data-translate="Visión"><?php echo $selectedTranslations['Visión']; ?></h1>
            <p>Ser la tienda de abarrotes preferida en nuestra comunidad, reconocida por la calidad de nuestros productos, la atención personalizada y nuestro compromiso con el bienestar de nuestros clientes, fomentando relaciones duraderas y de confianza.</p>
        </div>
    </div>

    <div class="contenedor2">
        <div class="nosotros">
            <h1 data-translate="Objetivo"><?php echo $selectedTranslations['Objetivo']; ?></h1>
            <ol>
                <li><?php echo $selectedTranslations['Ofrecer una variedad de productos de primera necesidad a precios competitivos']; ?></li>
                <hr>
                <li><?php echo $selectedTranslations['Garantizar una atención amable, rápida y eficiente']; ?></li>
                <hr>
                <li><?php echo $selectedTranslations['Mantener siempre un inventario adecuado']; ?></li>
                <hr>
                <li><?php echo $selectedTranslations['Apoyar la economía local mediante la venta de productos de proveedores de la región']; ?></li>
                <hr>
                <li><?php echo $selectedTranslations['Mejorar constantemente las instalaciones']; ?></li>
            </ol>
        </div>
    </div>

    <div id="footer" class="contenedor2" style="text-align: center;">
        <p>© 2024 Tienda de Abarrotes Santana. Todos los derechos reservados.</p>
    </div>
</body>

</html>

