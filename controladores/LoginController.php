<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class LoginController {

    private static $usuario;

    public function __construct() {
        
    }

    public function index(Request $request) {
        $errorCode = $request->input('error');
        if ((int) $errorCode > 0) {
            $error = true;
        } else {
            $error = false;
        }
        require_once ROOT_PATH . '/vistas/login/index.php';
    }

    public function login(Request $request) {
        $nombreUsuario = $request->input('username');
        $contrasena = $request->input('password');
        $usuario = Usuario::findByNombreUsuario($nombreUsuario);
        if ($usuario->password == Usuario::encryptPassword($contrasena)) {
            $_SESSION['usuario'] = serialize($usuario);
            header('Location: ' . WEB_PATH . '/usuario.php');
        } else {
            session_destroy();
            header('Location: ' . WEB_PATH . '/login.php?error=1');
        }
    }

    public function logout() {
        if (session_status() != PHP_SESSION_NONE) {
            session_destroy();
        }
        header('Location: ' . WEB_PATH . '/index.html');
    }

    public static function validate() {
        if (!isset($_SESSION['usuario'])) {
            session_destroy();
            header('Location: ' . WEB_PATH . '/login.php');
            exit();
        } else {
            self::$usuario = unserialize($_SESSION['usuario']);
        }
    }

    public static function getUsuario() {
        self::validate();
        return self::$usuario;
    }

}
