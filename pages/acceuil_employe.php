<?php
    $date_debut = null ;
    $date_fin = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs sont définis et non vides
        if (isset($_POST['date_debut']) && isset($_POST['date_fin'])) {
            $date_debut = $_POST['date_debut'];
            $date_fin = $_POST['date_fin'];
        }
    }
?>

<div style="padding: 30px;">
        <div class="composants">
            <form action="" method="POST">
                <h4>Consultation du Resultat :</h4>
                <p>Date debut :</p>
                <p><input type="date" name="date_debut" class="form-control"></p>
                <p>Date fin :</p>
                <p><input type="date" name="date_fin" class="form-control"></p>
                <p><input type="submit" value="Consulter" class="form-control" id="submit"></p>
            </form>
        </div>
        <div class="composants">
            <h4>Poids total des Recoltes : </h4>
            <?php if ($date_debut != null && $date_fin != null) {?>
                <table class="table">
                    <tr>
                        <th>Date de debut</th>
                        <th>Date de fin</th>
                        <th>Cueilleur</th>
                        <th>Numero Parcelle</th>
                        <th>Parcelle</th>
                        <th>Poids total</th>
                    </tr>
                        <?php for ($i=0 ; $i < compte_ligne("parcelles") ; $i++) {?>
                            <tr>
                                <td><?php echo $date_debut ?></td>
                                <td><?php echo $date_fin ?></td>
                                <td><?php echo $idPers ?></td>
                                <td><?php echo $i+1 ?></td>
                                <td><?php echo getSurfaceParcelleById($i+1) ?></td>
                                <td><?php echo total_recolte($date_debut,$date_fin, $idPers, $i+1) ?></td>
                            </tr>
                        <?php }?>
                    </table>
                <?php } ?>
        </div>
        <div class="composants">
            <h4>Poids Restant des Patcelles : </h4>
            <?php if ($date_debut != null && $date_fin != null) {?>
                <?php for ($i=0 ; $i < compte_ligne("parcelles") ; $i++) {?>
                    <p>Parcelle numero <?php echo $i+1 ?></p>
                    <b><h2 class="info"><?php echo reste_recoltes($i+1, $date_debut, $date_fin,$idPers) ?>Kg</h2></b>
                <?php }?>
            <?php }?>
        </div>
    </div>