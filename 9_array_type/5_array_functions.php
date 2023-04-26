<?php // Array functions

/**
 * Array functions
 * PHP posee un set de funciones pre establecidas en el sistema que permiten
 * la manipulación de arrays fácilmente
 * 
 * Documentación: https://www.php.net/manual/es/book.array.php
 */

echo '<pre>';
// Algunas funciones
$programingLanguages = ['PHP', 'Javascript', 'Python'];

// Valida si el valor está definido
isset($programingLanguages[3]); // false

// Devuelve el largo del array
count($programingLanguages); // 3

// Inserta valores al final del array
// array_push tiene el mismo efecto que $array[] = 'value'
array_push($programingLanguages, 'C++', 'Java');
print_r($programingLanguages);

// Elimina el último elemento del array y lo retorna
array_pop($programingLanguages);
print_r($programingLanguages);

// Elimina el primer elemento del array y lo retorna
array_shift($programingLanguages);
print_r($programingLanguages);

// Elimina un elemento del array sin re indexarla
$array = ['a', 'b', 50 => 'c', 'd', 'e'];
unset($array[0]);
print_r($array);

// Valida que una key exista
var_dump(array_key_exists('Javascript', $programingLanguages));
