<?php

namespace App\Core;

use App\Models\ResourceModels\ResourceModel;

abstract class Controller
{

    /**
     * @param string $model
     * @return ResourceModel
     */
    protected function model(string $model): ResourceModel
    {
        return new ('\\App\\Models\\ResourceModels\\' . $model. 'Resource')();
    }
}