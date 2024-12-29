<?php

namespace App\models\DAO;
use App\models\BO\Groupe;
use PDO;


class GroupeDAO
{
    private \PDO $pdo;
    function __construct(\PDO $pdo){
        $this->pdo = $pdo;
    }
    public function getAllGroupe(){
        $req = $this->pdo->prepare("SELECT * FROM groupe");
        $res = $req->execute();
        $grp = [];
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $grp[] = new Groupe(
                $row['idGroupe'],
                $row['libelle']
            );
        }
        return $grp;
    }
    function getGroupById(int $idGroupe): ?Groupe
    {
        $ResultatSet = null;
        $req = "SELECT * FROM groupe WHERE idGroupe = :idGroupe";
        $reqPrep = $this->pdo->prepare($req);
        $res = $reqPrep->execute([':idGroupe' => $idGroupe]);

        if($res){
            $row = $reqPrep->fetch(\PDO::FETCH_ASSOC);

            $tab = ([
                'idGroupe' => $row['idGroupe'],
                'libelle' => $row['libelle']
            ]);

            $ResultatSet = new Groupe($tab['idGroupe'], $tab['libelle']);
        }

        return $ResultatSet;
    }
    function addGroupe(Groupe $groupe){
        $req = $this->pdo->prepare("INSERT INTO groupe(libelle) VALUES(?)");
        $req->execute();
    }
    function updateGroupe(Groupe $groupe){
        $req = $this->pdo->prepare("UPDATE groupe SET libelle=?");
    }
    function deleteGroupe($id){
        $req = $this->pdo->prepare("DELETE FROM groupe WHERE idGroupe = ?");
        $req->execute([$id]);
    }
}