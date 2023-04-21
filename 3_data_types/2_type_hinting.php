<?php // Type hinting

/**
 * Type Hinting (insinuación de tipos)
 * La insinuación de tipos básicamente es especificar qué data type se usa
 * como parámetro de una función, esto no significa que pueda haber
 * conversión automática de tipos si se pasa a la función valores
 * contrarios a los indicados
 */

function sum(int $x, int $y)
{
    return $x + $y;
}

echo sum(2, 3);
