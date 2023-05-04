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
 * Nota: Es mala práctica referenciar en un scope local varibales globales directamente
 * usando la palabra reservada 'global' o la superglobal $GLOBALS
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.variables.scope.php#language.variables.scope.global
 */

// global keyword
$a = 1;
$b = 2;

function suma()
{
    global $a, $b; // global permite referenciar variables globales en un scope local

    $b = $a + $b;
}

suma();
echo $b . '</br>'; // 3

// $GLOBALS -> Superglobal que contiene todas las varibales globales en un array

$a = 1;
$b = 2;
function suma_2()
{
    // Uso de la superglobal $GLOBALS para acceder a las variables globales
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

suma_2();
echo $b; // 3
