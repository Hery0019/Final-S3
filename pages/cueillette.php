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
        <li role="presentation" ><a href="acceuil_employe.html">Home</a></li>
        <li role="presentation" class="active"><a href="#">Cueillette</a></li>
        <li role="presentation" ><a href="depense.html">Depense</a></li>
        <!-- <li role="presentation"><a href="#">Messages</a></li> -->
    </ul>
    <div class="results">
        <p>Liste de VOS Cueillettes :</p>
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
</body>
</html>