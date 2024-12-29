<?php



namespace App\models\Controller;

use App\BDD\DbConnexion;
use App\models\DAO\GroupeDAO;
use Groupe;

class GroupeController
{
    private \PDO $pdo;
    function __construct(\PDO $pdo){
        $this->pdo = DbConnexion::getOrCreateInstance()->getPdo();
    }

    function ShowGroupe()
    {
        $DAO = new GroupeDAO($this->pdo);
        $res = $DAO->getAllGroupe();
        require_once "templates/view";
    }
}