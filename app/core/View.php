<?php

namespace App\Core;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View {
    private static $twig = null;

    private static function init() {
        if (self::$twig === null) {
            $loader = new FilesystemLoader([
                'back' => __DIR__ . '/../views/back',
                'front' => __DIR__ . '/../views/front'
            ]);
            self::$twig = new Environment($loader, [
                "cache" => false,
                "debug" => true
            ]);
        }
    } 

    public static function render($view, $data = []) {
        self::init();
        echo self::$twig->render($view, $data);
    }
}
