<?php // Leer archivos CSV -> fgetcsv
/**
 * fgetcsv
 * Similar a fgets() excepto que fgetcsv() analiza la línea que lee
 * para buscar campos en formato CSV, devolviendo un array que
 * contiene los campos leídos.
 * 
 * Documentación funciones de directorio:
 * https://www.php.net/manual/es/ref.dir.php
 * 
 * Documentación funciones del sistema de archivos:
 * https://www.php.net/manual/es/ref.filesystem.php
 */

require_once './helper.php';

if (!file_exists('foo.csv')) {
    // Si el archivo no existe lo crea y escribe el contenido
    file_put_contents('foo.csv', "1,2,3,4\n5,6,7");
}

$file = fopen('foo.csv', 'r');

$i = 0;
// Read a file -> fgetcsv devuelve la línea del puntero del archivo CSV
while (($line = fgetcsv($file)) !== false) {
    pretty_print_scalar('Línea ' . ++$i);
    pretty_print_array($line); // Imprime un array por línea
}

fclose($file);
