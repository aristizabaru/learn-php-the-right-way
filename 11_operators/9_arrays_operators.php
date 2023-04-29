<?php // Arrays operators

/**
 * Arrays operators (+ == === != !=== <>)
 * Permiten operaciones entre arrays simples
 * 
 * Documentación: https://www.php.net/manual/es/language.operators.php
 */
echo '<pre>';


/**
 * Operador + en arrays
 * El operador + devuelve el array del lado derecho añadido al array
 * del lado izquierdo; para las claves que existan en ambos arrays,
 * serán utilizados los elementos del array de la izquierda y serán
 * ignorados los elementos correspondientes del array de la derecha.
 * 
 * Opera como una unión
 */

// Cuando la clave es la misma ignora elementos array derecho
$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'e', 'f'];
print_r($array1 + $array2); // ['a', 'b', 'c']

// $array2 tiene una clave más que $array1, este valor es el único copiado
$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'e', 'f', 'g'];
print_r($array1 + $array2); // ['a', 'b', 'c', 'g'];

// Si las claves de la derecha son distintas, se copia el elemento de este array
$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'h' => 'e', 'f', 'g'];
print_r($array1 + $array2); // ['a', 'b', 'c', 'e'];

$array1 = ['a', 'b', 'c'];
$array2 = ['d', '6' => 'e', 'f', 'g'];
print_r($array1 + $array2); // ['a', 'b', 'c', 'e', 'f', 'g']; La clave se castea a int


/**
 * Comparación de Arrays (== ===)
 */

// == Igualdad -> compara keys y valores, pero no tipo de dato.
$array1 = [1, 2, 3];
$array2 = [1, 2, '3'];
var_dump($array1 == $array2); // bool(true)

// === Idéntico -> compara keys, valores y tipos de dato.
$array1 = [1, 2, 3];
$array2 = [1, 2, '3'];
var_dump($array1 === $array2); // bool(false)

// Caso especial == ===
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['a' => 1,  'c' => 3, 'b' => 2];
var_dump($array1 == $array2); // true -> no revisa el orden de las key y values
var_dump($array1 === $array2); // false -> revisa el orden de las key y values

/**
 * Los operadores de no igualdad (!= !=== <>) se rigen bajo las mismas reglas
 * en los array que los de igualdad (== ===)
 */
