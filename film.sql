#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: film
#------------------------------------------------------------

CREATE TABLE film(
        id_film          Int  Auto_increment  NOT NULL ,
        titre_film       Varchar (255) NOT NULL ,
        duree_film       Varchar (255) NOT NULL ,
        synopsis_film    Text NOT NULL ,
        date_sortie_film Date NOT NULL ,
        pegi_film        Int NOT NULL ,
        studio_film      Varchar (255) NOT NULL ,
        affiche_film     Text NOT NULL ,
        bande_film       Text NOT NULL
	,CONSTRAINT film_PK PRIMARY KEY (id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: genre
#------------------------------------------------------------

CREATE TABLE genre(
        id_genre   Int  Auto_increment  NOT NULL ,
        type_genre Varchar (5000) NOT NULL
	,CONSTRAINT genre_PK PRIMARY KEY (id_genre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: realisateur
#------------------------------------------------------------

CREATE TABLE realisateur(
        id_real          Int  Auto_increment  NOT NULL ,
        nom_real         Varchar (255) NOT NULL ,
        prenom_real      Varchar (255) NOT NULL ,
        age_real         Int NOT NULL ,
        nationalite_real Varchar (255) NOT NULL ,
        photo_real       Text NOT NULL
	,CONSTRAINT realisateur_PK PRIMARY KEY (id_real)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: acteur
#------------------------------------------------------------

CREATE TABLE acteur(
        id_acteur          Int  Auto_increment  NOT NULL ,
        nom_acteur         Varchar (255) NOT NULL ,
        prenom_acteur      Varchar (255) NOT NULL ,
        age_acteur         Int NOT NULL ,
        nationalite_acteur Varchar (255) NOT NULL ,
        photo_acteur       Text NOT NULL
	,CONSTRAINT acteur_PK PRIMARY KEY (id_acteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        id_utilisateur     Int  Auto_increment  NOT NULL ,
        pseudo_utilisateur Varchar (255) NOT NULL ,
        mdp_utilisateur    Varchar (255) NOT NULL ,
        role_utilisateur   Bool NOT NULL
	,CONSTRAINT utilisateur_PK PRIMARY KEY (id_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: realiser
#------------------------------------------------------------

CREATE TABLE realiser(
        id_film Int NOT NULL ,
        id_real Int NOT NULL
	,CONSTRAINT realiser_PK PRIMARY KEY (id_film,id_real)

	,CONSTRAINT realiser_film_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
	,CONSTRAINT realiser_realisateur0_FK FOREIGN KEY (id_real) REFERENCES realisateur(id_real)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type
#------------------------------------------------------------

CREATE TABLE type(
        id_genre Int NOT NULL ,
        id_film  Int NOT NULL
	,CONSTRAINT type_PK PRIMARY KEY (id_genre,id_film)

	,CONSTRAINT type_genre_FK FOREIGN KEY (id_genre) REFERENCES genre(id_genre)
	,CONSTRAINT type_film0_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jouer
#------------------------------------------------------------

CREATE TABLE jouer(
        id_acteur Int NOT NULL ,
        id_film   Int NOT NULL
	,CONSTRAINT jouer_PK PRIMARY KEY (id_acteur,id_film)

	,CONSTRAINT jouer_acteur_FK FOREIGN KEY (id_acteur) REFERENCES acteur(id_acteur)
	,CONSTRAINT jouer_film0_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: regarder
#------------------------------------------------------------

CREATE TABLE regarder(
        id_utilisateur Int NOT NULL ,
        id_film        Int NOT NULL ,
        note           Int NOT NULL ,
        commentaire    Text NOT NULL
	,CONSTRAINT regarder_PK PRIMARY KEY (id_utilisateur,id_film)

	,CONSTRAINT regarder_utilisateur_FK FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur)
	,CONSTRAINT regarder_film0_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
)ENGINE=InnoDB;

