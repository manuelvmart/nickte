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

<body style="background-image: url('img/marmol.jpeg');">
<?php include("php/header-crud.php"); ?>
<br> 
      <div class="container">
     
          
                  <div id="section">
                  
                        <?php
                        //obtener las variables
                        $id = $_POST['txt_id'];
                        $precio = $_POST['txt_prec'];
                        $nombre = $_POST['txt_nombre'];
                        $desc = $_POST['txt_desc'];
                        $fecha = $_POST['txt_fe'];
                        $tipo = $_POST['lst_tipo'];
                        $tono = $_POST['txt_tono'];
                        $archivo =$_POST['txt_img'];;
                        ?>
                        <div class="title">Datos recibidos</div>
                     
                        <?php
                        //mostrar los datos recibidos
                        
                        
                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable

                        $campos = " precio_produ= '$precio'";
                        $campos .= ", nombre_produ= '$nombre'";
                        $campos .= ", descripcion_produ= '$desc'";
                        $campos .= ", fecha_cad= '$fecha'";
                        $campos .= ", tipo_produ= '$tipo'";
                        $campos .= ", tono_produ= '$tono'";
                        $campos .= ", img_produ= '$archivo'";
                       // echo "<p>".$campos."</p>";
                        $where = "id_produ = $id";

                        $cons = update('productos', $campos, $where);

                        if ($cons) {
                        ?>
                              <h3> Se ha actualizado el Producto Correctamente</h3>
                              <div class="input-box"><img src="img/cheque.png"></div> 
                              <p><b>Usted ingreso los siguientes datos:</b></p>                             
                        <?php
                        
                        echo "
                        <p>$id</p>
                        <p>$precio</p>
                        <p>$nombre</p>          
        <p>$desc</p>
        <p>$fecha</p>
        <p>$tipo</p>
        <p>$tono</p>
        <p>$archivo</p>
        ";

                        } else {
                        ?>
                              <h3> El producto no pudo ser insertado en la base de datos.</h3>
                              <div class="input-box"><img src="img/advertencia.png"></div> 
                        <?php
                        }
                        ?>

                        <meta http-equiv="refresh" content="5;URL=crud.php">

                  </div>
                
            </div>
           <br>
            <!-- footer ******************** -->
            <?php include("php/footer.php"); ?>
      </div>
</body>

</html>