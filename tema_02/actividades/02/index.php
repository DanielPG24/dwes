<?php

echo "<h1>Ejercicios de PHP</h1>";

/*
   EJERCICIO 1 - Conversiones de datos en expresiones
*/

echo "<h2>Ejercicio 1. Conversiones de datos en expresiones</h2>";

$entero = 10;
$cadenaNumero = "5";
$float = 2.5;
$cadena = "Hola";
$booleano = true;

// 1. Multiplicar entero con cadena que contiene un número inicial
$resultado1 = $entero * $cadenaNumero;

echo "<h3>1. Multiplicar entero con cadena numérica</h3>";
echo "Expresión: \$entero * \$cadenaNumero<br>";
echo "Resultado: " . $resultado1 . "<br>";
echo "Tipo de dato: " . gettype($resultado1) . "<br><br>";

// 2. Sumar entero con cadena con número inicial
$resultado2 = $entero + $cadenaNumero;

echo "<h3>2. Sumar entero con cadena numérica</h3>";
echo "Expresión: \$entero + \$cadenaNumero<br>";
echo "Resultado: " . $resultado2 . "<br>";
echo "Tipo de dato: " . gettype($resultado2) . "<br><br>";

// 3. Sumar entero con float
$resultado3 = $entero + $float;

echo "<h3>3. Sumar entero con float</h3>";
echo "Expresión: \$entero + \$float<br>";
echo "Resultado: " . $resultado3 . "<br>";
echo "Tipo de dato: " . gettype($resultado3) . "<br><br>";

// 4. Concatenar entero con cadena
$resultado4 = $entero . $cadena;

echo "<h3>4. Concatenar entero con cadena</h3>";
echo "Expresión: \$entero . \$cadena<br>";
echo "Resultado: " . $resultado4 . "<br>";
echo "Tipo de dato: " . gettype($resultado4) . "<br><br>";

// 5. Sumar entero con booleano
$resultado5 = $entero + $booleano;

echo "<h3>5. Sumar entero con booleano</h3>";
echo "Expresión: \$entero + \$booleano<br>";
echo "Resultado: " . $resultado5 . "<br>";
echo "Tipo de dato: " . gettype($resultado5) . "<br><br>";


/*
   EJERCICIO 2 - is_null()
*/

echo "<h2>Ejercicio 2. is_null()</h2>";

$valor1 = null;
$valor2 = NULL;
$valor3 = null;

$valor4 = 10;
$valor5 = "Hola";
$valor6 = false;

echo "<h3>Valores verdaderos (is_null() devuelve TRUE)</h3>";

echo "\$valor1 = null → ";
var_dump(is_null($valor1));

echo "<br>\$valor2 = NULL → ";
var_dump(is_null($valor2));

echo "<br>\$valor3 = null → ";
var_dump(is_null($valor3));

echo "<h3>Valores falsos (is_null() devuelve FALSE)</h3>";

echo "\$valor4 = 10 → ";
var_dump(is_null($valor4));

echo "<br>\$valor5 = \"Hola\" → ";
var_dump(is_null($valor5));

echo "<br>\$valor6 = false → ";
var_dump(is_null($valor6));


/*
   EJERCICIO 3 - isset()
*/

echo "<h2>Ejercicio 3. isset()</h2>";

$nombre = "Juan";
$edad = 20;
$numero = 10;

echo "<h3>Valores verdaderos (isset() devuelve TRUE)</h3>";

echo "\$nombre = \"Juan\" → ";
var_dump(isset($nombre));

echo "<br>\$edad = 20 → ";
var_dump(isset($edad));

echo "<br>\$numero = 10 → ";
var_dump(isset($numero));

echo "<h3>Valores falsos (isset() devuelve FALSE)</h3>";

$variableNoExiste = null;
$otraVariableNoExiste = null;
$terceraVariableNoExiste = null;

echo "\$variableNoExiste = null → ";
var_dump(isset($variableNoExiste));

echo "<br>\$otraVariableNoExiste = null → ";
var_dump(isset($otraVariableNoExiste));

echo "<br>\$terceraVariableNoExiste = null → ";
var_dump(isset($terceraVariableNoExiste));


/*
   EJERCICIO 4 - empty()
*/

echo "<h2>Ejercicio 4. empty()</h2>";

$vacío1 = "";
$vacío2 = 0;
$vacío3 = false;

echo "<h3>Valores verdaderos (empty() devuelve TRUE)</h3>";

echo "\$vacío1 = \"\" → ";
var_dump(empty($vacío1));

echo "<br>\$vacío2 = 0 → ";
var_dump(empty($vacío2));

echo "<br>\$vacío3 = false → ";
var_dump(empty($vacío3));

echo "<h3>Valores falsos (empty() devuelve FALSE)</h3>";

$lleno1 = "Hola";
$lleno2 = 25;
$lleno3 = true;

echo "\$lleno1 = \"Hola\" → ";
var_dump(empty($lleno1));

echo "<br>\$lleno2 = 25 → ";
var_dump(empty($lleno2));

echo "<br>\$lleno3 = true → ";
var_dump(empty($lleno3));

?>