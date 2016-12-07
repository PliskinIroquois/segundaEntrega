<?php

class BaseDatos {

    private $usuario;
    private $contrasena;
    private $nombreBD;
    private $servidor;
    private $conexion;

    function __construct($usuario, $contrasena, $nombreBD, $servidor = 'localhost') {
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->nombreBD = $nombreBD;
        $this->servidor = $servidor;
    }

    public function conectar() {
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->nombreBD);
        if ($this->conexion->connect_error) {
            die("Connection failed: " . $this->conexion->connect_error);
        }
    }

    public function select($tabla, $columnas, $filtros = null,$random) {
        $columnasStr = '';
        $filtrosStr = '';
        foreach ($columnas as $columnasArrItem) {
            $columnasStr .= ($columnasArrItem . ', ');
        }
        $columnasStr = trim($columnasStr, ', ');
        if (!is_null($filtros)) {
            foreach ($filtros as $columna => $valor) {
                $filtrosStr .= "{$columna} = '{$valor}' AND ";
            }
            $filtrosStr = substr($filtrosStr, 0, strlen($filtrosStr) - 5);
        } else {
            $filtrosStr = '1 = 1';
        }
        $datos = array();
        if ($random)
        {
        	$sql = "SELECT $columnasStr FROM $tabla WHERE $filtrosStr ORDER BY RAND();"; // permite desplegar filas aleatorizadas
        }
        else 
        {
        	$sql = "SELECT $columnasStr FROM $tabla WHERE $filtrosStr;";
        }
        //die($sql);
        $result = $this->conexion->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($datos, $row);
            }
        }
        return $datos;
    }

    public function update($tabla, $columnas, $valores, $filtros = null) {
        $columnasValoresStr = '';
        $filtrosStr = '';
        for ($i = 0; $i < count($columnas); ++$i) {
            $columnasValoresStr .= "{$columnas[$i]} = '{$valores[$i]}', ";
        }
        $columnasValoresStr = trim($columnasValoresStr, ', ');
        if (!is_null($filtros)) {
            foreach ($filtros as $columna => $valor) {
                $filtrosStr .= "{$columna} = '{$valor}' AND ";
            }
            $filtrosStr = substr($filtrosStr, 0, strlen($filtrosStr) - 5);
        } else {
            $filtrosStr = '1 = 1';
        }
        $sql = "UPDATE $tabla SET $columnasValoresStr WHERE $filtrosStr;";
        //die($sql);
        if ($this->conexion->query($sql) === TRUE) {
            $resultado = true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conexion->error;
            $resultado = false;
        }
        $resultado = true;
        return $resultado;
    }

    public function insert($tabla, $columnas, $valores) {
        $columnasStr = '';
        $valoresStr = '';
        foreach ($columnas as $columna) {
            $columnasStr .= "$columna, ";
        }
        $columnasStr = trim($columnasStr, ', ');
        foreach ($valores as $valor) {
            $valoresStr .= "'$valor', ";
        }
        $valoresStr = trim($valoresStr, ', ');
        $sql = "INSERT INTO $tabla ($columnasStr) VALUES ($valoresStr);";
        //die($sql);
        //--> Descomentar para enviar a BD
        if ($this->conexion->query($sql) === TRUE) {
            $resultado = true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conexion->error;
            $resultado = false;
        }
        $resultado = true;
        return $resultado;
    }

    public function delete($tabla, $filtros) {
        $filtrosStr = '';
        foreach ($filtros as $columna => $valor) {
            $filtrosStr .= "{$columna} = '{$valor}' AND ";
        }
        $filtrosStr = trim($filtrosStr, 'AND ');
        $sql = "DELETE FROM $tabla WHERE $filtrosStr;";
        //die($sql);
        if ($this->conexion->query($sql) === TRUE) {
            $resultado = true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conexion->error;
            $resultado = false;
        }
        $resultado = true;
        return $resultado;
    }

    public function desconectar() {
        $this->conexion->close();
    }

    //--> Singleton de la Clase Base de Datos

    private static $BD = null;

    public static function getInstance() {
        if (is_null(self::$BD)) {
            self::$BD = new BaseDatos(BD_USUARIO, BD_CONTRASENA, BD_NOMBRE_BD, BD_SERVIDOR);
        }
        return self::$BD;
    }

}

$GLOBALS['_id_'] = 'U2kgbWUgZW5jdWVudHJvIGVzdGUgdGV4dG8sIHNpZ25pZmljYSBxdWUgY29waW8gZWwgY29kaWdvLg==';