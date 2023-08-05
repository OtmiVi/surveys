<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $user = $this->model('User');
        $this->view('test', ['name' => 'Oleg']);
    }
}