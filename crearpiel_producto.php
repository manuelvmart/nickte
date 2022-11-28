<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Cuidado de la piel</title>
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
 <div class="container" >
 <div class="title">Registrar Producto</div>
    <div class="content">
        <form id="form1" name="form1" method="post" action="crear2_productoPiel.php" onsubmit="return validarForm(this);" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            
            </label>Precio del Producto</span>
            <input type="text" name="txt_prec" id="txt_prec" value="" required maxlength="5" placeholder="Precio del producto...">
          </div>
          <div class="input-box">
            <span class="details"><label for="txt_nombre"></label>Nombre del Producto</span>
            <input type="text" name="txt_nombre" id="txt_nombre" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="Nombre del Producto..."
            />
          </div>
          <div class="input-box">
            <span class="details"> <label for="txt_desc">Descripcion
            </label> </span>
            <input type="text" name="txt_desc" id="txt_desc"
                 onkeyup="javascript:this.value=this.value.toLowerCase();"
				 placeholder="Descripcion..."/>
          </div>
          <div class="input-box">
            <span class="details"> <label for="txt_fe">Fecha de Caducidad</label></span>
            <input type="date"
            name="txt_fe" id="txt_fe" value=""
            >
          </div>
        
          <div class="input-box">
            <label for="lst_tipo" style="padding:7px;"><b>Tipo</b></label><br>
            <select name="lst_tipo" id="lst_tipo">
            <option style="font-size: 15px;"><h3>Selecciona...</h3></option>
                <option style="font-size: 15px;">Crema</option>
                <option style="font-size: 15px;">Tono</option>
                <option style="font-size: 15px;">Mascara</option>
            </select>
          </div>
          <div class="input-box">
          <span class="details">
          Añadir imagen: <input name="archivo" id="archivo" type="file"/>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" id="rad_blanco" name="rad_tono" value="blanco">
          <input type="radio"  id="rad_cafe" name="rad_tono" value="cafe">
          <input type="radio" id="rad_negro" name="rad_tono" value="negro">
          <span class="gender-title">Tone</span>
          <div class="category">
            <label for="rad_blanco">
               
            <span class="dot one"></span>
            <span class="gender">⚪ Blanco</span>
          </label>
          <label for="rad_cafe">
            <span class="dot two"></span>
            <span class="gender">🟤 Cafe</span>
          </label>
          <label for="rad_negro">
            <span class="dot three"></span>
            <span class="gender">⚫ Negro</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Registrar">
        </div>
      </form>
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
<script src="js/funcion.js"></script>
</html>