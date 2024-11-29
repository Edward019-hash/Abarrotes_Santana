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
        <?php 
        $var_id = $_GET['id'];
        echo "Esta es la variable recibida = $var_id";
        //invocar la funcion select y la tabla
        $result = select_where("usuarios", "id_usuario = $var_id");

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
            <!-- ************  CONTENIDO  *************** -->
            <h1>Modifcando usuario</h1>
            <form id="form1" name="form1" method="post" action="adm_usuario_modificar_usuario.php" style="text-align:center;" onsubmit="return validarForm(this);" >
            <input name="hid_id" type="hidden" value="<?php echo $row->id_usuario; ?>" />

            <label for="ema_email">Email </label><br>
            <input name="ema_email" type="email" required onkeyup="javascript:this.value=this.value.toLowerCase();" value="<?php echo $row->usu_email; ?>"/>

          <p><label for="txt_Nombre">Nombre </label><br>
            <input type="text" name="txt_Nombre" id="txt_Nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->usu_nom; ?>"/>
          </p>
          <p><label for="txt_ApPat">Apellido Paterno </label><br>
            <input type="text" name="txt_ApPat" id="txt_ApPat" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->usu_ap_pat; ?>"/>
          </p>
          <p><label for="txt_ApMat">Apellido Materno </label><br>
            <input type="text" name="txt_ApMat" id="txt_ApMat" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->usu_ap_mat; ?>"/>
          </p>
          <p><label for="lst_Tipo">Tipo de usuario</label><br>
            <select name="lst_Tipo" id="lst_Tipo">
              <option value="<?php echo $row->usu_tipo; ?>">
                              <?php echo $row->usu_tipo; ?></option>
              <option value="Admin">Administrador</option>
              <option value="Vendedor">Vendedor</option>
              <option value="Cliente">Cliente</option>
            </select>
          </p>

          <p><label for="pas_password">Password </label><br>
          <input name="pas_password" type="password" required value="<?php echo $row->usu_password; ?>"/>
          </p>
          <p><label for="pas_password2">confirmar Password </label><br>
          <input name="pas_password2" type="password" required value="<?php echo $row->usu_password; ?>"/>
          </p>
          
          <p><button name="btn_actualizar" id="btn_actualizar" class="button">Actualizar</button></p>

          <?php

          }
        } else {
          echo "no hay ningun registro";
        }
        ?>
        </form>
        </div>            
    </div>
    <!-- ************  FOOTER  *************** -->
    <?php include("php/footer.php"); ?>
</div>
<script src="Validacion_Usuario.php"></script>
</body>
</html>