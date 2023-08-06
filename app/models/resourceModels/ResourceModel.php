<?php

namespace App\Models\ResourceModels;

use PDO;

abstract class ResourceModel
{
    public function __construct()
    {

        /** @var PDO $db */
        require_once __DIR__ . '/../../database/connect.php';
        dd($db);
    }

}