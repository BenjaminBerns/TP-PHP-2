<?php

namespace App\models\DAO;

class GroupeDAO
{
    private \PDO $pdo;
    function __construct(\PDO $pdo){
        $this->pdo = GroupeDAO::getOrCreateInstance()->getPdo();
    }
    public function getAllGroupe(){
        $req = $this->pdo->prepare("SELECT * FROM groupe");
        $req->execute();
        return $req;
    }
    public function getGroupeById($id){
        $req = $this->pdo->prepare("SELECT * FROM groupe WHERE id_groupe = ?");
        $req->execute([$id]);
        return $req;
    }
    function addGroupe(Groupe $groupe){
        $req = $this->pdo->prepare("INSERT INTO groupe(nom_groupe) VALUES(?)");
        $req->execute();
    }
    function updateGroupe(Groupe $groupe){
        $req = $this->pdo->prepare("UPDATE groupe SET nom_groupe=?");
    }
    function deleteGroupe($id){
        $req = $this->pdo->prepare("DELETE FROM groupe WHERE id_groupe = ?");
        $req->execute([$id]);
    }
}