<?php
function dump_degub($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit("C'est OK");
}
function loadView(string $view, array $data=[], $layout="base"){
    ob_start();
    extract($data);
    require_once("../views/".$view.".html.php");
    $contentForView = ob_get_clean();
    require_once("../views/layout/".$layout.".layout.php");
} 

function redirectToRoot(string $controller, string $action){
    header("Location".WEBROOT."/?controller=$controller&action=$action");
    exit;
}

function path(string $controller, string $action){
    return WEBROOT."/?controller=$controller&action=$action";
}
