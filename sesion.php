<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Sesion</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/menus.css">
  <link rel="stylesheet" href="css/Estilos.css">
   </head>
<body style="background-image: url('img/marmol.jpeg');">
	<?php include("php/header-es.php"); ?>
    <br>
  <div class="container" >
    
    <div class="title">Iniciar Sesion</div>
   
    
    <div class="content">
       
        
        <form id="form1" name="form1" method="post" action="validar_usuario.php" onsubmit="return validarForm(this);">
        <div class="user-details">
            <div class="sesione">
                <a class="hola"><img src="img/lalisa1.jpg" ></a>
            </div>
          <div class="input-box">
            
            <img src="img/user.png">
            <span class="details"><label for="txt_emailusu"></label>Correo</span>
            <input type="email" name="txt_emailusu" id="txt_emailusu" 
            onkeyup="javascript:this.value=this.value.toLowerCase();" 
            placeholder="Nombre del Usuario"
            />
     <div class="input-box"></div>
           <span class="details"> <label for="txt_contra">Contraseña
            </label> </span>
            <input type="password" name="txt_contra" id="txt_contra"
                 placeholder="Password"/></div>   
               
          </div>
            
           
      
        <div class="button">
          <input type="submit" value="Iniciar Sesion">
        </div>
        
      </form>
      <div class="sin">
      <div class="button">
        !Sin Cuenta <a href="registro_usuario.php"><input type="submit" value="" >Registrate Aqui!</a>
        
        </div>
      </div>
    </div>

  </div>
  <br>
 <!-- footer ******************** -->
 <?php include("php/footer.php"); ?>
<script src="js/login.js"></script>
</body>
</html>
