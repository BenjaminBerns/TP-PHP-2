<?php

class Candidat
{
    private int $idCandidat;
    private String $nomCandidat;
    private String $prenomCandidat;
    private Groupe $groupe;

    /**
     * @param int $idCandidat
     * @param String $nomCandidat
     * @param String $prenomCandidat
     * @param Groupe $groupe
     */
    public function __construct(int $idCandidat, string $nomCandidat, string $prenomCandidat, Groupe $groupe)
    {
        $this->idCandidat = $idCandidat;
        $this->nomCandidat = $nomCandidat;
        $this->prenomCandidat = $prenomCandidat;
        $this->groupe = $groupe;
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