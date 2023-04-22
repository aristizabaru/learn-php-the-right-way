<?php // String data type

/**
 * String data type
 * Un string, o cadena, es una serie de caracteres donde cada carácter
 * es lo mismo que un byte. Esto significa que PHP solo admite un
 * conjunto de 256 caracteres, y de ahí que no ofrezca soporte
 * nativo para Unicode.
 * 
 * Documentación: https://www.php.net/manual/es/language.types.string.php
 */

/**
 * Comillas dobles y simples
 * Ambas sintaxis generan strings en PHP, sin embargo las comillas simples
 * no análisis de variables y los caracteres especiales como salto de
 * línea deben de ser escapados para su interpretación como \\n
 */

$first_name = 'Will';
// Uso de variable dentro de comilla doble
$last_name = "$first_name Smith";

echo $last_name . "</br>";

// Es posible acceder y cambiar caracter de una cadena en PHP
$base_string = "hola";
echo $base_string . "</br>";
$base_string[0] = "H";
echo $base_string . "</br>";
