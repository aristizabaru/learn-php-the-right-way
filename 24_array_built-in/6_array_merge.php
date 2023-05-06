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

// array_merge(array $array1, array $... = ?): array
// -> Combina dos o más arrays

$array_1 =  [1,  2,  3];
$array_2 =  [1,  2,  3];
$array_3 =  [1,  2,  3];

pretty_print_array(array_merge($array_1, $array_2, $array_3));

// El key se mantiene cuando no es int, pero se puede sobreescribir si se repite
$array_1 =  [1,  2,  3];
$array_2 =  [1,  'b' => 2,  3]; // 'b' => 2 no entrará en el nuevo array
$array_3 =  [1,  2, 'b' => 10]; // 'b' => 10 sobrescribe la key anterior

pretty_print_array(array_merge($array_1, $array_2, $array_3));
