<?php
/**
 * 
 * Connexion à la BDD
 * Cette page est appelée à chque fois qu'on à besoin de se connecter à la BDD
 * 
 */

if ($_SERVER["REMOTE_ADDR"] == "127.0.0.1") { // Si on est en local on utilise ces identifiants
    $serveur = "127.0.0.1";
    $dbname = "centreculturel";
    $user = "root";
    $password = "";
} else { // Sinon on utilise les identifiants de la BDD extérieur
    $serveur = "";
    $dbname = "";
    $user = "";
    $password = "";
}

try {
    //On se connecte à la BDD
    $bdd = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $password);
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { // Si erreur, on renvoi un message d'erreur
    echo 'Erreur : ' . $e->getMessage();
}

 