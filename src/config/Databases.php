<?php
   
   namespace GamerHouse\config;

   use PDO;
   use PDOException;

   class Databases {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "gamerhouse";

    protected function connect(){
        try {
            $dsn = "mysql:host" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8";
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);

            echo"connectez";

            return $pdo ;
        } catch (PDOException $e){
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public static function getConnection()
    {
        $db = new self();
        return $db->connect();
    }

   }