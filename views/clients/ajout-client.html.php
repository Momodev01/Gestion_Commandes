<legend class="form1Leg">Ajouter un nouveau client</legend>
<form class="form1" method="post" action="<?=WEBROOT?>">
    <div class="container">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div class="container">
        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" required>
    </div>
    <div class="container">
        <label for="telephone">Téléphone :</label>
        <input type="tel" id="telephone" name="tel" pattern="[5-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
    </div>
    <div class="container">
        <button type="reset"> <a href="<?=path("client", "show-clients")?>"> Annuler </a></button>
        <input type="hidden" name="controller" value="client">
        <button type="submit" name="action" value="new-client"> Enregistrer </button>
    </div>
</form>
