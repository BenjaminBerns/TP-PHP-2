<?php

class Election
{
    private int $idelection;
    private Groupe $groupe;
    private Etat_election $etat;

    /**
     * @param int $idelection
     * @param Groupe $groupe
     * @param Etat_election $etat
     */
    public function __construct(int $idelection, Groupe $groupe, Etat_election $etat)
    {
        $this->idelection = $idelection;
        $this->groupe = $groupe;
        $this->etat = $etat;
    }

    public function getIdelection(): int
    {
        return $this->idelection;
    }

    public function setIdelection(int $idelection): void
    {
        $this->idelection = $idelection;
    }

    public function getGroupe(): Groupe
    {
        return $this->groupe;
    }

    public function setGroupe(Groupe $groupe): void
    {
        $this->groupe = $groupe;
    }

    public function getEtat(): Etat_election
    {
        return $this->etat;
    }

    public function setEtat(Etat_election $etat): void
    {
        $this->etat = $etat;
    }


}