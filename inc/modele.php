<?php
    session_start();

    $idPers = $_SESSION['idPers'];
    include ("fonction.php");
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
        <li role="presentation" ><a href="modele.php?page=acceuil_employe">Home</a></li>
        <li role="presentation" ><a href="modele.php?page=cueillette">Cueillette</a></li>
        <li role="presentation" ><a href="modele.php?page=depense">Depense</a></li>
        <li role="presentation" ><a href="deconnexion.php">Deconnexion</a></li>
        <!-- <li role="presentation"><a href="#">Messages</a></li> -->
    </ul>
        
        <?php include ("../pages/".$page.".php"); ?> <!--   body -->

</body>
</html>