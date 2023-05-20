<?php

declare(strict_types=1);

namespace App;

class MakeAnonymous
{

    static public function getAnonymousObj(): object
    {
        // Retorna un objeto de una clase anónima
        return new class
        {
            public function __tostring(): string
            {
                return 'Soy resutlado de una clase anónima';
            }
        };
    }
}
