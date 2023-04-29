<?php // Arithmetic operators

/**
 * Arithmetic operators ( + - * / % ** )
 * Permiten completar operaciones aritméticas simples
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.php
 */

$x = 20;
$y = 10;

var_dump($x - $y);

// usando el operador unario + o - se puede castear un string a int
$z = '20';
var_dump(+$z); // int(20)
/**
 * Una división siempre da un int mientras los dos operandos sean int.
 * Solo si la división no es exacta o alguno de los operandos es de tipo float
 * el resultado será float
 */
var_dump($x / $y); // int(2)
$x = 3;
var_dump($y / $x); // float(3.3333333333333335)

// La división por cero genera un error fatal
$x = 0;
// var_dump($y / $x); Fatal error: Uncaught DivisionByZeroError

/**
 * Para evitar el error se puede usar una función incorporada en PHP 8.0,
 * la función fdiv usada para divisón entre flotantes daría como resultado float(INF)
 */

var_dump(fdiv($y, $x));

/**
 * El operador módulo siempre hace un casting a int antes de ejecutarse,
 * por lo que si se quiere aplicar módulo en floats se debe usar
 * la función incorporada fmod
 */

$x = 10.2;
$y = 2.4;

var_dump($x % $y); // int(0)
var_dump(fmod($x, $y)); // float(0.5999999999999996)

// El operador ** es exponente

var_dump(10 ** 2); //int(104)