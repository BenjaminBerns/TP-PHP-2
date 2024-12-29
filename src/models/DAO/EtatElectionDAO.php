<?php

namespace App\models\DAO;

use App\models\BO\Etat_Election;

class EtatElectionDAO
{
    private \PDO $db;

    function __construct(\PDO $db){
        $this->db = $db;
    }

    function getAllEtatElections(): ?array{
        $resultat = null;
        $req = "SELECT * FROM etat_election";
        $prepare = $this->db->prepare($req);
        $res = $prepare->execute();

        if($res){
            while($row = $prepare->fetch(\PDO::FETCH_ASSOC)){
                $resultat[] = new EtatElectionDAO($row["idEtat"], $row["valeur"]);
            }
        }
        return $resultat;
    }
}