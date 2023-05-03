<?php // return

/**
 * return
 * return devuelve el control del programa al módulo que lo invoca.
 * La ejecución vuelve a la siguiente expresión después del
 * módulo que lo invoca.
 * 
 * Documentación:
 * https://www.php.net/manual/es/function.return.php
 */

// return devuelve el control al módulo o ambiente que lo invoca
function sum($x, $y)
{
    return $x + $y; // si no hay un parámetro en return este devuelve 'null'
}

echo sum(2, 3);

return; // termina la ejecución del programa y no ejecuta las siguentes lineas

echo '</br>';
echo 'Hello World';
