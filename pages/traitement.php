<?php
    $user = login($_GET['nomUser'], $_GET['password']);
    if ($user != null && $user['idCateg'] == 2) {
        $_SESSION['idPers'] = $user['idPers'];
        header('Location:inc/modele.php?page=accueil_employe');
    } else if ($user != null && $user['idCateg'] == 1) {
        $_SESSION['idPers'] = $user['idPers'];
        header('Location:inc/modele.php?page=accueil_admin');
    } else {
        header('Location ../index.php?erreur=1');
    }
?>