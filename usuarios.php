<!DOCTYPE html>
<html>

<html lang="en" dir="ltr">
  <head>
    <title>Confirmar datos</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/menus.css">
  <?php include("php/conexion.php"); ?>
   </head>

<body>

      <?php include('php/header-crud.php'); ?>
      <div class="container">
            
      <div id="section">
                  
                        <?php

                        //obtener las variables
                        //$id= $_POST['txt_id'];
                        
                        $nombre = $_POST['txt_nombre'];
                        $apellido = $_POST['txt_ape'];
                        $edad = $_POST['txt_edad'];
                        $fecNac = $_POST['txt_fe'];
                        $sexo = $_POST['lst_sexo'];
                        $tel = $_POST['txt_tel'];
                        $usuario = $_POST['txt_usu'];
                        $correo = $_POST['txt_correo'];
                        $pass = $_POST['txt_pass'];
                        $terminos = $_POST['rad_term'];
                        ?>

<div class="title">Verificar datos recibidos</div>
                        <hr>
                        <p>Usted ingreso los siguientes datos:</p>
                        <?php
                        //mostrar los datos recibidos
                        echo "
                              <p>$nombre</p>
                              <p>$apellido</p>
                              <p>$edad</p>
                              <p>$fecNac</p>
                              <p>$sexo</p>
                              <p>$tel</p>
                              <p>$usuario</p>
                              <p>$correo</p>
                              <p>$pass</p>
                              <p>$terminos</p>
                              ";

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable
                        $cons = insert( 
                              'usuarios',
                              "null, '$nombre', '$apellido','$edad','$fecNac','$sexo','$tel','$usuario','$correo','$pass','$terminos' ");
                        if ($cons) {
                        ?>
                              <h3>El Usuario SE AÑADIO CORRECTAMENTE a la base de datos.</h3>
                        <?php
                        } else {
                        ?>
                              <h3>El Usuario no pudo ser insertado en la base de datos.</h3>
                        <?php
                        }
                        ?>
                        <meta http-equiv="refresh" content="5;URL=index.php" >
          


            </div>
         
      </div>
      <br>
       <!-- footer ******************** -->
       <?php include("php/footer.php"); ?>
</body>

</html>