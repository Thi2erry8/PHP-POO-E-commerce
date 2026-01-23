<?php 

 namespace GamerHouse\Controllers;

 use GamerHouse\Repository\UserRepository;

 class LoginController 
 {
    public function login(): void
    {   
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
             $this->handleLogin();
             return;
        }

        require __DIR__ . '/../Views/Login.php';
    }
    
    private function handleLogin(): void{
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $userRepo = new UserRepository();
        $user = $userRepo->findByEmail($email);
        echo $user->getPassword();
        if(!$user || !password_verify($password, $user->getPassword())){
        global $error ;  
        $error = "Email ou mot de passe incorrect";
                    
                    require __DIR__ . '/../Views/Login.php';
                    return;
        }

        $_SESSION['user'] = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'role' => $user->getRole(),
            
        ];

        unset($_SESSION['login_error']);

        if($user->isAdmin()){
            header('Location:' . BASE_URL . '/dashboard');
        } else{
            header('Location:' . BASE_URL . "/");
        }
        
        exit;
    }
    
    public function logout():void{
        session_destroy();
        header('Location:' . BASE_URL . "/Login");
        exit;
    }
 }  