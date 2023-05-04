<?php // Named Arguments

/**
 * Named Arguments
 * PHP soporta en la invocación de funciones los named arguments,
 * de esta forma se pueden invocar la función nombrando
 * los argumentos que podrían estar en orden aleatorio siempre
 * y cuando hagan referencia a los nombres de los parámetros (variables).
 * 
 * Siempre van primero los argumentos posicionales y luego
 * los 'named arguments'
 * 
 * Documentación:
 * https://www.php.net/manual/es/functions.arguments.php#functions.named-arguments
 */

// Implementación de named arguments

declare(strict_types=1);

function display_age_by_name(string $name, int $age): void
{
    echo "$name tiene $age años";
}

// Se emplea named arguments para pasar los valores
display_age_by_name(age: 38, name: 'Andrés'); // 'Andrés tiene 38 años'

/**
 * Ejemplo práctico
 * Hay funciones incorporadas o que se podrían construir donde se deben pasar
 * muchos parámetros de configuración, pero donde para efectos prácticos
 * solo se necesitan cambiar algunos
 */

// Solo sequería cambiar el último parámetro y se tuvo que enviar todos
setcookie('foo', 'bar', 0, '', '', false, true);

// Con named argument solo se especifica y los otros seran tomados con su default value
setcookie(name: 'foo', value: 'bar', httponly: true);
