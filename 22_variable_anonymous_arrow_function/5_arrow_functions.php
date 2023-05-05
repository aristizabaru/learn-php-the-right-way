<?php // Arrow functions

/** Arrow functions
 * Las Arrow functions fueron introducidas en PHP 7.4 y es una versión más limpia
 * de las funciones anónimas. La sintaxis de las funciones anónimas es especialmente
 * utilizada como una callback function directamente en el argumento.
 * 
 * Las funciones flecha no pueden tener void como valor de retorno.
 * 
 * Documentación:
 * https://www.php.net/manual/es/functions.arrow.php
 */

declare(strict_types=1);

echo '<pre>';

$array = [1, 2, 3, 4];

// Usando una función anónima
$array_anonymous = array_map(function (int|float $element): int|float {
    return $element * 2;
}, $array);

print_r($array_anonymous);

// Usando una arrow function
/**
 * Una arrow function no puede ser de tipo void, siempre debe retornar un valor,
 * adicional solo admite una expresión, no se pueden tener varias declaraciones
 * entre paréntesis como lo hace la función anónima.
 * 
 * También a diferencia de las funciones anónimas están no necesitan emplear
 * el biding con el scope padre usando use(), sino que automáticamente tienen
 * acceso al scope del padre. Gracias a esto en el ejemplo la arrow function
 * puede acceder a $x
 */

$x = 2;

$array_arrow = array_map(
    fn (int|float $element): int|float => $element * $x,
    $array
);

print_r($array_arrow);
