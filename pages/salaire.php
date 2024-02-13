<?php 
    $listeSalaires = select("select * from salaire")
?>

    <div class="results">
        <p>Liste des Salaires :</p>
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
            <div class="login">
            <h3>Insertion de Salaire</h3> 
            <p>Montant :</p>
            <p> <input type="number"  name="value" class="form-control"> </p>
            <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
            </div>
        </center>

    </div>