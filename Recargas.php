<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Tienda de Abarrotes</title>
    <link rel="stylesheet" href="css/Abarrotes.css">
</head>
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
            <li><a href="Iniciar_Sesion.php" data-translate="Iniciar_Sesion">Iniciar Sesion</a></li>
        </ul>
    </nav>

    <br>

    <!-- Contenedor de Recargas Telefónicas -->
    <div class="contenedor-registro">
        <h2>Recargas Telefónicas</h2>
        <form method="POST" action="procesar_recarga.php">
            <section>
                <label for="compania">Compañía Telefónica:</label><br>
                <select id="compania" name="compania" required>
                    <option value="">Seleccione una compañía</option>
                    <option value="telcel">Telcel</option>
                    <option value="movistar">Movistar</option>
                    <option value="att">AT&T</option>
                    <option value="unefon">Unefon</option>
                    <option value="virgin">Virgin Mobile</option>
                    <option value="weex">Weex</option>
                    <option value="freedompop">FreedomPop</option>
                    <option value="mazti">Maz Tiempo</option>
                </select>
            </section>
            <br>
            <section>
                <label for="telefono_recarga">Número de Teléfono:</label><br>
                <input type="tel" id="telefono_recarga" name="telefono_recarga" pattern="[0-9]{10}" title="Ingrese un número de teléfono válido de 10 dígitos" required>
            </section>
            <section>
                <label for="monto">Monto de la Recarga ($):</label><br>
                <input type="number" id="monto" name="monto" min="10" max="1000" step="10" required>
            </section>
            <section>
                <h3>Detalles de Pago</h3>
                <label for="nombre_tarjeta">Nombre en la Tarjeta:</label><br>
                <input type="text" id="nombre_tarjeta" name="nombre_tarjeta" pattern="[A-Za-zÀ-ÿ\s]+" title="Solo se permiten letras" required>
                <br>
                <label for="numero_tarjeta">Número de Tarjeta de Crédito o Débito:</label><br>
                <input type="text" id="numero_tarjeta" name="numero_tarjeta" pattern="[0-9]{16}" title="Ingrese un número de tarjeta válido de 16 dígitos" required>

                <br>
                <label for="expiracion">Fecha de Expiración:</label><br>
                <input type="month" id="expiracion" name="expiracion" required>
                <br>
                <br>
                <label for="cvv">CVV (código de seguridad):</label><br>
                <input type="text" id="cvv" name="cvv" pattern="[0-9]{3,4}" title="Ingrese un CVV válido de 3 o 4 dígitos" required>
            </section>
            <br>
        
            <button type="submit">Realizar Recarga</button>
        </form>
    </div>
    <div id="footer" class="contenedor2" style="text-align: center;">
        <h2 style="text-align: center;">Instituto Tecnológico Superior de Ciudad Hidalgo</h2>
        <p style="text-align: center;"><b>SEMESTRE:</b> Agosto - diciembre <b>MATERIA:</b> Programación Web <b>GRUPO:</b> 075</p>
        <p style="text-align: center;"><b>PROFESOR:</b> Erik Augusto Ramirez Vargas</p>
        <p style="text-align: center;"><b>Integrantes:</b> José Román Santana Rojas <br>
        Luis Armando Santana Rojas <br>Eduardo Crisóstomo García <br>Brandon Cruz</p>
    </div>

</body>
</html>
