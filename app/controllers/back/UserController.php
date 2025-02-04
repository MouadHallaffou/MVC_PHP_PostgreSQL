<?php
namespace App\Controllers\Back;

use App\Models\User;

class UserController {
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
        }
    }
    

    public function delete($id) {
        $user = $this->userModel->getUserById($id);
        if (!$user) {
            die("Erreur : Utilisateur introuvable.");
        }
        $this->userModel->deleteUser($id);
        header('Location: /back/users');
        exit();
    }
    
    
}
