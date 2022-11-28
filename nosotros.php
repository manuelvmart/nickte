<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="css/Estilos.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="css/menus.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="css/otrosEstilos.css?v=<?php echo(rand()); ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>



<body  style="background-image: url('img/marmol.jpeg');">
<?php include("php/header-es.php"); ?>
<div class="parallax" data-parallax="scroll" data-image-src="img/nosotros.png" data-z-index="-1">


</div>


</div>
    <div class="container">
   

    <div class="container-all">
	<input type="radio" id="1" name="image-slide"hidden/>
	<input type="radio" id="2" name="image-slide" hidden/>
	<input type="radio" id="3" name="image-slide" hidden/>

	<div class="slide">
		<div class="item-slide">
			<img src="img/a.jpg" alt="">
		</div>
		<div class="item-slide">
			<img src="img/b.jpg" alt="">
		</div>
		<div class="item-slide">
			<img src="img/c.jpg" alt="">
		</div>
	</div>

	<div class="paginacion">
		<label class="paginacion-item" for="1">
			<img src="img/a.jpg" alt="">
		</label>
		<label class="paginacion-item" for="2">
			<img src="img/b.jpg" alt="">
		</label>
		<label class="paginacion-item" for="3">
			<img src="img/c.jpg" alt="">
		</label>
	</div>

</div>

<div class="descripcion" style="background-image: url('img/marmol.jpeg');">
			<div class="figure img">
				<div class="parrafo">
					
						<p style="margin-left: 50px; margin-right: 40px;"> 
							<b style="font-size: 45px;">NICKTE</b>  </p>
							<figure>
						<img style="width: 100px; height:auto; background-image: url('img/c.jpg');">
                        <h2 style="margin-left: 650px; margin-right:50px;">Mision</h2>	
					<p style="margin-left: 350px; margin-right:40px;">
                        
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<hr style="margin-left: 390px; margin-right: 30px;"> </p> <br> <br>
					
						<p style="margin-left: 80px; margin-right:40px;">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</figure> <br>
					
				</div> <br>


                <div class="parallax">
                <div class="parrafo">
                <p style="margin-left: 50px; margin-right: 40px;"> 
							<b style="font-size: 45px; color: black;" >Ubicación</b>  </p>
                            <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.7477279065433!2d-100.
        65141695508908!3d19.68076527412278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d351239b3779d%3A0xc4cc613c91c6d401!
        2sGarsot%20Carnitas%20%26%20Guisados!5e0!3m2!1ses-419!2smx!4v1668380092081!5m2!1ses-419!2smx" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
                </div>
                </div>
			</div>
		</div>



<!-- footer ******************** -->
<?php include("php/footer.php"); ?>
	   <script src="js/parallax.min.js"></script>
	   <script src="js/parallax.min.js"></script>
</body >
</html>