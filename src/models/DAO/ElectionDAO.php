<?php

namespace App\models\DAO;

class ElectionDAO
{
    private \PDO $PDO;
    function __construct(\PDO $pdo){
        $this->pdo = $pdo;
    }
    function getAllElections(): ?array
    {
        $ResultatSet = null;
        $req = "SELECT * FROM Etat_election";
        $reqPrep = $this->db->prepare($req);
        $res = $reqPrep->execute();
        if ($res) {
            while ($row = $reqPrep->fetch(mode: \PDO::FETCH_ASSOC)) {
                $ResultatSet [] = new \Etat_election($row["idEtat"], $row["valeur"]);
            }
        }
        return $ResultatSet;
    }
}