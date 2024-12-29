Create table Etat_election(
    idEtat int Auto_Increment,
    valeur varchar(50),
    Constraint Etat_election_PK Primary Key(idEtat)
);

Create table Groupe(
    idGroupe int Auto_increment,
    libelle varchar(50),
    CONSTRAINT Groupe_PK primary key(idGroupe)  
);

Create table Candidat(
    idCandidat int Auto_Increment,
    nom varchar(50),
    prenom varchar(50),
    idGroupe int,
    CONSTRAINT Candidat_PK PRIMARY KEY(idCandidat),
    CONSTRAINT Candidat_Groupe_FK FOREIGN KEY(idGroupe) REFERENCES Groupe(idGroupe)
);

create table Election(
    idelection int Auto_increment,
    idGroupe int,
    idEtat int,
    CONSTRAINT Election_PK PRIMARY KEY(idelection),
    CONSTRAINT Election_Groupe_FK FOREIGN KEY(idGroupe) REFERENCES Groupe(idGroupe),
    CONSTRAINT Election_Etat_FK FOREIGN KEY(idEtat) REFERENCES Etat_election(idEat)
);

create table vote(
    idVote int Auto_increment,
    idVotant int,
    idElection int,
    idVoteCandidat int,
    CONSTRAINT vote_PK PRIMARY KEY(idVote),
    CONSTRAINT vote_Candidat_FK FOREIGN KEY(idVotant) REFERENCES Candidat(idCandidat),
    CONSTRAINT vote_CandidatVoté_FK FOREIGN KEY(idVoteCandidat) REFERENCES Candidat(idCandidat),
    CONSTRAINT vote_Election_FK FOREIGN KEY(idElection) REFERENCES Election(idelection)
);

INSERT INTO Groupe (idGroupe, nomGroupe) VALUES
                                             (1, '24-25-3OLEN-Cyber'),
                                             (2, '24-25-3OLEN-Dev');

INSERT INTO Candidat (nom, prenom, idGroupe) VALUES
                                                 ('BACAR', 'Fehisoil', 1),
                                                 ('BACH', 'Loris', 2),
                                                 ('BAEZA', 'Julien', 2),
                                                 ('BAUDOY', 'Romain', 2),
                                                 ('BENAYOUN', 'David-israel', 2),
                                                 ('BERNS', 'Benjamin', 2),
                                                 ('BOISSIE', 'Angel', 2),
                                                 ('DANJARD-MAZA', 'Raphael', 2),
                                                 ('DI CICCO', 'Guillaume', 1),
                                                 ('DRIDI', 'Hedi', 1),
                                                 ('GONNORD', 'Marine', 2),
                                                 ('JOLIVET', 'Eylann', 1),
                                                 ('KEBRITI', 'Eddy', 2),
                                                 ('KORCHIA', 'Maxime', 1),
                                                 ('KRIEF', 'Nataniel', 1),
                                                 ('MAHMOUDI', 'Nassim', 1),
                                                 ('MAILLET', 'Arthur', 1),
                                                 ('MARZERIDOUX', 'Hugo', 1),
                                                 ('MAZARD', 'Benjamin', 2),
                                                 ('MENDES MONTEIRO', 'Eduardo', 2),
                                                 ('MEUNIER', 'Anthony', 2),
                                                 ('MEZINE', 'Nail', 1),
                                                 ('MOUGOU', 'Marwan', 1),
                                                 ('NGON', 'Léonie', 1),
                                                 ('NIDAM', 'Mamoune', 2),
                                                 ('PAOLETTI', 'Erick', 2),
                                                 ('PICHON', 'Luca', 2),
                                                 ('PRONESTI', 'Andrew', 1),
                                                 ('REBOUL', 'Scott', 1),
                                                 ('RISPOLI', 'Mattéo', 1),
                                                 ('SAID', 'Amir', 2),
                                                 ('SMAJIC', 'Emrah', 1),
                                                 ('YAZBEK', 'Rachel', 2);
