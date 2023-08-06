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
        return new ('\\App\\Models\\ResourceModels\\' . $model. 'Resource')();
    }
}