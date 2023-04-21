<?php // Tipos de datos

/**
 * Data types
 * Los tipados en PHP son dinámicos (dynamic type) esto quiere decir que la
 * asignación de tipo ocurre dinámicamente bajo la interpretación del
 * programa, lo cual puede dar pie a errores en tiempo de ejecución,
 * en contra prestación de lenguajes como C que tienen tipado
 * estático (strict type)
 * 
 * Los tipos se dividen en Scalar Types, Compound Types y Special Types.
 * 
 * Los tipos object, callable, iterable, resourse y null serán
 * trabajados más adelante
 * 
 * Documentación oficial: https://www.php.net/manual/es/language.types.php
 */

# 4 Scalar Types
# bool
$bool = true;
# int
$int = 2;
# float
$float = 2.2;
# string
$string = 'string';


// gettype es una función incorporada que retorna el tipo de la variable
echo gettype($bool);
echo "</br>";

var_dump($bool, $int, $float, $string);
echo "</br>";

# 4 Compound Types
# array
$array = [true, 2, 2.2, 'string'];
var_dump($array);
# object
# callable
# iterable

# 2 Special Types
# resourse
# null