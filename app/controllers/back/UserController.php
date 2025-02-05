<?php
namespace App\Controllers\Back;


use App\Models\User;
use App\Core\Controller;
use App\Core\View;

class UserController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            if ($this->userModel->addUser($username, $email, $password)) {
                header('Location: /back/users');
                exit();
            } else {
                die("Erreur lors de l'ajout de l'utilisateur.");
            }
        } else {
            view::render('back/sign_in'); 
        }
    }

    public function delete($id) {
        $this->userModel->deleteUser($id);
        header('Location: /back/users');
        exit();
    }

    public function display() {
        $users = $this->userModel->getAllUsers();
        View::render('users', ['users' => $users]);
    }
}


