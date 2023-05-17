DROP DATABASE IF EXISTS catcomp;

/*Création de la base de données*/
CREATE DATABASE IF NOT EXISTS catcomp;

USE catcomp;

/*Création des tables*/
CREATE TABLE Categories(nom VARCHAR(50) PRIMARY KEY);

CREATE TABLE Produits(type VARCHAR(50),
                      id VARCHAR(50) PRIMARY KEY,
                      alt VARCHAR(50),
                      src VARCHAR(50),
                      onClick VARCHAR(50),
                      description VARCHAR(100),
                      prix VARCHAR(50),
                      stockId VARCHAR(50),
                      stock INTEGER,
                      bMId VARCHAR(50),
                      bMClick VARCHAR(50),
                      inputId VARCHAR(50),
                      onInput VARCHAR(50),
                      bPId VARCHAR(50),
                      bPClick VARCHAR(50),
                      bE VARCHAR(50),
                      FOREIGN KEY (type) REFERENCES Categories(nom));

CREATE TABLE Clients(id VARCHAR(50) PRIMARY KEY,
					 		mdp VARCHAR(50));
