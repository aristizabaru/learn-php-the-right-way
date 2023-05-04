<?php // Type declaration

/**
 * Type Declaration (Type Hinting)
 * Es posible declarar los tipos que requieren los parámetros de la función
 * y el tipo de dato que retorna
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.types.declarations.php
 */

// Type Hinting

declare(strict_types=1); // Hay que declarar strict_types para forzar el type declaration

function foo(int $x, int $y): int // Type declaration de parámetros y retorno
{
    return $x * $y;
}

echo foo(5, 10) . '</br>'; // Argumentos 


// Es posible usar union types para los parámetros
function bar(int|float $x, int|float $y): int|float
{
    return $x * $y;
}

echo bar(5, 10.5); // Argumentos 
