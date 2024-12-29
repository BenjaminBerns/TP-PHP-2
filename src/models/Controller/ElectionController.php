<?php

namespace App\models\Controller;

use App\BDD\DbConnexion;
use App\models\BO\Groupe;

class ElectionController
{
      private \PDO $pdo;
      public function __construct(\PDO $pdo){
          $this->pdo = DbConnexion::getOrCreateInstance()->getPdo();
      }

      function InitElection(Groupe $groupe){
          $dao = new ElectionDAO();
          include_once 'templates/view/election.php';
      }
}