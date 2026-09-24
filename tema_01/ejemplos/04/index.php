<?php
    $nombre = "Juan";
    $apellidos = "Perez Lopez";
    $edad = 30;
    $poblacion = "Madrid";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">;
    <meta name="viewport" content="width-device-width" , initial-scale="1.0">
    <title>Primer ejemplo</title>
</head>

<body>
    <h1>Ficha de Alumnos:</h1>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Apellidos: <?php echo $apellidos; ?></p>;
    <p>Edad: <?php echo $edad; ?></p>
    <p>Poblacion: <?php echo $poblacion; ?></p>
</body>

</html>