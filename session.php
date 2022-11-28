<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Session</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/menus.css">
  <link rel="stylesheet" href="css/Estilos.css">
   </head>
<body style="background-image: url('img/marmol.jpeg');">
	<?php include("php/header-en.php"); ?>
    <br>
  <div class="container" >
    
    <div class="title">Log in</div>
   
    
    <div class="content">
       
        
        <form id="form1" name="form1" method="post" action="#" onsubmit="return validarForm(this);">
        <div class="user-details">
            <div class="sesione">
                <a class="hola"><img src="img/lalisa1.jpg" ></a>
            </div>
          <div class="input-box">
            
            <img src="img/user.png">
            <span class="details"><label for="txt_nombreusu"></label>User Name</span>
            <input type="text" name="txt_nombreusu" id="txt_nombreusu" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="User Name"
            />
     <div class="input-box"></div>
           <span class="details"> <label for="txt_contra">Password
            </label> </span>
            <input type="password" name="txt_contra" id="txt_contra"
                 onkeyup="javascript:this.value=this.value.toLowerCase();"
                 placeholder="Password"/></div>
            
                 
             
        
                
               
          </div>
            
           
      
        <div class="button">
          <input type="submit" value="Log in">
        </div>
        
      </form>
      <div class="sin">!No Account <a><u>Register Here!</u></a></div>
    </div>

  </div>
  <br>
  <?php include("php/footer-en.php"); ?>
<script src="js/login.js"></script>
</body>
</html>
