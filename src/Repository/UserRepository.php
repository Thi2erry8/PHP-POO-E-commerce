<?php
 
 namespace GamerHouse\Repository;

 use GamerHouse\config\Databases;
 use PDO;

 class UserRepository{
    public function findByEmail(string $email): ?array
    {
        $pdo = Databases::getConnection();

        $stmt = $pdo->prepare(
            'SELECT * FROM users WHERE email = :email LIMIT 1'
        );

        $stmt->execute(['email' => $email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    }
 }