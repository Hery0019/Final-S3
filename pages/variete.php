<?php
    include("../inc/fonction.php");
    $listeVarietes = select("select * from variete");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/acceuil.css">
</head>
<body>
    <ul class="nav nav-tabs">
        <li role="presentation" ><a href="acceuil_admin.html">Home</a></li>
            <li role="presentation" class="active"><a href="#">Variete</a></li>
            <li role="presentation"><a href="parcelle.html">Parcelle</a></li>
            <li role="presentation"><a href="cueilleur.html">Cueilleur</a></li>
            <li role="presentation"><a href="categorie_depense.html">Categorie Depense</a></li>
            <li role="presentation"><a href="salaire.html">Salaire</a></li>
    </ul>
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
</body>
</html>