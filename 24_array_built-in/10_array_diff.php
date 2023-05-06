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

// array_diff(array $array1, array $array2, array $... = ?): array
// ->  Calcula la diferencia entre arrays

/**
 * Solo compara los valores, no las keys y retorna la diferencia del primer array
 * frente los demás array pasados como argumentos
 */
$array_1 = [1, 2, 3, 4, 5];
$array_2 = [3, 4,];
$array_3 = [5, 6, 7, 8];

pretty_print_array(array_diff($array_1, $array_2, $array_3));
