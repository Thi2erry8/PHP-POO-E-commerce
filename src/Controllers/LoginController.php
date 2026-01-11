<?php 

 namespace GamerHouse\Controllers;

 class LoginController 
 {
    public function login(): void
    {   
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
             $this->handleLogin();
             return;
        }
        require dirname(__DIR__, 2) . '/src/views/Login.php';
    }
    
    private function handleLogin(): void{
        $email = $_POST['email'] ?? '';
    }
    
 }  