<?php // Copiar / Renombrar / Borrar

/**
 * Copiar / Renombrar / Borrar
 * Para realizar estas operaciones se pueden usar las funciones incorporadas
 * de copy, rename & unlink
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

copy('foo.txt', 'bar.txt');
sleep(2);
rename('bar.txt', 'bar_rename.txt');
sleep(2);
unlink('bar_rename.txt');
