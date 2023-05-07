<?php // php.ini -> PHP configuration file

/**
 * php.ini
 * El fichero de configuración (php.ini) es leído al arrancar PHP.
 * En las versiones en que PHP funciona como módulo de servidor,
 * esto sucede únicamente cuando se inicia el servidor. En las
 * versiones CGI y CLI, esto ocurre en cada ejecución.
 * 
 * Para producción es importante desactivar el reporte de errores
 * cambiando la directiva display_errors a off y como buena práctica
 * hacer uso de los logs de PHP para debug
 * 
 * Documentación:
 * https://www.php.net/manual/es/configuration.file.php
 * 
 * Directivas del fichero:
 * https://www.php.net/manual/es/ini.list.php
 */

/**
 * Actualización de las directivas en runtime
 * Se puede actualizar el fichero php.ini en runtime usando la función incorporada
 * ini_set & ini_get para traer los datos configurados en la directiva.
 * 
 * En la documentación se pueden observar las directivas y en la columna
 * 'changable' se puede observar si son PHP_INI_ALL, si es así son modificables
 * en runtime, en caso contrario no
 */

// Demostración -> NO es buena práctica cambiar directivas en runtime

// error_reporting -> informa a php qué errores mostrar
ini_set('error_reporting', E_ALL & ~E_WARNING); // Elimina warnings


// display_errors-> informa a php si mostrar errores o no
// No muestra los errores, así debe ser un confg en produccción, cambiando el php.ini
ini_set('display_errors', 0);
