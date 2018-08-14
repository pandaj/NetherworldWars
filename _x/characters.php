<?php
session_start();
session_destroy();

error_reporting(E_ALL);
ini_set("display_errors", 1);


/*----- CARGA EL ZEND LOADER -----*/
$ruta = '/home/julioappscofre';
set_include_path(get_include_path().PATH_SEPARATOR.$ruta);
require 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();


/*----- CONECTAR CON BASE DE DATOS -----*/
$config	= require_once 'config/db.php';
$db		= Zend_Db::factory('Mysqli', $config);
Zend_Db_Table_Abstract::setDefaultAdapter($db);


/*----- PERSONAJES -----*/
$tablaFotos = new Zend_Db_Table('netherworld_clases');
$queryFotos = $tablaFotos->select();
$datosFotos = $tablaFotos->fetchAll($queryFotos);
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Netherworld Wars</title>
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css" />
	<link rel="stylesheet" type="text/css" href="characters/characters.css?v=<?php echo rand(0, 99999); ?>" />
</head>
<body>
	<div style="position:absolute; top:-10px; width:1px; height:1px; overflow:hidden">
		<img src="images/sonido-on.png" />
	</div>

	<div id="select-titulo">Elige tus 8 personajes <b>(0/8)</b></div>
	<a id="btn-musica" href="javascript:cambiaMusica()">
		<img src="images/sonido-off.png" width="100%" height="100%" />
	</a>
	<div id="select">
		<?php
		$num = 0;
		foreach ($datosFotos as $character) :
			?>
			<div class="char" id="char-<?php echo $num; ?>" data-id="<?php echo $num; ?>">
				<div class="imagen">
					<img class="sombra" src="images/sombra.png" />
					<img class="foto" src="characters/<?php echo $character['slug']; ?>/a_01.png" />
				</div>
				<div class="texto"><?php echo $character['nombre']; ?></div>
				<div class="stats">
					<div class="stats-vid"><img src="images/vida.png" />   <?php echo ($character['vid']*3); ?></div>
					<div class="stats-atk"><img src="images/attack.png" /> <?php echo $character['atk']; ?></div>
					<div class="stats-spd"><img src="images/speed.png" />  <?php echo $character['spd']; ?></div>
					<div class="stats-acc"><img src="images/rango.png" />  <?php echo $character['acc']; ?></div>
				</div>
			</div>
			<?php
			$num++; 
		endforeach;
		?>
	</div>
	<a id="select-btn" href="javascript:eligePos();">CONTINUAR</a>
	<div id="eligepos">
		<div id="eligepos-cont">
			<div id="eligepos-titulo">ELIGE POSICIONES DE COMBATE</div>
			<div class="eligepos-pos" id="eligepos-x">
				<img class="foto" src="avatares/adell-face.png" />
			</div>
			<?php $num = 0; while($num < 8) : ?>
				<a class="eligepos-pos" id="eligepos-<?php echo $num; ?>" data-id="-1" href="javascript:cambiaChar(<?php echo $num; ?>);">
					<img class="sombra" src="images/sombra.png" />
					<img class="foto" src="images/sombra.png" />
					<div class="over"></div>
				</a>
			<?php $num++; endwhile; ?>
			<a id="eligepos-final" href="javascript:finalizaPos();">COMBATIR</a>
		</div>
	</div>
	<div id="alertas">
		<div id="alertas-cont">
			<p><!-- Aqui va el mensaje --></p>
		</div>
	</div>

	<?php include 'characters/characters.php'; ?>

	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/howler.min.js"></script>
	<script type="text/javascript" src="characters/characters.js?v=<?php echo rand(0, 99999); ?>"></script>
	<?php
	/*----- Version Mobile -----*/
	require_once 'MobileDetect/Mobile_Detect.php';
	$detect = new Mobile_Detect;
	$isMobile = false;
	if ($detect->isMobile() && !$detect->isTablet()) :
		?><script type="text/javascript">
			iMusica = false;
			musicFondo.stop();
			$('#btn-musica img').attr('src', 'images/sonido-on.png');
		</script><?php
	endif;
	?>
</body>
</html>
