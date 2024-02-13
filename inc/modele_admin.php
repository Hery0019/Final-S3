<?php
    include("fonction.php");
    $page = "";
    if (isset($_GET['page'] )) {
        $page = $_GET['page'];
    } else {
        echo 'error de page';
        exit;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $page ?></title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/acceuil.css">
    </head>
<body>
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="modele_admin.php?page=acceuil_admin">Home</a></li>
        <li role="presentation"><a href="modele_admin.php?page=variete">Variete</a></li>
        <li role="presentation"><a href="modele_admin.php?page=parcelle">Parcelle</a></li>
        <li role="presentation"><a href="modele_admin.php?page=cueilleur">Cueilleur</a></li>
        <li role="presentation"><a href="modele_admin.php?page=categorie_depense">Categorie Depense</a></li>
        <li role="presentation"><a href="modele_admin.php?page=salaire">Salaire</a></li>
        <li role="presentation"><a href="deconnexion.php">Deconnexion</a></li>
    </ul>
        
        <?php include ("../pages/".$page.".php"); ?> <!--   body -->

</body>
</html>