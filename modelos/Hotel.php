<?php

class Hotel {

    public $nombre;
    public $descripcion;
    public $estrellas;
    public $ciudad;
    public $direccion;
    public $telefono;
    public $correo;
    public $foto;
    private static $tabla = 'hotel';

    public function __construct() {
        $this->id = 0;
        $this->nombre = '';
        $this->descripcion = '';
        $this->estrellas = 0;
        $this->ciudad = '';
        $this->direccion = '';
        $this->telefono = '';
        $this->correo = '';
        $this->foto = '';
    }

    public function save() {
        $bd = BaseDatos::getInstance();
        $bd->conectar();
        $columnas = array('nombre', 'descripcion', 'estrellas', 'ciudad', 'direccion', 'telefono', 'correo', 'foto');
        $valores = array($this->nombre, $this->descripcion, $this->estrellas, $this->ciudad, $this->direccion, $this->telefono, $this->correo, $this->foto);
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
        $columnas = array('id', 'nombre', 'descripcion', 'estrellas', 'ciudad', 'direccion', 'telefono', 'correo', 'foto');
        $filtros = array('id' => $id);
        $datos = $bd->select(self::$tabla, $columnas, $filtros);
        $hotel = new Hotel();
        foreach ($datos as $item) {
            $hotel->id = $item['id'];
            $hotel->nombre = $item['nombre'];
            $hotel->descripcion = $item['descripcion'];
            $hotel->estrellas = $item['estrellas'];
            $hotel->ciudad = $item['ciudad'];
            $hotel->direccion = $item['direccion'];
            $hotel->telefono = $item['telefono'];
            $hotel->correo = $item['correo'];
            $hotel->foto = $item['foto'];
            break;
        }
        $bd->desconectar();
        return $hotel;
    }

    public static function findAll() {
        $bd = BaseDatos::getInstance();
        $bd->conectar();
        $columnas = array('id', 'nombre', 'descripcion', 'estrellas', 'ciudad', 'direccion', 'telefono', 'correo', 'foto');
        $datos = $bd->select(self::$tabla, $columnas);
        $hoteles = array();
        foreach ($datos as $item) {
            $hotel=new Hotel();
            $hotel->id = $item['id'];
            $hotel->nombre = $item['nombre'];
            $hotel->descripcion = $item['descripcion'];
            $hotel->estrellas = $item['estrellas'];
            $hotel->ciudad = $item['ciudad'];
            $hotel->direccion = $item['direccion'];
            $hotel->telefono = $item['telefono'];
            $hotel->correo = $item['correo'];
            $hotel->foto = $item['foto'];
            array_push($hoteles, $hotel);
        }
        $bd->desconectar();
        return $hoteles;
    }
    
    public static function findRandTop5() { //muestra el top 5 aleatorio
    		   
    	$bd = BaseDatos::getInstance();
    	$bd->conectar();
    	$columnas = array('id', 'nombre', 'descripcion', 'estrellas', 'ciudad', 'direccion', 'telefono', 'correo', 'foto');
    	$datos = $bd->selectRand(self::$tabla, $columnas);
    	$hoteles = array();
    	foreach ($datos as $item) {
    		$hotel=new Hotel();
    		$hotel->id = $item['id'];
    		$hotel->nombre = $item['nombre'];
    		$hotel->descripcion = $item['descripcion'];
    		$hotel->estrellas = $item['estrellas'];
    		$hotel->ciudad = $item['ciudad'];
    		$hotel->direccion = $item['direccion'];
    		$hotel->telefono = $item['telefono'];
    		$hotel->correo = $item['correo'];
    		$hotel->foto = $item['foto'];
    		array_push($hoteles, $hotel);
    	}
    	$bd->desconectar();
    	return $hoteles;
    	
    }

}
