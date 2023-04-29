<?php // String operators

/**
 * String operators (. .=)
 * 
 * Existen dos operadores para datos tipo string. El primero es el operador
 * de concatenación ('.'), el cual retorna el resultado de concatenar sus
 * argumentos derecho e izquierdo. El segundo es el operador de asignación
 * sobre concatenación ('.='), el cual añade el argumento del lado derecho
 * al argumento en el lado izquierdo.
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.php
 */

$x = 'Hello';
$y = 'World';

echo $x . $y; // Hello World
echo $x .= 'World'; // Hello World