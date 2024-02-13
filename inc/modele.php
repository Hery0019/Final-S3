<?php
    session_start();
    include("fonction.php");

    $idPers = $_SESSION['idPers'];
    $infos = select("select * from personnes where idPers = ".$idPers);
    $page = "";
    if (isset($_GET['page'] )) {
        $page = $_GET['page'];
    } else {
        echo 'error de page';
        exit;
    }

    $current_page = isset($_GET['page']) ? $_GET['page'] : '';

    // Fonction pour vérifier si un lien doit être actif
    function is_link_active($page_name, $current_page) {
        // Comparer le nom de la page actuelle avec le nom du lien
        if ($current_page === $page_name) {
            // Si les noms correspondent, retourner "active"
            return "active";
        } else {
            // Sinon, retourner une chaîne vide
            return "";
        }
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
    <div>
        <ul class="nav nav-tabs">
        <li role="presentation" class="<?php echo is_link_active('acceuil_employe', $current_page); ?>"><a href="modele.php?page=acceuil_employe">Resultat</a></li>
        <li role="presentation" class="<?php echo is_link_active('cueillette', $current_page); ?>"><a href="modele.php?page=cueillette">Cueillette</a></li>
        <li role="presentation" class="<?php echo is_link_active('depense', $current_page); ?>"><a href="modele.php?page=depense">Dépense</a></li>
        <li role="presentation" class="<?php echo is_link_active('salaire_employe', $current_page); ?>"><a href="modele.php?page=salaire_employe">Salaire</a></li>
        <li role="presentation" class="<?php echo is_link_active('prevision', $current_page); ?>"><a href="modele.php?page=prevision">Prévision</a></li>
        <li role="presentation"><a href="deconnexion.php">Déconnexion</a></li>
        
            <!-- <li role="presentation"><a href="#">Messages</a></li> -->
        </ul>
        <?php foreach ($infos as $info) {?>
            <p>L'Utilisateur : <i>@<?php echo $info['nomPers'] ?></i></p>
                <p>Type : <i>CUEILLEUR</i></p>
            <hr>
        <?php } ?>
            
            <?php include("../pages/".$page.".php"); ?> <!--   body -->

    </div>

    <?php include("footer.php") ?>
</body>
</html>