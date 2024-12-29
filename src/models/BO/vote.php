<?php

class vote
{
    private int $idvote;
    private Candidat $idVotant;
    private Election $election;
    private Candidat $idVoteCandidat;

    /**
     * @param int $idvote
     * @param Candidat $idVotant
     * @param Election $election
     * @param Candidat $idVoteCandidat
     */
    public function __construct(int $idvote, Candidat $idVotant, Election $election, Candidat $idVoteCandidat)
    {
        $this->idvote = $idvote;
        $this->idVotant = $idVotant;
        $this->election = $election;
        $this->idVoteCandidat = $idVoteCandidat;
    }

    public function getIdvote(): int
    {
        return $this->idvote;
    }

    public function setIdvote(int $idvote): void
    {
        $this->idvote = $idvote;
    }

    public function getIdVotant(): Candidat
    {
        return $this->idVotant;
    }

    public function setIdVotant(Candidat $idVotant): void
    {
        $this->idVotant = $idVotant;
    }

    public function getElection(): Election
    {
        return $this->election;
    }

    public function setElection(Election $election): void
    {
        $this->election = $election;
    }

    public function getIdVoteCandidat(): Candidat
    {
        return $this->idVoteCandidat;
    }

    public function setIdVoteCandidat(Candidat $idVoteCandidat): void
    {
        $this->idVoteCandidat = $idVoteCandidat;
    }

}