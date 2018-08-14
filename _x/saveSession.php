<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
$mensaje = 'Exito';


/*----- CARGA EL ZEND LOADER -----*/
$ruta = '/home/julioappscofre';
set_include_path(get_include_path().PATH_SEPARATOR.$ruta);
require 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();


/*----- Captura Variables por Get -----*/
$request= new Zend_Controller_Request_Http();
$data	= $request->getPost();


/*----- CONECTAR CON BASE DE DATOS -----*/
$config	= require_once 'config/db.php';
$db		= Zend_Db::factory('Mysqli', $config);
Zend_Db_Table_Abstract::setDefaultAdapter($db);


/*----- Cargar Personajes -----*/
$tablaFotos = new Zend_Db_Table('netherworld_users');

if (!isset($_SESSION['user_id']) ) :
	$datosPost = array(
		'personajes'=> $data['datos'],
		'avatar'	=> $data['avatar'],
		'conectado'	=> 1,
		'combate'	=> 0
	);
	$insertaPost = $tablaFotos->insert($datosPost);
	
	if ($insertaPost) :
		$_SESSION['user_id'] = $insertaPost;
	else :
		$mensaje = 'Ha ocurrido un error al guardar sus datos.';
	endif;
else :
	$datosFoto = array(
		'personajes'=> $data['datos'],
		'avatar'	=> $data['avatar'],
		'conectado'	=> 1,
		'combate'	=> 0
	);
	$whereFoto = $tablaFotos->getAdapter()->quoteInto('user_id=?', $_SESSION['user_id']);
	$insertaPost = $tablaFotos->update($datosFoto, $whereFoto);
	
	if (!$insertaPost) :
		$mensaje = 'Ha ocurrido un error al guardar sus datos.';
	endif;
endif;

echo $mensaje;
?>