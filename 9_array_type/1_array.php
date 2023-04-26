<?php // Array

/**
 * Array
 * Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de
 * datos que asocia valores con claves. Este tipo se optimiza para varios
 * usos diferentes; se puede emplear como un array, lista (vector), tabla
 * asociativa (tabla hash - una implementación de un mapa), diccionario,
 * colección, pila, cola, y posiblemente más. 
 * 
 * Documentación: https://www.php.net/manual/es/language.types.array.php
 */

echo '<pre>';
/**
 * Index array
 * Los array por default son indexadas númericamente comenzando por 0
 */

$programingLanguages = ['PHP', 'Javascript', 'Python'];

// print_r es una función que imprime human readable
print_r($programingLanguages);

// Para acceder a un valor de una array se usa el index
echo $programingLanguages[2];

// Adherir un elemento al final de array
$programingLanguages[1] = 'C++';
print_r($programingLanguages);

// Insertar valor al final del array
$programingLanguages[] = 'Java';
print_r($programingLanguages);
