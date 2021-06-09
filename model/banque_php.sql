
-- Création d'un base de donnée nommées banque_php.
-- Suppression de la base si pré-existante ... 
DROP DATABASE IF EXISTS banque_php;
CREATE DATABASE banque_php CHARACTER SET 'utf8';

-- Afficher les warnings et cibler la base a utiliser.
SHOW WARNINGS;
USE banque_php;

-- Création d'un utilisateur pour l'administration de la base banque_php.
-- Suppression si existant de 'banquePHP'@'localhost' avant une connexion ... 
DROP USER IF EXISTS 'banquePHP'@'localhost'; 
CREATE USER 'banquePHP'@'localhost' IDENTIFIED BY 'banquePHP76530';
GRANT USAGE ON *.* TO 'banquePHP'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON banque_php.* TO 'banquePHP'@'localhost';

-- Création de la table Client.
CREATE TABLE IF NOT EXISTS Client (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    numero VARCHAR(10),
    voie VARCHAR(15),
    adresse VARCHAR(100) NOT NULL,    
    ville VARCHAR(20) NOT NULL,
    code_postal VARCHAR(20) NOT NULL,
    tel VARCHAR(15),
    email VARCHAR(75) NOT NULL UNIQUE,
    sexe CHAR(1) NOT NULL,
    date_adhesion DATE NOT NULL,
    date_naissance DATE NOT NULL,
    mdp VARCHAR(50) NOT NULL,
    commentaire TEXT
)
ENGINE=INNODB;

-- Création de la table Compte.
CREATE TABLE IF NOT EXISTS Compte (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_client INT UNSIGNED NOT NULL,
    type_compte VARCHAR(15) NOT NULL,
    nom VARCHAR(15) NOT NULL,
    date_ouverture DATE NOT NULL,
    date_fermeture DATE,
    solde NUMERIC(11,2) NOT NULL,
    -- operation NUMERIC,
    commentaire TEXT,
    CONSTRAINT fk_compte_client
        FOREIGN KEY (id_client)
        REFERENCES Client(id)
)
ENGINE=INNODB;

-- Création de la table Opération.
CREATE TABLE IF NOT EXISTS Operation (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_compte INT UNSIGNED NOT NULL,
    id_client INT UNSIGNED NOT NULL,
    type_operation VARCHAR(50) NOT NULL,
    nom VARCHAR(100),
    montant NUMERIC(11,2) NOT NULL,
    date_operation TIMESTAMP NOT NULL,
    -- solde NUMERIC NOT NULL,
    commentaire TEXT,
    -- CONSTRAINT compte_client key (id_compte, id_client),
    CONSTRAINT fk_opera_compte
        FOREIGN KEY (id_compte)
        REFERENCES Compte(id),
    CONSTRAINT fk_opera_client
        FOREIGN KEY (id_client)
        REFERENCES Client(id)
)
ENGINE=INNODB;

INSERT INTO Client (nom, prenom, voie, adresse, ville, code_postal, email, sexe, date_adhesion, date_naissance, mdp)
VALUES 
('Deritchold', 'Picsou', 'bd', 'des richous', 'ROUEN', 76000, 'picsouderitchold@gmail.com', 'm', '2021-02-15', '1975-11-21', 'tresriche'),
('Misérable', 'Cosette', 'rue', 'des sansdents', 'ROUEN', 76000, 'miserablecosette@gmail.com', 'f', '2021-04-23', '1977-06-18', 'trespauvre');

INSERT INTO Compte (id_client, type_compte, nom, date_ouverture, solde, date_fermeture)
VALUES 
(1, 'Livret', 'PEL', '2021-02-15', 61200, NULL),
(1, 'Livret', 'Livret A', '2021-02-15', 22950, NULL),
(1, 'Compte', 'Compte courant', '2021-02-15', 29875647.54, NULL),
(2, 'Compte', 'Compte courant', '2021-04-23', 247.97, NULL);

INSERT INTO Operation (type_operation, montant, date_operation, nom, id_compte, id_client)
VALUES
('débit', -135.90, NOW(), 'la pintade qui fume', 3, 1),
('crédit', 500, NOW(), 'salaire', 4, 2),
('débit', -7.62, NOW(), 'frais de gestion', 3, 1),
('débit', -50, NOW(), 'essence', 3, 1);

-- Afficher les tables créees.
-- SHOW TABLES;

-- Afficher les colonnes de la table.
-- DESCRIBE Nom_table;