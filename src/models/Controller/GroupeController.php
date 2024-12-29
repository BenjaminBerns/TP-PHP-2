<?php

namespace App\models\Controller;

use App\BDD\DbConnexion;
use App\models\DAO\GroupeDAO;
use App\models\BO;

class GroupeController
{
    private \PDO $pdo;
    function __construct(\PDO $pdo){
        $this->pdo = DbConnexion::getOrCreateInstance()->getPdo();
    }

    function ShowGroupe(): void
    {
        $DAO = new GroupeDAO($this->pdo);
        $groupe = $DAO->getAllGroupe();

        require_once "templates/view/groupe.php";
    }

    function ShowGroupid(): void
    {
        $DAO = new GroupeDAO($this->pdo);
    }
}