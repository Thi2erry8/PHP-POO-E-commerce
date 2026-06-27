<?php

namespace GamerHouse\Controllers;

use GamerHouse\Repository\ProductRepository;

class HomeController {
    public function index():void
    {
        $productRepo = new ProductRepository();
        $products = $productRepo->findAll();

        require dirname(__DIR__, 2) . '/src/views/Accueil.php';
    }
}