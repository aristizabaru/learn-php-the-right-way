<?php // Variables variables

/**
 * Varibales variables
 * Gracias a como PHP interpreta el script es posible asignar
 * el nombre de una variable dinámicamente
 */

$foo = 'bar';

$$foo = 'baz';

// El nombre de la variable $bar se creó dinámicamente
echo $foo, $bar;
