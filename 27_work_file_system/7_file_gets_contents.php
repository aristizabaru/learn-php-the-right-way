<?php // Get file contents & store in a variable

/**
 * Get file contents & store in a variable
 * Para cargar el contenido de un archivo se puede usar la función incorporada
 * file_get_contents, el cual guarda el contenido en una variable para
 * su posterior uso
 * 
 * Documentación funciones de directorio:
 * https://www.php.net/manual/es/ref.dir.php
 * 
 * Documentación funciones del sistema de archivos:
 * https://www.php.net/manual/es/ref.filesystem.php
 */

require_once './helper.php';

if (!file_exists('foo.txt')) {
    // Si el archivo no existe lo crea y escribe el contenido
    file_put_contents('foo.txt', "Hello\nWorld");
}

// Usando las opciones offset y length se puede especificar el largo de la captura
$content = file_get_contents('foo.txt', offset: 3, length: 2);
pretty_print_scalar($content);
