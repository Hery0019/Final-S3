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

    $nomPers = 'John Doe';
    $genre = 'M';
    $date_naissance = '1990-05-15';
    $mdp = 'john';

    $result = insert_personnes($nomPers, $genre, $date_naissance, $mdp);

    if ($result !== null) {
        echo "Personne inserted successfully. Last Inserted ID: " . $result;
    } else {
        echo "Insert failed.";
    }
?>