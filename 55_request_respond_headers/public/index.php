<?php // Request & Response Headers

/*
 * Request & Response Headers
 * Tanto el Request como el Response comienzan con una línea inicial
 * GET /path HTTP/1.1     -      HTTP/1.1 200 ok
 * Luego de vienen los HTTP Headers que entregan información por categorías, finalmente
 * se asocia el BODY de la petición o respuesta.
 * 
 * Tipos de Headers:
 * Accept-*
 * Authorization
 * User-Agent
 * Cache-Control
 * Referrer
 * Cookie
 * Location
 * Set-Cookie
 * Content-Type
 * 
 * Status Codes
 * 100 - 199 // Informational
 * 200 - 299 // Success (200 - Ok / 201 - Created / 204 - No Content)
 * 300 - 399 // Redirect (301 - Moved Permanently / 304 - Not Modified)
 * 400 - 399 // Client Error (401 - Unauthorized / 403 - Forbidden / 404 - Not Found / 405 - Method Not Allowed)
 * 500 - 599 // Server Error (500 - Internal Server Error / 502 - Bad Gateway)
 */

declare(strict_types=1);

use App\Exceptions\RouteNotFoundException;
use App\Router;
use App\View;

require_once dirname(__DIR__) . '/vendor/autoload.php';

define('BASE_PATH', '/55_request_respond_headers/public'); // base path
define('VIEW_PATH', dirname(__DIR__) . '/views'); // view path
define('UPLOAD_PATH', dirname(__DIR__) . '/uploads'); // uploads path

session_start();

// Registrar rutas y controladores para cada ruta
$router = new Router();

$router->get(BASE_PATH . '/', [App\Controllers\HomeController::class, 'index'])
    ->get(BASE_PATH . '/invoice', [App\Controllers\InvoiceController::class, 'index'])
    ->get(BASE_PATH . '/invoice/create', [App\Controllers\InvoiceController::class, 'create'])
    ->post(BASE_PATH . '/invoice/create', [App\Controllers\InvoiceController::class, 'store'])
    ->get(BASE_PATH . '/upload', [App\Controllers\UploadController::class, 'index'])
    ->post(BASE_PATH . '/upload', [App\Controllers\UploadController::class, 'store']);


// Se pasa la ruta del request y este resuelve la petición según las rutas guardadas
try {
    echo $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
} catch (RouteNotFoundException) {

    // header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
    http_response_code(404);
    echo View::make('error/404');
} catch (\Throwable $th) {
    echo $th->getCode() . ' - ' . $th->getMessage() . PHP_EOL;
}
