<?php

if (isset($_REQUEST["controller"])) {
    if ($_REQUEST["controller"] == "article") {
        require_once("../controllers/article.controller.php");
        // $articles = findAllArticles();
        // loadView("articles/article", ["articles" => $articles]);
    } else if($_REQUEST["controller"] == "commande") {
        require_once("../controllers/commande.controller.php");
        // $commandes = findAllCommandes();
        // loadView("commandes/commande", ["commandes" => $commandes]);
    } else if($_REQUEST["controller"] == "client") {
        require_once("../controllers/client.controller.php");
        // $clients = findAllClients();
        // loadView("clients/show-clients", ["clients" => $clients]);
    } 
}
else {
    require_once("../controllers/article.controller.php");
    // $articles = findAllArticles();
    // loadView("articles/article", ["articles" => $articles]);
}
