<?php 
    $historiqueCueilletes = select("select * from vue_histo_cueillettes where idPers = " . $idPers);
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
        <div class="login">
        <h3>Insertion de Cueillette</h3>
        <p>Date de Cueillette :</p>
        <p> <input type="date" name="dateCueillette" class="form-control"></p>
        <p>Choix de Variete :</p>
        <p>
            <select name="" id="" class="form-control">
                <option value="">--</option>
                <option value="">Tisane</option>
                <option value="">Canelle</option>
            </select>
        </p>
        <p>Choix de Parcelle :</p>
        <p>
            <select name="" id="" class="form-control">
                <option value="">--</option>
                <option value="">Parcelle Nord</option>
                <option value="">Parcelle Sud</option>
            </select>
        </p>
        <p>Poid net :</p>
        <p> <input type="number"  name="dateCueillette" class="form-control"></p>
        <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
        </div>
    </center>
    </div>
