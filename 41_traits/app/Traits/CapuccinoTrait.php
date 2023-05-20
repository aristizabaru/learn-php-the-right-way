<?php

declare(strict_types=1);

namespace App\Traits;

trait CapuccinoTrait
{
    public function makeCapuccino(): string
    {
        return static::class . ' is making Capuccino (Trait)';
    }
}
