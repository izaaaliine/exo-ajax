<?php 
    // Connexion à la BDD
    $pdo = new PDO('mysql:host=localhost;dbname=exemple', 'root', '');
    // Définition du mode d'erreur PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $nom = $_POST['inputNom'];
    $prenom = $_POST['inputPrenom'];
    $mail = $_POST['inputMail'];
    // Requête pour récupérer toutes les lignes d'une table (remplacez "nom_table" par le nom de votre table)
    $sql = "INSERT INTO `apprenants`(`nom_apprenants`, `prenom_apprenants`, `mail_apprenants`) VALUES ('$nom','$prenom','$mail')";
    $query = $pdo->query($sql);
    http_response_code(200);
?>