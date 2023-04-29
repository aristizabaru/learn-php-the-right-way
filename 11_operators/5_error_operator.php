<?php // Error control operator

/**
 * Error control operator (@)
 * PHP soporta un operador de control de errores: el signo de arroba (@).
 * Cuando se antepone a una expresión en PHP, cualquier mensaje de error
 * que pueden ser generado por esa expresión será ignorado.
 * 
 * SE DEBE TENER CUIDADO EN SU IMPLEMENTACIÓN
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.php
 */


// Con el error control operator el warning será ignorado y no se mostrará 
$x = @file('foo.txt'); //Warning: file(foo.txt): Failed to open stream
