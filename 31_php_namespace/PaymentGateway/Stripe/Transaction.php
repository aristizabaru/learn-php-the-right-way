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
namespace PaymentGateway\Stripe;


class Transaction
{
    public function __construct()
    {
        /**
         * No se tiene que importar el namespace para llamar CustomerProfile ya que
         * esta clase comparte el mismo namespace
         */
        var_dump(new CustomerProfile());

        /**
         * Si se usa una clase global se debe especificar el namespace ya que
         * en el presente namespace no se econtrará disponible y PHP no resuelve
         * automáticamente esto.
         * 
         * Para usar DateTime o se debe importar o se cualifica totalmente el llamado
         * usado '\'
         */

        var_dump(new \DateTime());
    }
}
