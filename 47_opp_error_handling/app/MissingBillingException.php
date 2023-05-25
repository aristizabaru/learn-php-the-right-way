<?php

declare(strict_types=1);

namespace App;

class MissingBillingException extends \Exception
{
    /*
     * Se sobre escribe la propiedad $message de la clase base \Exception
     * para que el mensaje por defecto de esta exception sea el señalado
     */
    protected $message = 'Missing Billing Information';
    protected $code = 10;
}
