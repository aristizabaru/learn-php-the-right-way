<?php // Logical operators

/**
 * Operadores lógicos (&& || ! and or xor)
 * Son utilizados para comparar expresiones lógicas que devuelve
 * un resultado de verdadero o falso
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.php
 */


// &&: evalua a true si solo las dos expresiones resuelven a true
$x = true;
$y = false;
var_dump($x && $y); // false

// ||: evalua a true si uno de las dos expreiones resuelve a true
$x = true;
$y = false;
var_dump($x || $y); // true

// !: negación
$x = true;
$y = false;
var_dump(!$x || $y); // false

/**
 * Precedencia
 * Los operadores 'and' y 'or' hacen lo mismo que '&&' y '||', la diferencia
 * está en la precedencia que es mayor en '&&' y '||'
 */

$x = true;
$y = false;

// Tiene más precedencia la asignación que and por lo que $z resuelve a true
$z = $x and $y;
var_dump($z); // true

// Tiene más precedencia && por lo que $z resuelve a false
$z = $x && $y;
var_dump($z); // false

/**
 * Cortocircuito (short circuiting)
 * Es un concepto asociado a los operadores lógicos donde si se resuelve
 * la condición con solo la evaluación de una expresión, no será
 * necesario resolver la siguiente
 */

function word()
{
    echo 'Hello World ';

    return false;
}

var_dump(true || word()); // bool(true) -> word() nunca es ejecutada por cortocircuito
var_dump(true && word()); // Hello World bool(false) -> word() es ejecutada

// Xor: true si $x o $y es true, pero no ambos.

$x = true;
$y = true;
var_dump($x xor $y); //bool(false)

$y = false;
var_dump($x xor $y); //bool(true)