<?php

namespace App\models\BO;

class Groupe
{
    private int $idGroupe;

    private string $libelleGroupe;

    /**
     * @param int $idGroupe
     * @param string $libelleGroupe
     */
    public function __construct(int $idGroupe, string $libelleGroupe)
    {
        $this->idGroupe = $idGroupe;
        $this->libelleGroupe = $libelleGroupe;
    }

    public function getIdGroupe(): int
    {
        return $this->idGroupe;
    }

    public function setIdGroupe(int $idGroupe): void
    {
        $this->idGroupe = $idGroupe;
    }

    public function getLibelleGroupe(): string
    {
        return $this->libelleGroupe;
    }

    public function setLibelleGroupe(string $libelleGroupe): void
    {
        $this->libelleGroupe = $libelleGroupe;
    }


}