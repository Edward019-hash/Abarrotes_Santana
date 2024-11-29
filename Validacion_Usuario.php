<?php session_start();   
include('conexion.php'); 
/*obtenemos las variables*/ 
$var_email = $_POST['ema_email'];   
$var_password = $_POST['pas_password'];
/*imprimir las variables 
echo "$var_email, $var_password";*/

//Select para verificar si existe el usuario 
$result = select_where("usuarios","usu_email='$var_email'");

if(mysqli_num_rows($result) > 0){ // compara si existe el usuario 
	 while($row = mysqli_fetch_object($result)){ // Realizamos un bucle utilizando while.
		if($row->usu_password == $var_password){ //compara el pass
            //Almacenamos el nombre de usuario en una variable de sesión usuario
            $_SESSION['tipo'] = $row->usu_tipo;
            $_SESSION['usuario'] = $row->usu_nom;
            $_SESSION['id_usuario'] = $row->id_usuario;
            //echo $_SESSION['usuario'].$_SESSION['tipo'];
            $var_id=$_SESSION['id_usuario'];
            ?>
            <script languaje="javascript" >alert("<?php echo "Bienvenido ".$row->usu_nom." ".$row->usu_ap_pat; ?>");</script>
            <?php 

            switch ($_SESSION['tipo']) {
                case 'Admin':
                    ?> <meta http-equiv="refresh" content="0;URL=Admin_index.php" > <?php 
                    break;
                case "Vendedor":
                    ?> <meta http-equiv="refresh" content="0;URL=Vendedor.php" > <?php 
                    break;
                    case "cliente":
                        ?> <meta http-equiv="refresh" content="0;URL=Cliente.php" > <?php 
                        break;
            }
		    } else{
                ?> <script languaje="javascript" >alert("Acceso Incorrecto");</script> 
                <meta http-equiv="refresh" content="0;URL=Iniciar_Sesion.php" >
                <?php 
                //exit();
		    }
	    }
} else{
    ?>  <script languaje="javascript" >alert("Usuario o Contraseña incorrecto!");</script> 
        <meta http-equiv="refresh" content="0;URL=Iniciar_Sesion.php" >
    <?php 
    //exit();
}
?>