<?php 

class conexionDB {

    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli("127.0.0.1", "marcelo", "4nt0n14", "pro202");
        if ($this->conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
        }
    }

    // inseguro
    public function ejecutar($sql) {
        $resultado = $this->conexion->query($sql);
        return $resultado;
    }

    // PDO - seguro
    public function pdo($sql, $parametros)  {
        $resultado = $this->conexion->prepare($sql);
        $resultado->execute($parametros);
        return $resultado;
    }

    public function cerrar() {
        $this->conexion->close();
    }


}



?>