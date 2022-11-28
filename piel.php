<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Piel</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/menus.css">
   </head>
<body style="background-image: url('img/marmol.jpeg');">
	<?php include("php/header-es.php"); ?>
    <br>
  <div class="container" >
    <div class="title">Registrar Producto</div>
    <div class="content">
        <form id="form1" name="form1" method="post" action="#" onsubmit="return validarForm(this);">
        <div class="user-details">
          <div class="input-box">
            <span class="details">  <label for="txt_id">
            </label>Id del Producto</span>
            <input type="text" name="txt_id" id="txt_id" value="" required maxlength="5" placeholder="Id del producto...">
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
  <div id="footer">
	<div class="spartanfoot"> <b>@Copyright Spartan Web Designers</b></div>
	<div class="informacione">
		<div >
			<p><b>Contacto </b></p>
			<li><a style="color: rgb(255, 255, 255); " href="  ">Contact Us </a></li> <br>
			<li><a style="color: rgb(255, 255, 255);" href="  ">Telephone 📱 </a></li><br>
			<li><a style="color: rgb(255, 255, 255);" href="  ">Gmail: 📨 </a></li> <br>
		</div>

			<div>
				<p><b>Integrantes </b></p>
				<li>Maria Isabel Alvarez Moreno----S20030140</li>
				<li>Jose Antonio Medina Esquivel---S20030139</li>
				<li>Manuel Vergara Martinez---------S20030141</li>
				<li>Nombre Proyecto Nickte.</li>
			</div>
			
			<div >
				<p><b>Semestre </b>Agosto diciembre</p>
				<p><b>Materia </b>Programación Web</p>
				<p><b>Grupo </b>075-CA</p>
				<p><b>Profesor </b>Erik Augusto Ramirez Vargas</p>
			</div>
	</div>
	<hr>
	<img style="width: 25px; height: 25px; float: right; margin-right: 20px;"src="img/whatsapp_icon.png" alt="icon">
	<img style="width: 25px; height: 25px; float: right; margin-right: 25px;"src="img/fb_icon.png" alt="icon">
	<img style="width: 25px; height: 25px; float: right; margin-right: 25px;"src="img/instagram_icon.png" alt="icon">
	<img style="width: 25px; height: 25px; float: right; margin-right: 25px;"src="img/twitter_icon.png" alt="icon">
</div>
<script src="js/funcion.js"></script>
</body>
</html>
