<?php

namespace App\Controllers;

use Exception;

class AuthController extends Controller
{

    public function register()
    {
        $vars = [
            'title' => 'Register'
        ];
        if (isset($_GET['error'])) {
            $vars['error'] = $_GET['error'];
        }
        $this->view('auth/register', $vars);
    }

    public function registerUser(): void
    {
        try {
            /** @var \App\Models\ResourceModels\UserResource $resourceModel */
            $resourceModel = $this->model('User');
            $user = $resourceModel->createUser($_POST);
            session_start();
            $_SESSION['user_id'] = $user->getId();
            redirect("/home/index/");
        } catch (Exception $exception) {
            redirect("/auth/register/", "error=" . $exception->getMessage());
        }
    }

    public function login(): void
    {
        $this->view('auth/login', [
            'title' => 'Login',
        ]);
    }

    public function loginUser(): void
    {

        /** @var \App\Models\ResourceModels\UserResource $resourceModel */
        $resourceModel = $this->model('User');
        $user = $resourceModel->createUser($_POST);
        dd($user);
        //header("Location: /home/index/", true, 201);
    }

    public function logout(): void
    {
        session_start();
        unset($_SESSION['user_id']);
        session_abort();
        redirect("/auth/login");
    }

}