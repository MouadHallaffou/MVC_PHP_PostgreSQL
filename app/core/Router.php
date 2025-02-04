<?php
namespace App\Core;

use App\Core\Controller;

class Router extends Controller{

    protected $routes=[];

    public function addRoute($path , $controller , $methode , $action) {

        $this->routes[$methode][$path] = ['controller'=>$controller, 'action'=>$action];

    }

    public function get($path , $controller , $action){
        $this->addRoute($path,$controller, $action, 'GET');
    }

    public function post($path , $controller , $action){
        $this->addRoute($path,$controller, $action, 'POST');
    }

    public function dispatch(){
        $uri = strtok($_SERVER['REQUEST_METHOD'], '?');
        $methode = $_SERVER['REQUEST_METHOD'];
        if(array_key_exists($uri, $this->routes[$methode])){
            $controller = $this->routes[$methode][$uri]['controller'];
            $action = $this->routes[$methode][$uri]['action'];

            $controller = new $controller;
            $controller->$action;

        }
        else{
            $this->render('404');
        }
    }

}


// requeste 

// parse l'url 

// end point 

