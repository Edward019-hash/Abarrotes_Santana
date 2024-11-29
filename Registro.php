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
  
</head>

<body>
<div id="container">
    <div id="header">
        <!-- ************  MENU  *************** -->
        <?php include('php/menu.php');?>
    </div>
    <div class="contenedor2">

        <div id="section">
            <!-- ************  CONTENIDO  *************** -->
             <br>
             <br>
             <br>
          <h1>Registro de usuario</h1>
          <form id="form1" name="form1" method="post" action="registrar_usuario.php" onsubmit="return validarForm(this);">
            <label for="ema_email">Email </label><br>
            <input name="ema_email" type="email" required onkeyup="javascript:this.value=this.value.toLowerCase();" />
          <p><label for="txt_Nombre">Nombre </label><br>
            <input type="text" name="txt_Nombre" id="txt_Nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" />
          </p>
          <p><label for="txt_ApPat">Apellido Paterno </label><br>
            <input type="text" name="txt_ApPat" id="txt_ApPat" onkeyup="javascript:this.value=this.value.toUpperCase();" />
          </p>
          <p><label for="txt_ApMat">Apellido Materno </label><br>
            <input type="text" name="txt_ApMat" id="txt_ApMat" onkeyup="javascript:this.value=this.value.toUpperCase();" />
          </p>
          <p><label for="pas_password">Password </label><br>
          <input name="pas_password" type="password" required />
          </p>
          <p><label for="pas_password2">confirmar Password </label><br>
          <input name="pas_password2" type="password" required />
          </p>
          
          <p><button name="btn_guardar" id="btn_guardar" class="button">Guardar</button></p>
        </form>
        </div>            
    </div>
    <!-- ************  FOOTER  *************** -->
    <?php include("php/footer.php"); ?>
</div>
<script src="js/validacion.js"></script>
</body>
</html>