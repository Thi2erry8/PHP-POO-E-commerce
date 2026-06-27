<?php
 namespace GamerHouse\Repository;

 use GamerHouse\Entity\product;
 use GamerHouse\config\Databases;
 use PDO;

 class ProductRepository{
    public function findAll(): array {
        $pdo = Databases::getConnection();

        $stmt = $pdo->query('SELECT * FROM product ORDER BY id DESC');

        $products = [];

        while ($row = $stmt ->fetch(PDO::FETCH_ASSOC)){
            $products[] = new Product(
              (int) $row['id'],
              $row['name'],
              (float) $row['price'],
              $row['image']
            );
        }

        return $products;
    }
 }