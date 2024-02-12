<?php
    include('connexion.php'); 

    function login($mon, $mdp)
    {
        $pdo = dbconnect("mysql");

        if ($pdo) {
            $query = "SELECT * FROM personnes WHERE nomPers = ? AND mdp = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$mon, $mdp]);
            
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $pdo = null;

            if ($user) {
                return $user;
            } else {
                return null;
            }
        }
        return null;
    }

    function select($requete)
    {
        $pdo = dbconnect("mysql");

        if ($pdo) {
            try {
                $stmt = $pdo->query($requete);

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $pdo = null;

                return $result;
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
                return null;
            }
        }
        return null;
    }

    function insert_variete($nomVariete, $occupation, $rendement)
    {
        $pdo = dbconnect("mysql");
    
        if ($pdo) {
            try {
                $query = "INSERT INTO variete (nomVariete, occupation, rendement) VALUES (?, ?, ?)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$nomVariete, $occupation, $rendement]);
    
                $lastInsertId = $pdo->lastInsertId();
                $pdo = null;
    
                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
        return null;
    }

    function insert_parcelles($surface, $variete)
    {
        $pdo = dbconnect("mysql");
    
        if ($pdo) {
            try {
                $query = "INSERT INTO parcelles (surface, variete) VALUES (?, ?)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$surface, $variete]);
    
                $lastInsertId = $pdo->lastInsertId();
                $pdo = null;
    
                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
        return null;
    }

    function insert_personnes($nomPers, $genre, $date_naissance, $mdp)
    {
        $pdo = dbconnect("mysql");
    
        if ($pdo) {
            try {
                $idCateg = 2;
    
                $query = "INSERT INTO personnes (nomPers, genre, date_naissance, idCateg, mdp) VALUES (?, ?, ?, ?, ?)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$nomPers, $genre, $date_naissance, $idCateg, $mdp]);
    
                $lastInsertId = $pdo->lastInsertId();
                $pdo = null;
    
                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
    
        return null;
    }
?>