<?php // Callback function


/**
 * Callback function
 * Cuando una función anónima es pasada a otra función como argumento
 * y es ejecutada dentro de la función, esta función anónima es llamada
 * 'callback function'
 */


declare(strict_types=1);

/**
 * Se usa callable para especificar una función como argumento.
 * 
 * NOTA
 * Cualquier función es de tipo callable, bien tengan nombre o sean
 * anónimas, pero 'solo las anónimas' son intancias de la clase Closure,
 * por lo tanto también se puede especificar el type hint como de
 * tipo clousure.
 */
$sum = function (callable $func, int|float ...$numbers): int|float {
    // La función se implementa como callback
    return $func(array_sum($numbers));
};
/**
 * Hay varias formas de pasar el callback function como argumento,
 * se puede con el nombre de la función, el nombre de una varible
 * cuyo valor tenga la función anónima o directamente la definición
 * de la Lambda
 */

// TIPO 1
function foo($element)
{
    // Esta callback se aplicará a el resultado de $sum
    return $element * 2;
}
// Si la función tiene nombre se pasa el nombre como string
echo $sum('foo', 1, 2, 3, 4) . '</br>';

// TIPO 2
$foo = function ($element) {
    return $element * 4;
};
// Si la función está asignada a una variable se pasa la variable
echo $sum($foo, 1, 2, 3, 4) . '</br>';

// TIPO 3
// Se pasa directamente la función anónima o Lambda
echo $sum(function ($element) {
    return $element * 8;
}, 1, 2, 3, 4);
