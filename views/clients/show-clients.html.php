
<div class="New-chosen">
        <button><a href="<?=path('client', 'ajout-client')?>">Nouveau client</a></button>
</div>
<table class="table1">
    <tr class="tr1">
        <th class="th1"> Prenom </th>
        <th class="th1"> Nom </th>
        <th class="th1"> Téléphone </th>
    </tr>
    <?php foreach ($clients as $clients):?>
    <tr class="tr1">
        <td class="td1"> <?= $clients["prenom_client"] ?> </td>
        <td class="td1"> <?= $clients["nom_client"] ?> </td>
        <td class="td1"> <?= $clients["telephone"] ?> </td>
    </tr>
    <?php endforeach?>
</table>