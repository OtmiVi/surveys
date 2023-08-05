<?php

namespace App\Core;

abstract class Controller
{

    /**
     * @param string $model
     * @return Model
     */
    protected function model(string $model): Model
    {
        return new ('\\App\\Models\\' . $model)();
    }

    /**
     * @param string $view
     * @param array $data
     * @return void
     */
    protected function view(string $view, array $data = []): void
    {
        require_once '../app/views/' . $view . '.php';
    }
}