<?php session_start();  
include('php/conexion.php'); 
/*obtenemos las variables*/
$email = $_POST['txt_correoadmin'];   
$password = $_POST['txt_contra'];
/*imprimir las variables */
echo "$email, $password";

//Select para verificar si existe el usuario 
$result = select_id("administradores","adm_correo","'$email'");

if(mysqli_num_rows($result) > 0){ // compara si existe el usuario 
	 while($row = mysqli_fetch_object($result)){ // Realizamos un bucle utilizando while.
		if($row->adm_pass == $password){ //compara el pass
            //Almacenamos el nombre de usuario en una variable de sesión usuario
            $_SESSION['puesto'] = $row->adm_puesto;
            $_SESSION['usuario'] = $row->adm_nom;
            //echo $_SESSION['usuario'].$_SESSION['tipo'];
            ?>
            <script languaje="javascript" >alert("<?php echo "Bienvenido ".$row->adm_nom; ?>");</script>
            <?php 

            switch ($_SESSION['puesto']) {
                case 'admin':
                    ?> <meta http-equiv="refresh" content="0;URL=crud.php" > <?php 
                    break;
                case "usuario":
                    ?> <meta http-equiv="refresh" content="0;URL=crud.php" > <?php 
                    break;
            }
		    } else{
                ?> <script languaje="javascript" >alert("Contraseña Incorrecta");</script> 
                <meta http-equiv="refresh" content="0;URL=sesion-admin.php" >
                <?php 
                //exit();
		    }
	    }
} else{
    ?>  <script languaje="javascript" >alert("Usuario o Contraseña incorrecto!");</script> 
        <meta http-equiv="refresh" content="0;URL=sesion-admin.php" >
    <?php 
    //exit();
}
?>