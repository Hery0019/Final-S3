<?php 
    include("../inc/fonction.php");
    $listeSalaires = select("select * from salaire")
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
            <li role="presentation" ><a href="variete.html">Variete</a></li>
            <li role="presentation" ><a href="parcelle.html">Parcelle</a></li>
            <li role="presentation" ><a href="cueilleur.html">Cueilleur</a></li>
            <li role="presentation"><a href="categorie_depense.html">Categorie Depense</a></li>
            <li role="presentation" class="active"><a href="#">Salaire</a></li>
    </ul>
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
</body>
</html>