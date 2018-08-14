<?php
session_start();
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


/*----- Cargar Personajes -----*/
if (isset($_SESSION['user_id']) && isset($_SESSION['combate'])) :
	$tablaFotos = new Zend_Db_Table('netherworld_combates');
	$queryFotos = $tablaFotos->select()->where('id=?', $_SESSION['combate']);
	$datosFotos = $tablaFotos->fetchRow($queryFotos);
	
	//Si hay oponente
	if ($datosFotos['enemigo'] != 0) :
		$_SESSION['evil_id'] = $datosFotos['enemigo'];
		$mensaje = 'combate';
	
	//Si no hay oponente
	else :
		$mensaje = 'buscar';
	endif;
else :
	$mensaje = 'Su sesión ha expirado';
endif;

echo $mensaje;
?>