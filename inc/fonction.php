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

    function total_recolte($date_debut, $date_fin, $idPers, $idParcelle)
    {
        $pdo = dbconnect("mysql");
    
        if ($pdo) {
            try {
                $date_debut = date('Y-m-d', strtotime($date_debut));
                $date_fin = date('Y-m-d', strtotime($date_fin));

                $query = "SELECT SUM(poids) as total_poids FROM histoCueillettes WHERE idPers = ? AND date_cueillettes >= ? AND date_cueillettes <= ? AND choix_parcelle = ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$idPers, $date_debut, $date_fin, $idParcelle]);
    
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

    function reste_recoltes($idParcelle, $date_debut, $date_fin, $idPers) {
        $pdo = dbconnect("mysql");
    
        if ($pdo) {
            try {
                $date_debut = date('Y-m-d', strtotime($date_debut));
                $date_fin = date('Y-m-d', strtotime($date_fin));
    
                $stmtParcelle = $pdo->prepare("SELECT surface FROM parcelles WHERE idParcelle = ?");
                $stmtPied = $pdo->prepare("SELECT occupation FROM parcelles p JOIN variete v ON p.variete = v.idVariete WHERE idParcelle = ?");
                $stmtRendementPied = $pdo->prepare("SELECT rendement FROM parcelles p JOIN variete v ON p.variete = v.idVariete WHERE idParcelle = ?");
                
                $stmtParcelle->execute([$idParcelle]);
                $stmtPied->execute([$idParcelle]);
                $stmtRendementPied->execute([$idParcelle]);
    
                $parcelle = $stmtParcelle->fetchColumn();
                $pied = $stmtPied->fetchColumn();
                $rendement_pied = $stmtRendementPied->fetchColumn();
    
                if ($parcelle !== false && $pied !== false && $rendement_pied !== false) {
                    $nbr_pied = $parcelle / $pied;
                    $rendement = $rendement_pied * $nbr_pied;
    
                    $stmtTotalRecolte = $pdo->prepare("SELECT SUM(poids) as total_poids FROM histoCueillettes WHERE idPers = ? AND date_cueillettes >= ? AND date_cueillettes <= ? AND choix_parcelle = ?");
                    $stmtTotalRecolte->execute([$idPers, $date_debut, $date_fin, $idParcelle]);
    
                    $resultTotalRecolte = $stmtTotalRecolte->fetch(PDO::FETCH_ASSOC);
    
                    $total_recolte = $resultTotalRecolte['total_poids'] ?: 0;
    
                    $restant = $rendement - $total_recolte;
    
                    return $restant;
                } else {
                    return null;
                }
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
                return null;
            }
        }
        return null;
    }
    
    
    function recoltes_parcelles($date_debut, $date_fin)
    {
        $pdo = dbconnect("mysql");

        if ($pdo) {
            try {
                $date_debut = date('Y-m-d', strtotime($date_debut));
                $date_fin = date('Y-m-d', strtotime($date_fin));

                $query = "SELECT p.idParcelle, SUM(h.poids) AS total_poids_cueillettes
                        FROM parcelles p
                        LEFT JOIN histoCueillettes h ON p.idParcelle = h.choix_parcelle
                        WHERE h.date_cueillettes >= ? AND h.date_cueillettes <= ?
                        GROUP BY p.idParcelle";

                $stmt = $pdo->prepare($query);
                $stmt->execute([$date_debut, $date_fin]);

                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
                return null;
            }
        }
        $pdo = null;
        return null;
    }
?>