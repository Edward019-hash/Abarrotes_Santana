<?php session_start();

// Set default language to Spanish
$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'es';

// Translation data
$translations = [
    'en' => [
        "Tienda de Abarrotes Santana" => "Santana's Grocery Store",
        "Inicio" => "Home",
        "Registro" => "Register",
        "Acerca de Nosotros" => "About Us",
        "Ubicación" => "Location",
        "Recargas" => "Top-ups",
        "Pedidos" => "Orders",
        "Bienvenido a la Tienda de Abarrotes Santana" => "Welcome to Santana's Grocery Store",
        "Para poder acceder a la tienda o pedir tu mercancia necesitas iniciar sesión" => "To access the store or place an order, please log in",
        "Correo Electronico" => "Email",
        "Contraseña" => "Password",
        "Iniciar Sesión" => "Log In",
        "¿No tienes una cuenta?" => "Don't have an account?",
        "Regístrate aquí" => "Register here",
        "Productos Destacados" => "Featured Products",
        "Coca Cola 600ML" => "Coca Cola 600ML",
        "descripcionCoca" => "Coca-Cola, hydrates... your cavities",
        "Arroz 1Kg" => "Rice 1Kg",
        "descripcionArroz" => "Rice, the plan B when there's no plan",
        "Maruchan Camaron y Limon" => "Maruchan Shrimp and Lemon",
        "descripcionMaruchan" => "Maruchan, warm, cheap, and nutritious?",
        "Frijoles Isadora" => "Isadora Beans",
        "descripcionFrijoles" => "Beans, delicious but explosive",
        "Mayonesa Mayo 500Grs" => "Mayonnaise Mayo 500g",
        "descripcionMayonesa" => "Mayonnaise, the official sandwich lubricant",
        "Shampoo 1LT" => "Shampoo 1L",
        "descripcionShampoo" => "Shampoo, removes lice",
        "Jabon Ace 250Grs" => "Ace Soap 250g",
        "descripcionAce" => "Ace soap, to make you smell nice",
        "Desodorante Axe" => "Axe Deodorant",
        "descripcionAxe" => "Axe deodorant, for those sweaty odors",
        "Cigarros Marlboro" => "Marlboro Cigarettes",
        "descripcionMarlboro" => "Marlboro, struggling to breathe since 1924",
        "Cheetos" => "Cheetos",
        "descripcionCheetos" => "Cheetos, the orange dust no one can hide",
        "Papel de Baño Petalo" => "Petalo Toilet Paper",
        "descripcionPetalo" => "Petalo, lasts longer than your ex",
    ],
    'es' => [
        "Tienda de Abarrotes Santana" => "Tienda de Abarrotes Santana",
        "Inicio" => "Inicio",
        "Registro" => "Registro",
        "Acerca de Nosotros" => "Acerca de Nosotros",
        "Ubicación" => "Ubicación",
        "Recargas" => "Recargas",
        "Pedidos" => "Pedidos",
        "Bienvenido a la Tienda de Abarrotes Santana" => "Bienvenido a la Tienda de Abarrotes Santana",
        "Para poder acceder a la tienda o pedir tu mercancia necesitas iniciar sesión" => "Para poder acceder a la tienda o pedir tu mercancia necesitas iniciar sesión",
        "Correo Electronico" => "Correo Electronico",
        "Contraseña" => "Contraseña",
        "Iniciar Sesión" => "Iniciar Sesión",
        "¿No tienes una cuenta?" => "¿No tienes una cuenta?",
        "Regístrate aquí" => "Regístrate aquí",
        "Productos Destacados" => "Productos Destacados",
        "Coca Cola 600ML" => "Coca Cola 600ML",
        "descripcionCoca" => "Coca-Cola, hidrata… tus caries",
        "Arroz 1Kg" => "Arroz 1Kg",
        "descripcionArroz" => "Arroz, el plan B cuando no hay plan",
        "Maruchan Camaron y Limon" => "Maruchan Camaron y Limon",
        "descripcionMaruchan" => "Maruchan, calentita, barata y ¿nutritiva?",
        "Frijoles Isadora" => "Frijoles Isadora",
        "descripcionFrijoles" => "Frijoles, deliciosos, pero explosivos",
        "Mayonesa Mayo 500Grs" => "Mayonesa Mayo 500Grs",
        "descripcionMayonesa" => "Mayonesa, el lubricante oficial del sándwich.",
        "Shampoo 1LT" => "Shampoo 1LT",
        "descripcionShampoo" => "Shampoo, quita los piojos",
        "Jabon Ace 250Grs" => "Jabon Ace 250Grs",
        "descripcionAce" => "Jabon ace, para que te huela rico",
        "Desodorante Axe" => "Desodorante Axe",
        "descripcionAxe" => "Desodorante axe, para quitar el olor a sope",
        "Cigarros Marlboro" => "Cigarros Marlboro",
        "descripcionMarlboro" => "Marlboro, respirando con dificultad desde 1924",
        "Cheetos" => "Cheetos",
        "descripcionCheetos" => "Cheetos, el polvo naranja que nadie puede ocultar",
        "Papel de Baño Petalo" => "Papel de Baño Petalo",
        "descripcionPetalo" => "Petalo, aguanta más que tu ex",
    ],
];

// Get the translations for the selected language
$selectedTranslations = $translations[$language];

