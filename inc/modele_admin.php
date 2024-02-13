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
        <li role="presentation" class="<?php echo ($page == 'acceuil_admin') ? 'active' : ''; ?>"><a href="modele_admin.php?page=acceuil_admin">Home</a></li>
        <li role="presentation" class="<?php echo ($page == 'variete') ? 'active' : ''; ?>"><a href="modele_admin.php?page=variete">Variete</a></li>
        <li role="presentation" class="<?php echo ($page == 'parcelle') ? 'active' : ''; ?>"><a href="modele_admin.php?page=parcelle">Parcelle</a></li>
        <li role="presentation" class="<?php echo ($page == 'cueilleur') ? 'active' : ''; ?>"><a href="modele_admin.php?page=cueilleur">Cueilleur</a></li>
        <li role="presentation" class="<?php echo ($page == 'categorie_depense') ? 'active' : ''; ?>"><a href="modele_admin.php?page=categorie_depense">Categorie Depense</a></li>
        <li role="presentation" class="<?php echo ($page == 'salaire') ? 'active' : ''; ?>"><a href="modele_admin.php?page=salaire">Salaire</a></li>
        <li role="presentation" class="<?php echo ($page == 'configuration') ? 'active' : ''; ?>"><a href="modele_admin.php?page=configuration">Configuation</a></li>
        <li role="presentation"><a href="deconnexion.php">Deconnexion</a></li>
    </ul>

    <p>L'Utilisateur : <i>@ HERY</i></p>
        <p>Type : <i>ADMIN</i></p>
    <hr>
    <div class="vatana">
        <?php include ("../pages/".$page.".php"); ?> <!--   body -->
    </div>
            

    <?php include("footer.php") ?>

</body>
</html>