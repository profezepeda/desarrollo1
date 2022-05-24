<?php

require_once "conexionDB.php";

class Contenidos {
    public $idcontenido;
    public $idclasificacion;
    public $clasificacion;
    public $autor_idusuario;
    public $autor;
    public $imagen;
    public $titulo;
    public $subtitulo;
    public $contenido;

    public function __construct()   {

    }

    // alternativa 1
    public function obtener()   {

        $query = "select * from contenidos where idcontenido = ?";
        $resultado = $db->ejecutar_pdo($query, array($this->idcontenido));
        if ($resultado->num_rows > 0) {
            // completar

            $query = "select * from clasificaciones where idclasificacion=?"
            $resultado = $db->ejecutar_pdo($query, array($this->idclasificacion));
            if ($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                $this->clasificacion = $file["nombre"]
            }

            // lo mismo con el autor


        } else {
            // completar
        }
        $db->cerrar();
    }

    // alternativa 2
    public function obtener()   {

        $query = "
        select  c.idcontenido, c.idclasificacion, c.autor_idusuario, c.titulo, c.subtitulo, c.contenido, c.imagen,
                concat_ws(' ', u.nombre, u.apellido) as autor,
                cl.nombre as clasificacion
            from contenidos c
            inner join usuarios u on c.autor_idusuario = u.idusuario
            inner join clasificaciones cl on c.idclasificacion = cl.idclasificacion
            where c.idcontenido = ?
        ";
        $resultado = $db->ejecutar_pdo($query, array($this->idcontenido));
        if ($resultado->num_rows > 0) {
            // completar
            $this->autor = $fila["autor"]
            $this->clasificacion = $fila["clasificacion"]

        } else {
            // completar
        }
        $db->cerrar();
    }

    public function agregar() {

    }

    public function modificar() {

    }
}

?>