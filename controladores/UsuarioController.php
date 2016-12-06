<?php

class UsuarioController {

    private $requestMethod;

    public function __construct($requestMethod) {
        if ($requestMethod === 'POST') {
            $this->requestMethod = Request::POST;
        } else {
            $this->requestMethod = Request::GET;
        }
    }

    public function index() {
        $usuarios = Usuario::findAll();
        require_once ROOT_PATH . '/vistas/usuario/index.php';
    }

    public function show($id) {
        $usuario = Usuario::find($id);
        require_once ROOT_PATH . '/vistas/usuario/show.php';
    }

    public function create(Request $request) {
        if ($this->requestMethod == Request::POST) {
            $usuario = new Usuario();
            $usuario->nombre = $request->input('nombre');
            $usuario->apellidos = $request->input('apellidos');
            $usuario->correo = $request->input('correo');
            $usuario->telefono = $request->input('telefono');
            $usuario->usuario = $request->input('usuario');
            $usuario->password = $request->input('password');
            $usuario->es_admin = $request->input('es_admin');
            $usuario->save();
            header('Location: ' . WEB_PATH . '/usuario.php?action=index');
        } else {
            require_once ROOT_PATH . '/vistas/usuario/create.php';
        }
    }

    public function edit($id, Request $request) {
        $usuario = Usuario::find($id);
        if ($this->requestMethod == Request::POST) {
            $usuario->nombre = $request->input('nombre');
            $usuario->apellidos = $request->input('apellidos');
            $usuario->telefono = $request->input('telefono');
            $usuario->correo = $request->input('correo');
            $usuario->usuario = $request->input('usuario');
            $usuario->password = $request->input('password');
            $usuario->es_admin = $request->input('es_admin');
            $usuario->save();
            header('Location: ' . WEB_PATH . '/usuario.php?action=index');
        } else {
            require_once ROOT_PATH . '/vistas/usuario/edit.php';
        }
    }

    public function delete($id) {
        $usuario = Usuario::find($id);
        $usuario->delete();
        header('Location: ' . WEB_PATH . '/usuario.php?action=index');
    }

}
