<?php // create & delete directories

/**
 * create & delete directories
 * Se pueden crear y borrar directorios usando las funciones incorporadas
 * mkdir y rmdir
 * 
 * Documentación funciones de directorio:
 * https://www.php.net/manual/es/ref.dir.php
 * 
 * Documentación funciones del sistema de archivos:
 * https://www.php.net/manual/es/ref.filesystem.php
 */

declare(strict_types=1);

require_once './helper.php';

/**
 * mkdir
 * Se debe tener cuidado a la hora de crear directorios en tiempo de ejecución
 * con los permisos que se le otorga, a mkdir se le puede especificar los
 * permisos para el nuevo directorio y si este se va a hacer de forma
 * recursiva o no.
 * 
 * SE DEBEN DE TENER LOS PERMISOS NECESARIOS PARA CREAR EL DIRECTORIO
 */

// se puede validar si un archivo o directorio existe con file_exists
if (file_exists('foo')) {
    rmdir('foo');
} else {
    mkdir('foo');
}
