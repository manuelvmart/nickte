<!DOCTYPE html>
<html>

<head>
  <title>Maquillaje</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Estilos.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="css/menus.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="css/swiper-bundle.css?v=<?php echo (rand()); ?>" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <?php include("php/conexion.php"); ?>

  <?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
  ?>
</head>

<body style="background-image: url('img/marmol.jpeg');">
  <?php include("php/header-es.php"); ?>

  <div id="contenedor">

    <div class="swiper" id="swiperd">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" data-swiper-autoplay="2000"><img src="img/home.png" class="xd"></div>
        <div class="swiper-slide" data-swiper-autoplay="2000"><img src="img/rosa.png" class="xd"></div>
        <div class="swiper-slide" data-swiper-autoplay="2000"><img src="img/pink3.png" class="xd"></div>
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

    <div class="titule" id="skincarexd">
      <h2><br></h2>
      <hr class="barra">
    </div>

    <div class="titule" id="skincarexd">
      <h2>LOS MAS BUSCADOS DE MAKEUP💄</h2>
      <div class="titule" id="skincarexd">
        <h3>ECHA UN VISTAZO A NUESTRO BEST SELLER NICKTE MAKEUP</h3>
      </div>
      <br>
      <div class="parallax" data-parallax="scroll" data-image-src="img/MAKEUP.png" data-z-index="-1">

<div class="textobrand">
  <h1 class="heading">

    <span class="heading-principal">NICKTE precio calidad </span>
    <span class="heading-secundario">No vendemos Replicas</span>
    <button class="guardare"><a href="#produxd">Ver Novedades</a></button>
  </h1>
</div>


</div>
      <div class="parallax" data-parallax="scroll" data-image-src="img/dos.gif" data-z-index="-1">

<div class="textobrand">
  <h1 class="heading">

    <span class="heading-principal">NICKTE precio calidad </span>
    <span class="heading-secundario">No vendemos Replicas</span>
    <button class="guardare"><a href="#produxd">Ver Novedades</a></button>
  </h1>
</div>


</div>

      <hr class="barra">
    </div>

    <div class="conprodus">

      <?php
      //invocar la funcion select y la tabla
      $result = select("productos", "*");
      // Realizamos un bucle que muestre el resultado
      ?>
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_object($result)) {


          $nombre = $row->nombre_produ;
          $id = $row->descripcion_produ;
          $fecha = $row->fecha_cad;
          $tipo = $row->tipo_produ;
          $tono = $row->tono_produ;

      ?>

          <div class="producto"><img src="img/<?php echo $row->img_produ; ?>" width="220px" height="220px">
            <p>Nombre:<?php echo $row->nombre_produ; ?></p>
            <p>Tipo:<?php echo $row->tipo_produ; ?></p>
            <p>Tono:<?php echo $row->tono_produ; ?></p>
            <button class="botone" onclick="abrir(<?php echo $row->id_produ; ?>);">Encontrar</button>

          </div>
          <div class="popup">
            <button id="close" class="cerrar">&times;</button>
            <h2 id="cabecera2">nombre</h2>
            <p><?php echo $row->descripcion_produ; ?></p>
            <p><?php echo $row->fecha_cad; ?></p>
            <p><?php echo $row->tipo_produ; ?></p>
            <p><?php echo $row->tono_produ; ?></p>
            <button class="la">Agregar a favoritos</button>
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
  <script src="js/swiper-bundle.min.js"></script>
  <script type="text/javascript">
    function abrir($id) {
      document.getElementById("cabecera2").innerHTML = $id;

      document.querySelector(".popup").style.display = "block";

    }






    document.querySelector("#close").addEventListener("click", function() {
      document.querySelector(".popup").style.display = "none";
    });

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

      },

    });
  </script>
  <script src="js/parallax.min.js"></script>
</body>

</html>