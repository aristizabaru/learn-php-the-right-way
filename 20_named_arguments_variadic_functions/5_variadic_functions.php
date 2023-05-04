<?php // Variadic functions

/** Variadic Functions
 * Para declarar funciones variadicas se usa el operador 'splat' que
 * permite pack y unpack arrays
 */

declare(strict_types=1);

// Variadic function
/**
 * El splat operator empaqueta los valores en un array $nums.
 * También es posible hacer un type hint de los valores empaquetados
 */
function sum(int|float $x, int|float $y, int|float ...$values): int|float
{
    $result = $x + $y + array_sum($values); // array_sum suma los valores de un array
    return $result;
}

echo sum(5, 4, 5, 6, 20); // Se pasan dos argumentos obligatorios y los opcionales
