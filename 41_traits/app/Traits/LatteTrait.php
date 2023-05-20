<?php

declare(strict_types=1);

namespace App\Traits;

trait LatteTrait
{
    public function makeLatte(): string
    {
        return static::class . ' is making Latte (Trait)';
    }
}
