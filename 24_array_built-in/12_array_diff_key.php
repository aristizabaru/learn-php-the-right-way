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

// array_diff_key(array $array1, array $array2, array $... = ?): array
// ->  Calcula la diferencia entre arrays empleando las claves para la comparación

$array_1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'f' => 5];
$array_2 = ['a' => 1, 'b' => 2, 'c' => 3];
$array_3 = ['d' => 5, 'e' => 6];

pretty_print_array(array_diff_key($array_1, $array_2, $array_3)); // 'f' => 5
