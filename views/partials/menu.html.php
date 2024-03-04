<header class="navbar">
    <div class="navtitle">
        <p> Gestion commandes </p>
    </div>
    <nav class="navmenu">
        <ul>
            <li> <a href="<?=path('article', 'show-articles')?>"> Articles </a></li>
            <li> <a href="<?=path('commande', 'show-commandes')?>"> Commandes </a></li>
            <li> <a href="<?=path('client', 'show-clients')?>"> Clients </a> </li>
        </ul>  
    </nav>
</header>



<!-- Le menu 'CLients' ne s'affiche que si clique sur 'Commandes' ou 'Clients' ou 'Ajouter' -->
<!-- <?php if (isset($_REQUEST["controller"]))
    if ($_REQUEST["controller"] == "commande" || $_REQUEST["controller"] == "client" || $_REQUEST["action"] == "ajout-client"):?>
    <li> <a href="<?=path('client', 'show-clients')?>"> Clients </a> </li>
<?php endif;?> -->
<!-- Le menu 'Ajouter' ne s'affiche que si clique sur 'Clients' -->
<!-- <?php if(isset($_REQUEST["controller"]))
    if ($_REQUEST["controller"] == "client"):?>
    <li> <a href="<?=path('client', 'ajout-client')?>"> Ajouter </a> </li>
<?php endif;?> -->