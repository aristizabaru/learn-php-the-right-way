<?php // Bolean type

/**
 * Boolean type
 * El booleano expresa un valor que indica verdad, puede ser verdadero (true)
 * o falso (false).
 * 
 * Documentación: https://www.php.net/manual/es/language.types.boolean.php
 */


$is_complete = false;

/**
 * Estos valores evaluan siempre a false
 */

// integers 0, -0 = false
// floats 0.0, -0.0 = false
// empty string '' = false
// string with '0' = false
// empty array [] = false
// null = false

// Evalua a true porque la varibale no tiene una cadena vacía
if ($is_complete) {
    echo "complete";
} else {
    echo "incomplete";
}
