<!DOCTYPE html>
<html>

<head>
    <title>CRUD-Actualizar</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/menus.css">
  <?php include("php/conexion.php"); ?>
   </head>

<body>
<?php include("php/header-crud.php"); ?>
<br> 
      <div class="container">
     
          
                  <div id="section">

                      
                        <?php
                        //obtener las 
                        $id = $_POST['txt_id'];
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
                        <div class="title">Datos recibidos</div>
                        <p>Usted ingreso los siguientes datos:</p> <br>
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
                        <p>$terminos</p>";

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable

                        $campos = "usu_nombre= '$nombre'";
                        $campos .= ", usu_ape= '$apellido'";
                        $campos .= ", usu_edad= '$edad'";
                        $campos .= ", usu_fecnac= '$fecNac'";
                        $campos .= ", usu_sexo= '$sexo'";
                        $campos .= ", usu_tel= '$tel'";
                        $campos .= ", usu_usu= '$usuario'";
                        $campos .= ", usu_correo= '$correo'";
                        $campos .= ", usu_pass= '$pass'";
                        $campos .= ", usu_term= '$terminos'";

                        echo $campos;
                        $where = "id_usuarios = $id";

                        $cons = update('usuarios', $campos, $where);

                        if ($cons) {
                        ?>
                              <h3> Se ha actualizado el Usuario Correctamente</h3>
                              <div class="input-box"><img src="img/cheque.png"></div> 
                              <p><b>Usted ingreso los siguientes datos:</b></p>      

                        <?php
                        } else {
                        ?>
                              <h2> No pudo ser actualizado en la base de datos.</h2>
                        <?php
                        }
                        ?>

                        <meta http-equiv="refresh" content="8;URL=crud_usuarios.php">

                  </div>
            </div>
           <br>
            <!-- footer ******************** -->
            <?php include("php/footer.php"); ?>
      </div>
</body>

</html>