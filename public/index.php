<?php
use App\Core\App;

require_once '../vendor/autoload.php';
require_once '../app/init.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$app = new App;