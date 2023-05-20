<?php

declare(strict_types=1);

namespace App;

class CoffeMaker
{
    public function makeCoffe(): string
    {
        return static::class . ' is making Coffe (Inheritance)';
    }
}
