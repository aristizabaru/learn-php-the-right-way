<?php // Bitwise operators

/**
 * Bitwise operators - operadores de bit a bit (& | ^ ~ << >>)
 * Los operadores bit a bit permiten la evaluación y la manipulación
 * de bits específicos dentro de un integer. Si se da la operación
 * entre floats estos son casteados a integers.
 * 
 * Si se da la operación entre strings, se manipulará el valor
 * ASCII de estas cadenas
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.php
 */
echo '<pre>';

// & -> Los bits que están activos en ambos $a y $b son activados
$x = 6;
$y = 3;

// 110 -> 6
// &
// 011 -> 3
// ---
// 010 -> 2

var_dump($x & $y); // 2

// | -> Los bits que están activos ya sea en $a o en $b son activados
$x = 6;
$y = 3;

// 110 -> 6
// |
// 011 -> 3
// ---
// 111 -> 7

var_dump($x | $y); // 7

// ^ -> Los bits que están activos en $a o en $b, pero no en ambos, son activados
$x = 6;
$y = 3;

// 110 -> 6
// ^
// 011 -> 3
// ---
// 101 -> 5

var_dump($x ^ $y); // 7

// ~ -> Los bits que están activos en $a son desactivados, y viceversa
$x = 6;
$y = 3;

// ~110 -> 001 -> 1

// 001 -> 1
// &
// 011 -> 3
// ---
// 001 -> 1

var_dump(~$x & $y); // 1

// << -> Desplaza los bits de $a, $b pasos a la izquierda (cada paso quiere decir "multiplicar por dos")
$x = 6;
$y = 2;

// 110 -> 6
// <<
// 11000
// ---
// 101 -> 24

var_dump($x << $y); // 24


// >> -> Desplaza los bits de $a, $b pasos a la derecha (cada paso quiere decir "dividir por dos")
$x = 6;
$y = 2;

// 110 -> 6
// >>
// 000
// ---
// 000 ->

var_dump($x >> $y); // 1