<?php

declare(strict_types=1);

namespace App\Classes;

class Home
{
    public function index(): string
    {
        $view =  'Home' . PHP_EOL;

        return $view;
    }
}
