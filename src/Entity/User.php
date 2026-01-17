<?php

namespace GamerHouse\Entity;

class User
{
    private int $id;
    private string $email;
    private string $password;
    private string $role;
    public function __construct(int $id, string $email, string $password)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }

    //Getters
    public function getId(): string
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function getRole(): string
    {
      return $this->role;
    }
    public function isAdmin():bool
    {
        return $this->role === 'admin';
    }
}