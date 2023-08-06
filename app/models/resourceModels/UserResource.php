<?php

namespace App\Models\ResourceModels;

use App\models\User;

class UserResource extends ResourceModel
{

    public function createUser(array $data): User
    {
        $mail = $data['userEmail'];//trim email check password check
        $password = $data['userPassword'];
        $secondPassword = $data['userPasswordSecond'];

        $this->db->query("INSERT INTO `users` (`id`, `mail`, `password`) VALUES (NULL, '$mail', '$password')");
        $user = $this->getByMail($mail);
        return $user;
    }


    /**
     * @param string $mail
     * @return User
     */
    public function getByMail(string $mail): User
    {
        $result = $this->db->query("SELECT * FROM `users` WHERE `mail` = '$mail'");
        $result = $result->fetch();
        return new User($result['id'], $result['mail'], $result['password']);
    }

    /**
     * @param int $id
     * @return User
     */
    public function getById(int $id): User
    {
        $result = $this->db->query("SELECT * FROM `users` WHERE `id` = '$id'");
        $result = $result->fetch();
        return new User($result['id'], $result['mail'], $result['password']);
    }

}