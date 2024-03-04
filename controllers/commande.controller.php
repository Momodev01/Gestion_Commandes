<?php

if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == "show-commandes") {
        $filtre = isset($_GET["etat"])?$_GET["etat"]:"all";
        $commandes = filtreCommandes($filtre);
        loadView("commandes/commande", ["commandes" => $commandes]);
    }  
    else if ($_REQUEST['action'] == "new-cmd") {
        loadView("commandes/ajout-commande");
        // require_once("../views/commandes/commande.html.php");
    }
    else if ($_REQUEST['action'] == "add-cmd") {
        // unset($_POST["controller"]);
        // unset($_POST["action"]);
        AddCommande($_POST);
        header('Location:'.WEBROOT."/?controller=commande&action=show-commandes");
        exit;
    }
}
else {
    $commandes = findAllCommandes();
    loadView("commandes/commande", ["commandes" => $commandes]);
    // require_once("../views/commandes/commande.html.php");
}