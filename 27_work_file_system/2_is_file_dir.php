<?php // check if is file or directory

/**
 * Check if is file or directory
 * Hay dos funciones que permiten hacer un check de un archivo para determinar
 * si es un fichero o un directorio, estas son is_file & is_dir, ambas retornan
 * un booleano
 * 
 * Documentación funciones de directorio:
 * https://www.php.net/manual/es/ref.dir.php
 * 
 * Documentación funciones del sistema de archivos:
 * https://www.php.net/manual/es/ref.filesystem.php
 */

declare(strict_types=1);

require_once './helper.php';

$dir = scandir(__DIR__);
pretty_print_array($dir);

// uso de is_file
if (is_file($dir[2])) {
    pretty_print_scalar('Es un archivo');
} else {
    pretty_print_scalar('No es un archivo');
}

// uso de is_dir
if (is_dir($dir[2])) {
    pretty_print_scalar('Es un directorio');
} else {
    pretty_print_scalar('No es un directorio');
}
