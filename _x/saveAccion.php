<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);


/*----- CARGA EL ZEND LOADER -----*/
$ruta = '/home/julioappscofre';
set_include_path(get_include_path().PATH_SEPARATOR.$ruta);
require 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();


/*----- Captura Variables por Post -----*/
$request= new Zend_Controller_Request_Http();
$data	= $request->getPost();


/*----- CONECTAR CON BASE DE DATOS -----*/
$config	= require_once 'config/db.php';
$db		= Zend_Db::factory('Mysqli', $config);
Zend_Db_Table_Abstract::setDefaultAdapter($db);


/*----- Cargar Personajes -----*/
if (isset($_SESSION['user_id']) && isset($_SESSION['combate']) && !empty($data)) :
	$tablaFotos = new Zend_Db_Table('netherworld_combates');
	$queryFotos = $tablaFotos->select()->where('id=?', $_SESSION['combate']);
	$datosFotos = $tablaFotos->fetchRow($queryFotos);
	
	if ($datosFotos['indica'] == 'jugador') $indica = 'enemigo';
	else $indica = 'jugador';
	
	$datosPost = array(
		'turno'		=> ($datosFotos['turno']+1),
		'indica'	=> $indica,
		'accion'	=> $data['accion']
	);
	$wherePost = $tablaFotos->getAdapter()->quoteInto('id=?', $datosFotos['id']);
	$insertaPost = $tablaFotos->update($datosPost, $wherePost);
		
	if ($insertaPost) :
		$mensaje = 'Exito';
	else :
		$mensaje = 'Error al guardar su jugada.';
	endif;
else :
	$mensaje = 'Su sesión ha expirado';
endif;

echo $mensaje;
?>