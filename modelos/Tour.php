<?php

class Tour {

    public $nombre;
    public $descripcion;
    public $empresa;
    public $telefono;
    public $correo;
    private static $tabla = 'tour';

    public function __construct() {
        $this->id = 0;
        $this->nombre = '';
        $this->descripcion = '';
        $this->empresa = 0;
        $this->telefono = '';
        $this->correo = '';
    }

    public function save() {
        $bd = BaseDatos::getInstance();
        $bd->conectar();
        $columnas = array('nombre', 'descripcion', 'empresa', 'telefono', 'correo');
        $valores = array($this->nombre, $this->descripcion, $this->empresa, $this->telefono, $this->correo);
        $filtros = array('id' => $this->id);
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
        $columnas = array('id', 'nombre', 'descripcion', 'empresa', 'telefono', 'correo');
        $filtros = array('id' => $id);
        $datos = $bd->select(self::$tabla, $columnas, $filtros);
        $tour = new Tour();
        foreach ($datos as $item) {
            $tour->id = $item['id'];
            $tour->nombre = $item['nombre'];
            $tour->descripcion = $item['descripcion'];
            $tour->empresa = $item['empresa'];
            $tour->telefono = $item['telefono'];
            $tour->correo = $item['correo'];
            break;
        }
        $bd->desconectar();
        return $tour;
    }

    public static function findAll() {
        $bd = BaseDatos::getInstance();
        $bd->conectar();
        $columnas = array('id', 'nombre', 'descripcion', 'empresa', 'telefono', 'correo');
        $datos = $bd->select(self::$tabla, $columnas);
        $tours = array();
        foreach ($datos as $item) {
            $tour=new Tour();
            $tour->id = $item['id'];
            $tour->nombre = $item['nombre'];
            $tour->descripcion = $item['descripcion'];
            $tour->empresa = $item['empresa'];
            $tour->telefono = $item['telefono'];
            $tour->correo = $item['correo'];
            array_push($tours, $tour);
        }
        $bd->desconectar();
        return $tours;
    }

}