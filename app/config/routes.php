<?php
use App\Controllers\Back\UserController;

return [
    '/admin/users' => [UserController::class, 'index'],
    '/admin/users/add' => [UserController::class, 'add'],
];
