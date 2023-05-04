<?php // Default values

/**
 * Default values
 * PHP permite declarar parámetros con valores por defecto, de esta forma
 * si no se pasa el argumento la función usará el parámetro por defecto.
 */

// Default values
declare(strict_types=1);

/**
 * Solo se pueden establecer escalares o arrays como default values.
 * 
 * Los valores opcionales (default values) solo se pueden definir luego
 * de los valores no opcionales como en el siguiente ejemplo.
 */
function foo(int $x, int $y = 10): int // Se establece un default value en $y
{
    return $x * $y;
}

echo foo(5) . '</br>'; // Solo se pasa un argumento
