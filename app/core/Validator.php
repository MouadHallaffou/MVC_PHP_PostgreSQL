<?php
namespace App\Core;

class Validator {
    private $errors = [];

    public function validateRequired($data, $fields) {
        foreach ($fields as $field) {
            if (empty($data[$field])) {
                $this->errors[$field] = "$field  requi.";
            }
        }
    }

    public function validateEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "email non valide.";
        }
    }

    public function validatePassword($password) {
        if (strlen($password) < 6) {
            $this->errors['password'] = "le mot de pass doit contenir ou moins 6 chars.";
        }
    }

}
