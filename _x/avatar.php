<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Netherworld - AVATARES</title>
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css" />
	<link rel="stylesheet" type="text/css" href="avatares/avatares.css?v=<?php echo rand(0, 99999); ?>" />
</head>
<body>

	<?php include 'avatares/avatares.php'; ?>

	<div id="new">
		<div id="new-titulo">ELIGE PERSONAJE</div>
		<div id="new-seleccion">
			<ul id="new-elige">
				<!--aqui van los avatares-->
			</ul>
			<canvas id="new-personaje" width="180" height="250"></canvas>
			<div id="new-texto">[ personaje ]</div>
			<a id="new-boton" href="javascript:continuaClick();">CONTINUAR</a>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="avatares/avatares.js?v=<?php echo rand(0, 99999); ?>"></script>
</body>
</html>