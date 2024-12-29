<?php

namespace App\models\DAO;
use App\models\BO\Candidat;

class CandidatsDAO
{

    private \PDO $PDO;
    function __construct(\PDO $pdo){
        $this->pdo = $pdo;
    }
    function getAllCandidatsByGroupId($idGroupe): ?array
    {
        $ResultatSet = null;
        $repo = new GroupeDAO($this->db);
        $req = "SELECT * FROM candidat WHERE idGroupe = :idGroupe";
        $reqPrep = $this->db->prepare($req);
        $res = $reqPrep->execute([':idGroupe' => $idGroupe]);

        if($res){
            while ($row = $reqPrep->fetch(\PDO::FETCH_ASSOC)){
                $groupe = $repo->getGroupById($row['idGroupe']);
                $ResultatSet [] = new Candidat($row['idCandidat'], $row['nom'], $row['prenom'], $groupe);
            }
        }
        return $ResultatSet;
    }
}