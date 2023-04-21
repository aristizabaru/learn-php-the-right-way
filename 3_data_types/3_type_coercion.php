<?php // Type Juggling or Type Coercion

/**
 * Type Juggling or Type Coercion
 * La coerción de tipos sudede cuando PHP dinámicamente hace un casting sobre el tipo
 * para poder completar la operación, de no ser posible esta acción arrojará un error
 */

function sum(int $x, int $y)
{
    return $x + $y;
}

// PHP convierte el string a intenger
$value = sum(2, '3');

echo var_dump($value);
