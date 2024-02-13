<?php
    session_start();
    
    include("../inc/fonction.php");

    $user = login($_GET['nomUser'], $_GET['password']);
    if ($user != null && $user['idCateg'] == 2) {
        $_SESSION['idPers'] = $user['idPers'];
        header('Location:../inc/modele.php?page=acceuil_employe');
    } else if ($user != null && $user['idCateg'] == 1) {
        $_SESSION['idPers'] = $user['idPers'];
        header('Location:../inc/modele_admin.php?page=acceuil_admin');
    } else if ($user == null) {
        header('Location:../index.php?erreur=1');
    }
?>