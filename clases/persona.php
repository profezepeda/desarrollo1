<?php

require_once "conexionDB.php";

class Persona {
    public $idpersona;
    public $nombre;
    public $apellido;
    public $fechanacimiento;
    public $rut;
    public $email;

    public function __construct()   {

    }

    public function setIdPersona($id)   {
        $this->idpersona = $id;
        $this->obtener();
    }

    public function listar() {
        $db = new conexionDB();
        $sql = "SELECT * FROM personas";
        $resultado = $db->ejecutar($sql);
        return $resultado;
    }

    public function agregar() {
        $db = new conexionDB();
        $query = "INSERT INTO personas VALUES (NULL, '" . $this->nombre . "', '" . $this->apellido . "', '" . $this->fechanacimiento . "', '" . $this->rut . "', '" . $this->email . "')";
        $db->ejecutar($query);
        $db->cerrar();
    }

    public function modificar() {
        $db = new conexionDB();
        $query = "UPDATE personas SET nombre = '" . $this->nombre . "', apellido = '" . $this->apellido . "', fechanacimiento = '" . $this->fechanacimiento . "', rut = '" . $this->rut . "', email = '" . $this->email . "' WHERE idpersona = " . $this->idpersona;
        $db->ejecutar($query);
        $db->cerrar();
    }

    public function obtener()   {
        $db = new conexionDB();
        $query = "select * from personas where idpersona = " . $this->idpersona;
        $resultado = $db->ejecutar($query);
        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            $this->nombre = $fila["nombre"];
            $this->apellido = $fila["apellido"];
            $this->fechanacimiento = $fila["fechanacimiento"];
            $this->rut = $fila["rut"];
            $this->email = $fila["email"];
        } else {
            $this->nombre = null;
            $this->apellido = null;
            $this->fechanacimiento = null;
            $this->email = null;
            $this->rut = null;
        }
        $db->cerrar();
    }

    public function eliminar()  {
        $db = new conexionDB();
        $query = "DELETE FROM personas WHERE idpersona=" . $this->idpersona;
        $db->ejecutar($query);
        $db->cerrar();
    }

    public function eliminarPorId($id)   {
        $db = new conexionDB();
        $query = "DELETE FROM personas WHERE idpersona=" . $id;
        $db->ejecutar($query);
        $db->cerrar();
    }

    public function imprimirFicha() {

    }



}

?>