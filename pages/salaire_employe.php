<?php
   $listeCeuilleures = select("select * from personnes where idCateg = 2");
   $nomUser = select("select * from personnes where idPers = ".$idPers);
   $paiements = null;

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Vérifier si les champs sont définis et non vides
       if (isset($_POST['dateDebut']) && isset($_POST['dateFin'])) {
           $dateDebut = $_POST['dateDebut'];
           $dateFin = $_POST['dateFin'];

           $paiements = paiement($dateDebut, $dateFin, $idPers);
       }
   }
?>

<div class="results">
        <div class="login">
            <?php foreach ($nomUser as $nom ) {?>
                <h1>L'Utilisateur <i><?php echo $nom['nomPers'] ?></i></h1>
            <?php } ?>
        </div>
    </div>
    <div class="results">
        <form action="" method="post">
            <p>Date Debut :</p>
            <P><input type="date" name="dateDebut" class="form-control"></P>
            <p>Date Fin</p>
            <P><input type="date" name="dateFin" class="form-control"></P>
            <P><input type="submit" value="Envoyer" id="submit" class="form-control"></P>
        </form>
        <center>
            <p>Vos Resultats :</p>
            <?php if ($paiements != null) {?>
                <table class="table">
                    <tr>
                        <th>Date Payement</th>
                        <th>Nom</th>
                        <th>Bonus</th>
                        <th>Mallus</th>
                        <th>Payement</th>
                    </tr>
                    <?php foreach ($paiements as $paiement){ ?>
                        <tr>
                                <td><?php echo $paiement['date'] ?></td>
                                <td><?php echo $paiement['nom'] ?></td>
                                <td><?php echo $paiement['bonus'] ?></td>
                                <td><?php echo $paiement['malus'] ?></td>
                                <td><?php echo $paiement['salaire_total'] ?></td>
                        </tr>
                        <?php } ?>
                </table>
            <?php } ?>
        </center>
    </div>