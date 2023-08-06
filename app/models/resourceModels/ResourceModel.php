<?php

namespace App\Models\ResourceModels;

use App\models\User;
use PDO;

abstract class ResourceModel
{
    protected PDO $db;

    public function __construct()
    {
        /** @var PDO $db */
        require_once __DIR__ . '/../../database/connect.php';
        $this->db = $db;
    }
}