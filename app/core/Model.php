<?php
namespace App\Core;

use App\Config\Database;

class Model {
    protected $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }
}
