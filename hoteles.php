<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$GLOBALS['_id_'] = 'U2kgbWUgZW5jdWVudHJvIGVzdGUgdGV4dG8sIHNpZ25pZmljYSBxdWUgY29waW8gZWwgY29kaWdvLg==';

require_once 'constantes.php';
require_once 'librerias/BaseDatos.php';
require_once 'librerias/Request.php';
require_once 'modelos/Hotel.php';
require_once 'modelos/Tour.php';
require_once 'controladores/HotelWebController.php';


	$action=isset($_GET['action'])?$_GET['action']:'showList';
	$webcontroller=new HotelWebController($_SERVER['REQUEST_METHOD']);
	$id = isset($_GET['id']) ? $_GET['id'] : 0;

switch ($action) {
    case 'showList':
    	$webcontroller->showWebList();
    	break;
    case 'showMainPage':
    	$webcontroller->showMainPage();
    	break;
    case 'showBoth':
    	$webcontroller->showBoth();
    	break;
    case 'show':
    	$webcontroller->show($id);
    	break;
    	
}
