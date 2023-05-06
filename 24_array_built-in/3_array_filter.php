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

// array_filter(array $array, callable $callback = ?, int $flag = 0): array
// -> Filtra elementos de un array usando una función de devolución de llamada

$numbers = [1,  2,  3, 4,  5, 6, 7, 8, 9, 10];
// El filtro mantiene las keys que tienen los valores en la posición del array original
$even = array_filter($numbers, fn ($element) => $element % 2 === 0);

pretty_print_array($even);
// echo $even[0]; -> Warning: Undefined array key 0

// Para re-indexar el array se puede usar array_values
$even = array_values($even);
echo $even[0]; // 2
