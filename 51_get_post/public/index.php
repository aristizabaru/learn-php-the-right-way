<?php // Super Glonals

/*
 * Superglobal
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
 * $_GET
 * Un array asociativo de variables pasado al script actual vía parámetros URL (también
 * conocida como cadena de consulta). Tenga en cuenta que el array no solo se rellena
 * para las solicitudes GET, sino para todas las solicitudes con una cadena de consulta.

 * 
 * Documentación:
 * https://www.php.net/manual/es/reserved.variables.get.php
 * 
 * $_POST
 * Un array asociativo de variables pasadas al script actual a través del método POST
 * de HTTP cuando se emplea application/x-www-form-urlencoded o multipart/form-data
 * como Content-Type de HTTP en la petición.
 * 
 * Documentación:
 * https://www.php.net/manual/es/reserved.variables.post.php
 */

declare(strict_types=1);

use App\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';

echo '<pre>';

define('BASE_PATH', '/51_get_post/public'); // base path

// Registrar rutas
$router = new Router();

$router->get(BASE_PATH . '/', [App\Classes\Home::class, 'index'])
    ->get(BASE_PATH . '/invoice', [App\Classes\Invoice::class, 'index'])
    ->get(BASE_PATH . '/invoice/create', [App\Classes\Invoice::class, 'create'])
    ->post(BASE_PATH . '/invoice/create', [App\Classes\Invoice::class, 'store']);


// Se pasa la ruta del request y este resuelve la petición según las rutas guardadas
try {
    echo $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
} catch (\Throwable $th) {
    echo $th->getCode() . ' - ' . $th->getMessage();
}
