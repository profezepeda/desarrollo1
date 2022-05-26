<?php
require_once "conexionDB.php";

class Usuario {
    public $idusuario;
    public $firstname;
    public $lastname;
    public $email;
    public $contrasena;
    public $active;

    public function __construct()   {
    }

    public function listar()    {
        $db = new conexionDB();
        $sql = "SELECT idusuario id, concat_ws(' ', firstname, lastname) nombre FROM usuarios";
        $resultado = $db->ejecutar_pdo($sql, array());
        return $resultado;
    }

    public function autenticar($email, $contrasena)    {
        $db = new conexionDB();
        $sql = "SELECT * FROM usuarios WHERE email = ? AND contrasena = PASSWORD(?) AND active = 1";
        $parametros = array($email, $contrasena);
        $resultado = $db->ejecutar_pdo($sql, $parametros);
        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            $this->idusuario = $fila["idusuario"];
            $this->firstname = $fila["firstname"];
            $this->lastname = $fila["lastname"];
            $this->email = $fila["email"];
            // $this->contrasena = $fila["contrasena"];
            // $this->active = $fila["active"];
            return true;
        } else {
            return false;
        }
    }

}


?>