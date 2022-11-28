<?php session_start();  
include('php/conexion.php'); 
/*obtenemos las variables*/
$email = $_POST['txt_emailusu'];   
$password = $_POST['txt_contra'];
/*imprimir las variables */
echo "$email, $password";

//Select para verificar si existe el usuario 
$result = select_id("usuarios","usu_correo","'$email'");

if(mysqli_num_rows($result) > 0){ // compara si existe el usuario 
	 while($row = mysqli_fetch_object($result)){ // Realizamos un bucle utilizando while.
		if($row->usu_pass == $password){ //compara el pass
            //Almacenamos el nombre de usuario en una variable de sesión usuario
            
            $_SESSION['usuario'] = $row->usu_nombre;
            //echo $_SESSION['usuario'].$_SESSION['tipo'];
            ?>
            <script languaje="javascript" >alert("<?php echo "Bienvenido ".$row->usu_nombre; ?>");</script>
            <?php 

            switch ($_SESSION['usuario']) {
                case 'usuario':
                    ?> <meta http-equiv="refresh" content="0;URL=index.php" > <?php 
                    break;
                case 'admin':
                    ?> <meta http-equiv="refresh" content="0;URL=index-admin.php" > <?php 
                    break;
            }
		    } else{
                ?> <script languaje="javascript" >alert("Contraseña Incorrecta");</script> 
                <meta http-equiv="refresh" content="0;URL=sesion.php" >
                <?php 
                //exit();
		    }
	    }
} else{
    ?>  <script languaje="javascript" >alert("Usuario o Contraseña incorrecto!");</script> 
        <meta http-equiv="refresh" content="0;URL=sesion.php" >
    <?php 
    //exit();
}
?>