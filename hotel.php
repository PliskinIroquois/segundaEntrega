<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$GLOBALS['_id_'] = 'U2kgbWUgZW5jdWVudHJvIGVzdGUgdGV4dG8sIHNpZ25pZmljYSBxdWUgY29waW8gZWwgY29kaWdvLg==';

require_once 'constantes.php';
require_once 'librerias/BaseDatos.php';
require_once 'librerias/Request.php';
require_once 'controladores/LoginController.php';
require_once 'controladores/HotelController.php';
require_once 'modelos/Hotel.php';

LoginController::validate();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';//por default muestra el index
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$controller = new HotelController($_SERVER['REQUEST_METHOD']);

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'show':
        $controller->show($id);
        break;
    case 'create':
        $request = new Request($_POST);
        $controller->create($request);
        break;
    case 'edit':
        $request = new Request($_POST);
        $controller->edit($id, $request);
        break;
    case 'delete':
        $controller->delete($id);
        break;
}
