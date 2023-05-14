<?php

declare(strict_types=1);

/**
 * El namespace se debe declarar antes que cualquier declaración, solo puede ir antes
 * la declaración de strict_types.
 * 
 * Ya que se declara un manespace en el fichero actual, si se importa este desde otro fichero,
 * las clases, funciones o constantes no se elevarán al espacio global sino que se
 * quedarán encapsuladas en el namespace definido, por lo tanto si no se importa usando
 * 'use' o se hace referencia al namespace usando una definición 'cualificada' o
 * 'completamente calificada', no se podrá acceder a estas clases.
 */

// Es buena práctica nombrar el namespace bajo la estructura de su directorio
namespace PaymentGateway\Paddle;

class Transaction
{
}
