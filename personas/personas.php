<?php
require_once "../configuracion.ini.php";
require_once "../funciones.php";
require_once "../clases/usuarios.php";

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}

require $path."componentes/header.php";
require $path."componentes/slider.php";

?>


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

    <?php echo foo()    ?>

    </div>

<?php
require $path."componentes/footer.php"
?>