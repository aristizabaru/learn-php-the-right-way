<?php // check if file exists

/**
 * check if file exists
 * Se pueden revisar si un archivo o directorio existe usando la función
 * incorporada file_exists
 * 
 * Documentación funciones de directorio:
 * https://www.php.net/manual/es/ref.dir.php
 * 
 * Documentación funciones del sistema de archivos:
 * https://www.php.net/manual/es/ref.filesystem.php
 */

declare(strict_types=1);

require_once './helper.php';

if (file_exists('foo.txt')) {
    echo filesize('foo.txt');
    // Algunas funciones de manejo del fichero de archivos tienen cache
    // para limpiarlo se debe usar clearstatcache() -> ver documentación
} else {
    pretty_print_scalar('File not found');
}
