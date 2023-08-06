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
    public function registerUser(){}
    public function login()
    {
        $this->view('auth/login', [
            'title' => 'Login',
        ]);
    }
    public function loginUser(){}
    public function logout(){}

}