// Save language preference to session
if (isset($_GET['lang'])) {
    $_SESSION['language'] = $_GET['lang'];
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="<?= $language ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $selectedTranslations["Tienda de Abarrotes Santana"] ?></title>
    <link rel="stylesheet" href="css/Abarrotes.css">
</head>

<body>
<nav>
        <ul>
            <li><a href="Inicio.php">Inicio</a></li>
            <li><a href="Acerca_de_Nosotros.php">Nosotros</a></li>
            <li><a href="Contactanos.php">Contactanos</a></li>
            <li><a href="#">Idioma</a>
                <ul class="submenu">
                    <li><a href="#">Inglés</a></li>
                    <li><a href="#">Español</a></li>
                </ul>
            </li>
            <li><a href="Iniciar_Sesion.php" data-translate="Iniciar_Sesion">Iniciar Sesion</a></li>
        </ul>
    </nav>

    <br>
    <br>
    <br>
    <section id="productos-destacados">
            <h2 data-translate="Productos Destacados">Productos Destacados</h2>
            <div class="contenedor-productos">
                <div class="tarjeta-producto">
                    <img src="css/img/coca.png" alt="Coca Cola 600ML">
                    <h3 data-translate="Coca Cola 600ML">Coca Cola 600ML</h3>
                    <p>$20.00</p>
                    <p data-translate="descripcionCoca">Coca-Cola, hidrata… tus caries</p>
                    <button onclick="agregarAlCarrito('Coca Cola 600ML:', 20)">Agregar al Carrito</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/arroz.png" alt="Arroz 1kg">
                    <h3 data-translate="Arroz 1Kg">Arroz 1Kg</h3>
                    <p>$20.00</p>
                    <p data-translate="descripcionArroz">Arroz, el plan B cuando no hay plan</p>
                    <button onclick="agregarAlCarrito('Arroz 1Kg:', 20)">Agregar al Carrito</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/maruchan.png" alt="maruchan">
                    <h3 data-translate="Maruchan Camaron y Limon">Maruchan Camaron y Limon</h3>
                    <p>$15.00</p>
                    <p data-translate="descripcionMaruchan">Maruchan, calentita, barata y ¿nutritiva?</p>
                    <button onclick="agregarAlCarrito('Maruchan Camaron con Limon:', 20)">Agregar al Carrito</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/frijoles.png" alt="frijoles">
                    <h3 data-translate="Frijoles Isadora">Frijoles Isadora</h3>
                    <p>$18.00</p>
                    <p data-translate="descripcionFrijoles">Frijoles, deliciosos, pero explosivos</p>
                    <button onclick="agregarAlCarrito('Frijoles Isadora:', 20)">Agregar al Carrito</button>
                </div>
            </div>
            <br>
            <br>
            <div class="contenedor-productos">

                <div class="tarjeta-producto">
                    <img src="css/img/mayonesa.png" alt="mayonesa">
                    <h3 data-translate="Mayonesa Mayo 500Grs">Mayonesa Mayo 500Grs</h3>
                    <p>$60.00</p>
                    <p data-translate="descripcionMayonesa">Mayonesa, el lubricante oficial del sándwich.</p>
                    <button onclick="agregarAlCarrito('Mayonesa Mayo 500Grs:', 20)">Agregar al Carrito</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/shampoo.png" alt="shampoo">
                    <h3 data-translate="Shampoo 1LT">Shampoo 1LT</h3>
                    <p>$60.00</p>
                    <p data-translate="descripcionShampoo">Shampoo, quita los piojos</p>
                    <button onclick="agregarAlCarrito('Shampoo 1LT:', 20)">Agregar al Carrito</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/Ace.png" alt="Ace">
                    <h3 data-translate="Jabon Ace 250Grs">Jabon Ace 250Grs</h3>
                    <p>$15.00</p>
                    <p data-translate="descripcionAce">Jabon Ace, para que te huela rico</p>
                    <button onclick="agregarAlCarrito('Jabon Ace 250Grs:', 20)">Agregar al Carrito</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/axe.png" alt="Desodorante">
                    <h3 data-translate="Desodorante Axe">Desodorante Axe</h3>
                    <p>$40.00</p>
                    <p data-translate="descripcionAxe">Desodorante Axe, para quitar el olor a sope</p>
                    <button onclick="agregarAlCarrito('Desodorante Axe:', 20)">Agregar al Carrito</button>
                </div>
            </div>
            <div class="contenedor-productos">
                <div class="tarjeta-producto">
                    <img src="css/img/malboro.png" alt="Cigarros">
                    <h3 data-translate="Cigarros Marlboro">Cigarros Marlboro</h3>
                    <p>$80.00</p>
                    <p data-translate="descripcionMarlboro">Marlboro, respirando con dificultad desde 1924</p>
                    <button onclick="agregarAlCarrito('Cigarros Marlboro:', 20)">Agregar al Carrito</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/chetos.png" alt="chetos">
                    <h3 data-translate="Cheetos">Cheetos</h3>
                    <p>$17.00</p>
                    <p data-translate="descripcionCheetos">Cheetos, el polvo naranja que nadie puede ocultar</p>
                    <button onclick="agregarAlCarrito('Cheetos:', 20)">Agregar al Carrito</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/papel de baño.png" alt="Papel de baño">
                    <h3 data-translate="Papel de Baño Petalo">Papel de Baño Petalo</h3>
                    <p>$25.00</p>
                    <p data-translate="descripcionPetalo">Petalo, aguanta más que tu ex</p>
                    <button onclick="agregarAlCarrito('Papel de Baño Petalo:', 20)">Agregar al Carrito</button>
                </div>
                
            

            </div>

        </section>
        <script>
            function agregarAlCarrito(nombreProducto, precio) {
                // Obtener carrito existente o crear uno nuevo
                let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
                carrito.push({ nombre: nombreProducto, precio: precio });

                // Guardar el carrito actualizado en localStorage
                localStorage.setItem("carrito", JSON.stringify(carrito));

                alert(`${nombreProducto} ha sido agregado al carrito`);
            }
        </script>

</body>

</html>
