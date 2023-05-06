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

// sort(array &$array, int $sort_flags = SORT_REGULAR): bool
// -> Ordena un array

$array = [4, 1, 3, 5, 2];
sort($array);
pretty_print_array($array);
