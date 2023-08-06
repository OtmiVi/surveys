<?php

namespace App\Controllers;

use App\Models\ResourceModels\UserResource;
use App\models\User;

class HomeController extends Controller
{
    private User $user;

    private UserResource $resourceModel;


    public function __construct()
    {
        session_start();
        if(isset($_SESSION['user_id'])) {
            $userId = $_SESSION['user_id'];
        } else {
            redirect("/auth/login");
        }

        /** @var \App\Models\ResourceModels\UserResource $resourceModel */
        $this->resourceModel = $this->model('User');
        try {

            $this->user = $this->resourceModel->getById($_SESSION['user_id']);
        } catch (\Exception $exception) {
            redirect("/auth/login");
        }
    }

    public function index()
    {
        $this->view('home', ['name' => $this->user->getMail()]);
    }
}