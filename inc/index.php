<?php
    include('fonction.php');
    // Ceci est juste une page pour tester les fonctions

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
    // $mois = 8;
    // $result = insert_generer($mois);

    // if ($result !== null) {
    //     echo "Update successful. Number of affected rows: " . $result;
    // } else {
    //     echo "Update failed.";
    // }

    // $moisArray = [1, 2, 3];
    // insert_generer($moisArray); 

    // poid_min(7, 1000000.5);


    $date_debut = '2000-01-01';
    $date_fin = '2023-12-31';
    $idPers = 8;

    $result = benefice($date_debut, $date_fin, $idPers);
    if ($result === null) {
        echo "Total Expense: $" . $result;
    } else {
        echo "Total Expense: $" . $result;
    }

    $resultc = cout($date_debut, $date_fin, $idPers);
    if ($result !== null) {
        echo "Total Cost: $" . $resultc;
    } else {
        echo "Error occurred while calculating the cost.";
    }

    // $resultd = montant_depense($date_debut, $date_fin, $idPers);
    // echo "Total Expense: $" . $resultd;

    // $resultv = montant_vente($date_debut, $date_fin, $idPers);
    // if ($result !== null) {
    //     echo "Total amount: $resultv";
    // } else {
    //     echo "Function execution failed.";
    // }

    // $result = paiement($date_debut, $date_fin, $idPers);

    // if ($result !== null) {
    //     foreach ($result as $payment) {
    //         echo "Date: " . $payment['date'] . "\n";
    //         echo "Nom: " . $payment['nom'] . "\n";
    //         echo "Bonus: " . $payment['bonus'] . "\n";
    //         echo "Malus: " . $payment['malus'] . "\n";
    //         echo "Salaire Total: " . $payment['salaire_total'] . "\n\n";
    //     }
    // } else {
    //     echo "An error occurred while executing the paiement function.\n";
    // }

    // $date_cuellie = '2023-04-31';
    // $idPers = 8; 
    // $idParcelle = 12;
    // $result = salaire($idPers, $idParcelle, $date_debut, $date_fin);
    // if ($result !== null) {
    //     echo "Salaire Normal: {$result['salaire_normal']}<br>";
    //     echo "Bonus / Malus: {$result['bonus']}<br>";
    //     echo "Salaire Total: {$result['salaire_total']}<br>";
    // } else {
    //     echo "Failed to calculate salary.";
    // }   

    // $result = reste($idParcelle, $date_cuellie, $idPers) ;
    // if ($result !== null) {
    //     echo "Remaining harvest for Parcelle ID $idParcelle: " . $result;
    // } else {
    //     echo "Failed to calculate remaining harvest.";
    // }

    // $poids_cuellie = 91;
    // $idParcelle = 11;
    // $date_cuellie = '2023-04-05';
    // $idPers = 4;

    // $result = validation_ajax($poids_cuellie, $idParcelle, $date_cuellie, $idPers);
    // echo "Result: $result";

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
