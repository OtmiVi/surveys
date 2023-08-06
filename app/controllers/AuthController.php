<?php

namespace App\Controllers;

class AuthController extends Controller
{

    public function register()
    {
        $this->view('auth/register', [
            'title' => 'Register'
        ]);
    }

    public function registerUser()
    {
        header("Location: /home/index/", true, 201);
        exit();
    }

    public function login()
    {
        $this->view('auth/login', [
            'title' => 'Login',
        ]);
    }

    public function loginUser()
    {

        /** @var \App\Models\ResourceModels\UserResource $user */
        $user = $this->model('User');
        //header("Location: /home/index/", true, 201);
        exit();
    }

    public function logout(){}

}