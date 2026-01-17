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
        require __DIR__ . '/src/Views/Login.php';
    }
    
    private function handleLogin(): void{
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $userRepo = new UserRepository();
        $user = $userRepo->findByEmail($email);

        if(!$user || !password_verify($password, $user->getPassword())){
            $error = "Email ou mot de passe incorrect";
                    require __DIR__ . '/src/Views/Login.php';
                    return;
        }

        $_SESSION['user'] = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'role' => $user->getRole()
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