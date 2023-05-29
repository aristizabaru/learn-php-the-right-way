<?php // Super Glonals -> $_SERVER

/*
 * Super Glonals -> $_SERVER
 * Superglobals son variables internas que están disponibles siempre en todos los ámbitos.
 * 
 * Algunas variables predefinidas en PHP son "superglobales", lo que significa que están
 * disponibles en todos los ámbitos a lo largo del script. No es necesario emplear
 * global $variable; para acceder a ellas dentro de las funciones o métodos.
 * 
 * Las variables superglobals son:
 * 
 * $GLOBALS
 * $_SERVER
 * $_GET
 * $_POST
 * $_FILES
 * $_COOKIE
 * $_SESSION
 * $_REQUEST
 * $_ENV
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.variables.superglobals.php
 * 
 * $_SERVER
 * Información del entorno del servidor y de ejecución. $_SERVER es un array que contiene
 * información, tales como cabeceras, rutas y ubicaciones de script. Las entradas de este
 * array son creadas por el servidor web.
 * 
 * Uno de los casos de uso para las superglobals es construir routers
 * 
 * Documentación:
 * https://www.php.net/manual/es/reserved.variables.server.php
 */

declare(strict_types=1);

use App\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';

echo '<pre>';
// print_r($_SERVER);

// Simple router -> No usar en producción

define('ROOT', '/50_superglobals/public'); // path root

// Registrar rutas
$router = new Router();

$router->register(ROOT . '/', [App\Classes\Home::class, 'index'])
    ->register(ROOT . '/invoices', [App\Classes\Invoice::class, 'index'])
    ->register(ROOT . '/invoices/create', [App\Classes\Invoice::class, 'create']);


// Se pasa la ruta del request y este resuelve la petición según las rutas guardadas
try {
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (\Throwable $th) {
    echo $th->getCode() . ' - ' . $th->getMessage();
}
