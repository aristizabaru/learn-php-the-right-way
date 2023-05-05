<?php // Time zones

/**
 * Time zones
 * Por defecto PHP muestra los formatos de date aplicando el time zone o
 * zona horaria que se encuentra por defecto configurada en el archivo php.ini
 * sin embargo se puede hacer una configuración manual desde el script
 * de php usando la función incorporada date_default_timezone_set y
 * haciendo uso de una de las zonas horarias establecidas como argumento
 * 
 * Documentación:
 * https://www.php.net/manual/es/function.date-default-timezone-set.
 * 
 * Zonas horarias:
 * https://www.php.net/manual/es/timezones.php
 */

// Set de timezone
date_default_timezone_set('America/Bogota');
// Devuelve el time zone configurado
echo date_default_timezone_get() . '</br>';;

// Tiempo actual
echo 'Hoy: ' . date('m/d/Y g:ia') . '</br>'; // si no se especifica 2do parámetro toma time()

// Próxima semana -> 7 días; 24 horas; 60 minutos; 60 segundos
$next_week = time() + 7 * 24 * 60 * 60;
echo 'Próxima semana: ' .  date('m/d/Y g:ia', $next_week) . '</br>';

// Ayer ->  24 horas; 60 minutos; 60 segundos
$yesterday = time() -  24 * 60 * 60;
echo 'Ayer: ' .  date('m/d/Y g:ia', $yesterday) . '</br>';

/**
 * Tip de desarrollo
 * Siempre se recomienda establecer la zona horaria por defecto UTC ya que esto
 * hace más fácil el manejar varias zonas horarias haciendo la respectiva
 * conversión de UTC a la zona horaria que se necesite en la presetanción
 * al usuario.
 * 
 * POR DEFECTO EN php.ini LA TIME ZONE CONFIGURADA ES UTC
 */

// Set de time zone to UTC
date_default_timezone_set('UTC');
echo date_default_timezone_get() . '</br>';

// Tiempo actual
echo 'Hoy: ' . date('m/d/Y g:ia') . '</br>'; // si no se especifica 2do parámetro toma time()

// Próxima semana -> 7 días; 24 horas; 60 minutos; 60 segundos
$next_week = time() + 7 * 24 * 60 * 60;
echo 'Próxima semana: ' .  date('m/d/Y g:ia', $next_week) . '</br>';

// Ayer ->  24 horas; 60 minutos; 60 segundos
$yesterday = time() -  24 * 60 * 60;
echo 'Ayer: ' .  date('m/d/Y g:ia', $yesterday) . '</br>';
