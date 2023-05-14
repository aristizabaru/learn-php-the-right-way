<?php // spl_autoload_register

/**
 * spl_autoload_register
 * Esta función se ejecuta cuando el script comienza y se detecta el llamado
 * a una clase de la cual no se tiene referencia ya que no ha sido cargada
 * con include o require.
 * 
 * Documentación:
 * https://www.php.net/manual/es/function.spl-autoload-register.php
 */

// require_once __DIR__ . '/../app/PaymentGateway/Notificacion/Email.php';
// require_once __DIR__ . '/../app/PaymentGateway/Paddle/Transaction.php';
// require_once __DIR__ . '/../app/PaymentGateway/Stripe/CustomerProfile.php';
// require_once __DIR__ . '/../app/PaymentGateway/Stripe/Transaction.php';

// spl_autoload_register se encarga de cargar todos los ficheros de los namespaces
spl_autoload_register(function ($class) {
    // $class corresponde a cada definición calificada de namespace en el fichero
    var_dump($class); // -> App\PaymentGateway\Paddle\Transaction

    // Se puede hacer la transformación de la cadena para hacer match al archivo a cargar
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class));

    if (file_exists($path . '.php'))
        require_once $path . '.php';
});

use App\PaymentGateway\Paddle\Transaction;
use App\PaymentGateway\Stripe\CustomerProfile;
use App\Notification\Email;

echo '<pre>';

$paddle_transaction = new Transaction();
$stripe_customer = new CustomerProfile();
$notification = new Email();
var_dump($paddle_transaction, $stripe_customer, $notification);
