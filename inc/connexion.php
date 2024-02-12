<?php
    function dbconnect($base)
    {
        $dsn = null;
        $username = null;
        $password = null;
        if (isset($base)) {
            $sgbd = $base;
            if ($sgbd == "mysql") {
                $dsn = 'mysql:host=localhost;dbname=tea';
                $username = 'root';
                $password = '';
            }
        }
        try {
            $pdo = new PDO($dsn, $username, $password);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connexion échouée : " . $e->getMessage();
            return null; // Return null on connection failure
        }
    }
?>