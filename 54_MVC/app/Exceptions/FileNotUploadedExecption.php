<?php

declare(strict_types=1);

namespace App\Exceptions;

class  FileNotUploadedExecption extends \Exception
{
    protected $message = 'Couldn\'t load the file';
    protected $code = 501;
}
