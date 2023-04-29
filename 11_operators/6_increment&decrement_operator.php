<?php // Increment and decrement operators

/**
 * Increment and decrement operators (++ --)
 * PHP soporta operadores estilo C de pre- y post-incremento y decremento.
 * Los operadores unitarios de incremento y decremento solo afectan
 * numbers and strings 
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.php
 */

echo '<pre>';

// pre-incremento: primero incrementa y luego resuelve x
$x = 5;
echo ++$x . "\n"; // 6

// post-incremento: primero resuelve x y luego incrementa
$x = 5;
echo $x++ . "\n"; // 5

// pre-decremento: primero decrementa y luego resuelve x
$x = 5;
echo --$x . "\n"; // 4

// post-decremento: primero resuelve x y luego decrementa
$x = 5;
echo $x++ . "\n"; // 5

// El decremento en string no tiene efecto pero el incremento sí
$x = 'abc';

echo --$x . "\n"; // abc
echo ++$x . "\n"; // abd -> incrementa el último caracter
