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

// array_chunk(array $array, int $size, bool $preserve_keys = false): array
// -> Divide un array en fragmentos

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
pretty_print_array(array_chunk($items, 2, true));
