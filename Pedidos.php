<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos - Tienda de Abarrotes Santana</title>
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

    <section id="carrito" class="contenedor2">
        <h2>Carrito de Compras</h2>
        <ul id="lista-carrito"></ul>
        <p id="total">Total: $0.00</p>
        <button id="btn-pedir">Pedir</button>
    </section>

    <script>
        let total = 0;

        // Cargar carrito desde localStorage
        function cargarCarrito() {
            const carrito = JSON.parse(localStorage.getItem("carrito")) || [];
            const listaCarrito = document.getElementById("lista-carrito");

            carrito.forEach(item => {
                const li = document.createElement("li");
                li.textContent = `${item.nombre} - $${item.precio.toFixed(2)}`;
                listaCarrito.appendChild(li);
                total += item.precio;
            });

            document.getElementById("total").textContent = `Total: $${total.toFixed(2)}`;
        }

        // Vaciar el carrito y localStorage al hacer un pedido
        document.getElementById("btn-pedir").addEventListener("click", () => {
            alert("¡Pedido realizado con éxito!");
            localStorage.removeItem("carrito");  // Vaciar localStorage
            location.reload(); // Recargar la página para vaciar el carrito
        });

        cargarCarrito();
    </script>
    <div  id="footer" class="contenedor2" style="text-align: center;">
        <h2 style="text-align: center;">Instituto Tecnológico Superior de Ciudad Hidalgo</h2>
            <p style="text-align: center;"><b>SEMESTRE:</b> Agosto - diciembre <b>MATERIA:</b> Programación Web <b>GRUPO:</b> 075</p>
            <p style="text-align: center;"><b>PROFESOR:</b> Erik Augusto Ramirez Vargas</p>
            <p style="text-align: center;"><b>Integrantes:</b> José Román Santana Rojas <br>
            Luis Armando Santana Rojas <br>Eduardo Crisóstomo García <br>Brandon Cruz</p>
        </div>
</body>
</html>
