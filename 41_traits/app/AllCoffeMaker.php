<?php

declare(strict_types=1);

namespace App;

class AllCoffeMaker extends CoffeMaker
{
    use Traits\CapuccinoTrait;
    use Traits\LatteTrait;
}
