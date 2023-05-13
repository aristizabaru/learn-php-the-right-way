<?php

declare(strict_types=1);

require_once '../models/1_Constructor_property_promotion.php';
require_once '../models/2_Nullsafe_customer.php';
require_once '../models/2_Nullsafe_payment_profile.php';
require_once '../models/2_Nullsafe_transaction.php';

echo '<pre>';

/**
 * Constructor property promotion
 * Esta es una característica que se incorporó en PHP 8.0 y que
 * permite eliminar el código boilerplate (repetitivo) a la hora
 * de crear un constructor y definir sus propiedades
 */
$obj_1 = new Constructor_initial(120, 'Constructor Tradicional');
$obj_2 = new Constructor_initial(200, 'Constructor Property Promotion');

echo $obj_1->get_description() . '<br/>';
// El objeto se crea sin problemas (ver definición de clase)
echo $obj_2->get_description() . '<br/>';


/**
 * Nullsafe operator
 * Gracias al nullsafe operator se puede hacer la invocación de varios
 * métodos o acceso a propiedades encadenados donde si alguno
 * de los llamados retorna null no producirá un error
 * 
 * Documentation:
 * https://wiki.php.net/rfc/nullsafe_operator
 */

$transaction_1 = new Transaction(5, 'Test');
$transaction_1->customer = new Customer();
$transaction_1->customer->payment_profile = new Payment_profile();

$transaction_2 = new Transaction(5, 'Test');
/**
 * Usar el nullsafe operator asegura no generar error si retorna null. En
 * caso que ninguno de los objetos se hubiera creado la siguiente expresión
 * no se hubiera podido realizar pero al usar el nullsafe operator
 * se puede evitar un error en tiempo de ejecución.
 * 
 * Al final de la expresión se puede usar el Null coalescing operator para
 * retornar un valor si en corto circuito el nullsafe operator retorna
 * un null
 */
echo '$transaction_1: ' . ($transaction_1->customer?->payment_profile?->id ?? 'Transacción no generada');
echo '<br/>';
echo '$transaction_2: ' . ($transaction_2->customer?->payment_profile?->id ?? 'Transacción no generada');
