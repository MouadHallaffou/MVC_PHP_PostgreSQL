<?php
namespace App\Core;

class Router {

    public function handle() {
        $routes = include '../app/config/routes.php';
        $requestUri = $_SERVER['REQUEST_URI'];

        if (isset($routes[$requestUri])) {
            [$controller, $method] = $routes[$requestUri];
            $controllerInstance = new $controller();
            $controllerInstance->$method();
        } else {
            echo "Page non trouvée";
        }
    }
}
