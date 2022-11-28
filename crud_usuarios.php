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
         $result = select("usuarios","*");
         // Realizamos un bucle que muestre el resultado
         ?>
       
         <table border="1" class="tabla">
         <thead>
  <td>Id del Usuario</td>
  <td>Nombre del Usuario</td>
  <td>Apellidos</td>
  <td>Edad</td>
  <td>Fecha de Nacimiento</td>
  <td>Sexo</td>
  <td>Telefono</td>
  <td>Usuario</td>
  <td>Correo</td>
  <td>Contraseña</td>
  <td>Acepto Terminos</td>
  <td>Acciones</td>
</thead>
           <?php
           if (mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_object($result)) {
           ?>
                <tr>
                <td><?php echo $row->id_usuarios; ?></td>
                <td><?php echo $row->usu_nombre; ?></td>
                <td><?php echo $row->usu_ape; ?></td>
                <td><?php echo $row->usu_edad; ?></td>
                <td><?php echo $row->usu_fecnac; ?></td>
                <td><?php echo $row->usu_sexo; ?></td>
                <td><?php echo $row->usu_tel; ?></td>
                <td><?php echo $row->usu_usu; ?></td>
                <td><?php echo $row->usu_correo; ?></td>
                <td><?php echo $row->usu_pass; ?></td>
                <td><?php echo $row->usu_term; ?></td>
                <td>
                  <li><a href="modificarUsuario.php?id=<?php echo $row->id_usuarios; ?>" class="button">Modificar <br></a></li> <br>
                  <a href="eliminacionUsuario.php?id=<?php echo $row->id_usuarios; ?>" onclick="return confirmation()" class="buttonDelete">Eliminar </a>

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