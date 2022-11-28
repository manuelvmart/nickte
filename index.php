<!DOCTYPE html>
<html lang="es">

<head>
	<title>NICKTE</title>
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="css/Estilos.css?v=<?php echo (rand()); ?>" />
	<link rel="stylesheet" href="css/swiper-bundle.css?v=<?php echo(rand()); ?>" />
	<link rel="stylesheet" href="css/style.css?v=<?php echo(rand()); ?>" />
	<link rel="stylesheet" href="css/menus.css?v=<?php echo (rand()); ?>" />

</head>

<body>
	<?php include("php/header-es.php"); ?>
	<div class="parallax" data-parallax="scroll" data-image-src="img/p8.jpg" data-z-index="-1">

		<div class="textobrand">
			<h1 class="heading">

				<span class="heading-principal">NICKTE precio calidad </span>
				<span class="heading-secundario">No vendemos Replicas</span>
				<button class="guardare"><a href="#produxd">Ver Novedades</a></button>
			</h1>
		</div>


	</div>
	<div class="parallax" data-parallax="scroll" data-z-index="-1">

	<div class="cool"><img src="img/nickteversion2.6.JPG" class="coole">
	
	<h1 class="heading2">

				<span class="heading-secundario2">Nuestra Especialidad es el maquillaje</span>
				<br><br>
				<button class="guardare2"><a href="producto-makeup.php">Ver Makeup💄</a></button>
			</h1>
</div>


	</div>
	



		
	


	</div>
	<div class="parallax" data-parallax="scroll" data-image-src="img/peakpx3.jpg" data-z-index="-1">

		<div class="textobrand">
			<h1 class="heading">

				<span class="heading-principal">Skincare🌷</span>
				<span class="heading-secundario">Nickte's Coleccion Piel</span>
				<button class="guardare"><a href="producto-skincare.php">Ver Productos</a></button>
			</h1>
		</div>


	</div>
	<div class="parallax" data-parallax="scroll"  data-z-index="-1">

	<div class="novedade" id="produxd">
			<h2>Novedades</h2>
		</div>

		<hr class="barra">

		<?php include("php/slider.php"); ?> 


	</div>
	<div id="contenedor" style="background-image: url('img/marmol.jpeg');">
		<br>
		<div class="conprodus">
		<div class="producto"><img src="img/1.1.png" width="220px" height="220px">
			<p>Product Name:</p>
			<p>Product ID:</p> <br>
			<botone class="botone">Find</botone>
		</div>
		<div class="producto"><img src="img/2.png" width="220px" height="220px">
			<p>Product Name:</p>
			<p>Product ID:</p> <br>
			<botone class="botone">Find</botone>
		</div>
		</div>
		



		<div>
	  

		</div>
	
	<!-- Slider main container -->
	
		<br>
	
	</div>
	<!-- footer ******************** -->
	<?php include("php/footer.php"); ?>
	<script src="js/parallax.min.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/script.js"></script>
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
			
		},

	});
</script>

</html>