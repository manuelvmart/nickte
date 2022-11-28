<!DOCTYPE html>
<html>

<head>
<title>CRUD-Modificar</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/Estilos.css">
  <link rel="stylesheet" href="css/menus.css">
  <?php include("php/conexion.php"); ?>
   </head>

</head>

<body>
<?php include("php/header-crud.php"); ?>
<br>
  <div class="container">
  
  <div class="title">Editar Administrador</div>
  <div class="content">
         
        <?php
        echo 'Id del producto = ' . $_GET['id']; 
        //invocar la funcion select y la tabla
        $result = select_id("usuarios", "id_usuarios", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
        
            <form id="form1" name="form1" method="post" action="actualizarUsuario.php">
            <div class="user-details">
            <div class="input-box">
            <input hidden type="text"  name="txt_id" id="txt_id" value="<?php echo $row->id_usuarios; ?>" required maxlength="6" >

            <span class="details">  <label for="txt_nombre">
            <span class="details"><label for="txt_nombre"></label>Nombre</span>
            <input type="text" name="txt_nombre" id="txt_nombre" value="<?php echo $row->usu_nombre; ?>"
            />
          </div>
          <div class="input-box">
          <span class="details">  <label for="txt_ape">
            <span class="details"><label for="txt_ape"></label>Apellidos</span>
            <input type="text" name="txt_ape" id="txt_ape" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="Ingresa tus apellidos..." value="<?php echo $row->usu_ape; ?>"
            />
          </div>

          <div class="input-box">
            <span class="details"> <label for="txt_edad">Edad </label> </span>
            <input type="text" name="txt_edad" id="txt_edad" value="<?php echo $row->usu_edad; ?>" required maxlength="4" 
            placeholder="Ingresa tu edad..." 
            onkeyup="javascript:this.value=this.value.toLowerCase();"/>
          </div>

          
          <div class="input-box">
            <span class="details"> <label for="txt_fe">Fecha de Nacimiento</label></span>
            <input type="date"
            name="txt_fe" id="txt_fe" value="<?php echo $row->usu_fecnac; ?>"
            >
          </div>
        
          <div class="input-box">
            <label for="lst_sexo" style="padding:7px;"><b>Sexo</b></label><br>
            <select name="lst_sexo" id="lst_sexo" value="">
                <option style="font-size: 15px;"><?php echo $row->usu_sexo; ?></option>
                <option style="font-size: 15px;">Hombre</option>
                <option style="font-size: 15px;">Mujer</option>
            </select>
          </div> <br> <br><br><br>
          <div class="input-box">
            <span class="details">  <label for="txt_tel">
            <span class="details"><label for="txt_tel"></label >Telefono</span>
            <input type="text" name="txt_tel" id="txt_tel" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="Ingresa tu numero de telefono..." value="<?php echo $row->usu_tel; ?>"
            />
          </div>
          <div class="input-box">
            <span class="details"> <label for="txt_usu">Usuario </label> </span>
            <input type="text" name="txt_usu" id="txt_usu"  value="<?php echo $row->usu_usu; ?>" placeholder="Ingresa tu usuario..."
            onkeyup="javascript:this.value=this.value.toLowerCase();"/>
          </div>
        <div class="input-box">
            <span class="details"> <label for="txt_correo">Correo Electronico </label> </span>
            <input type="text" name="txt_correo" id="txt_correo"  value="<?php echo $row->usu_correo; ?>" placeholder="Ingresa tu correo..."
            onkeyup="javascript:this.value=this.value.toLowerCase();"/>
          </div>

          <div class="input-box">
          <span class="details">  <label for="txt_pass">
            <span class="details"><label for="txt_pass"></label>Contraseña</span>
            <input type="password" name="txt_pass" id="txt_pass" 
            onkeyup="javascript:this.value=this.value.toUpperCase();" 
            placeholder="Ingresa tu contraseña..."  value="<?php echo $row->usu_pass; ?>"
            />
          </div>


          <div class="input-box">
            <span class="details"> <label for="rad_term">Terminos y Condiciones</label></span>
            <input type="text"
            name="rad_term" id="rad_term" value="<?php echo $row->usu_term; ?>"
            >
          </div>
          
        </div>
        
        <div class="gender-details">
          
        </div>
        <div class="button">
          <input type="submit" value="Aceptar">
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