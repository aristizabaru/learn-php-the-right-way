<?php // match expression

/**
 * match expression
 * La expresión match ramifica la evaluación basada en una comprobación
 * de identidad de un valor. De forma similar a una sentencia switch,
 * una expresión match tiene una expresión de sujeto que se compara
 * con múltiples alternativas.
 * 
 * Documentación:
 * https://www.php.net/manual/es/control-structures.match.php
 */

// match expression fue introducida en PHP 8.0
$payment_status = 2;

/**
 * match expression como su nombre lo indica NO es un constructor y
 * por lo tanto siempre evalua a un valor por lo que puede
 * asignarse a una variable.
 * 
 * Siempre un match expression tiene un valor de retorno y dejará
 * de evaluar las otras ramas si la evaluación de identidad ===
 * retorna true.
 */
$payment_status_display = match ($payment_status) { // se evalua el argumento en cada rama del match
    1 => 'paid', // se da llave valor, donde llave y valor pueden ser expresiones
    2 => 'declined',
    3 => 'pending',
}; // La exresión match siempre termina en punto y coma ;

echo $payment_status_display; // 'declined'
echo '</br>';


/**
 * expresiones en la llave separadas por , funcionan como el operador
 * lógico OR
 */
$payment_status_display = match ($payment_status) {
    1 => 'paid',
    2, 3 => 'declined', // llave opera como un OR -> 2 or 3
    4 => 'pending',
};

echo $payment_status_display; // 'declined'
echo '</br>';

/**
 * Como una expresión match siempre debe retornar un valor, si se evaluan
 * todas las ramas y no se obtiene un match arrojará un error de ejecución,
 * es por esto que siempre se debe agregar un default a la expresión en
 * caso de no evaluar true ninguna de las ramas.
 * 
 * A diferencia de switch que evalua por igualdad
 * suelta ==, match evalua por identidad ===
 */
$payment_status = '2';

$payment_status_display = match ($payment_status) {
    1 => 'paid',
    2, 3 => 'declined',
    4 => 'pending',
    default => 'Unknow status code' // Al no haber match retorna este valor
};

echo $payment_status_display; // 'Unknow status code'
echo '</br>';


/**
 * Comprobaciones de no identidad
 * Con match expresion se pueden hacer validaciones de no identidad fácilmente,
 * adicional se observa como cada brazo bien sea en la llave o valor pueden
 * tener expresiones complejas.
 */
$age = 23;

// Retorna la expresión que evalue a true
$result = match (true) {
    $age >= 65 => 'senior',
    $age >= 25 => 'adult',
    $age >= 18 => 'young adult',
    default => 'kid',
};

echo $result; // 'young adult'
