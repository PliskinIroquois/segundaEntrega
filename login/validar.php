<?php

require_once '../constantes.php';
require_once ROOT_PATH . '/Librerias/BaseDatos.php';

if(!isset($_POST['usuario'])){
    die('NO tiene permisos para estar aca');
} else {
    $passwordUsr = $_POST['password'];
}

$bd = BaseDatos::getInstance();

$bd->conectar();

// SELECT password FROM usuarios WHERE usuario = $_POST['usuario'];
$columnas = array('password');
$filtros = array('usuario' => $passwordUsr);
$datos = $bd->select();

$passwordBD = (isset($datos[0])) ? $datos[0]['password'] : '';
        
if(md5($passwordUsr) == $passwordBD){
    session_start();
    $_SESSION['logueado'] = true;
    header('Location: /persona.php');
} else {
    header('Location: /login.php?error=1');
}





$bd->desconectar();