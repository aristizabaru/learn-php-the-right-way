<?php // declare

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

// declare - ticks

/**
 * Un tick es un evento que ocurre para cada sentencia tickable N de bajo
 * nivel ejecutada por el intérprete dentro del bloque declare. El valor
 * para N se especifica usando ticks=N dentro del bloque de declare de la
 * sección directive.
 * 
 * No todas las sentencias son tickable. Por lo general, expresiones de
 * condición y expresiones de argumento no son tickables.
 * 
 * Los eventos que ocurren en cada tick se especifican mediante la
 * register_tick_function(). Ver el ejemplo abajo para más detalles.
 * Tener en cuenta que más de un evento puede ocurrir por cada tick.
 */


declare(ticks=3); // declara cada cuantos ticks ejecuta el tick_handler

echo '<pre>';

function tick_handler()
{
    echo "tick_handler() llamado\n";
}

register_tick_function('tick_handler'); // se registra el tick_handler

$i = 0; // Estas expresiones también generan ticks 
$length = 6;

while ($i < $length) {
    echo $i++ . "\n";
}
