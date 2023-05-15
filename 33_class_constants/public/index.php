<?php // Class Constants

/**
 * Class constants
 * Las constantes se diferencian de las variables comunes en que no utilizan
 * el símbolo $ al declararlas o emplearlas. La visibilidad predeterminada
 * de las constantes de clase es public.
 * 
 * Para acceder a una constante de clasa se debe usar el scope resolution
 * operator '::' bien sea referenciando la clase::constante o el objeto::constante
 * 
 * Diferencia entre $this y self
 * La principal diferencia en este constento es que dentro de una clase
 * '$this' se refiere al objeto que está haciendo la invocación y 'self'
 * a la clase
 * 
 * Documentation:
 * https://www.php.net/manual/es/language.oop5.constants.php
 */

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

echo '<pre>';

/**
 * Para acceder a una constante de clasa se debe usar el scope resolution
 * operator '::' bien sea referenciando la clase::constante o el objeto::constante.
 * 
 * Para acceder a ellas no necesitamos la instancia de una clase, solo la
 * referencia a la clase
 */


$status = new Status();
echo Status::PAID . "\n"; // paid
echo $status::PAID . "\n"; // paid

// Usando la constante 'class' podemos retornar el namespace al que pertenece la clase
echo Transaction::class . "\n"; // App\PaymentGateway\Paddle\Transaction

// Para evitar errores es mejor establecer estados usando las constantes
$transaction = new Transaction();
$transaction->setStatus(Status::PAID);
// $transaction->setStatus('paiddd'); // genera errores -> ver validación método
