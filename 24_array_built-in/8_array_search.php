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

// array_search(mixed $needle, array $haystack, bool $strict = false): mixed
// -> Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito

$array = ['s', 1, 0, false, 4, '1',  6, []];
echo array_search(1, $array, true) . '</br>'; // 1
echo array_search('1', $array, true) . '</br>';; // 5
echo array_search('1', $array) . '</br>';; // 1
echo array_search(false, $array) . '</br>';; // 2 -> no hay comparación de tipos
echo array_search(false, $array, true) . '</br>';; // 3
