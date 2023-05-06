<?php // Array destructing

/**
 * Array destructing -> list()
 * Al igual que array(), no es realmente una función, es un constructor 
 * del lenguaje. list() se utiliza para asignar una lista de variables
 * en una sola operación.
 */

declare(strict_types=1);

require_once('./helper.php');

$array = [1, 2, 3];

list($a, $b, $c) = $array;


echo $a . ', ' . $b . ', ' . $c . '</br>';

// Ahora hay un shortcut para hacer un destructing []
[$d, $e, $f] = $array;
echo $d . ', ' . $e . ', ' . $f . '</br>';

// Se pueden saltar valores[]
[$g,, $h] = $array;
echo $g . ', ' . $h .  '</br>';
