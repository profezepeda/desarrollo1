<?php

require_once("conexionDB.php");

class Clasificaciones {
    public $idclasificacion;
    public $nombre;

    public function __construct()   {

    }

    public function listar()    {
        $query = "select idclasificacion, nombre from clasificaciones order by nombre";
        $resultado = $db->ejecutar_pdo($query, array());
        return $resultado;
    }


}

?>