<?php

namespace App\models;

use App\Core\Model;

class User extends Model
{
    public function __construct(
        private int $id,
        private string $mail,
        private string $password
    ){}

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}