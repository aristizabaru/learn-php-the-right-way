<?php

declare(strict_types=1);

namespace App\Traits;

trait CapuccinoTraitConflict
{
    public function makeCapuccino(): string
    {
        return static::class . ' is making Capuccino (Trait)';
    }

    public function makeLatte(): string
    {
        return static::class . ' is making Latte (From Capuccino Trait \'insteadof\' Latte Trait)';
    }
}
