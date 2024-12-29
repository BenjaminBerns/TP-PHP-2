<?php

use App\models\Controller\GroupeController;
use App\BDD\DbConnexion;

session_start();
require_once __DIR__ . "/vendor/autoload.php";

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$pdo = DbConnexion::getOrCreateInstance()->getPdo();

if($path === "/")
{

    require_once "src/models/Controller/GroupeController.php";

    $controller = new GroupeController($pdo);
    $groupe = $controller->ShowGroupe();

    exit();
}

if($path === "/groupe" && isset($_GET["idGroupe"]))
{
    include_once "src/models/Controller/GroupeController.php";

    $id = (int)$_GET["idGroupe"];
    $controller = new \App\models\DAO\CandidatsDAO($pdo);
    $candidats = $controller->getAllCandidatsByGroupId($id);
    include_once "templates/view/election.php";
}

if($path === "/groupe")
{
    include_once "src/models/Controller/GroupeController.php";
    $controller = new GroupeController($pdo);
}

if($path === "/resultat"){
    include_once "templates/view/resultat.php";
}