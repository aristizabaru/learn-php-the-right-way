<?php // MVC Pattern

/*
 * MVC Pattern
 * El patrón de diseño MVC es usado en muchos frameworks para realizar aplicaciones web,
 * este patrón separa las responsabilidades entre Model, View y Controller. Haciendo
 * una clara distinción entre la lógica de negocio y la presentación
 * 
 * Controller
 * Los controladores son los encargados de lidear con las peticiones, respuestas y
 * manejar los recursos.
 * 
 * Model
 * Es donde se encuentra la lógica de negocio. Los modelos manejan la data de la aplicación
 * procesándola y almacenándola en estructuras de datos o DB.
 * 
 * View
 * Son la capa de presentación y pueden ser actualizados por los contraladores o en algunos
 * casos por los modelos para que sean presentados al cliente.
 */

declare(strict_types=1);

use App\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';

define('BASE_PATH', '/54_MVC/public'); // base path
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
} catch (\Throwable $th) {
    echo $th->getCode() . ' - ' . $th->getMessage() . PHP_EOL;
}
