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
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Sistemas computacionales">
  <meta name="keywords" content="MySql, conexión, Wamp">
  <meta name="author" content="Ramirez Erik, Sistemas">
  <title>index</title>
  <link rel="stylesheet" href="css/Abarrotes.css">
 
</head>


<body>

    
<div id="container">
    <div id="header">
        <!-- ************  MENU  *************** -->
        <?php  include('php/menu_admin.php');
        ?>
    </div>
    <div id="content">
        <div id="section">
            <!-- ************  CONTENIDO  *************** -->
             <br>
             <div class="contenedor2">
            <h1>Bienvenido al inicio</h1>
            <h2>Bienvenido ADMIN <?php echo $_SESSION["usuario"]; ?>. </h2>
            <p>El index por lo regular encontrará anuncios reelevantes y promosiones del sitio</p>
            <p></p>
            </div>
            
            <section id="productos-destacados">
            <h2 data-translate="Productos Destacados">Productos Destacados</h2>
            <div class="contenedor-productos">
                <div class="tarjeta-producto">
                    <img src="css/img/coca.png" alt="Coca Cola 600ML">
                    <h3 data-translate="Coca Cola 600ML">Coca Cola 600ML</h3>
                    <p>$20.00</p>
                    <p data-translate="descripcionCoca">Coca-Cola, hidrata… tus caries</p>
                    <button onclick="agregarAlCarrito('Coca Cola 600ML:', 20)">Editar</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/arroz.png" alt="Arroz 1kg">
                    <h3 data-translate="Arroz 1Kg">Arroz 1Kg</h3>
                    <p>$20.00</p>
                    <p data-translate="descripcionArroz">Arroz, el plan B cuando no hay plan</p>
                    <button onclick="agregarAlCarrito('Arroz 1Kg:', 20)">Editar</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/maruchan.png" alt="maruchan">
                    <h3 data-translate="Maruchan Camaron y Limon">Maruchan Camaron y Limon</h3>
                    <p>$15.00</p>
                    <p data-translate="descripcionMaruchan">Maruchan, calentita, barata y ¿nutritiva?</p>
                    <button onclick="agregarAlCarrito('Maruchan Camaron con Limon:', 20)">Editar</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/frijoles.png" alt="frijoles">
                    <h3 data-translate="Frijoles Isadora">Frijoles Isadora</h3>
                    <p>$18.00</p>
                    <p data-translate="descripcionFrijoles">Frijoles, deliciosos, pero explosivos</p>
                    <button onclick="agregarAlCarrito('Frijoles Isadora:', 20)">Editar</button>
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
                    <button onclick="agregarAlCarrito('Mayonesa Mayo 500Grs:', 20)">Editar</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/shampoo.png" alt="shampoo">
                    <h3 data-translate="Shampoo 1LT">Shampoo 1LT</h3>
                    <p>$60.00</p>
                    <p data-translate="descripcionShampoo">Shampoo, quita los piojos</p>
                    <button onclick="agregarAlCarrito('Shampoo 1LT:', 20)">Editar</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/Ace.png" alt="Ace">
                    <h3 data-translate="Jabon Ace 250Grs">Jabon Ace 250Grs</h3>
                    <p>$15.00</p>
                    <p data-translate="descripcionAce">Jabon Ace, para que te huela rico</p>
                    <button onclick="agregarAlCarrito('Jabon Ace 250Grs:', 20)">Editar</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/axe.png" alt="Desodorante">
                    <h3 data-translate="Desodorante Axe">Desodorante Axe</h3>
                    <p>$40.00</p>
                    <p data-translate="descripcionAxe">Desodorante Axe, para quitar el olor a sope</p>
                    <button onclick="agregarAlCarrito('Desodorante Axe:', 20)">Editar</button>
                </div>
            </div>
            <div class="contenedor-productos">
                <div class="tarjeta-producto">
                    <img src="css/img/malboro.png" alt="Cigarros">
                    <h3 data-translate="Cigarros Marlboro">Cigarros Marlboro</h3>
                    <p>$80.00</p>
                    <p data-translate="descripcionMarlboro">Marlboro, respirando con dificultad desde 1924</p>
                    <button onclick="agregarAlCarrito('Cigarros Marlboro:', 20)">Editar</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/chetos.png" alt="chetos">
                    <h3 data-translate="Cheetos">Cheetos</h3>
                    <p>$17.00</p>
                    <p data-translate="descripcionCheetos">Cheetos, el polvo naranja que nadie puede ocultar</p>
                    <button onclick="agregarAlCarrito('Cheetos:', 20)">Editar</button>
                </div>
                <div class="tarjeta-producto">
                    <img src="css/img/papel de baño.png" alt="Papel de baño">
                    <h3 data-translate="Papel de Baño Petalo">Papel de Baño Petalo</h3>
                    <p>$25.00</p>
                    <p data-translate="descripcionPetalo">Petalo, aguanta más que tu ex</p>
                    <button onclick="agregarAlCarrito('Papel de Baño Petalo:', 20)">Editar</button>
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

                alert(`${nombreProducto} No se ha podido editar`);
            }
        </script>


        </div>
        <br>
        <br>
        <br>
        <br>
        <div id="footer" class="contenedor2" style="text-align: center;">
        <h2 style="text-align: center;">Instituto Tecnológico Superior de Ciudad Hidalgo</h2>
        <p style="text-align: center;"><b>SEMESTRE:</b> Agosto - diciembre <b>MATERIA:</b> Programación Web <b>GRUPO:</b> 075</p>
        <p style="text-align: center;"><b>PROFESOR:</b> Erik Augusto Ramirez Vargas</p>
        <p style="text-align: center;"><b>Integrantes:</b> José Román Santana Rojas <br>
            Luis Armando Santana Rojas <br>Eduardo Crisostomo Garcia <br>Brandon Cruz</p>
    </div>

</body>
</html>