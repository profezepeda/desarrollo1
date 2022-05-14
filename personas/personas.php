<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Personas</title>
</head>
<body>

    <div class="row">

    <?php
        require_once '../clases/persona.php';
        $persona = new Persona();
        $personas = $persona->listar();
        while ($reg = $personas->fetch_assoc()) {
    ?>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>
                            <?php echo $reg["nombre"] . " " . $reg["apellido"] ?>
                        </h2>
                    </div>
                    <div class="card-text"><?php echo $reg["email"] ?></div>
                    <div class="card-text"><?php echo $reg["rut"] ?></div>
                    <a href="persona.editar.php?id=<?php echo $reg["idpersona"] ?>" class="btn btn-primary">Editar</a>
                </div>
            </div>
        </div>

    <?php
        }
    ?>

    </div>


</body>
</html>