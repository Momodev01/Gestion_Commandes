
<div class="New-chosen">
        <button><a href="<?=path('article', 'ajout-article')?>">Nouvel artilce</a></button>
</div>
<table class="table1">
    <tr class="tr1">
        <th class="th1">Libellé</th>
        <th class="th1">Prix Unitaire</th>
        <th class="th1">Qte Stock</th>
    </tr>
    <?php foreach ($articles as $article):?>
    <tr class="tr1">
        <td class="td1"> <?= $article["libelle_art"] ?> </td>
        <td class="td1"> <?= $article["prix_unitaire"] ?> </td>
        <td class="td1"> <?= $article["qtestock"] ?> </td>
    </tr>
    <?php endforeach?>
</table>
