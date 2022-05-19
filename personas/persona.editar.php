<?php

require_once "../configuracion.ini.php";
require_once "../funciones.php";
require '../clases/persona.php';

$persona = new Persona();

if (isset($_GET["id"])) {
    $persona->setIdPersona($_GET["id"]);
}
if (!empty($_POST)) {
    $persona->setIdPersona($_POST["idpersona"]);
    $persona->rut = $_POST["rut"];
    $persona->nombre = $_POST["nombre"];
    $persona->apellido = $_POST["apellido"];
    $persona->fechanacimiento = $_POST["fechanacimiento"];
    $persona->email = $_POST["email"];
    if ($_POST["idpersona"] == 0) {
        $persona->agregar();
    } else {
        $persona->modificar();
    }
    header("Location: personas.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Persona</title>
</head>
<body>

    <div class="container mt-6">

        <form method="post">
            <input type="hidden" name="idpersona" value="<?php echo $persona->idpersona ?>">
            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                    value="<?php echo $persona->email ?>">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" maxlength="20" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                    value="<?php echo $persona->nombre ?>">
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" maxlength="20" class="form-control" id="apellido" name="apellido" placeholder="Apellido"
                    value="<?php echo $persona->apellido ?>">
                <label for="apellido">Apellido</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" maxlength="12" class="form-control" id="rut" name="rut" placeholder="RUT"
                    value="<?php echo $persona->rut ?>">
                <label for="rut">RUT</label>
            </div>
            <div class="form-floating mb-2">
                <input type="date" maxlength="20" class="form-control" id="fechanacimiento" name="fechanacimiento" placeholder="Fecha Nacimiento"
                    value="<?php echo $persona->fechanacimiento ?>">
                <label for="fechanacimiento">Fecha Nacimiento</label>
            </div>
            <div class="form-floating mt-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>


</body>
</html>