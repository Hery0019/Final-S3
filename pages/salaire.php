<?php 
    $listeSalaires = select("select * from salaire");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs sont définis et non vides
        if (isset($_POST['montant'])) {
            $montant = $_POST['montant'];

            $newSalaire = updateSalaire($montant);
        }
    }
    
?>

    <div class="results">
        <p>Salaire actuel:</p>
        <hr>
        <table class="table">
            <tr>
                <th>Montant par kilogramme</th>
            </tr>
            <?php foreach ($listeSalaires as $listeSalaire) {?>
                <tr>
                    <td><?php echo $listeSalaire['montant_kg'] ?></td>
                </tr>
            <?php } ?>
           
        </table>
    </div>
    <div class="results">
        <center>
            <!-- valeur -->
            <form action="" method="post">
                <div class="login">
                    <h3>Metre a jour le Salaire</h3> 
                    <p>Entrer nouveau Montant :</p>
                    <p> <input type="number"  name="montant" class="form-control"> </p>
                    <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
                </div>
            </form>
        </center>

    </div>