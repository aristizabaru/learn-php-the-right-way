<?php // Comparison operators

/**
 * Comparison operators (== === != !== <> < > >= <= <=> ?? ?:)
 * 
 * Los operadores de comparación, como su nombre lo indica,
 * permiten comparar dos valores.
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.php
 */

echo '<pre>';

// igualdad
$x = 5;
$y = 5;
var_dump($x == $y); // bool(true);
/**
 * Es true porque la validación se da después de la manipulación de tipos,
 * el sismte hace un casting sobre el string para convertirlo en int
 * y luego hace la comparación
 */
$y = '5';
var_dump($x == $y); // bool(true);

// Idéntico: hace validación de igualdad y tipos
var_dump($x === $y); // bool(false);

// Diferente: se hace manipulación de tipos
$x = 5;
$y = '5';
var_dump($x != $y); // bool(false);

// Diferente: identico a !=
$x = 5;
$y = '5';
var_dump($x <> $y); // bool(false);

// No idéntico: hace validación de igualdad y tipos
var_dump($x !== $y); // bool(true);


/**
 * Spachip operator o operador de nave espacial
 */
// 1 cuando x es mayor que y
$x = 5;
$y = 2;
var_dump($x <=> $y); // 1

// 0 cuando x es igual que y
$y = 5;
var_dump($x <=> $y); // 0

// -1 cuando x es menor que y
$y = 10;
var_dump($x <=> $y); // -1


/**
 * Fusión de null o Null Coalescing Operator ( ?? )
 * El primer operando de izquierda a derecha que exista y no sea null.
 * null si no hay valores definidos y no son null.
 * Disponible a partir de PHP 7.
 */

// La fusión de null resuelve la expresión de izq a derecha hasta tener un resultado
$y = 10;

$x = $y ?? 'not defined'; // $x = 10;
var_dump($x);

$x = $z ?? 'not defined'; // $x = 'not defined';
var_dump($x);

$x = $a ?? $z ?? null; // $x = null;
var_dump($x);

// Operador ternario: es un if/else simplificado
$y = 2;
$expresion = $y === 20 ? 'Es igual' : 'No es igual'; // Es igual
echo $expresion . '</br>';
