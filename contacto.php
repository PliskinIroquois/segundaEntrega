<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$GLOBALS['_id_'] = 'U2kgbWUgZW5jdWVudHJvIGVzdGUgdGV4dG8sIHNpZ25pZmljYSBxdWUgY29waW8gZWwgY29kaWdvLg==';

require_once 'constantes.php';
require_once 'librerias/BaseDatos.php';
require_once 'librerias/Request.php';
require_once 'controladores/ContactoController.php';
require_once 'modelos/Contacto.php';


$action = isset($_GET['action']) ? $_GET['action'] : 'index';
//$id = isset($_GET['id']) ? $_GET['id'] : 0;

$controller = new ContactoController($_SERVER['REQUEST_METHOD']);

switch ($action) {
    case 'index':
        $controller->index();
        break;
        case 'create':
        	$controller->create();
        	break;
    case 'captura':
        $controller->captura();
        break;
        case 'showMainPage':
        	$controller->showMainPage();
        	break;
}
