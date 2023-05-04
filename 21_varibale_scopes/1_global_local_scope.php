<?php // Varibale scope

/**
 * Variable scope
 * El ámbito de una variable es el contexto dentro del que la variable está definida.
 * La mayor parte de las variables PHP sólo tienen un ámbito simple. Este ámbito
 * simple también abarca los ficheros incluídos y los requeridos -> Global Scope
 * 
 * Cualquier variable usada dentro de una función está, por omisión,
 * limitada al ámbito local de la función y no puede ser referenciada desde
 * el experior.
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.variables.scope.php
 */

// Ámbito global -> Global scope
$x = 5;

echo $x; // 5

// Ámbito local -> Local scope

function foo()
{
    $y = 20; // no se puede acceder fuera de la función
}

// echo $y; // Warning: Undefined variable $y 
