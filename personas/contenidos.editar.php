<?php
require_once "../configuracion.ini.php";
require_once("../clases/clasificaciones.php");

$clasificacion = new Clasificaciones();
$seleccionClasificaciones = $clasificacion->listar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenidos</title>
</head>
<body>

    <form name="hola" method="post">

        <select name="idclasificacion">
            <?php
            foreach ($seleccionClasificaciones as $key => $value) {
                echo "<option value='".$value["idclasificacion"]."'>".$value["nombre"]."</option>";
            }
            ?>
        </select>


    </form>


</body>
</html>