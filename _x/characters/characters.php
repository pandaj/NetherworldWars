<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


/*----- CARGA EL ZEND LOADER -----*/
if (!isset($ruta) ) :
	$ruta = '/home/julioappscofre';
	set_include_path(get_include_path().PATH_SEPARATOR.$ruta);
	require 'Zend/Loader/Autoloader.php';
	Zend_Loader_Autoloader::getInstance();
endif;


/*----- CONECTAR CON BASE DE DATOS -----*/
if (!isset($db) ) :
	$config	= require_once 'config/db.php';
	$db		= Zend_Db::factory('Mysqli', $config);
	Zend_Db_Table_Abstract::setDefaultAdapter($db);
endif;


/*----- PERSONAJES -----*/
if (!isset($datosFotos) ) :
	$tablaFotos = new Zend_Db_Table('netherworld_clases');
	$queryFotos = $tablaFotos->select();
	$datosFotos = $tablaFotos->fetchAll($queryFotos);
endif;
?>
<script type="text/javascript">
	//AVATARES
	var characters = new Array();

	<?php 
	$num = 0;
	foreach ($datosFotos as $character) :
		?>characters[<?php echo $num; ?>] = new Object();
		characters[<?php echo $num; ?>].slug = "<?php echo $character['slug']; ?>";
		characters[<?php echo $num; ?>].nombre = "<?php echo $character['nombre']; ?>";
		characters[<?php echo $num; ?>].vid = <?php echo $character['vid']; ?>;
		characters[<?php echo $num; ?>].atk = <?php echo $character['atk']; ?>;
		characters[<?php echo $num; ?>].spd = <?php echo $character['spd']; ?>;
		characters[<?php echo $num; ?>].acc = <?php echo $character['acc']; ?>;
		<?php
		$num++;
	endforeach;
	?>
</script>