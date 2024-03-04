<?php

function findAllCommandes():array{
    $sql = "SELECT * FROM commande cmd, client cl, etat_cmd etc 
            WHERE cmd.id_client = cl.id_client
            AND cmd.id_etat_cmd = etc.id_etat_cmd";
    $datas = [];
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
        $datas = $statement->fetchAll();
        
        // Fermer la connexion
        $connex == null;
        $statement == null;
    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
    return $datas;
};

function filtreCommandes(string $etat):array{
    $sql = "SELECT prenom_client, nom_client, date_cmd, montant, libelle_etat_cmd,cmd.id_cmd 
            FROM commande cmd, client cl, etat_cmd etc
            WHERE cmd.id_client = cl.id_client
            AND cmd.id_etat_cmd = etc.id_etat_cmd";
            if ($etat != "all") {
                $sql .= " AND libelle_etat_cmd LIKE '$etat'"; 
            }
    $datas = [];
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
        $datas = $statement->fetchAll();
        
        // Fermer la connexion
        $connex == null;
        $statement == null;
    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
    return $datas;
};

function AddCommande(array $cmd){
    $sql = "INSERT INTO commande(nom_client, prenom_client, telephone) VALUES (:nom, :prenom, :tel)";
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
        $statement -> execute($cmd);

        // Recuperer les donnees de la requete
        // $data = $statement->fetchAll(); // Ici, On ne donne pas de données car il s'agit d'un formulaire
        
        // Fermer la connexion
        $connex == null;
        $statement == null;

    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
};
function findArticlesByCmd(int $id):array{
    $sql = "SELECT cmd.id_cmd, libelle_art, prix_unitaire, qtestock, qte_cmd, cmd.id_client,cl.id_client, montant
            FROM  article art, commande cmd, avoir av, client cl
            WHERE cmd.id_cmd = $id
            AND av.id_art = art.id_art
            AND av.id_cmd = cmd.id_cmd
            AND cmd.id_client = cl.id_client";

    // dump_degub($sql);
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
        $datas = $statement->fetchAll();

        // Fermer la connexion
        $connex == null;
        $statement == null;
    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
    return $datas;
};

