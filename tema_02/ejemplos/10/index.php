<?php
//is_null devuelve falso:
//Asigna valor nulo a la variable
//Cuando la variable no ha sido definida
//Cuando este definida sin valor asignado
//Cuando la variable se ha eliminado con unset()

/*  isset():
    Determina si una variable ha sido declarada y su valor
    no es NULO
*/ 
$var = null;

if (is_null($var)){
    echo "La variable es nula<br>";
} else {
    echo "La variable no es nula<br>";
}

$var1 = null;

if (isset($var1)){
    echo "La variable es definida<br>";
} else {
    echo "La variable no es definida<br>";
}

if (isset($var2)){
    echo "La variable es definida<br>";
} else {
    echo "La variable no es definida<br>";
}

?>