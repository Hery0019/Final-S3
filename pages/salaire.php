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
                <th>ID</th>
                <th>Tay1</th>
                <th>Tay2</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <td>1</td>
                <td>tay</td>
                <td>tay kely</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>1</td>
                <td>tay</td>
                <td>tay kely</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>1</td>
                <td>tay</td>
                <td>tay kely</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>1</td>
                <td>tay</td>
                <td>tay kely</td>
                <td>1000</td>
            </tr>
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