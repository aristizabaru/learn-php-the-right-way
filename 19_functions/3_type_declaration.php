<?php // Type declaration

/**
 * Type declaration
 * Es posible definir la declaración de tipo tanto en los parámetros
 * de las funciones como en su retorno.
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.types.declarations.php
 */

// Para evitar la conversión de tipos es imperativo declarar el modo estricto
function sum(int $x, int $y): int // Así se especifica el tipo de return
{
    return $x + $y;
}

var_dump(sum(2, '3')); // int(5) -> No hay error porque PHP convierte el tipo

declare(strict_types=1);

function sum_2(int $x, int $y): int
{
    return $x + $y; // No admite otro tipo de dato ni en el return ni en el parámetro
}
var_dump(sum_2(2, 3));

// Se pueden especificar otros tipos de datos de retorno

// Usando el operador nullable permite retornar null o int
function sum_3(): ?int
{
    return null;
}

// Se puede usar void para indicar que la función no retorna nada
function sum_4(): void
{
    return; // Se puede o no usar el return en una function con retorno void
}

// Usando el operador | se pueden exspecificar varios tipos de datos -> PHP 8.0
// Esto se llama union types
function sum_5(): int|float|array
{
    return 3.2;
}

// Con mixed se determina que el return puede ser cualquier tipo de dato -> PHP 8.0
function sum_6(): mixed
{
    return 3.2;
}
