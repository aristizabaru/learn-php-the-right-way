<?php // functions

/**
 * Functions
 * Una función es una rutina de código que puede ser invocada en cualquier
 * momento mientras se ejecuta el script.
 * 
 * Las funciones se nombran igual que las variables, empezando por letras
 * o guión bajo '_'. No se pueden nombrar con números inciales o caracteres
 * especiales. Los nombres de funciones son insensibles a mayúsculas y
 * minúsculas.
 * 
 * Una vez declarada una función no se puede volver a declarar
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.functions.php
 */

// Función simple
/**
 * No es necesario definir una función antes de que sea referenciada,
 * excepto cuando esta esté condicionalmente definida dentro de un
 * condicional u otra función. Las funciones tienen ambito globals
 */
sum(2, 3); // puede ser llamada antes de ser declarada

function sum($a, $b)
{
    echo $a + $b;
}

// Funciones anidadas o dentro de condicionales

$condition = false;

if ($condition) {
    foo(); // No se ejecuta ya que no se cumple la condición
    function bar()
    {
        return 'Hi!'; // No se declara hasta que la condición se cumpla
    }
}

function foo()
{
    return "Hello";
}
