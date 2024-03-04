<?php

// require_once("../models/article.model.php");
// $articles = findAllArticles();
// require_once("../views/pages/article.html.php");

if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == "show-articles") {
        $articles = findAllArticles();
        // dump_degub($articles);
        loadView("articles/article", ["articles" => $articles]);   
    } 
    else if ($_REQUEST['action'] == "ajout-article") {
        loadView("articles/ajout-article");
    }
    else if ($_REQUEST['action'] == "new-article") {
        unset($_POST["controller"]);
        unset($_POST["action"]);
        AddArticle($_POST);
        header('Location:'.WEBROOT."/?controller=article&action=show-articles");
    }
    else if ($_REQUEST['action'] == "detail-cmd") {
        $articlesBycmds = findArticlesByCmd($_REQUEST['id']);
        // dump_degub($articlesBycmd);
        loadView("commandes/detail-cmd", ["articlesBycmds" => $articlesBycmds]);
    }
}
else {
    $articles = findAllArticles();
    loadView("articles/article", ["articles" => $articles]);
    // require_once("../views/articles/article.html.php");
}
