<?php
 namespace GamerHouse\Controllers;

 class RegisterController
 {
      public function register(): void
      {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $this->handleRegister();
            return;
        }

        require __DIR__ . '/../Views/Register.php';
      }

      private function handleRegister(): void
      {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $passwordConfirm = $_POST['password_confirm'] ?? '';

        if($email === '' || $password === ''){
           $error = "Les mots de passe ne correspondent pas";
           require __DIR__ .'/../Views/Register.php';
           return;
        }

        if ($password !== $passwordConfirm){
            $error = "Les mots de passe ne correspondent";
            require __DIR__ . '/../Views/Register.php';
            return;
        }


        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
         
        $userRepo->save($email, $hashedPassword);

        header('Location:' . BASE_URL . '/login');
        exit;
      }
 }