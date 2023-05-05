<?php // Varibale functions

/**
 * Variable Functions
 * PHP admite el concepto de funciones variables. Esto significa que si
 * un nombre de variable tiene paréntesis anexos a él, PHP buscará una
 * función con el mismo nombre que lo evaluado por la variable, e
 * intentará ejecutarla. Entre otras cosas, esto se puede usar para
 * implementar llamadas de retorno, tablas de funciones, y así
 * sucesivamente.
 * 
 * Documentación:
 * https://www.php.net/manual/es/functions.variable-functions.php
 */

declare(strict_types=1);

function sum(int|float ...$numbers): int|float
{
    return array_sum($numbers);
}

$x = 'sum';

/**
 * Cuando PHP detecta paréntesis al lado de una variable evalua
 * si hay una función bajo ese nombre y llama esa función
 */
echo $x(1, 2, 3, 4) . '</br>';

/**
 * Para asegurarse que la función variable puede ser llamada se puede usar
 * la función incorporada is_callable para verificar que la variable
 * puede ser llamada como función
 */

if (is_callable($x)) {
    echo 'Callable' . '</br>';
    echo $x(1, 2, 3, 4);
} else {
    echo 'Not Callable';
}
