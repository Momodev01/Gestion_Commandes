
-- Création de la table commande
CREATE TABLE commande(
   id_cmd INT  PRIMARY KEY NOT NULL AUTO_INCREMENT ,
   date_cmd DATE,
   montant VARCHAR(100),
   id_etat_cmd VARCHAR(10) FOREIGN KEY REFERENCES etat_cmd(id_etat)
);
ALTER TABLE `commande` ADD `id_client` INT NOT NULL AFTER `id_etat_cmd`, ADD INDEX `id_client` (`id_client`);

-- Création de la table etat_cmd
CREATE TABLE etat_cmd(
   id_etat_cmd INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,
   libelle_etat_cmd VARCHAR(20),
);

-- Création de la table etat_art
CREATE TABLE art(
   id_etat_art INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,
   libelle_etat_art VARCHAR(20),
);

-- Création de la table article
CREATE TABLE article(
   id_art INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
   libelle_art VARCHAR(15),
   prix_unitaire VARCHAR(10),
   qtestock INT
);


-- Création de la table avoir
CREATE TABLE avoir(
   qte_cmd INT,
   id_cmd INT NOT NULL FOREIGN KEY REFERENCES commande(id_cmd),
   id_art INT NOT NULL FOREIGN KEY REFERENCES commande(id_art),
);

-- Création de la table Client
CREATE TABLE client(
   id_client INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
   nom_client VARCHAR(20),
   prenom_client VARCHAR(30),
   telephone VARCHAR(20) NOT NULL UNIQUE
);

-- Ajout des données  dans la table commande
INSERT INTO commande (date_cmd, montant, id_etat_cmd) VALUES 
('2024-02-23', '50000', 1),
('2024-02-22', '30000', 2),
('2024-02-21', '75500', 3);


-- Ajout des données  dans la table article
INSERT INTO article (libelle_art, prix_unitaire, qtestock) VALUES 
('Article 1', '1000', 100),
('Article 2', '2500', 50),
('Article 3', '550', 200),
('Article 4', '850', 20),
('Article 5', '5500', 150);

-- Ajout des données  dans la table avoir
INSERT INTO avoir (qte_cmd, id_cmd, id_art) VALUES 
(2, 1, 1),
(1, 2, 3),
(3, 3, 2);

-- Ajout des données  dans la table etat_cmd
INSERT INTO etat_cmd (id_etat_cmd, libelle_etat_cmd) VALUES 
(1, 'Non traitée'),
(2, 'En cours'),
(3, 'Livrée');

INSERT INTO etat_art (id_etat_art, libelle_etat_art) VALUES 
(1, 'En rupture'),
(2, 'Disponible')

-- Ajout des données  dans la table client
INSERT INTO client(id_client, nom_client, prenom_client, telephone) VALUES
(NULL, 'Ba', 'Amadou', '77-123-45-67'),
(NULL, 'Diallo', 'Sophia', '78-103-75-52'),
(NULL, 'Ba', 'Badara', '77-527-41-63')

