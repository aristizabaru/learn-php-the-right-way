<?php

declare(strict_types=1);

namespace App;

class InvoiceCollection implements \Iterator
{
    public function __construct(public array $invoices)
    {
    }

    // Iterator Methods
    public function current(): mixed
    {
        return current($this->invoices);
    }

    public function key(): mixed
    {
        return key($this->invoices);
    }

    public function next(): void
    {
        next($this->invoices);
    }

    public function rewind(): void
    {
        reset($this->invoices);
    }

    public function valid(): bool
    {
        return current($this->invoices) !== false;
    }
}
