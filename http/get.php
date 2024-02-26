<?php
    // Connexion à la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=exemple', 'root', '');
    // Définition du mode d'erreur PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Requête pour récupérer toutes les lignes d'une table (remplacez "nom_table" par le nom de votre table)
    $query = $pdo->query("SELECT * FROM apprenants");
    
    // Récupération de toutes les lignes sous forme d'un tableau associatif
    $results = $query->fetchAll(PDO::FETCH_ASSOC);


    $json = json_encode($results);
    echo $json;
?>
