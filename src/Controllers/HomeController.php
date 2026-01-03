<?php

namespace GamerHouse\Controllers;

class HomeController {
    public function index():void
    {
        require dirname(__DIR__, 2) . '/src/views/Accueil.php';
    }
}