<?php // Anonymous functions or Lambda functions

/**
 * Anonymous functions or Lambda functions
 * Las funciones anónimas son aquellas que no tienen nombre y operan
 * como expresiones, deben terminar en ;
 * 
 * Documentación:
 * https://www.php.net/manual/es/functions.anonymous.php
 */

declare(strict_types=1);


// Ejemplo de una función anónima
function (int|float ...$numbers): int|float {
    return array_sum($numbers);
};

/**
 * Las funciones anónimas como son expresiones pueden ser asignadas a varibales,
 * pasarlas como argumentos a otras funciones e incluso retornarlas de otras
 * funciones
 */

// Ejemplo de función anónima o lambda function asignada a una varibale

$sum = function (int|float ...$numbers): int|float {
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 4); // 10