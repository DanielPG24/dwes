<?php

/*

 Proyecto: proyecto 2.2 - cálculo Lanzamiento proyectiles
 Descripción: dada la velocidad y el ángulo de lanzamiento, calcular:
 - la distancia máxima 
 - el tiempo de vuelo
 - la distancia horizontal del proyectil
 - velocidad inicial horizontal
 - velocidad inicial vertical

 Alumno: Daniel Pino Gómez
 Fecha: 06/10/2026
 
*/

// Modelo

//definir constante
define("g", 9.81);

//Obtenemos los valores del formulario
$v0 = (float)$_POST['v0'] ?? 0;
$angulo_lanzamiento = (float)$_POST['angulo_lanzamiento'] ?? 0;

// Convertimos el ángulo de grados a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

//Calculamos la velocidad inicial horizontal
$v0x = $v0 * cos($angulo_radianes);

//Calculamos la velocidad inicial vertical
$v0y = $v0 * sin($angulo_radianes);

//Calculamos la altura máxima
$altura_maxima = ($v0y)**2 / (2 * g);

//Calculamos el tiempo de vuelo
$tiempo_vuelo = (2 * $v0y) / g;

//Calculamos la distancia máxima
$distancia_maxima = $v0x * $tiempo_vuelo;

// Vista
include 'views/calculos.view.php';