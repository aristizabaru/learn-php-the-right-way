<?php

declare(strict_types=1);

namespace App;

class Invoice
{
    public function __construct(public int $amount, public string $description)
    {
    }
}
