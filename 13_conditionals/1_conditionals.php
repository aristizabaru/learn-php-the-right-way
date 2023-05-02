<?php // Conditionals statements (if else elseif)

/**
 * Estructuras de control
 * Las estructuras de control permiten agrupar varias declaraciones
 * para controlar el flujo de un programa en la ejecución.
 * 
 * Las declaraciones se agrupan usando corchetes {}, donde una
 * declaración se entienda como toda línea de código que
 * termina siempre en ;
 * 
 * Documentación: https://www.php.net/manual/es/language.control-structures.php
 */

/**
 * Condicionales (if else elseif)
 * Las estructuras condicionales evaluan las expresiones entre los paréntisis
 * a su valor booleano. Si la expresión se evalúa como true, PHP ejecutará
 * la sentencia dentro de los corchetes y si se evalúa como false la ignorará.
 */

echo '<pre>';

$condition = true;

// Si solo hay una declaración (statement) se pueden omitir los corchetes
if ($condition)
    echo "Hola" . '</br>'; // Por lecturabilidad es buena práctica usar los corchetes

$score = 85;

if ($score >= 90) {
    echo 'A' . '</br>';
} else { // else se usa como alternativa de ejecución si la condición falla
    echo 'F' . '</br>';
}

$score = 56;

if ($score >= 90) {
    echo 'A' . '</br>';
} elseif ($score >= 50) { // elseif ofrece otra alternativa de ejecución si falla la primera condición
    echo 'B' . '</br>';
} else {
    echo 'C' . '</br>';
}
