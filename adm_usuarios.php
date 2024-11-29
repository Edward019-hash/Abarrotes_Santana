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

  <title></title>
  <link rel="stylesheet" href="css/Abarrotes.css">
 >
  <?php include("conexion.php"); ?>
</head>

<body>
<div id="container">
    <div id="header">
        <!-- ************  MENU  *************** -->
        <?php include('php/menu_admin.php');?>
    </div>
    <div id="content">
        <div id="section">
            <!-- ************  CONTENIDO  *************** -->
             <br>
             <div class="contenedor2">
            <h1>Menu de Usuarios</h1>
             </div>
            <div class="contenedor2"><p>Buscar Usuario <input type="text"><button>Buscar</button></p></div>
            <p><button><a href="adm_usuario_registrar.php">Crear usuario</a></button></p>
            <div class="contenedor2">
            <h2>Usuarios Existentes</h2>
            <?php
            //invocar la funcion select y la tabla
            $result = select("usuarios");
            // Realizamos un bucle que muestre el resultado
            ?>
        <table border=1 align="center">
          <thead>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Email</td>
            <td>Tipo</td>
            <td>Acciones</td>
          </thead>
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) {
          ?>
              <tr>
                <td><?php echo $row->id_usuario; ?></td>
                <td><?php echo $row->usu_nom; ?></td>
                <td><?php echo $row->usu_ap_pat; ?></td>
                <td><?php echo $row->usu_ap_mat; ?></td>
                <td><?php echo $row->usu_email; ?></td>
                <td><?php echo $row->usu_tipo; ?></td>
                <td>
                  <a href="adm_usuario_modificar.php?id=<?php echo $row->id_usuario; ?>" class="button">Modificar</a> /                  
                  <a href="adm_usuario_eliminar.php?id=<?php echo $row->id_usuario; ?>" onclick="return confirmarEliminacion()" class="buttonDelete">Eliminar</a> 

                </td>
              </tr>
            </div>
          <?php

            }
          } else {
            echo "no hay ningun registro";
          }
          ?>
        </table>
            
        </div>            
    </div>
    <!-- ************  FOOTER  *************** -->
    <?php include("php/footer.php"); ?>
</div>
<script>
  function confirmarEliminacion() {
    if (confirm("¿Realmente desea eliminar el registro?")) {
      return true;
    }
    return false;
  }
</script>
</body>
</html>