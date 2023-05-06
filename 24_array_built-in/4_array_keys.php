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

// array_keys(array $array, mixed $search_value, bool $strict = false): array
// -> Devuelve todas las claves de un array o un subconjunto de claves de un array

$array =  ['a' => 5,  'b' => 10, 'c' => 15, 'd' => '5', 'e' => 10];

// Retorna todas las keys
pretty_print_array(array_keys($array));

// Retorna todas las keys con el valor
pretty_print_array(array_keys($array, 10));

// Retorna todas las keys con el valor haciendo una comparación de identidad ===
pretty_print_array(array_keys($array, 5, true));
