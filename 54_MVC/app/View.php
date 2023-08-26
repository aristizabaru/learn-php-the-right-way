<?php // Renders the views

declare(strict_types=1);

namespace App;

use App\Exceptions\ViewNotFoundExecption;

class View
{
    public function __construct(protected string $view, protected array $params = [])
    {
    }

    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }

    public function render()
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundExecption();
        }
        // Crea variables a partir del array de parámetros que se pasó al view

        foreach ($this->params as $key => $value) {
            // Se usa variable variables para crear nuevas variables disponibles en el view
            $$key = $value;
        }

        // Activa el almacenamiento en búfer de la salida -> https://www.php.net/manual/es/function.ob-start.php
        ob_start();
        include $viewPath;
        return (string) ob_get_clean(); // https://www.php.net/manual/es/function.ob-end-clean.php
    }

    // Se activa el render cuando se intenta convertir a string
    public function __toString(): string
    {
        return $this->render();
    }
}
