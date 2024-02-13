<?php 
    $listeParcelles = select("select * from vue_parcelle_variete");

    $newParcelle = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs sont définis et non vides
        if (isset($_POST['nomVariete']) && isset($_POST['occupation']) && isset($_POST['rendement'])) {
            $nomVariete = $_POST['nomVariete'];
            $occupation = $_POST['occupation'];
            $rendement = $_POST['rendement'];

            $newHisto = insert_variete($nomVariete, $occupation, $rendement);
        }
    }
?>

    <div class="results">
        <p>Liste de parcelle :</p>
        <hr>
        <table class="table">
            <tr>
                <th>Surface</th>
                <th>Variete</th>
            </tr>
            <?php foreach ($listeParcelles as $listeParcelle) {?>
                <tr>
                    <td><?php echo $listeParcelle['surface'] ?></td>
                    <td><?php echo $listeParcelle['nomVariete'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="results">
        <center>
            <!-- surface , variete -->
            <form action="" method="post">
                <div class="login">
                <h3>Insertion de Parcelle</h3> 
                <p>Surface (en metre carre) :</p>
                <p> <input type="number"  name="value" class="form-control"> </p>
                <p>Variete :</p>
                <p>
                    <select name="" id="" class="form-control">
                        <option value="">--</option>
                        <option value="">Tisane</option>
                        <option value="">Canelle</option>
                    </select>
                </p>
                <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
                </div>
            </form>
        </center>

    </div>
