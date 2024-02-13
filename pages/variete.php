<?php
    $listeVarietes = select("select * from variete");

    $newVariete = null;

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
        <p>Liste des variete :</p>
        <hr>
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Occupation</th>
                <th>Rendement</th>
            </tr>
            <?php foreach ($listeVarietes as $listeVariete) {?>
                <tr>
                    <td><?php echo $listeVariete['nomVariete'] ?></td>
                    <td><?php echo $listeVariete['occupation'] ?></td>
                    <td><?php echo $listeVariete['rendement'] ?></td>
                </tr>
            <?php } ?>

        </table>
    </div>
    <div class="results">
        <center>
            <form action="" method="post">
                <div class="login">
                <h3>Insertion de Variete</h3> 
                <p>Nom de Variete :</p>
                    <p> <input type="text" name="nomVariete" class="form-control"></p>
                <p>Occupation (diametre en m):</p>
                    <p> <input type="number"  name="occupation" class="form-control"> </p>
                <p>Rendement :</p>
                    <p> <input type="number"  name="rendement" class="form-control"></p>
                <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
            </form>
            </div>
        </center>

    </div>