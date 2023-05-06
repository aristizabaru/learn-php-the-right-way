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

// array_combine(array $keys, array $values): array
// -> Crea un nuevo array, usando una matriz para las claves y otra para sus valores

$array_1 = ['a', 'b', 'c', 'd', 'e'];
$array_2 = [1,  2,  3, 4,  5];
// Los array deben ser del mismo largo
pretty_print_array(array_combine($array_1, $array_2));
