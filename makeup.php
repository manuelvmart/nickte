<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Makeup</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/menus.css">
   </head>
<body style="background-image: url('img/marmol.jpeg');">
  <?php include("php/header-en.php"); ?>
    <br>
  <div class="container" >
    <div class="title">Product Register</div>
    <div class="content">
        <form id="form1" name="form1" method="post" action="#" onsubmit="return validarForm(this);">
        <div class="user-details">
          <div class="input-box">
            <span class="details">  <label for="txt_id">
            </label>Product ID</span>
            <input type="text" name="txt_id" id="txt_id" value="" required maxlength="5" placeholder="Product ID...">
          </div>
          <div class="input-box">
            <span class="details"><label for="txt_nombre"></label>Product Name</span>
            <input type="text" name="txt_nombre" id="txt_nombre" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="Product Name..."
            />
          </div>
          <div class="input-box">
            <span class="details"> <label for="txt_desc">Describe
            </label> </span>
            <input type="text" name="txt_desc" id="txt_desc"
                 onkeyup="javascript:this.value=this.value.toLowerCase();"
				 placeholder="Describe the Product..."/>
          </div>
          <div class="input-box">
            <span class="details"> <label for="txt_fe">Date of Expiry</label></span>
            <input type="date"
            name="txt_fe" id="txt_fe" value=""class="cajaxt" style="background-color: #dedede2e;"
            >
          </div>
        
          <div class="input-box">
            <label for="lst_tipo" style="padding:7px;"><b>Type</b></label><br>
            <select name="lst_tipo" id="lst_tipo">
                <option style="font-size: 15px;"><h3>Select...</h3></option>
                <option style="font-size: 15px;">Lipsticks</option>
                <option style="font-size: 15px;">Bases</option>
                <option style="font-size: 15px;">Blushes</option>
                <option style="font-size: 15px;">Illuminators</option>
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
            <span class="gender">⚪ White</span>
          </label>
          <label for="rad_cafe">
            <span class="dot two"></span>
            <span class="gender">🟤 Brown</span>
          </label>
          <label for="rad_negro">
            <span class="dot three"></span>
            <span class="gender">⚫ Black</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
   
  </div>
  <br>
  <?php include("php/footer-en.php"); ?>
<script src="js/function.js"></script>
</body>
</html>
