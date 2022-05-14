<?php

require_once './clases/persona.php';

$persona = new Persona();

/* AGREGAR */
/*
$persona->nombre = "Mario";
$persona->apellido = "González";
$persona->fechanacimiento = "1980-01-01";
$persona->rut = "12345678-9";
$persona->email = "mario.gonzalez@correoaiep.cl";

$persona->agregar();
*/

$persona->setIdPersona(1);

?>

Nombre: <?php echo $persona->nombre; ?><br>
Apellido: <?php echo $persona->apellido; ?><br>
Fecha de Nacimiento: <?php echo $persona->fechanacimiento; ?><br>
Rut: <?php echo $persona->rut; ?><br>
<br/>

<?php

$persona->setIdPersona(2);

$persona->nombre = "Ruperto";
$persona->modificar();

?>

Nombre: <?php echo $persona->nombre; ?><br>
Apellido: <?php echo $persona->apellido; ?><br>
Fecha de Nacimiento: <?php echo $persona->fechanacimiento; ?><br>
Rut: <?php echo $persona->rut; ?><br>
<br/>

<?php

// $persona->eliminar();

?>

<hr><br/>

<?php

$registros = $persona->listar();
while ($reg = $registros->fetch_assoc())    {
    echo "ID: " . $reg["idpersona"] . "<br>";
    echo "Nombre: " . $reg["nombre"] . "<br>";
    echo "Apellido: " . $reg["apellido"] . "<br>";
    echo "Fecha de Nacimiento: " . $reg["fechanacimiento"] . "<br>";
    echo "Rut: " . $reg["rut"] . "<br>";
    echo "Email: " . $reg["email"] . "<br>";
    echo "<hr>";
}



?>




