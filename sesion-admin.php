<?php session_start(); //creamos la sesion ?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Sesion Admin</title>
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

     <!-- ************  MENU  *************** -->
     <?php
        if(isset($_SESSION['tipo'])){
            switch ($_SESSION['tipo']) {
                case 'admin':
                    
                    break;
                case "gerente":
                    include('php/menu_gerente.php');; 
                    break;
            }
        }else
            
        ?>
   
    
    <div class="content">
       
        
        <form id="form1" name="form1" method="post" action="validar_admin.php" onsubmit="return validarForm(this);">
        <div class="user-details">
            <div class="sesione">
                <a class="hola"><img src="img/lalisa1.jpg" ></a>
                
            </div>
          <div class="input-box">
            
            
            <span class="details"><label for="txt_nombreusu"></label>Usuario</span>
            <input type="text" name="txt_nombreusu" id="txt_nombreusu" required
            onkeyup="javascript:this.value=this.value.toLowerCase();" 
            placeholder="Ingresa tu Usuario"
            />
            <span class="details"><label for="txt_correoadmin"></label>Correo</span>
            <input type="email" name="txt_correoadmin" id="txt_correoadmin" required
            onkeyup="javascript:this.value=this.value.toLowerCase();" 
            placeholder="Ingresa tu correo"
            />
     <div class="input-box"></div>
           <span class="details"> <label for="txt_contra">Contraseña
            </label> </span>
            <input type="password" name="txt_contra" id="txt_contra" required
                 
                 placeholder="Password"/></div>
            
               
          </div>
            
           
      
        <div class="button">
        
        <a href="crud.php"><input type="submit" value="Iniciar Sesion" href="crud.php">
        </div>
        
        </form>
      <div hidden class="sin">!Sin Cuenta <a><u>Registrate Aqui!</u></a></div>
    </div>
      <div class="sin">
      <div class="button">
        !Sin Cuenta <a href="registro_admin.php"><input type="submit" value="" >Registrate Aqui!</a>
        
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
