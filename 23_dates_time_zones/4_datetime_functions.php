<?php // datetime functions
/**
 * datetime functions
 * PHP tiene un set de funciones incorporadas para el manejo de fechas, se
 * pueden consultar cada una de ellas en la documentación
 * 
 * Documentación:
 * https://www.php.net/manual/es/ref.datetime.php
 */


// mktime -> obtiene la marca de tiempo Unix de una fecha
echo mktime(16, 15, 10, 5, 26, 1984) . '</br>';
echo date('m/d/Y g:ia', mktime(15, 15, 10, 5, 26, 1984)) . '</br>';


// strtotime -> convierte una descripción de fecha/hora textual en Inglés a una fecha Unixecho mktime(16, 15, 10, 5, 26, 1984) . '</br>';
echo strtotime('10 September 2000') . '</br>';
echo date('m/d/Y g:ia', strtotime('10 September 2000')) . '</br>';
