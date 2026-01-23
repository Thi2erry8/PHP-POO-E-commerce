<?php
 
 namespace GamerHouse\Repository;

 use GamerHouse\config\Databases;
 use GamerHouse\Entity\User;
 use PDO;

 class UserRepository{
    public function findByEmail(string $email): ?User
    {
        $pdo = Databases::getConnection();

        $stmt = $pdo->prepare(
            'SELECT * FROM user WHERE email = :email LIMIT 1'
        );

        $stmt->execute(['email' => $email]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

       if (!$data) {
         return null;
       }

       return new User(
        (int) $data['id'],
        $data['email'],
        $data['password'],
        $data['role']
       );
    }

    public function save(string $nom , string $email, string $hashedPassword): void{
        $pdo = Databases::getConnection();

        $stmt = $pdo->prepare(
            'INSERT INTO user (nom,email,password) VALUES (:nom,:email, :password)'
        );

        $stmt->execute([
          'nom' => $nom,  
          'email' => $email, 
          'password' => $hashedPassword,
          'role' => 'user'

        ])  ;
    }
 }