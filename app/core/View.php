<?php
namespace App\Core;

use Jenssegers\Blade\Blade;

class View {
    protected $blade;

    public function __construct() {
        $viewsPath = '../app/views';
        $cachePath = '../storage/cache'; // Dossier de cache

        // Créer l'instance de Blade
        $this->blade = new Blade($viewsPath, $cachePath);
    }

    // Rendre la vue avec les données
    public function render($view, $data = []) {
        echo $this->blade->render($view, $data);
    }
}
