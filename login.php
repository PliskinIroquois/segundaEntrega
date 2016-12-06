<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$GLOBALS['_id_'] = 'U2kgbWUgZW5jdWVudHJvIGVzdGUgdGV4dG8sIHNpZ25pZmljYSBxdWUgY29waW8gZWwgY29kaWdvLg==';

require_once 'constantes.php';
require_once 'librerias/BaseDatos.php';
require_once 'librerias/Request.php';
require_once 'controladores/LoginController.php';
require_once 'modelos/Usuario.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = new LoginController();

switch ($action) {
    case 'index':
        $request = new Request($_GET);
        $controller->index($request);
        break;
    case 'login':
        $request = new Request($_POST);
        $controller->login($request);
        break;
    case 'logout':
        $controller->logout();
        break;
}
