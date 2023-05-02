<?php // switch

/**
 * switch
 * La sentencia switch es similar a una serie de sentencias IF en la misma expresión.
 * En muchas ocasiones, es posible que se quiera comparar la misma variable
 * (o expresión) con muchos valores diferentes, y ejecutar una parte de
 * código distinta dependiendo de a que valor es igual. 
 * 
 * Documentation: https://www.php.net/manual/es/control-structures.switch.php
 */

$payment_status = 'paid';

switch ($payment_status) {
    case 'paid':
        echo 'Paid';
        break;
    case 'declined':
        echo 'Payment Declined';
        break; // Se puede usar tanto break como continue con sus argumentos para romper loops
    case 'pending':
        echo 'Pending Payment';
        break;

    default:
        echo 'Unknown payment status';
        break;
}

echo '</br>';
/**
 * Caso de uso
 * Si se necesitan dos estados que corran unas declaraciones iguales, lo mejor
 * es no duplicar código sino eliminar el break; y juntar las dos expresiones
 * de case: como en el siguiente ejemplo
 */

$payment_status = 'rejected';
switch ($payment_status) {
    case 'paid':
        echo 'Paid';
        break;
    case 'rejected': // Al no tener break, se sigue ejecutando el código
    case 'declined':
        echo 'Payment Declined';
        break;
    case 'pending':
        echo 'Pending Payment';
        break;

    default:
        echo 'Unknown payment status';
        break;
}
echo '</br>';


/**
 * Hay que tener en cuenta que el case funciona como el operador de igualdad ==
 * y no hace un check sobre los tipos de datos
 */
$payment_status = '3';

switch ($payment_status) {
    case 1:
        echo 'Paid';
        break;
    case 2: // No se hace validación de tipos
        echo 'Payment Declined';
        break;
    case 3:
        echo 'Pending Payment';
        break;

    default:
        echo 'Unknown payment status';
        break;
}
echo '</br>';
