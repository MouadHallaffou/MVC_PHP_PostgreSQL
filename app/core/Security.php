<?php
namespace App\Core;

class Security {
    
    public static function sanitize($data) {
        return htmlspecialchars(strip_tags($data));
    }

}
