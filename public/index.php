<?php

require '../vendor/autoload.php';
require_once '../app/config/Database.php';

use App\Core\Router;
use App\Controllers\Back\UserController;

$router = new Router();
$router->get('/back/users', UserController::class, 'list');
$router->post('/back/user/create', UserController::class, 'create');
$router->post('/back/user/delete/{id}', UserController::class, 'delete');
$router->get('/back/users', 'App\Controllers\Back\UserController', 'index');

$router->dispatch();
