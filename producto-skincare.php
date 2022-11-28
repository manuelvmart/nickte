<!DOCTYPE html>
<html>

<head>
	<title>Skincare</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/Estilos.css?v=<?php echo(rand()); ?>" />
 <link rel="stylesheet" href="css/menus.css?v=<?php echo(rand()); ?>" />
 <link rel="stylesheet" href="css/swiper-bundle.css?v=<?php echo(rand()); ?>" />
    <?php include("php/conexion.php"); ?>

    <?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
</head>

<body style="background-image: url('img/marmol.jpeg');">
<?php include("php/header-es.php"); ?>
<div class="swiper"  id="swiperd">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide" data-swiper-autoplay="2000"><img src="img/peach.png" class="xd"></div>
    <div class="swiper-slide" data-swiper-autoplay="2000"><img src="img/cosem.png" class="xd"></div>
    <div class="swiper-slide" data-swiper-autoplay="2000"><img src="img/mimi.png" class="xd"></div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>
	<div id="contenedor" >
  
		<div  class="titule" id="skincarexd"><h2>Productos Skincare🌷</h2>
<hr class="barra">
  </div>		
	<div class="conprodus">

    <?php
        //invocar la funcion select y la tabla
        $result = select("productos_piel","*");
        // Realizamos un bucle que muestre el resultado
        ?>
    <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) {

              
              $nombre= $row->nombre_produP;
              $id= $row->descripcion_produP;
              $fecha= $row->fecha_cadP;
              $tipo= $row->tipo_produP;
              $tono= $row->tono_produP;
          
          ?>
          
            <div class="producto"><img src="img/<?php echo $row->img_produ;?>" width="220px" height="220px">
			<p>Nombre:<?php echo $row->nombre_produP; ?></p>
            <p>Tipo:<?php echo $row->tipo_produP; ?></p>
            <p>Tono:<?php echo $row->tono_produP; ?></p>
            <form id="form1" name="form1" method="post" action="objeto.php"><label for="id_skin">

            </label><input type="text" value="<?php echo $row->id_produP; ?>" hidden id="id_skin" name="id_skin"></form>
			<button class="botone"  type="submit">Encontrar</button>
            
			</div>
            <div class="popup">
        <button id="close" class="cerrar">&times;</button>
        <h2 id="cabecera2">nombre</h2>
       <p><?php echo $row->descripcion_produP; ?></p>
                <p><?php echo $row->fecha_cadP; ?></p>
                <p><?php echo $row->tipo_produP; ?></p>
                <p><?php echo $row->tono_produP; ?></p>
        <button  class="la">Agregar a favoritos</button>
    </div>	
           
               
          <?php

            }
          } else {
            echo "no hay ningun registro";
          }
          ?>
		

	</div>
    	
  
	</div>
       <!-- footer ******************** -->
       <?php include("php/footer.php"); ?>

       <script type="text/javascript">

   
        function abrir($id){
       document.getElementById("cabecera2").innerHTML= $id;
     
        document.querySelector(".popup").style.display = "block";

        }
        
       
       
       


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
    </script>
<script src="js/parallax.min.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
</body>
<script>
	const swiper = new Swiper('.swiper', {
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 5000,
		},
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
      progressbarFillClass:'swiper-pagination-progressbar-fill'
		},

	});
</script>

</html>