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

<body>
<?php include("php/header-es.php"); ?>
<br>
  <div class="container">
      <div id="section">
      <div class="title">Producto</div>
        <hr>
        <?php
        echo 'esta es la variable recibida = ' . $_GET['id'];
        //invocar la funcion select y la tabla
        $result = select_id("productos_piel", "id_produP", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
            <h3>Datos del Producto</h3>
            <p>id: <?php echo $row->id_produP; ?></p>
            <p>id: <?php echo $row->precio_produP; ?></p>
            <p>Nombre: <?php echo $row->nombre_produP; ?></p>
            <p>Descripcion: <?php echo $row->descripcion_produP; ?></p>
            <p>Fecha de Caducidad: <?php echo $row->fecha_cadP; ?></p>
            <p>Tipo: <?php echo $row->tipo_produP; ?></p>
            <p>Tono: <?php echo $row->tono_produP; ?></p>

        <?php

          }
         
        } else {
          echo "El registro no existe";
        }
        ?>
        </table>

        
      </div>
 
   
  </div>
   <!-- footer ******************** -->
   <?php include("php/footer.php"); ?>
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