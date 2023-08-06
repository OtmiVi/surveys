<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $user = $this->model('User');
        $this->view('test', ['name' => 'Oleg']);
    }
}