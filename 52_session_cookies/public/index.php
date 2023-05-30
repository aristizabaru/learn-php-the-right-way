<?php // Session

/*
 * Session
 * El soporte para sesiones en PHP consiste en una forma de preservar cierta
 * información a lo largo de accesos subsiguientes.
 * 
 * A un visitante que accede a un sitio web se le asigna un id único, también
 * llamado id de sesión. Éste es almacenado en una cookie en la parte del cliente
 * o se propaga en el URL.
 * 
 * El soporte para sesiones permite almacenar los datos entre peticiones en el
 * array superglobal $_SESSION.
 * 
 * Documentación session_start
 * https://www.php.net/manual/es/function.session-start.php
 * 
 * $_SESSION
 * Es un array asociativo que contiene variables de sesión disponibles para el script
 * actual. Ver la documentación de Funciones de sesión para más informaciónsobre su uso.
 * 
 * Documentación
 * https://www.php.net/manual/es/reserved.variables.session
 * 
 * COOKIES
 * Al igual que las sesiones se pueden establecer y acceder a las cookies, como con
 * session estas se deben enviar antes de que se establescan los response headers.
 * 
 * Nunca se debe guardar información sensible en las cookies y lo ideal sería
 * guardar información encriptada apropiadamente
 * 
 * Documentación
 * https://www.php.net/manual/es/reserved.variables.cookies.php
 * https://www.php.net/manual/es/function.setcookie.php
 */

declare(strict_types=1);

use App\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/*
 * La sesión debe de ser inicializada antes que se envíe algún response header
 * de vuelta al cliente, esto en el sentido práctico es la generación de un 'echo'
 * un espacio dentro de un contexto html, cualquier caracter que genere una
 * respuesta por parte del servidor. 
 */
session_start();

echo '<pre>';

define('BASE_PATH', '/52_session/public'); // base path

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
    echo $th->getCode() . ' - ' . $th->getMessage() . PHP_EOL;
}

/*
 * $_COOKIE
 * Para revisar el envío de una cookie remitirse a la clase App\Classes\Home
 * 

/*
 * $_SESSION
 * Con el uso de la superglobal $_SESSION se pueden acceder a todos las variables
 * que se han generado desde el script para la sessión a través de un array asociativo.
 * Para ver la generación referirse a la clase App\Classes\Home
 * 
 * Para ver el unset de la sessión referirse a la clase App\Classes\Invoice
 */
echo PHP_EOL . '$_SESSION Content' . PHP_EOL;
print_r($_SESSION);
