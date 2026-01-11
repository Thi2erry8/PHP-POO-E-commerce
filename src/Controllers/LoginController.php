<?php 

 namespace GamerHouse\Controllers;

 use GamerHouse\Repository\UserRepository;

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
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $userRepo = new UserRepository();
        $user = $userRepo->findByEmail($email);

        if(!$user || !password_verify($password, $user['password'])){
            $error = "Email ou mot de passe incorrect";
                    require dirname(__DIR__, 2) . '/src/views/Login.php';
                    return;
        }

        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email']
        ];

        header('Localtion:' . BASE_URL . '/dashboard');
        exit;
    }
    
    public function logout():void{
        session_destroy();
        header('Location:' . BASE_URL . "/Login");
        exit;
    }
 }  