<?php 
    $typeDepenses = select("select * from depense");
?>

    <div class="results">
        <p>Liste de Type de Depense :</p>
        <hr>
        <table class="table">
            <tr>
                <th>Numero</th>
                <th>Nom</th>
            </tr>

            <?php foreach ($typeDepenses as $typeDepense) {?>
                <tr>
                    <td><?php echo $typeDepense['idDepense'] ?></td>
                    <td><?php echo $typeDepense['nomDepense'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="results">
        <center>
            <!-- nom  -->
            <div class="login">
            <h3>Insertion de Depense</h3> 
            <p>Nom :</p>
            <p> <input type="text"  name="value" class="form-control"> </p>
            <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
            </div>
        </center>

    </div>
