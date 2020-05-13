<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lfsi2',
            'root', '');
        return $bdd;
    } catch (PDOException $e)
    {
        echo "Erreur : " . $e->getMessage();
    }
