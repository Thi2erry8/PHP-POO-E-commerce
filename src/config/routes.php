<?php 

  use GamerHouse\Controllers\HomeController;
  use GamerHouse\Controllers\ProductController;
  use GamerHouse\Controllers\LoginController;
  use GamerHouse\Controllers\RegisterController;
 
  $base = '/PHP-POO-E-commerce/public';
 
  return [
    [
        'method'=> 'GET',
        'path' => $base . '/',
        'handler' => [HomeController::class, 'index']
    ],
    [
        'method'=> 'GET',
        'path' => $base . '/login',
        'handler' => [LoginController::class, 'login']
    ],
    [
        'method'=> 'GET',
        'path' => $base . '/product',
        'handler' => [ProductController::class, 'index']
    ],
    [
        'method' => 'POST',
        'path' => $base . '/login',
        'handler' => [LoginController::class, 'login']
    ],
    [
        'method' => 'GET',
        'path' => $base . '/register',
        'handler' => [RegisterController::class, 'register']
    ],
    [
        'method' => 'POST',
        'path' => $base . '/register',
        'handler' => [RegisterController::class, 'register']
    ],

];