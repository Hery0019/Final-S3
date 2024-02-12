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

    $poids_total_cueillette = 100.0;
    $poids_restant_parcelles = 20.0;
    $cout_revient = 150.0;

    $result = insert_resultat($poids_total_cueillette, $poids_restant_parcelles, $cout_revient);

    if ($result !== null) {
        echo "Resultat inserted successfully. Last Inserted ID: " . $result;
    } else {
        echo "Insert failed.";
    }
?>