<?php // Asigment operators

/**
 * Asigment operators ( = += -= *= /= %= **=)
 * El operando de la izquierda se establece con el valor de
 * la expresión de la derecha
 * 
 * Siempre estas expresiones se resuelven de derecha a izquierda
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.php
 */

$x = 5; // $x asume el valor de 5

$x = $y = 4; // $x y $y asumen el valor de 4

// Operadores combinados (combined operators)

$x = 5;
$x += 5; // Evalua lo mismo que la expresión $x = $x + 5;
