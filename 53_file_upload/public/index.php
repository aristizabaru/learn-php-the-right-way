<?php // $_FILES

/*
 * $_FILES
 * Un array asociativo de elementos subidos al script en curso a través del método POST.
 * 
 * Documentación
 * https://www.php.net/manual/es/reserved.variables.files
 * 
 * Función incorporada para mover ficheros
 * https://www.php.net/manual/es/function.move-uploaded-file.php
 * 
 * Detalle de implementación de subida de ficheros
 * https://www.php.net/manual/es/features.file-upload.php
 */

declare(strict_types=1);

use App\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';

define('BASE_PATH', '/53_file_upload/public'); // base path
define('UPLOAD_PATH', dirname(__DIR__) . '/app/uploads'); // uploads path

session_start();


echo '<pre>';

// Registrar rutas
$router = new Router();

$router->get(BASE_PATH . '/', [App\Classes\Home::class, 'index'])
    ->get(BASE_PATH . '/invoice', [App\Classes\Invoice::class, 'index'])
    ->get(BASE_PATH . '/invoice/create', [App\Classes\Invoice::class, 'create'])
    ->post(BASE_PATH . '/invoice/create', [App\Classes\Invoice::class, 'store'])
    ->get(BASE_PATH . '/upload', [App\Classes\Upload::class, 'index'])
    ->post(BASE_PATH . '/upload', [App\Classes\Upload::class, 'store']);


// Se pasa la ruta del request y este resuelve la petición según las rutas guardadas
try {
    echo $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
} catch (\Throwable $th) {
    echo $th->getCode() . ' - ' . $th->getMessage() . PHP_EOL;
}
