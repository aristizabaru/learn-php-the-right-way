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

// array_map(callable $callback, array $array1, array $... = ?): array
// -> Aplica un callback a los elementos de los arrays dados

$array =  ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6];

// Si se pasa un array a array_map este mantiene las keys
$array = array_map(fn ($element) => $element * 2, $array);
pretty_print_array($array);


$array_1 =  ['a' => 1, 'b' => 2, 'c' => 3];
$array_2 =  ['d' => 4, 'e' => 5, 'f' => 6];
// Si se pasan dos arrays a array_map este re-indexa el array
$array = array_map(fn ($element_1, $element_2) => $element_1 * $element_2, $array_1, $array_2);
pretty_print_array($array);
