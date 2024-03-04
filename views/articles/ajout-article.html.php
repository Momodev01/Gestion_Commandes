<legend class="form1Leg">Ajouter un nouvel article</legend>
<form class="form1" method="post" action="<?=WEBROOT?>">
    <div class="container">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" required>
    </div>
    <div class="container">
        <label for="prix">Prix unitaire:</label>
        <input type="number" id="prix" name="prix" required>
    </div>
    <div class="container">
        <label for="stock">Quantité Stock :</label>
        <input type="number" id="stock" name="stock"  required>
    </div>
    <div class="container">
        <button type="reset"> <a href="<?=path("article", "ajout-article")?>"> Annuler </a></button>
        <input type="hidden" name="controller" value="article">
        <button type="submit" name="action" value="new-article"> Enregistrer </button>
    </div>
</form>