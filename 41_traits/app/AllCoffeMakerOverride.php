<?php

declare(strict_types=1);

namespace App;

use App\Traits\CapuccinoTrait;

class AllCoffeMakerOverride extends CoffeMaker
{
    use Traits\LatteTrait;
    use Traits\CapuccinoTrait;

    /**
     * La precedencia en los traits funciona de la siguiente manera:
     * Implementación en clase > Implementación en trait > Implementación en clase base (padre)
     */

    // La siguiente implementación sobre escribe makeLatte() en LatteTrait
    public function makeLatte(): string
    {
        return static::class . ' is making Latte (Override Method)';
    }
}
