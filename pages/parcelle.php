<?php 
    $listeParcelles = select("select * from parcelles");
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
                    <td><?php echo $listeParcelle['variete'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="results">
        <center>
            <!-- surface , variete -->
            <div class="login">
            <h3>Insertion de Parcelle</h3> 
            <p>Surface (en m^2) :</p>
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
        </center>

    </div>
