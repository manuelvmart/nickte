<!DOCTYPE html>
<html>

<html lang="en" dir="ltr">
  <head>
    <title>Insert</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/menus.css">
  <?php include("php/conexion.php"); ?>
   </head>

<body style="background-image: url('img/marmol.jpeg');">

      <?php include('php/header-crud.php'); ?>
      <br>
      <div class="container" >
      <br>
      <div id="section">                       
             <?php
//$id= $_POST['txt_id'];
$precio= $_POST['txt_prec'];
$nombre = $_POST['txt_nombre'];
$desc = $_POST['txt_desc'];
$fecha = $_POST['txt_fe'];
$tipo = $_POST['lst_tipo'];
$tone = $_POST['rad_tono'];
$temp = $_FILES['archivo']['tmp_name'];
$archivo = $_FILES['archivo']['name'];
move_uploaded_file($temp, 'img/'.$archivo); 
chmod('img/'.$archivo, 0777); 
                 
                        ?>
 
<div class="title">Datos recibidos</div>
                       
                        <?php
                        //mostrar los datos recibidos
                        
                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable
                        $cons = insert( 
                              'productos',
                              "null, $precio, '$nombre', '$desc','$fecha','$tipo','$tone','$archivo'");
                        if ($cons) {
                        ?>
                              <h3>El Producto SE AÑADIO CORRECTAMENTE a la base de datos.</h3>
                              <div class="input-box"><img src="img/cheque.png"></div> 
                              <p><b>Usted ingreso los siguientes datos:</b></p>


                              
                        <?php
                        echo "
                        <p>$nombre</p>
                        <p>$desc</p>
                        <p>$fecha</p>
                        <p> $tipo</p>
                        <p>$tone</p>
                        <p>$archivo</p>
                        ";
                        } else {
                        ?>
                              <h3>El producto no pudo ser insertado en la base de datos.</h3>
                              <div class="input-box"><img src="img/advertencia.png"></div> 
                        <?php
                        }
                        ?>
                        <meta http-equiv="refresh" content="5;URL=crear1_producto.php" >
          


            </div>
         
      </div>
      <br>
       <!-- footer ******************** -->
       <?php include("php/footer.php"); ?>
       
</body>


</html>