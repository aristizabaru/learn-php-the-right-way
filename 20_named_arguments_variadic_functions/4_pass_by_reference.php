<?php // Pass by reference

/**
 * Pass by reference
 * Los argumentos de una función siempre son pasados por valor, pero también
 * se pueden pasar por referencia, lo cual afectaría el valor al que apunta
 * la variable
 */

declare(strict_types=1);

// Pass by reference
$x = 5;
$y = 10;

// Se especifica que el parámetro va por referencia con el operador &
function foo(int &$x, int $y): int
{
    $x = 2;
    return $x * $y;
}

echo foo($x, $y);
var_dump($x); // int(2)
