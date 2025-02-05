<?php
namespace App\Core;

class Session {
    
    public function __construct() {
        session_start(); 
    }

    public function destroy() {
        session_destroy(); 
    }


}
