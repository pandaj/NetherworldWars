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
if (isset($_SESSION['user_id']) && !isset($_SESSION['combate'])) :
	$tablaFotos = new Zend_Db_Table('netherworld_combates');
	$queryFotos = $tablaFotos->select()->where('activo=?', 0)->where('jugador!=?', $_SESSION['user_id'])->where('enemigo!=?', $_SESSION['user_id']);
	$datosFotos = $tablaFotos->fetchRow($queryFotos);
	
	//Busca Sesion Activa
	if (!empty($datosFotos) ) :
		$datosPost = array(
			'enemigo'	=> $_SESSION['user_id'],
			'indica'	=> 'jugador',
			'turno'		=> 1,
			'activo'	=> 1
		);
		$wherePost = $tablaFotos->getAdapter()->quoteInto('id=?', $datosFotos['id']);
		$insertaPost = $tablaFotos->update($datosPost, $wherePost);
		
		if ($insertaPost) :
			$_SESSION['combate'] = $datosFotos['id'];
			$_SESSION['evil_id'] = $datosFotos['jugador'];
			$_SESSION['indica']	= 'enemigo';
			$mensaje = 'combate';
		else :
			$mensaje = 'Error al unirse a un combate.';
		endif;
	
	//Crea Nueva Sesion
	else :
		$datosPost = array(
			'jugador'	=> $_SESSION['user_id'],
			'enemigo'	=> 0,
			'activo'	=> 0
		);
		$insertaPost = $tablaFotos->insert($datosPost);
		
		if ($insertaPost) :
			$_SESSION['combate'] = $insertaPost;
			$_SESSION['indica']	= 'jugador';
			$mensaje = 'espera';
		else :
			$mensaje = 'Error al crear sesion.';
		endif;
	endif;
else :
	$mensaje = 'Su sesión ha expirado';
endif;

echo $mensaje;
?>