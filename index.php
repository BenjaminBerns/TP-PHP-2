<?php

use App\models\Controller\GroupeController;

session_start();
require_once __DIR__ . "/vendor/autoload.php";

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if($path === "/") {
    include_once "utils/index.php";
}

if($path === "/groupe") {
    include_once "src/models/Controller/GroupeController.php";
    $controller = new GroupeController();
}