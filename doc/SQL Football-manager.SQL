#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Equipe
#------------------------------------------------------------

CREATE TABLE Equipe(
        equ_id     int (11) Auto_increment  NOT NULL ,
        equ_nom    Varchar (50) ,
        equ_budget Int ,
        mat_id     Int ,
        ent_id     Int ,
        PRIMARY KEY (equ_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Joueur
#------------------------------------------------------------

CREATE TABLE Joueur(
        jou_id     int (11) Auto_increment  NOT NULL ,
        jou_nom    Varchar (30) ,
        jou_prenom Varchar (30) ,
        jou_age    Int ,
        jou_post   Varchar (30) ,
        equ_id     Int ,
        PRIMARY KEY (jou_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: entraineur
#------------------------------------------------------------

CREATE TABLE entraineur(
        ent_id     int (11) Auto_increment  NOT NULL ,
        ent_nom    Varchar (30) ,
        ent_prenom Varchar (30) ,
        ent_age    Int ,
        equ_id     Int ,
        PRIMARY KEY (ent_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Match
#------------------------------------------------------------

CREATE TABLE Match(
        mat_id     int (11) Auto_increment  NOT NULL ,
        mat_scorea Int ,
        mat_scoreb Int ,
        mat_temps  Datetime ,
        PRIMARY KEY (mat_id )
)ENGINE=InnoDB;

ALTER TABLE Equipe ADD CONSTRAINT FK_Equipe_mat_id FOREIGN KEY (mat_id) REFERENCES Match(mat_id);
ALTER TABLE Equipe ADD CONSTRAINT FK_Equipe_ent_id FOREIGN KEY (ent_id) REFERENCES entraineur(ent_id);
ALTER TABLE Joueur ADD CONSTRAINT FK_Joueur_equ_id FOREIGN KEY (equ_id) REFERENCES Equipe(equ_id);
ALTER TABLE entraineur ADD CONSTRAINT FK_entraineur_equ_id FOREIGN KEY (equ_id) REFERENCES Equipe(equ_id);