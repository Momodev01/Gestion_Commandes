<div class="New-chosen">
</div>
<table class="table1">
    <tr class="tr1">
        <th class="th1">Libellé</th>
        <th class="th1">Prix Unitaire</th>
        <th class="th1">Qte commandée</th>
    </tr>
    <?php foreach ($articlesBycmds as $articlesBycmd):?>
    <tr class="tr1">
        <td class="td1"> <?= $articlesBycmd["libelle_art"] ?> </td>
        <td class="td1"> <?= $articlesBycmd["prix_unitaire"] ?> </td>
        <td class="td1"> <?= $articlesBycmd["qte_cmd"] ?> </td>
    </tr>
    <?php endforeach?>
</table>
