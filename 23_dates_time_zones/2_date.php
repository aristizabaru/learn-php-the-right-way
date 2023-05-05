<?php // date

/**
 * date
 * Devuelve una cadena formateada según el formato dado usando el parámetro
 * de tipo integer timestamp dado o el momento actual si no se da una marca
 * de tiempo. En otras palabras, timestamp es opcional y por defecto es el
 * valor de time().
 * 
 * Documentación:
 * https://www.php.net/manual/es/function.date.php
 */

// Ejemplos de time pasados a dates

// Tiempo actual
echo 'Hoy: ' . date('m/d/Y g:ia') . '</br>'; // si no se especifica 2do parámetro toma time()


// Próxima semana -> 7 días; 24 horas; 60 minutos; 60 segundos
$next_week = time() + 7 * 24 * 60 * 60;
echo 'Próxima semana: ' .  date('m/d/Y g:ia', $next_week) . '</br>';

// Ayer ->  24 horas; 60 minutos; 60 segundos
$yesterday = time() -  24 * 60 * 60;
echo 'Ayer: ' .  date('m/d/Y g:ia', $yesterday) . '</br>';
