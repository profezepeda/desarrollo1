<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
    <h1>Soy la página principal</h1>
    <?php
        if (isset($_SESSION['usuario'])) {
            echo "Hola " . $_SESSION['usuario'];
        }
    ?><br/><br/>
    <a href="personas/personas.php">Personas</a> &nbsp;
    <a href="logout.php">Cerrar sesión</a> &nbsp;
    <a href="login.php?logout=1">Cerrar sesión 2</a> &nbsp;
    <a href="principal.php">Principal</a>

</body>
</html>