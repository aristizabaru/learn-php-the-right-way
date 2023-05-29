<?php

declare(strict_types=1);

namespace App\Classes;

class Home
{
    public function index(): string
    {
        $view =  'Home' . PHP_EOL;

        // Custom logic...

        if (isset($_GET)) {
            foreach ($_GET as $key => $value) {
                $view .= $key . '=' . $value . PHP_EOL;
            }
        }

        return $view;
    }
}
