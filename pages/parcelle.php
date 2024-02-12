<?php 
    include("../inc/fonction.php");
    $listeParcelles = select("select * from parcelles");
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
            <li role="presentation" class="active"><a href="#">Parcelle</a></li>
            <li role="presentation"><a href="cueilleur.html">Cueilleur</a></li>
            <li role="presentation"><a href="categorie_depense.html">Categorie Depense</a></li>
            <li role="presentation"><a href="salaire.html">Salaire</a></li>
    </ul>
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
</body>
</html>