<?php // for loop

/**
 * for loop
 * Se compone de tres expresiones, la primera es evaluada solo al inicio,
 * la segunda cada que comienza el loop y la tercera al final de cada loop
 * 
 * La segunda expresión debe evaluar a true para continuar en el loop
 * La última expresión (tercera) funciona como iterador
 * 
 * Documentación: https://www.php.net/manual/es/control-structures.for.php
 */

for ($i = 0; $i <=  10; $i++) {
    echo $i;
}

/**
 * Tip de performance
 * Nunca se deben hacer llamados innecesarios dentro de un loop
 * porque pueden aumentar su complejidad
 */

$letters = ['a', 'b', 'c', 'd'];


for ($i = 0; $i <=  count($letters); $i++) {
    echo $i;
}

$lenght = count($letters); // Solo se llama la función una vez
for ($i = 0; $i <= $lenght; $i++) {
    echo $i;
}

// Sintaxis alternativa
for ($i = 0; $i <= $lenght; $i++) :
    echo $i;
endfor;
