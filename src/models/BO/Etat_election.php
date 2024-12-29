<?php

class Etat_election
{
    private int $id_etat;

    private String $valeur;

    /**
     * @param int $id_etat
     * @param String $valeur
     */
    public function __construct(int $id_etat, string $valeur)
    {
        $this->id_etat = $id_etat;
        $this->valeur = $valeur;
    }

    public function getIdEtat(): int
    {
        return $this->id_etat;
    }

    public function setIdEtat(int $id_etat): void
    {
        $this->id_etat = $id_etat;
    }

    public function getValeur(): string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): void
    {
        $this->valeur = $valeur;
    }



}