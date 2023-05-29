<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\RouteNotFoundException;

class Router
{
    private array $routes;

    public function register(string $route, callable|array $action): self
    {
        $this->routes[$route] = $action;

        return $this;
    }

    public function resolve(string $requestUri)
    {
        // Captura la URI y elimina el query string ?var=value tomando solo el path
        $route = explode('?', $requestUri)[0];
        $action = $this->routes[$route] ?? null;

        if (!$action)
            throw new RouteNotFoundException();

        if (is_callable($action))
            return call_user_func($action);

        if (is_array($action)) {
            [$class, $method] = $action;
            if (class_exists($class)) {
                $class = new $class;
                if (method_exists($class, $method))
                    return call_user_func([$class, $method]);
            }
        }

        throw new RouteNotFoundException();
    }
}
