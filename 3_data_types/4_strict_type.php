<?php // Strict Types

/**
 * Strict Types
 * El constructor declare permite fijar directivas para un bloque de código,
 * usando el parámetro strict_types se adquiere un modo estricto que
 * reportará en tiempo de compilación cualquier error de coerción
 * de tipado
 */

declare(strict_types=1);

/**
 * El type hinting se hace efectivo, invalidando cualquier parámetro
 * con tipo diferente al indicado
 */
function sum(int $x, int $y)
{
    return $x + $y;
}

// Esto sería un errero en modo estricto
// $value = sum(2, '3');

echo var_dump($value);
