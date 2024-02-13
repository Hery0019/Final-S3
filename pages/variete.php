<?php
    $listeVarietes = select("select * from variete");
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
            <div class="login">
            <h3>Insertion de Variete</h3> 
            <p>Nom de Variete :</p>
            <p> <input type="text" name="nomVariete" class="form-control"></p>
            <p>Occupation (diametre en m):</p>
            <p> <input type="number"  name="value" class="form-control"> </p>
            <p>Rendement :</p>
            <p> <input type="number"  name="value" class="form-control"></p>
            <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
            </div>
        </center>

    </div>