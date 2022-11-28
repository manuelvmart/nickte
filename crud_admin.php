<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <title>CRUD</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/formulario.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="css/menus.css?v=<?php echo(rand()); ?>" />
  <?php include("php/conexion.php"); ?>
   </head>

   <body style="background-image: url('img/marmol.jpeg');">
 
 <?php include("php/header-crud.php"); ?>
     <br>
  <div class="container2" >
       <div id="section2">
       <div class="title">Consulta Tabla de Usuarios</div>
 
         <?php
         //invocar la funcion select y la tabla
 
         $result = select("administradores","*");
         // Realizamos un bucle que muestre el resultado
         ?>
       
         <table border="1" class="tabla">
         <thead>
  <td>Id del admin</td>
  <td>Nombre del Admin</td>
  <td>Apellidos</td>
  <td>Edad</td>
  <td>Fecha de Nacimiento</td>
  <td>Sexo</td>
  <td>Telefono</td>
  <td>Usuario</td>
  <td>Correo</td>
  <td>Contraseña</td>
  <td>Puesto</td>
  <td>Acciones</td>
</thead>
           <?php
           if (mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_object($result)) {
           ?>
                <tr>
                <td><?php echo $row->id_adm; ?></td>
                <td><?php echo $row->adm_nom; ?></td>
                <td><?php echo $row->adm_ape; ?></td>
                <td><?php echo $row->adm_edad; ?></td>
                <td><?php echo $row->adm_fecnac; ?></td>
                <td><?php echo $row->adm_sexo; ?></td>
                <td><?php echo $row->adm_tel; ?></td>
                <td><?php echo $row->adm_usu; ?></td>
                <td><?php echo $row->adm_correo; ?></td>
                <td><?php echo $row->adm_pass; ?></td>
                <td><?php echo $row->adm_puesto; ?></td>
                <td>
                  <li><a href="modificarAdmin.php?id=<?php echo $row->id_adm; ?>" class="button">Modificar </a></li>
                  <br><a href="eliminacionAdmin.php?id=<?php echo $row->id_adm; ?>" onclick="return confirmation()" class="buttonDelete">Eliminar </a>

                </td>
              </tr>
           <?php
 
             }
           } else {
             echo "no hay ningun registro";
           }
           ?>
         </table>
         
       </div>
     </div>
   <br>
 
     <!-- footer ******************** -->
     <?php include("php/footer.php"); ?>
 
 
 </body>

<!--<script src="js/Validacion.js"></script>-->
<script type=" text/javascript">
  function confirmation() {
    if (confirm("¿Realmente desea eliminar el registro?")) {
      return true;
    }
    return false;
  }
</script>

</html>