<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <title>CRUD Piel</title>
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
       <div class="title">Consulta Tabla de Productos</div>
 
         <?php
         //invocar la funcion select y la tabla
 
         $result = select("productos_piel","*");
         // Realizamos un bucle que muestre el resultado
         ?>
       
         <table border="1" class="tabla">
 <thead>
 <td>Id del Producto</td>

  <td>Nombre del Producto</td>
  <td>Descripcion</td>
  <td>Fecha de Caducidad</td>
  <td>Tipo</td>
  <td>Tono</td>
  <td>Acciones</td>
 </thead>
           <?php
           if (mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_object($result)) {
           ?>
                <tr>
                <td><?php echo $row->id_produP; ?></td>
               
                <td><?php echo $row->nombre_produP; ?></td>
                <td><?php echo $row->descripcion_produP; ?></td>
                <td><?php echo $row->fecha_cadP; ?></td>
                <td><?php echo $row->tipo_produP; ?></td>
                <td><?php echo $row->tono_produP; ?></td>
                <td>
                  <a href="modificar1_producPiel.php?id=<?php echo $row->id_produP; ?>" class="button">Modificar <br></a> <br>
                  <a href="eliminacion1_producPiel.php?id=<?php echo $row->id_produP; ?>" onclick="return confirmation()" class="buttonDelete">Eliminar </a>

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