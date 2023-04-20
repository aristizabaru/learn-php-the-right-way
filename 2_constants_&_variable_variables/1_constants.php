<?php // Constantes

/**
 * Constantes
 * Las constantes una vez definidas no pueden cambiar su valor.
 * Por convención las constantes se definen en mayúsculas
 * sostenidas.
 * 
 * Hay dos formas de definir una constante, la primera por medio
 * de la función define() y la segunda usando la palabra
 * clave const
 */


// Este tipo de definición se hace en RUNTIME
define('STATUS_PAID', 'paid');
echo STATUS_PAID;
echo "</br>";

// Este tipo de definición se hace en COMPILETIME
const STATUS_ORDERED = 'ordered';
echo STATUS_ORDERED;
echo "</br>";

/**
 * Constantes predefinidas
 * PHP cuenta con un set de constantes predefinidas que se pueden
 * observar en la documentación oficial:
 * https://www.php.net/manual/es/reserved.constants.php
 */

echo PHP_VERSION;
echo "</br>";

/**
 * Constantes mágicas
 * Hay nueve constantes mágicas que cambian dependiendo de dónde se emplean.
 * Por ejemplo, el valor de __LINE__ depende de la línea en que se use en el script.
 * Documentación oficinal:
 * https://www.php.net/manual/es/language.constants.predefined.php
 */

echo __LINE__;
