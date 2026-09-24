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
    <?php
        // Mostrar los valores de las variables en HTML
        echo "<b>Nombre:</b>". $nombre . "<br>";
        echo "<b>Apellidos:</b>". $apellidos . "<br>";
        echo "<b>Edad:</b>". $edad . "<br>";
        echo "<b>Poblacion:</b>". $poblacion . "<br>";
    ?>
</body>

</html>