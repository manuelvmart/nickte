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
   </head>

</head>

<body>
<?php include("php/header-crud.php"); ?>
<br>
  <div class="container">
      <div id="section">
      <div class="title">Eliminar producto</div>
        <hr>
        <?php
        echo 'esta es la variable recibida = ' . $_GET['id'];
        //invocar la funcion select y la tabla
        $result = select_id("productos_piel", "id_produP", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
            <h3>Datos de eliminación</h3>
            <p>id: <?php echo $row->id_produP; ?></p>
            <p>id: <?php echo $row->precio_produP; ?></p>
            <p>Nombre: <?php echo $row->nombre_produP; ?></p>
            <p>Descripcion: <?php echo $row->descripcion_produP; ?></p>
            <p>Fecha de Caducidad: <?php echo $row->fecha_cadP; ?></p>
            <p>Tipo: <?php echo $row->tipo_produP; ?></p>
            <p>Tono: <?php echo $row->tono_produP; ?></p>

        <?php

          }
          $result = delete("productos_piel", "id_produP", $_GET['id']);
        } else {
          echo "El registro no existe";
        }
        ?>
        </table>

        <meta http-equiv="refresh" content="5;URL=crudPiel.php">
      </div>
 
   
  </div>
   <!-- footer ******************** -->
   <?php include("php/footer.php"); ?>
</body>

</html>