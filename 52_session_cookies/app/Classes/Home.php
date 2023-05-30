<?php

declare(strict_types=1);

namespace App\Classes;

class Home
{
    public function index(): string
    {
        // Crea una variable con persistencia en $_SESSION
        $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;

        // Envía una cookie for 2h
        setcookie('userName', 'Andres', time() + 2 * 60 * 60, httponly: true);

        $view =  'Home' . PHP_EOL . 'Hola ' . ($_COOKIE['userName'] ?? 'Desconocido') .  PHP_EOL;

        if (isset($_GET)) {
            foreach ($_GET as $key => $value) {
                $view .= $key . '=' . $value . PHP_EOL;
            }
        }

        return $view;
    }
}
