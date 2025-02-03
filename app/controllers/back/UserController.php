<?php
namespace App\Controllers\Back;

use App\Controllers\BaseController;
use App\Models\User;
use App\Core\View;

class UserController extends BaseController {

    protected $view;

    public function __construct() {
        $this->view = new View();
    }

    public function index() {
        $userModel = new User();
        $users = $userModel->getAllUsers();
        $this->view->render('back/users', ['users' => $users]);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            $userModel->addUser($username, $email, $password);

            header('Location: /admin/users');
            exit;
        }

        $this->view->render('back/add_user');
    }
}
