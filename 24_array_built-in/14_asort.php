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

// asort(array &$array, int $sort_flags = SORT_REGULAR): bool
// -> Ordena un array y mantiene la asociación de índices

// Elimina el indice y valor 'f' => 4 porque se repite
$array = ['f' => 4, 'z' => 1,  'x' => 3, 'f' => 5, 'b' => 2];
asort($array);
pretty_print_array($array);
