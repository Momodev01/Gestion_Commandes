<?php
define("ROOT", str_replace("\public", "", $_SERVER["DOCUMENT_ROOT"]));

    // 
    require_once(ROOT."/config/bootstrap.php");
    // dump_degub($_SERVER["DOCUMENT_ROOT"]);
    // Routage
    require_once(ROOT."/config/rooter.php");
    