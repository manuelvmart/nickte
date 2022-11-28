<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Maquillaje</title>
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
                <option style="font-size: 15px;">Labiales</option>
                <option style="font-size: 15px;">Bases</option>
                <option style="font-size: 15px;">Rubores</option>
                <option style="font-size: 15px;">Iluminadores</option>
            </select>
          </div>
          <div class="input-box">
          <span class="details"> <label for="img_nombre" >Añadir imagen:</label></span>
             <input name="archivo" id="archivo" type="file" />
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
  <form  id="form1" name="form1" action="index.php" method="POST" enctype="multipart/form-data"/>
Añadir imagen: <input name="archivo" id="archivo" type="file"/>
<input type="submit" name="subir" value="Subir imagen"/>
</form>

  <br>
 <!-- footer ******************** -->
 <?php include("php/footer.php"); ?>
 <?php
//Si se quiere subir una imagen
if (isset($_POST['subir'])) {
   //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, 'img/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('img/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="img/'.$archivo.'"></p>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }
}
?>
<script src="js/funcion.js"></script>
</body>
</html>
