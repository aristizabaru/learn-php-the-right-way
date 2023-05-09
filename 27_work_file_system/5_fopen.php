<?php // Open files & resourse data types

/**
 * Open files & resourse data types
 * Para abrir un archivo se puede usar la función incorporada fopen.
 * Siempre que se abre un archivo se debe cerrar con fclose para
 * asegurar el cierre del file descriptor.
 * 
 * Para ver los modos de acceso referirse a la siguiente lista:
 * https://www.php.net/manual/es/function.fopen
 * 
 * Documentación funciones de directorio:
 * https://www.php.net/manual/es/ref.dir.php
 * 
 * Documentación funciones del sistema de archivos:
 * https://www.php.net/manual/es/ref.filesystem.php
 */

if (!file_exists('foo.txt')) {
    // Si el archivo no existe lo crea y escribe el contenido
    file_put_contents('foo.txt', "Hello\nWorld");
}

$file = fopen('foo.txt', 'r');

// Read a file -> fgets devuelve la línea del puntero del archivo
while (($line = fgets($file)) !== false) {
    echo $line . '<br/>';
}

fclose($file);

// También se puede escribir a un archivo usando fwrite()
