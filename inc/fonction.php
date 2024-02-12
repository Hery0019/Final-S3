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

            if ($user) {
                return $user;
            } else {
                return null;
            }
        }
        $pdo = null;
        return null;
    }

    function select($requete)
    {
        $pdo = dbconnect("mysql");

        if ($pdo) {
            try {
                $stmt = $pdo->query($requete);

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $result;
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
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
    
                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
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
    
                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
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
    
                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
        return null;
    }

    function insert_depense($nomDepense)
    {
        $pdo = dbconnect("mysql");

        if ($pdo) {
            try {
                $query = "INSERT INTO depense (nomDepense) VALUES (?)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$nomDepense]);

                $lastInsertId = $pdo->lastInsertId();

                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
        return null;
    }

    function insert_histo_cueillette($date_cueillettes, $choix_cueilleur, $choix_parcelle, $poids)
    {
        $pdo = dbconnect("mysql");

        if ($pdo) {
            try {
                $query = "INSERT INTO histoCueillettes (date_cueillettes, choix_cueilleur, choix_parcelle, poids) VALUES (?, ?, ?, ?)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$date_cueillettes, $choix_cueilleur, $choix_parcelle, $poids]);

                $lastInsertId = $pdo->lastInsertId();

                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
        return null;
    }

    function insert_histoDepense($date_depense, $choix_depense, $montant)
    {
        $pdo = dbconnect("mysql");
    
        if ($pdo) {
            try {
                $query = "INSERT INTO histoDepense (date_depense, choix_depense, montant) VALUES (?, ?, ?)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$date_depense, $choix_depense, $montant]);
    
                $lastInsertId = $pdo->lastInsertId();

                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
        return null;
    }    

    function insert_resultat($poids_total_cueillette, $poids_restant_parcelles, $cout_revient)
    {
        $pdo = dbconnect("mysql");
    
        if ($pdo) {
            try {
                $query = "INSERT INTO resultat (poids_total_cueillette, poids_restant_parcelles, cout_revient) VALUES (?, ?, ?)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$poids_total_cueillette, $poids_restant_parcelles, $cout_revient]);
    
                $lastInsertId = $pdo->lastInsertId();
    
                return $lastInsertId;
            } catch (PDOException $e) {
                echo "Insert failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
        return null;
    } 
    
    function updateSalaire($newMontant)
    {
        $pdo = dbconnect("mysql");

        if ($pdo) {
            try {
                $query = "UPDATE salaire SET montant_kg = ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$newMontant]);

                $rowCount = $stmt->rowCount();

                return $rowCount;
            } catch (PDOException $e) {
                echo "Update failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
        return null;
    }

    function total_recolte($date_debut, $date_fin, $idPers)
    {
        $pdo = dbconnect("mysql");
    
        if ($pdo) {
            try {
                $date_debut = date('Y-m-d', strtotime($date_debut));
                $date_fin = date('Y-m-d', strtotime($date_fin));

                $query = "SELECT SUM(poids) as total_poids FROM histoCueillettes WHERE idPers = ? AND date_cueillettes >= ? AND date_cueillettes <= ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$idPers, $date_debut, $date_fin]);
    
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
                return $result['total_poids'];
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
        return null;
    }    
?>