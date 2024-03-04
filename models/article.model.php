<?php

function findAllArticles():array{
    $sql = "SELECT * FROM article";
    $data = [];
    // Classe PDO
    // 1- Se Connecter au SGBD et Sélectionner la BD
    // require_once("../config/db-config.php");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestioncommande";
    try {
        $connex = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
        // $connex = new PDO ($DB_DSN, $DB_USER, $DB_PASS);
        $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connex->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        // Executer la requete
        $statement = $connex->prepare($sql);
        $statement->execute();
        
        // Recuperer les donnees de la requete
        $data = $statement->fetchAll();
        
        // Fermer la connexion
        $connex == null;
        $statement == null;
    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
    return $data;
};

function AddArticle(array $article){
    $sql = "INSERT INTO article(libelle_art, prix_unitaire, qtestock) VALUES (:libelle, :prix, :stock)";
    // Classe PDO
    // 1- Se Connecter au SGBD et Sélectionner la BD
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestioncommande";
    // require_once("../config/db-config.php");
    try {
        $connex = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
        // $connex = new PDO ($DB_DSN, $DB_USER, $DB_PASS);
        $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connex->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // Executer la requete
        $statement = $connex->prepare($sql);
        $statement -> execute($article);

        // Recuperer les donnees de la requete
        // $data = $statement->fetchAll(); // Ici, On ne donne pas de données car il s'agit d'un formulaire
        
        // Fermer la connexion
        $connex == null;
        $statement == null;

    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
};
