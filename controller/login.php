<?php


if (isset($_POST['login'])) {
    
    include '../controller/connexion_bdd.php'; // Connexion à la BDD
    error_log(date('l jS \of F Y h:i:s A') . ": connexion serveur pour login !\r\n", 3, '../log.txt');
    // On selectionne la ligne dans la table 'usertodo' où email correspond à notre $_POST["email"]
    $req = $bdd->prepare('SELECT * FROM usertodo WHERE email = :email');

    $req->execute(array(
        'email' => $_POST['email']
    ));

    $resultat = $req->fetch();

    // On vérifie si le password du $_POST correspond au password dans la BDD
    $password = $_POST["password"];
    if ($resultat["passwordSignup"] != $password) { // Si un des deux input ne correspond pas, on renvoi un message d'erreur
        $_SESSION['flash'] = array('Error', "Echec lors de la connexion au compte","Erreur dans le formulaire </br> Votre email ou votre mot de passe incorrecte !");
        error_log(date('l jS \of F Y h:i:s A') . ": Mot de passe incorrect, échec de la connexion\r\n", 3, '../log.txt');
    } else {
        // Si le password correspond on lance la session user
        $_SESSION['user'] = true;
        error_log(date('l jS \of F Y h:i:s A') . ": Identifiants corrects, connexion réussie\r\n", 3, '../log.txt');
        header('Location: ../index.php'); // Redirection vers la page d'accueil
        die;
        }
}



    
