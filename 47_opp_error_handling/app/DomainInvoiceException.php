<?php // Domain exceptions

/*
 * Se pueden crear clases con métodos estáticos que retornan instancias
 * de la excepción que se aplicaría al dominio de la app o feature que
 * se desarrolla, este sistema es usado ya que permite tener todos
 * los mensajes de error e implementaciones en un solo lugar sin
 * tener que crear clases específicas por tipo de error 
 */

declare(strict_types=1);

namespace App;

class DomainInvoiceException  extends \Exception
{

    /*
     * Se puede usar static para retornar objetos pasando al constructor
     * heredado de Exception el mensaje personalizado. Cada método
     * puede representar un error.
     */
    public static function missingBilling(): static
    {
        return new static('Missing Billing Information from \'static\'');
    }
}
