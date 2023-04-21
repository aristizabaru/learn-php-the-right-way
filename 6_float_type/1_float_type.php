<?php // Float type

/**
 * Float type
 * Todo número con decimales.
 * 
 * Advertencia - Precisión del punto flotante
 * Los números de punto flotante tienen una precisión limitada. Los numeros racionales
 * que son representables exactamente como números de punto flotante en base 10,
 * como 0.1 o 0.7, no tienen una representación exacta como números de punto
 * flotante en base 2, que es la base empleada internamente, sin importar el
 * tamaño de la mantisa. Por lo tanto, no se pueden convertir en sus
 * equivalentes binarios internos sin una pequeña pérdida de precisión.
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.types.float.php
 */


$a = 1.234;
$b = 1.2e3; // con exponente
$c = 7E-10;
$d = 1_234.567; // a partir de PHP 7.4.0 con sintaxis para lecturabilidad

/**
 * Desbordamiento de flotantes
 * Un desbordamiento de un flotante ocurre cuando PHP encuentra un número
 * fuera de los límites que puede representar
 */

// Valor máximo de float en el sistema
echo "Float max: " . PHP_FLOAT_MAX . "</br>";
// Valor mínimo de float en el sistema
echo "Float min: " . PHP_FLOAT_MIN . "</br>";

// Casting - operación el casting a float

$x = (float) true; // 1
$x = (float) false; // 0
$x = (float) 5; // 5
$x = (float) '5.9'; // 5
$x = (float) '87'; // 87
$x = (float) '87some_text'; // 87
$x = (float) ''; // 0
$x = (float) 'test'; // 0
$x = (float) '0'; // 0



// Verficar si la variable es float
var_dump(is_float($x));
echo "</br>";
