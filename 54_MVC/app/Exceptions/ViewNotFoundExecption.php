<?php

declare(strict_types=1);

namespace App\Exceptions;

class  ViewNotFoundExecption extends \Exception
{
    protected $message = 'View not found';
    protected $code = 501;
}
