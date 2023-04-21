<?php // Integer type

/**
 * Integer type
 * Un número entero (o integer) es un número del conjunto
 * ℤ = {..., -2, -1, 0, 1, 2, ...}.
 * 
 * Los integer pueden especificarse mediante notación
 * decimal (base 10), hexadecimal (base 16), octal (base 8)
 * o binaria (base 2), opcionalmente precedidos por un signo (- o +).
 * 
 * Para utilizar la notación octal, se antepone al número un 0 (cero).
 * Para utilizar la notación hexadecimal, se antepone al número 0x.
 * Para utilizar la notación binaria, se antepone al número 0b.
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.types.integer.php
 */


$a = 1234; // número decimal
$a = -123; // un número negativo
$a = 0123; // número octal (equivale a 83 decimal)
$a = 0x1A; // número hexadecimal (equivale a 26 decimal)
$a = 0b11111111; // número binario (equivale al 255 decimal)

/**
 * Desbordamiento de enteros
 * Un desbordamiento de entero ocurre cuando PHP encuentra un número fuera
 * de los límites de un integer
 */

// Valor máximo de integer en el sistema
echo "Int max: " . PHP_INT_MAX . "</br>";
// Valor mínimo de integer en el sistema
echo "Int in: " . PHP_INT_MIN . "</br>";

// Casting - operación el casting a integer

$x = (int) true; // 1
$x = (int) false; // 0
$x = (int) 5.98; // 5
$x = (int) '5.9'; // 5
$x = (int) '87'; // 87
$x = (int) '87some_text'; // 87
$x = (int) ''; // 0
$x = (int) 'test'; // 0
$x = (int) '0'; // 0


// Verficar si la variable es int
var_dump(is_int($x));
echo "</br>";
// Nueva sintaxis para mejorar lecturabilidad

$big_number = 200_000;
echo $big_number; // 200000
