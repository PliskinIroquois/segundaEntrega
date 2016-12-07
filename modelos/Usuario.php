<?php

class Usuario {

    public $usuario;
    public $password;
    public $es_admin;
    public $nombre;
    public $apellidos;
    public $telefono;
    public $correo;
    private static $tabla = 'usuario';

    public function __construct() {
        $this->id = 0;
        $this->usuario = '';
        $this->password = '';
        $this->es_admin = 0;
        $this->nombre = '';
        $this->apellidos = '';
        $this->telefono = '';
        $this->correo = '';
    }

    public function save() {
        $bd = BaseDatos::getInstance();
        $bd->conectar();
        $columnas = array('nombre', 'apellidos', 'correo', 'telefono', 'usuario', 'es_admin');
        $valores = array($this->nombre, $this->apellidos, $this->correo, $this->telefono, $this->usuario, $this->es_admin);
        $filtros = array('id' => $this->id);
        if ($this->password) {
            array_push($columnas, 'password');
            array_push($valores, self::encryptPassword($this->password));
        }
        if (is_numeric($this->id) && $this->id > 0) {

            $bd->update(self::$tabla, $columnas, $valores, $filtros);
        } else {
            $bd->insert(self::$tabla, $columnas, $valores);
        }
        $bd->desconectar();
    }

    public function delete() {
        $bd = BaseDatos::getInstance();
        $bd->conectar();
        $bd->delete(self::$tabla, array('id' => $this->id));
        $bd->desconectar();
    }

    public static function find($id) {
        $bd = BaseDatos::getInstance();
        $bd->conectar();
        $columnas = array('id', 'nombre', 'apellidos', 'telefono', 'correo', 'usuario', 'es_admin', 'password');
        $filtros = array('id' => $id);
        $datos = $bd->select(self::$tabla, $columnas, $filtros,false);
        $usuario = new Usuario();
        foreach ($datos as $item) {
            $usuario->id = $item['id'];
            $usuario->nombre = $item['nombre'];
            $usuario->apellidos = $item['apellidos'];
            $usuario->telefono = $item['telefono'];
            $usuario->correo = $item['correo'];
            $usuario->usuario = $item['usuario'];
            $usuario->es_admin = $item['es_admin'];
            $usuario->password = $item['password'];
            break;
        }
        $bd->desconectar();
        return $usuario;
    }

    public static function findByNombreUsuario($nombreUsuario){
        $bd = BaseDatos::getInstance();
        $bd->conectar();
        $columnas = array('id', 'nombre', 'apellidos', 'telefono', 'correo', 'usuario', 'es_admin', 'password');
        $filtros = array('usuario' => $nombreUsuario);
        $datos = $bd->select(self::$tabla, $columnas, $filtros,false);
        $usuario = new Usuario();
        foreach ($datos as $item) {
            $usuario->id = $item['id'];
            $usuario->nombre = $item['nombre'];
            $usuario->apellidos = $item['apellidos'];
            $usuario->telefono = $item['telefono'];
            $usuario->correo = $item['correo'];
            $usuario->usuario = $item['usuario'];
            $usuario->es_admin = $item['es_admin'];
            $usuario->password = $item['password'];
            break;
        }
        $bd->desconectar();
        return $usuario;
    }
    
    public static function findAll() {
        $bd = BaseDatos::getInstance();
        $bd->conectar();
        $columnas = array('id', 'nombre', 'apellidos', 'telefono', 'correo', 'usuario', 'es_admin');
        $datos = $bd->select(self::$tabla, $columnas,null,false);
        $usuarios = array();
        foreach ($datos as $item) {
            $usuario = new Usuario();
            $usuario->id = $item['id'];
            $usuario->nombre = $item['nombre'];
            $usuario->apellidos = $item['apellidos'];
            $usuario->telefono = $item['telefono'];
            $usuario->correo = $item['correo'];
            $usuario->usuario = $item['usuario'];
            $usuario->es_admin = $item['es_admin'];
            array_push($usuarios, $usuario);
        }
        $bd->desconectar();
        return $usuarios;
    }
    
    public static function encryptPassword($password){
        return sha1($password);
    }
    
    public function isAdmin(){
        return ($this->es_admin == 1);
    }

}
