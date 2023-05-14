<?php // Composer autoloading

/**
 * Composer autoloading
 * Para cargar los paquetes instalados a través de composer usando el feature
 * de autoloading, lo único que se debe hacer eso requerir el archivo
 * vendor/autoload.php
 * 
 * En caso de tener clases propias que se deban cargar se puede modificar el
 * archivo composer.json para que composer se encargue de su carga, básicamente
 * se agrega la llave autoload y dentro psr-4 mapeando el namespace a la ruta.
 * 
 * "autoload": {
 *   "psr-4": {
 *     "App\\": "app/"
 *   }
 * }
 * 
 * Para volver a generar los files de composer se puede usar el compando
 * composer dump-autoload
 * y para producción
 * composer dump-autoload -o
 * Este último mapea todas las clases directamente a vendor/composer/autoload_classmap.php
 * de donde caragará los archivos de forma más rápida
 */

declare(strict_types=1);

use Ramsey\Uuid\UuidFactory;
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

echo '<pre>';

$id = new UuidFactory();
echo $id->uuid4() . "\n";

$paddleTransaction = new Transaction;
var_dump($paddleTransaction);
