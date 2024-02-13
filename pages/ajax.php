<?php 
    session_start();
    include('../inc/fonction.php');
    header('Content-Type: application/json');

    $dateCueillette = $_POST['dateCueillette'];
    $idParcelle = $_POST['idParcelle'];
    $poidsNet = $_POST['poidsNet'];

    $results = validation_ajax($poidsNet, $idParcelle, $dateCueillette, $idPers);

    echo json_encode($results); // valider ou invalide
?>