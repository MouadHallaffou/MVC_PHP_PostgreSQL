<?php
namespace App\Controllers;

use App\Core\View;

class BaseController {

    protected $view;

    public function __construct() {
        $this->view = new View();
    }


    public function render($view, $data = []) {
        $this->view->render($view, $data);
    }

    public function redirect($url) {
        header("Location: $url");
        exit;
    }
}
