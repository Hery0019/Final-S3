<?php 
    $historiqueCueilletes = select("select * from vue_histo_cueillettes where idPers = " . $idPers);
    $listeVarietes = select ("select * from variete");
    $listeParcelles = select("select * from parcelles");
    $newHisto = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs sont définis et non vides
        if (isset($_POST['dateCueillette']) && isset($_POST['idParcelle']) && isset($_POST['poidsNet'])) {
            $dateCueillette = $_POST['dateCueillette'];
            $idParcelle = $_POST['idParcelle'];
            $poidsNet = $_POST['poidsNet'];

            $newHisto = insert_histo_cueillette($idPers, $dateCueillette, $idParcelle, $poidsNet);
        }
    }

?>

    <div class="results">
        <p>Liste de Vos Cueillettes :</p>
        <hr>
        <table class="table">
            <tr>
                <th>Date de cueillette</th>
                <th>Nom du variete</th>
                <th>Surface</th>
                <th>Poids</th>
            </tr>

            <?php foreach ($historiqueCueilletes as $historiqueCueillete) {?>
                <tr>
                    <td><?php echo $historiqueCueillete['date_cueillettes'] ?></td>
                    <td><?php echo $historiqueCueillete['nomVariete'] ?></td>
                    <td><?php echo $historiqueCueillete['surface'] ?></td>
                    <td><?php echo $historiqueCueillete['poids'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="results">
    <center>
        <form action="" method="post">
            <div class="login">
            <h3>Insertion de Cueillette</h3>
            <p>Date de Cueillette :</p>
            <p> <input type="date" name="dateCueillette" class="form-control"></p>
            
            <p>Choix de Parcelle :</p>
            <p>
                <select name="idParcelle" id="" class="form-control">
                    <option value="unchecked">Choisir parcelle</option>
                    <?php foreach ($listeParcelles as $listeParcelle) { ?>
                        <option value="<?php echo $listeParcelle['idParcelle'] ?>"><?php echo $listeParcelle['idParcelle'] ?></option>
                    <?php } ?>
                </select>
            </p>
            <p>Poid net :</p>
            <p> <input type="number"  name="poidsNet" class="form-control"></p>
            <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
            </div>
        </form>
    </center>
    </div>
