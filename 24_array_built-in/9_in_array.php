<?php // Array's built-in functions

/**
 * Array's built-in functions
 * PHP ofrece una gama de funciones incorporadas que permiten la manipulación
 * de arrays respondiendo a tareas repetitivas. Para consultar la lista
 * completa de funciones disponibles, por favor remitirse a la documentación
 * 
 * Documentación:
 * https://www.php.net/manual/es/ref.array.php
 */

declare(strict_types=1);

require_once './helper.php';

// in_array(mixed $needle, array $haystack, bool $strict = false): bool
// ->  Comprueba si un valor existe en un array

$array = ['s', 1, 0,  4, '1',  6, []];
var_dump(in_array(1, $array, true)); // true
var_dump(in_array('1', $array, true)); // true
var_dump(in_array(20, $array)); // false
var_dump(in_array(false, $array)); // true -> No existe en el array, no se especifico validación estricta ===
