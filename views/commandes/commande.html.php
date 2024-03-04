

<section class="filtreSection">
    <form class="form-filtre" action="<?=WEBROOT?>" method="get">
            <label for="etat-commande">Etat:</label>
            <select name="etat" id="etat-commande">
                <option value="all"> Tout </option>
                <option value="Non traiter"> Non traiter </option>
                <option value="En cours"> En cours </option>
                <option value="Livrer"> Livrer </option>
            </select>

            <input type="hidden" name="controller" value="commande">
            <button class="okbutton" id="etat-commande" type="submit" name="action" value="show-commandes"> OK </button>

    </form>
    <div class="New-cmd">
        <button><a href="<?=path('commande', 'new-cmd')?>">Nouvelle commande</a></button>
    </div>
</section>

<table class="table1">
    <tr class="tr1">
        <th class="th1">Client</th>
        <th class="th1">Date</th>
        <th class="th1">Montant</th>
        <th class="th1">Etat</th>
        <th class="th1">Articles</th>
    </tr>
    <?php foreach ($commandes as $commande):?>
    <tr class="tr1">
        <td class="td1"> <?= $commande['prenom_client']," ",$commande['nom_client'] ?> </td>
        <td class="td1"> <?= $commande['date_cmd'] ?> </td>
        <td class="td1"> <?= $commande['montant'] ?> </td>
        <td class="td1"> <?= $commande['libelle_etat_cmd'] ?> </td>
        <td class="td1"> <a href="<?=WEBROOT?>/?controller=article&action=detail-cmd&id=<?=$commande['id_cmd']?>"> Details </a> </td>
    </tr>
    <?php endforeach?>
</table>