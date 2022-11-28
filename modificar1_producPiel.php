<!DOCTYPE html>
<html>

<head>
<title>CRUD-Modificar</title>
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
 
  <div class="title">Editar Producto</div>
  <div class="content">
         
        <?php
        echo 'Id del producto = ' . $_GET['id']; 
        //invocar la funcion select y la tabla
        $result = select_id("productos_piel", "id_produP", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
        
            <form id="form1" name="form1" method="post" action="actualizar_producPiel.php">
            <div class="user-details">
          <div class="input-box">
          <input hidden type="text"  name="txt_id" id="txt_id" value="<?php echo $row->id_produP; ?>" required maxlength="6" >

            <span class="details">  <label for="txt_prec">
            </label>Precio del Producto</span>
            <input type="text" name="txt_prec" id="txt_prec" value="<?php echo $row->precio_produP; ?>" required maxlength="11" placeholder="Precio del producto...">
          </div>

          
          <div class="input-box">
            <span class="details"><label for="txt_nombre"></label>Nombre del Producto</span>
            <input type="text" name="txt_nombre" id="txt_nombre" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="Nombre del Producto..." value="<?php echo $row->nombre_produP; ?>"
            />
          </div>
          <div class="input-box">
            <span class="details"> <label for="txt_desc">Descripcion
            </label> </span>
            <input type="text" name="txt_desc" id="txt_desc"
                 onkeyup="javascript:this.value=this.value.toLowerCase();"
				 placeholder="Descripcion..." value="<?php echo $row->descripcion_produP; ?>">
          </div>
          <div class="input-box">
            <span class="details"> <label for="txt_fe">Fecha de Caducidad</label></span>
            <input type="date"
            name="txt_fe" id="txt_fe" value="<?php echo $row->fecha_cadP; ?>"
            >
          </div>
        
          <div class="input-box">
            <label for="lst_tipo" style="padding:7px;"><b>Tipo</b></label><br>
            <select name="lst_tipo" id="lst_tipo" value="">
            <option style="font-size: 15px;"> <?php echo $row->tipo_produP; ?></option>
                <option style="font-size: 15px;">Crema</option>
                <option style="font-size: 15px;">Tono</option>
                <option style="font-size: 15px;">Mascara</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details"> <label for="txt_tono">Tono</label></span>
            <input type="text"
            name="txt_tono" id="txt_tono" value="<?php echo $row->tono_produP; ?>"
            >
          </div>
          <div class="input-box">
            <input type="text"
            name="txt_img" id="txt_img" value="<?php echo $row->img_produ; ?>" hidden
            >
          </div>
        </div>
       
        <div class="button">
          <input type="submit" value="Aceptar" id="aceptar">
        </div>
          </div>



            
        <?php

          }
        } else {
          echo "no hay ningun registro";
        }
        ?>


      </div>
 
    
  </div>
  <br>
  <!-- footer ******************** -->
  <?php include("php/footer.php"); ?>
</body>

<script src="js/funcion.js"></script>
</html>