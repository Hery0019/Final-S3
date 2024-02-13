<?php 
    $historiqueDepenses = select("select * from historique_depenses where idPers = ".$idPers); // idPers = session 

    $listeDepenses = select("select * from depense");

    $newHisto = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs sont définis et non vides
        if (isset($_POST['dateDepense']) && isset($_POST['idDepense']) && isset($_POST['montant'])) {
            $dateDepense = $_POST['dateDepense'];
            $idDepense = $_POST['idDepense'];
            $montant = $_POST['montant'];

            $newHisto = insert_histoDepense($idPers, $dateDepense, $idDepense, $montant);
        }
    }
?>


    <div class="results">
        <p>Liste de VOS Depenses :</p>
        <hr>
        <table class="table">
            <tr>
                <th>Date</th>
                <th>Categorie</th>
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
                <form action="" method="post">
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
                    <p> <input type="number"  name="montant" class="form-control"></p>
                    <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
                </form>
            </div>
        </center>

    </div>
</body>
</html>