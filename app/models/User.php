<?php
namespace App\Models;


use App\Core\Model;
use PDO;

class User extends Model {
    // Ajouter un utilisateur
    public function addUser($username, $email, $password) {
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$username, $email, password_hash($password, PASSWORD_BCRYPT)]);
    }

    // Récupère tous les utilisateurs
    public function getAllUsers() {
        try {
            $sql = "SELECT * FROM users";
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            die("Erreur: " . $e->getMessage());
        }
    }

    // Récupérer un utilisateur par son ID
    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Mettre à jour un utilisateur
    public function updateUser($id, $username, $email, $password = null) {
        if ($password) {
            $sql = "UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([$username, $email, password_hash($password, PASSWORD_BCRYPT), $id]);
        } else {
            $sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([$username, $email, $id]);
        }
    }

    // Supprimer un utilisateur
    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}

// $db = new User();
// var_dump($db->getAllUsers());