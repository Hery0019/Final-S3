<?php

?>

<div style="padding: 30px;">
        <div class="composants">
            <form action="" method="get">
                <h4>Consultation du Resultat :</h4>
                <p>Date debut :</p>
                <p><input type="date" name="debut" class="form-control"></p>
                <p>Date fin :</p>
                <p><input type="date" name="fin" class="form-control"></p>
                <p><input type="submit" value="Consulter" class="form-control" id="submit"></p>
            </form>
        </div>
        <div class="composants">
            <h4>Poids total des Recoltes : </h4>
            <table class="table">
                <tr>
                    <th>Date de debut</th>
                    <th>Date de fin</th>
                    <th>Cueilleur</th>
                    <th>Parcelle</th>
                    <th>Poids total</th>
                </tr>
                <tr>
                <?php for ($i=0 ; $i < compte_ligne("parcelles") ; $i++) {?>
                    <td><?php echo $date_debut ?></td>
                    <td><?php echo $date_fin ?></td>
                    <td><?php echo $idPers ?></td>
                    <td><?php   ?></td>
                    <td><?php  ?></td>
                <?php }?>
                </tr>
            </table>
        </div>
        <div class="composants">
            <h4>Poids Restant des Patcelles : </h4>
            <b><h2 class="info">28.7 kg</h2></b>
        </div>
    </div>