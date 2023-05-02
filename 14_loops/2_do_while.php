<?php // do while
/**
 * do while
 * La diferencia principal con los bucles while es que está garantizado
 * que corra la primera iteración de un bucle do-while (la expresión
 * verdadera sólo es verificada al final de la iteración)
 * 
 * Documentación: https://www.php.net/manual/es/control-structures.do.while.php
 */

$i = 25;

do {
    echo $i++; // Ejecuta una vez esta declaración
} while ($i <= 10);
