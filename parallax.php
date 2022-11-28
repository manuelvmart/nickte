<!DOCTYPE html>
<html>

<head>
	<title>Chanel</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/menus.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="css/swiper-bundle.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="css/style.css?v=<?php echo(rand()); ?>" />
    <?php header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado?>
   <!-- Swiper CSS -->
   <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>
<style>
/* Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


 </style>
<body>
<?php include("php/header-crud.php"); ?>


<?php include("php/slider.php"); ?>      
    </body>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</html>