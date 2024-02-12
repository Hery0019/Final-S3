<?php
    $error = "";
    if (isset ($_GET['erreur'])) {
        $error = "Vous avez fait une erreur dans le login";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
</head>
<body>
    <div class="row"></div>
        <div class="col-md-6">
            <h1 class="title">Tea</h1>
        </div>
        <div class="col-md-6" id="green">
            <center>
                <div class="login">
                    <form action="pages/traitement.php" method="get">
                        <h3>Login</h3>
                        <p>Nom d'Utilisateur :</p>
                        <p> <input type="text" name="nomUser" class="form-control"></p>
                        <p>Mot de passe :</p>
                        <p> <input type="password" name="password" class="form-control"></p>
                        <p> <input type="submit" value="Connexion" class="form-control" id="submit"></p>
                    </form>
                </div>
            </center>
        </div>
</body>
<footer>2512 - 2502 - 2720</footer>
</html>