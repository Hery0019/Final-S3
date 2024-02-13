<?php 
    $historiqueDepenses = select("select * from historique_depenses where idPers = 2"); // soloina session le idPersonne  

    $listeDepenses = select("select * from depense");
?>


    <div class="results">
        <p>Liste de VOS Depenses :</p>
        <hr>
        <table class="table">
            <tr>
                <th>Date</th>
                <th>Nom</th>
                <th>Montant</th>
            </tr>

            <?php foreach ($historiqueDepenses as $historiqueDepense) {?>
                <tr>
                    <td><?php echo $historiqueDepense['date_depense'] ?></td>
                    <td><?php echo $historiqueDepense['nom_depense'] ?></td>
                    <td><?php echo $historiqueDepense['montant'] ?></td>
                </tr>
            <?php } ?>
           
        </table>
    </div>
    <div class="results">
        <center>
            <div class="login">
            <h3>Insertion de Depense</h3>
            <p>Date de Depense :</p>
            <p> <input type="date" name="dateDepense" class="form-control"></p>
            <p>Choix de Categorie :</p>
            <p>
                <select name="idDepense" id="" class="form-control">
                    <option value="unchecked">Choisir categorie</option>
                    
                    <?php foreach ($listeDepenses as $listeDepense) {?>
                        <option value="<?php echo $listeDepense['idDepense'] ?>"><?php echo $listeDepense['nomDepense'] ?></option>
                    <?php } ?>

                </select>
            </p>
            <p>Valeur depense :</p>
            <p> <input type="number"  name="value" class="form-control"></p>
            <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
            </div>
        </center>

    </div>
</body>
</html>