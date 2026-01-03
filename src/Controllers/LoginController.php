<?php 

 namespace GamerHouse\Controllers;

 class LoginController 
 {
    public function login(): void
    {
        require dirname(__DIR__, 2) . '/src/views/Login.php';
    }
 }