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
            'SELECT * FROM users WHERE email = :email LIMIT 1'
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
 }