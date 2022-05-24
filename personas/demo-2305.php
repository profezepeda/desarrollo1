<?php

$contenido = new Contenido();
// lista de asignaciones ...
$contenido->autor_idusuario = $_SESSION["idusuario"];
$contenido->agregar();
$contenido->modificar();

?>

