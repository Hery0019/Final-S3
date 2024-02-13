<?php
    include('fonction.php');

    // $username = 'Rebeca RKT';
    // $password = 'rebecaa';
    // $user = login($username, $password);

    // if ($user) {
    //     echo "Login successful. User ID: " . $user['idPers'] . ", Name: " . $user['nomPers'] . ", Gender: " . $user['genre'];
    // } else {
    //     echo "Login failed. Invalid username or password.";
    // }

    // $query = "SELECT * FROM variete";
    // $results = select($query);

    // if ($results) {
    //     foreach ($results as $row) {
    //         echo "ID: " . $row['idVariete'] . ", Name: " . $row['nomVariete'] . "<br>";
    //     }
    // } else {
    //     echo "Query failed or no results found.";
    // }

    // $nomVariete = 'Green Tea';
    // $occupation = 2.5;
    // $rendement = 30.0;

    // $result = insert_variete($nomVariete, $occupation, $rendement);

    // if ($result !== null) {
    //     echo "Variete inserted successfully. Last Inserted ID: " . $result;
    // } else {
    //     echo "Insert failed.";
    // }

    // $surface = 10.0;
    // $varieteId = 1; // Replace with the actual ID from the variete table

    // $result = insert_parcelles($surface, $varieteId);

    // if ($result !== null) {
    //     echo "Parcelle inserted successfully. Last Inserted ID: " . $result;
    // } else {
    //     echo "Insert failed.";
    // }

    // $nomPers = 'John Doe';
    // $genre = 'M';
    // $date_naissance = '1990-05-15';
    // $mdp = 'john';

    // $result = insert_personnes($nomPers, $genre, $date_naissance, $mdp);

    // if ($result !== null) {
    //     echo "Personne inserted successfully. Last Inserted ID: " . $result;
    // } else {
    //     echo "Insert failed.";
    // }

    // $nomDepense = 'Fertilizer';
    // $result = insert_depense($nomDepense);

    // if ($result !== null) {
    //     echo "Depense inserted successfully. Last Inserted ID: " . $result;
    // } else {
    //     echo "Insert failed.";
    // }

    // $date_cueillettes = '2024-02-12';
    // $choix_cueilleur = 1; // Replace with the actual ID from the variete table
    // $choix_parcelle = 1; // Replace with the actual ID from the parcelles table
    // $poids = 15.0;

    // $result = insert_histo_cueillette($date_cueillettes, $choix_cueilleur, $choix_parcelle, $poids);

    // if ($result !== null) {
    //     echo "Historique de cueillette inserted successfully. Last Inserted ID: " . $result;
    // } else {
    //     echo "Insert failed.";
    // }

    // $date_depense = '2024-02-12';
    // $choix_depense = 1;
    // $montant = 50.0;

    // $result = insert_histoDepense($date_depense, $choix_depense, $montant);

    // if ($result !== null) {
    //     echo "Historique de depense inserted successfully. Last Inserted ID: " . $result;
    // } else {
    //     echo "Insert failed.";
    // }

    // $poids_total_cueillette = 100.0;
    // $poids_restant_parcelles = 20.0;
    // $cout_revient = 150.0;

    // $result = insert_resultat($poids_total_cueillette, $poids_restant_parcelles, $cout_revient);

    // if ($result !== null) {
    //     echo "Resultat inserted successfully. Last Inserted ID: " . $result;
    // } else {
    //     echo "Insert failed.";
    // }

    // $newMontant = 12.5;
    // $result = updateSalaire($newMontant);

    // if ($result !== null) {
    //     echo "Update successful. Number of affected rows: " . $result;
    // } else {
    //     echo "Update failed.";
    // }

    // $date_debut = '01-04-2023';
    // $date_fin = '31-04-2023';
    // $date_cuellie = '2023-04-05';
    // $idPers = 4; 
    // $idParcelle = 11;

    // $result = reste($idParcelle, $date_cuellie, $idPers) ;
    // if ($result !== null) {
    //     echo "Remaining harvest for Parcelle ID $idParcelle: " . $result;
    // } else {
    //     echo "Failed to calculate remaining harvest.";
    // }

    $poids_cuellie = 91;
    $idParcelle = 11;
    $date_cuellie = '2023-04-05';
    $idPers = 4;

    $result = validation_ajax($poids_cuellie, $idParcelle, $date_cuellie, $idPers);
    echo "Result: $result";

    // $results = recoltes_parcelles($date_debut, $date_fin);

    // if ($results !== null) {
    //     foreach ($results as $row) {
    //         echo "Parcelle ID: " . $row['idParcelle'] . ", Total Weight: " . $row['total_poids_cueillettes'] . " kg<br>";
    //     }
    // } else {
    //     echo "Query failed.";
    // }

    // $result = total_recolte($date_debut, $date_fin, $idPers, $idParcelle);
    // if ($result !== null) {
    //     echo "Total recolte between $date_debut and $date_fin for idPers $idPers: $result kg";
    // } else {
    //     echo "Query failed.";
    // }
?>