<?php

function findAllClients():array|null{
    $sql = "SELECT * FROM client";
    $data = null;
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
        
        // Executer la requete
        $statement = $connex->prepare($sql);
        $statement -> execute();

        // Recuperer les donnees de la requete
        $data = $statement->fetchAll();
        
        // Fermer la connexion
        $connex = null;
        $statement = null;

    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
    return $data;
};


function AddClient(array $client){
    $sql = "INSERT INTO client(nom_client, prenom_client, telephone) VALUES (:nom, :prenom, :tel)";
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
        $statement -> execute($client);

        // Recuperer les donnees de la requete
        // $data = $statement->fetchAll(); // Ici, On ne donne pas de données car il s'agit d'un formulaire
        
        // Fermer la connexion
        $connex == null;
        $statement == null;

    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
};

// function SelectClient(){
//     $sql = "SELECT * FROM client";
//     // Classe PDO
//     // 1- Se Connecter au SGBD et Sélectionner la BD
//     // require_once("../config/db-config.php");
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "gestioncommande";
//     try {
//         $connex = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
//         // $connex = new PDO ($DB_DSN, $DB_USER, $DB_PASS);
//         $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $connex->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


//         // Executer la requete
//         $statement = $connex->prepare($sql);
//         $statement -> execute();

//         // Recuperer les donnees de la requete
//         $data = $statement->fetchAll();

//         // Fermer la connexion
//         $connex == null;
//         $statement == null;

//     } catch (PDOException $e) {
//         echo "Erreur : ". $e->getMessage();
//     }
//     return $data;
// };