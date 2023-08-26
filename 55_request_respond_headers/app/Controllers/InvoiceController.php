<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class InvoiceController
{
    public function index(): View
    {
        return View::make('invoice/index');
    }

    public function create(): View
    {

        return View::make('invoice/create');
    }

    public function store(): View
    {
        return View::make('invoice/stored');
    }
}
