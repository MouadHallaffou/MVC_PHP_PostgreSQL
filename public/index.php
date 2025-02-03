<?php
require '../vendor/autoload.php';
require '../app/config/Database.php';

use App\Core\Router;

$router = new Router();
$router->handle();
