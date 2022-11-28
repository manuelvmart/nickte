<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Registro Usuario</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/menus.css">
  <?php include("php/conexion.php"); ?>
   </head>

<body  style="background-image: url('img/marmol.jpeg');">
 
<?php include("php/header-es.php"); ?>
	  <br>
 <div class="container">
 <div class="title">Registrar Usuario</div>
    <div class="content">
        <form id="form1" name="form1" method="post" action="usuarios.php" onsubmit="return validarForm(this);">
        <div class="user-details">
          <div class="input-box">
            <span class="details"><label for="txt_nombre"></label>Nombre</span>
            <input type="text" name="txt_nombre" id="txt_nombre" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="Ingresa tu nombre..."
            />
          </div>
          <div class="input-box">
          
            <span class="details"><label for="txt_ape"></label>Apellidos</span>
            <input type="text" name="txt_ape" id="txt_ape" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="Ingresa tus apellidos..."
            />
          </div>

          <div class="input-box">
            <span class="details"> <label for="txt_edad">Edad </label> </span>
            <input type="text" name="txt_edad" id="txt_edad" value="" required maxlength="4" placeholder="Ingresa tu edad..."
            onkeyup="javascript:this.value=this.value.toLowerCase();"/>
          </div>

          
          <div class="input-box">
            <span class="details"> <label for="txt_fe">Fecha de Nacimiento</label></span>
            <input type="date"
            name="txt_fe" id="txt_fe" value=""
            >
          </div>
        
          <div class="input-box">
            <label for="lst_sexo" style="padding:7px;"><b>Sexo</b></label><br>
            <select name="lst_sexo" id="lst_sexo">
                <option style="font-size: 15px;"><h3>Selecciona...</h3></option>
                <option style="font-size: 15px;">Hombre</option>
                <option style="font-size: 15px;">Mujer</option>
            </select>
          </div> <br> <br><br><br>
          <div class="input-box">
            
            <span class="details"><label for="txt_tel"></label >Telefono</span>
            <input type="text" name="txt_tel" id="txt_tel" 
            placeholder="Ingresa tu numero de telefono..."
            />
          </div>
          <div class="input-box">
            <span class="details"> <label for="txt_usu">Usuario </label> </span>
            <input type="text" name="txt_usu" id="txt_usu" value="" required maxlength="64" placeholder="Ingresa tu usuario..."
            onkeyup="javascript:this.value=this.value.toLowerCase();"/>
          </div>
        <div class="input-box">
            <span class="details"> <label for="txt_correo">Correo Electronico </label> </span>
            <input type="text" name="txt_correo" id="txt_correo" value="" required maxlength="64" placeholder="Ingresa tu correo..."
            onkeyup="javascript:this.value=this.value.toLowerCase();"/>
          </div>

          <div class="input-box">
          <span class="details">  <label for="txt_pass">
            <span class="details"><label for="txt_pass"></label>Contraseña</span>
            <input type="password" name="txt_pass" id="txt_pass" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="Ingresa tu contraseña..."
            />
          </div>

          
        </div>

        <div class="gender-details">
          <input type="radio"  id="rad_cafe" name="rad_term" value="Si">
          <input type="radio" id="rad_negro" name="rad_term" value="No">
          <span class="gender-title">Terminos y Condiciones</span>
          <div class="category">
            <labell for="rad_blanco">
      
            <span class="gender">Aceptas los terminos y condiciones </span>
          </labell>
          <label for="rad_cafe">
            <span class="dot two"></span>
            <span class="gender">Si</span>
          </label>
          <label for="rad_negro">
            <span class="dot three"></span>
            <span class="gender">No</span>
            </label>
          </div>
        </div>
        
        <div class="gender-details">
          
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