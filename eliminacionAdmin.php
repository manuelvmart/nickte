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
      <div class="title">Eliminar Administrador</div>
        <hr>
        <?php
        echo 'esta es la variable recibida = ' . $_GET['id'];
        //invocar la funcion select y la tabla
        $result = select_id("administradores", "id_adm", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
            <h3>Datos de eliminación</h3>
            <p>id: <?php echo $row->id_adm; ?></p>
            <p>Nombre: <?php echo $row->adm_nom; ?></p>
            <p>Apellido: <?php echo $row->adm_ape; ?></p>
            <p>Edad: <?php echo $row->adm_edad; ?></p>
            <p>Fecha de Nacimiento: <?php echo $row->adm_fecnac; ?></p>
            <p>Sexo: <?php echo $row->adm_sexo; ?></p>
            <p>Telefono: <?php echo $row->adm_tel; ?></p>
            <p>Usuario: <?php echo $row->adm_usu; ?></p>
            <p>Correo: <?php echo $row->adm_correo; ?></p>
            <p>Contraseña: <?php echo $row->adm_pass; ?></p>
            <p>Puesto: <?php echo $row->adm_puesto; ?></p>

        <?php

          }
          $result = delete("administradores", "id_adm", $_GET['id']);
        } else {
          echo "El registro no existe";
        }
        ?>
        </table>

        <meta http-equiv="refresh" content="5;URL=crud_admin.php">
      </div>
 
   
  </div>
   <!-- footer ******************** -->
   <?php include("php/footer.php"); ?>
</body>

</html>