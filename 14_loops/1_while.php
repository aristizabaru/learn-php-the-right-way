<?php // While loop

/**
 * While loop
 * El While Loop dice a PHP que ejecute las sentencias anidadas,
 * tanto como la expresión while se evalúe como true.
 * 
 * Documentación: https://www.php.net/manual/es/control-structures.while.php
 */

$i = 0;

while ($i <= 10) {
    echo $i++;
}

echo '<br/>';

// Sintaxis alternativa -> esta sintaxis es aplicada en html
$i = 0;
while ($i <= 10) :
    echo $i++;
endwhile;

echo '<br/>';

// break statement -> permite terminar un loop
$i = 0;

while (true) {
    while ($i <= 10) {
        echo $i++;
        break 2; // permite un argumento que especifica cuantos loops debe detener
    }
}
echo '<br/>';

// continue -> permite que el loop continue sin terminar de ejecutar las sentencias
$i = 0;

while ($i <= 10) {
    while ($i % 2 === 0) {
        $i++;
        continue; //  permite un argumento que especifica cuantos loops debe continuar
    }
    echo $i++;
}
echo '<br/>';
