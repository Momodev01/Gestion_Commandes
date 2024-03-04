<section>
    <fieldset>
        <legend> Client </legend>
        <form action="">
            <div>
                <div>
                    <label for=""> Telephone </label>
                    <input type="tel">
                </div>
                <button>OK</button>
            </div>
            <div>
                <div>
                    <label for="">Nom</label>
                    <input type="text" name="" readonly>
                </div>
                <div>
                    <label for="">Prenom</label>
                    <input type="text" name="" readonly>
                </div>
            </div>
        </form>
    </fieldset>

    <fieldset>
        <legend> Article </legend>
        <form action="">
            <div>
                <div>
                    <label for=""> Référence </label>
                    <input type="tel">
                </div>
                <button>OK</button>
            </div>
            <div>
                <div>
                    <label for="">Libellé</label>
                    <input type="" name="" readonly>
                </div>
                <div>
                    <label for="">Prix Unitaire</label>
                    <input type="" name="" readonly>
                </div>
                <div>
                    <label for="">Qte Stock</label>
                    <input type="hidden" name="" readonly>
                </div>
            </div>
            <div>
                <div>
                    <label for="">Qte commande</label>
                    <input type="text" name="" id="">
                </div>
                <button> Ajouter </button>
            </div>
        </form>
    </fieldset>

    <fieldset>
        <legend> Passer commande </legend>
        <table>
            <tr>
                <th> Libellé </th>
                <th> Prix Unitaire </th>
                <th> Qte commande </th>
                <th> Montant </th>
            </tr>
            <tr>
                <td> Article1 </td>
                <td> 5000 </td>
                <td> 10 </td>
                <td> 100000 </td>
            </tr>
        </table>
        <div>
            <p>Total:</p>
        </div>
    </fieldset>
    <button type="submit" name="action" value="add-cmd"> Enrgistrer </button>
</section>