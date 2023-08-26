<?php

declare(strict_types=1);

namespace App\Exceptions;

class  RouteNotFoundException extends \Exception
{
    protected $message = 'Not Found';
    protected $code = 404;
}
