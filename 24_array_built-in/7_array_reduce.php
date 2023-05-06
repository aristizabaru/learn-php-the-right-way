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

// array_reduce(array $array, callable $callback, mixed $initial = null): mixed
// -> Reduce iterativamente un array a un solo valor usando una función llamada de retorno

$invoice_items = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],
];
// Callback -> callback(mixed $carry, mixed $item): mixed
// $carry conserva el retorno de la iteración anterior;
$total = array_reduce($invoice_items, fn ($carry, $item) => $carry + $item['price'] * $item['qty']);
echo $total . '</br>';

$suma = array(1, 2, 3, 4, 5);
echo array_reduce($suma, fn ($carry, $item) => $carry + $item); // int(15)