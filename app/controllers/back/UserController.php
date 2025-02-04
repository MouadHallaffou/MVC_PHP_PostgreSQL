<?php
namespace App\Controllers\Back;

require_once __DIR__ . '../../../core/Controller.php';

use App\Models\User;
use App\Core\Controller;

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
            $this->render('back/sign_in.twig'); 
        }
    }

    public function delete($id) {
        $this->userModel->deleteUser($id);
        header('Location: /back/users');
        exit();
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        $this->render('back/users.twig', ['users' => $users]);
    }
}
