CREATE DATABASE formulaire;
use formulaire;

CREATE TABLE utilisateur(
	nom_utilisateur VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
	mot_de_passe VARCHAR(50) NOT NULL
);