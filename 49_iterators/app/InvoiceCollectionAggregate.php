<?php

declare(strict_types=1);


namespace App;

use Traversable;

class InvoiceCollectionAggregate implements \IteratorAggregate
{
    public function __construct(public array $invoices)
    {
    }

    // IteratorAggregate permite implementar un solo método para lidiar con la iteración
    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->invoices);
    }
}
