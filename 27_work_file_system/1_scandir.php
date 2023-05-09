<?php // scandir

/**
 * scandir
 * Enumera los ficheros y directorios ubicados en la ruta especificada.
 * 
 * Documentación funciones de directorio:
 * https://www.php.net/manual/es/ref.dir.php
 * 
 * Documentación funciones del sistema de archivos:
 * https://www.php.net/manual/es/ref.filesystem.php
 */

declare(strict_types=1);

require_once './helper.php';

// scandir retorna un array
// La magic constant __DIR__ retorna el directorio del archivo
$dir = scandir(__DIR__);
pretty_print_array($dir);
