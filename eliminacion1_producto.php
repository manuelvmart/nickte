<!DOCTYPE html>
<html>

<head>
<title>CRUD-Eliminar</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/menus.css">
  <?php include("php/conexion.php"); ?>
  <?php  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado?>
   </head>

</head>

<body style="background-image: url('img/marmol.jpeg');">
<?php include("php/header-crud.php"); ?>
<br>
  <div class="container" >
      <div id="section">
      <div class="title">Eliminar producto</div>

        <?php
        echo '<p>esta es la variable recibida = ' . $_GET['id']."</p>";
        //invocar la funcion select y la tabla
        $result = select_id("productos", "id_produ", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
            <h3>Datos de eliminación</h3>
            <div class="input-box"><img src="img/cheque.png"></div> 
            <p>id: <?php echo $row->id_produ; ?></p>
            <p>Precio: <?php echo $row->precio_produ; ?></p>
            <p>Nombre: <?php echo $row->nombre_produ; ?></p>
            <p>Descripcion: <?php echo $row->descripcion_produ; ?></p>
            <p>Fecha de Caducidad: <?php echo $row->fecha_cad; ?></p>
            <p>Tipo: <?php echo $row->tipo_produ; ?></p>
            <p>Tono: <?php echo $row->tono_produ; ?></p>
            <p>Imagen: <?php echo $row->img_produ; ?></p>
           <?php unlink('img/'.$row->img_produ); ?>
           
        <?php

          }
          $result = delete("productos", "id_produ", $_GET['id']);
        } else {
          echo "El registro no existe";
        }
        ?>
     

        <meta http-equiv="refresh" content="5;URL=crud.php">
      </div>
 
   
  </div>
  <br>
   <!-- footer ******************** -->
   <?php include("php/footer.php"); ?>
</body>

</html>