<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Mextreme</title>
	<?php include 'inc/head_common.php' ?>
	</head>

	<!-- Plugins facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<body>

		<?php include 'inc/header.php' ?>

		<!-- SELECCION DEL MENU DE NAVEGACION -->
		<?php

			$_GET["navegacion"]=addslashes($_GET["navegacion"]);

			switch ($_GET["navegacion"]) {
				case 'home': include("pages/home.php");
					break;
				case 'menu_alimentos': include("pages/menu_alimentos.php");
					break;
				case 'menu_bebidas': include("pages/menu_bebidas.php");
					break;
				case 'galeria': include("pages/galeria.php");
					break;
				case 'quienes_somos': include("pages/quienes_somos.php");
					break;
				case 'contacto': include("pages/contacto.php");
					break;
				default: include("pages/home.php");
					break;
			}

		 ?>

		
		<?php include 'inc/footer_common.php' ?>
		<!-- se hace la llamada de los archivos -->
		<?php include 'inc/footer.php'; ?>
		
	</body>
</html>