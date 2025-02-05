<?php
namespace App\Config;

use PDO;
use PDOException;

class Database {
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $pdo;

    public function __construct() {

        $this->host = $_ENV['DB_HOST'] ?? 'localhost'; 
        $this->dbname = $_ENV['DB_NAME'] ?? 'projet_mvc';
        $this->user = $_ENV['DB_USER'] ?? 'postgres';
        $this->password = $_ENV['DB_PASSWORD'] ?? '0000';
        $port = $_ENV['DB_PORT'] ?? 5432; 

        try {

            $dsn = "pgsql:host=$this->host;dbname=$this->dbname;port=$port";
            $this->pdo = new PDO($dsn, $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "connected avec success!";
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}

$db = new Database();
