<?php // time

/**
 * time
 * time es una función incorporada que devuelve el momento actual medido
 * como el número de segundos desde la Época Unix
 * (1 de Enero de 1970 00:00:00 GMT).
 * 
 * Documentacón:
 * https://www.php.net/manual/es/function.time.php
 */


// Tiempo actual
echo 'Tiempo actual (unix format): ' . time() . '</br>'; // Tiempo actual


// Próxima semana -> 7 días; 24 horas; 60 minutos; 60 segundos
$next_week = time() + 7 * 24 * 60 * 60;

echo 'Próxima semana (unix format): ' . $next_week . '</br>';

// Ayer ->  24 horas; 60 minutos; 60 segundos
$yesterday = time() -  24 * 60 * 60;

echo 'Ayer (unix format): ' . $yesterday . '</br>';
