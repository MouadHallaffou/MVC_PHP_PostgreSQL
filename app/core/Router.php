<?php
namespace App\Core;

class Router {
    protected $routes = [];

    public function addRoute($path, $controller, $action, $method) {
        $this->routes[$method][$path] = ['controller' => $controller, 'action' => $action];
    }

    public function get($path, $controller, $action) {
        $this->addRoute($path, $controller, $action, 'GET');
    }

    public function post($path, $controller, $action) {
        $this->addRoute($path, $controller, $action, 'POST');
    }

    public function dispatch() {
        $uri = $_SERVER['REQUEST_URI']; 
        $method = $_SERVER['REQUEST_METHOD'];

        if (array_key_exists($uri, $this->routes[$method])) {
            $controller = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]['action'];

            $controllerInstance = new $controller;
            $controllerInstance->$action(); 
        } else {
            (new Controller())->render('errors/404.php');
        }
    }
    
}



// requeste 

// parse l'url 

// end point 

