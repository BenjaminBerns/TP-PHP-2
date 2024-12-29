<?php

namespace App\models\BO;

class Candidat
{
    private int $idCandidat;
    private string $nomCandidat;
    private string $prenomCandidat;
    private Groupe $groupe;
    private string $vote;

    /**
     * @param int $idCandidat
     * @param string $nomCandidat
     * @param string $prenomCandidat
     * @param Groupe $groupe
     * @param string $vote
     */
    public function __construct(int $idCandidat, string $nomCandidat, string $prenomCandidat, Groupe $groupe, string $vote)
    {
        $this->idCandidat = $idCandidat;
        $this->nomCandidat = $nomCandidat;
        $this->prenomCandidat = $prenomCandidat;
        $this->groupe = $groupe;
        $this->vote = $vote;
    }

    public function getVote(): string
    {
        return $this->vote;
    }

    public function setVote(string $vote): void
    {
        $this->vote = $vote;
    }

    public function getIdCandidat(): int
    {
        return $this->idCandidat;
    }

    public function setIdCandidat(int $idCandidat): void
    {
        $this->idCandidat = $idCandidat;
    }

    public function getNomCandidat(): string
    {
        return $this->nomCandidat;
    }

    public function setNomCandidat(string $nomCandidat): void
    {
        $this->nomCandidat = $nomCandidat;
    }

    public function getPrenomCandidat(): string
    {
        return $this->prenomCandidat;
    }

    public function setPrenomCandidat(string $prenomCandidat): void
    {
        $this->prenomCandidat = $prenomCandidat;
    }

    public function getGroupe(): Groupe
    {
        return $this->groupe;
    }

    public function setGroupe(Groupe $groupe): void
    {
        $this->groupe = $groupe;
    }


}