<?php
require '../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\Back\UserController;

$router = new Router();

// Routes
$router->get('/back/users', UserController::class, 'index');
$router->get('/back/delete-user/{id}', UserController::class, 'delete');
$router->post('/back/register', UserController::class, 'create');

// Dispatch
$router->dispatch();
