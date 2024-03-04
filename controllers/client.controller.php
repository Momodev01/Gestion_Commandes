<?php

if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == "show-clients") {
        $clients = findAllClients();
        loadView("clients/show-clients", ["clients" => $clients]);
    }   
    else if ($_REQUEST['action'] == "ajout-client") { 
        loadView("clients/ajout-client");
    }
    else if ($_REQUEST['action'] == "new-client") {
        unset($_POST["controller"]);
        unset($_POST["action"]);
        AddClient($_POST);
        header('Location:'.WEBROOT."/?controller=client&action=show-clients");
    }
}
else {
    // dump_degub("ok");
    $clients = findAllClients();
    loadView("clients/show-clients", ["clients" => $clients]);
    // require_once("../views/clients/show-clients.html.php");
}
