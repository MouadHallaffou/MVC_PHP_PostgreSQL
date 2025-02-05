<?php
namespace App\Core;

class Controller {
    public function render($view, $data = []) {
        extract($data);
        include "../app/views/$view"; 
    }
}
