<?php
require_once "../configuracion.ini.php";
require_once("../clases/clasificaciones.php");
require_once("../clases/contenidos.php");

$clasificacion = new Clasificaciones();
$seleccionClasificaciones = $clasificacion->listar();

$idclasificacion = null;
if (isset($_POST["enviar"]))    {
    echo $_POST["idclasificacion"];
    $idclasificacion = $_POST["idclasificacion"];
}
if (isset($_GET["idcontenido"]))    {

    $contenido = new Contenidos();
    // $contenido->idcontenido = $_GET["idcontenido"];
    // $contenido->obtener()
    $contenido->idclasificacion = 5;

    $idclasificacion = $contenido->idclasificacion;


}




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
                $selected = "";
                if ($value["idclasificacion"] == $idclasificacion)  {
                    $selected = "selected";
                }
                echo "<option value='".$value["idclasificacion"]."' ".$selected.">".$value["nombre"]."</option>";
            }
            ?>
        </select>

        <button type="submit" name="enviar">Enviar</button> 
    </form>


</body>
</html>