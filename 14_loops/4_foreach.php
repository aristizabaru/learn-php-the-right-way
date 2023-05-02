<?php // foreach loop

/**
 * foreach
 * El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
 * foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar
 * usarlo con una variable de un tipo diferente de datos o una variable
 * no inicializada
 * 
 * Documentación: https://www.php.net/manual/es/control-structures.foreach.php
 */


$letters = ['a', 'b', 'c', 'd'];

//foreach -> En cada iteración el puntero interno se mueve al siguiente elemento
foreach ($letters as $letter) {
    echo $letter . '</br>';
}

// foreach iterando sobre las keys
foreach ($letters as $key => $letter) {
    echo $key . ':' . $letter . '</br>';
}

/**
 * Valores por referencia
 * El ciclo foreach asigna las variables internas por valor, no por referencia
 * por lo que el array original no es modificado, sin embargo se puede
 * pasar el valor por referencia a la variable interna y así
 * modificar el array original
 */

// asignando el valor $letter por referencia
foreach ($letters as &$letter) {
    $letter = 'A';
    echo $letter . '</br>'; // AAAA
}

/**
 * Nota
 * La variable interna del loop no es destruida cuando se termina su ejecución
 * por lo que podría ocasionar problemas al escribir el código. Se debe
 * tener muy encuenta este detalle
 */

echo 'El valor de la variable se mantiene: ' . $letter; // A

// La mejor práctica sobre todo si se uso por referencia es destruirla
unset($letter); // destruye la variabl
//echo $letter; -> Warning: Undefined variable


// Sintaxis alternativa
foreach ($letters as $letter) :
    echo $letter . '</br>';
endforeach;
