<?php // delcare

/** declare
 * El constructor declare es usado para fijar directivas de ejecución
 * para un bloque de código. La sintaxis de declare es similar a la
 * sintaxis de otros constructores de control de flujo:
 * 
 *  declare (directive)
 *      statement
 * 
 * La sección directive permite que el comportamiento de declare
 * sea configurado.
 * 
 * Documentación:
 * https://www.php.net/manual/es/control-structures.declare.php
 */

// declare - strict_types

/**
 * strict_types
 * Es posible habilitar el modo estricto en función de cada fichero. El el modo
 * estricto solamente será aceptada una variable del tipo exacto de la declaración
 * de tipo, o será lanzada una TypeError. La única excepción a esta regla es que
 * se podría proporcionar un integer a una función que espere un float.
 */

declare(strict_types=1);

// Type Hinting -> gracias al strict mode arrojará error si no se cumple.
function sum(int $x, int $y)
{
    return $x + $y;
}

echo sum(3, 2); // arroja un error si uno de los argumentos es string
// echo sum('3', 2); // Fatal error: Uncaught TypeError: sum()
