<?php

    $_SESSION['class'] = "d-none";
    $_SESSION['message'] = "";
    $Nom_Err =  $Email_Err =  $Password_Err = $Confirmation_Pass_Err = "";
    // On vérifie si le serveur reçoit un POST et si on a cliqué sur le bouton de signup
    if (isset($_POST['signup'])) {
        global $count_crea;//compteur 
        include '../controller/connexion_bdd.php'; // Connexion à la BDD
        error_log(date('l jS \of F Y h:i:s A') . ":  début connexion pour inscription OK !\r\n", 3, '../log.txt');
        extract($_POST); // Extraction des variables présentes dans le tableau POST
        $requiredInput = array(
            $nom,
            $email,
            $passwordSignup,
            $password2
        );

        // Pour chaque éléments dans le tableau $requiredInput, on passe les fonctions htmlentities() et trim()
        foreach ($requiredInput as $input) {
            htmlentities(trim($input));
            if (empty($input)) { // Si un champ est vide, le compteur d'erreur augmente
                $count_crea++;
                $Nom_Err = "Veuillez entrer un nom.";
                $Email_Err = "Veuillez entrer un email.";
                $Password_Err = "Veuillez entrer un mot de passe";
                $Confirmation_Pass_Err = "Veuillez confirmer votre mot de passe.";
                $class_alert = "alert-danger";
            }
            
        }
        error_log(date('l jS \of F Y h:i:s A') . ":  Tous les champs sont remplis!\r\n", 3, '../log.txt');

        //verifier doublon email
        
        function doublonEmail () {
            $emailVerifier = "SELECT * FROM user FROM email";
            $resultat = mysql_query($emailVerifier);
        }
        


        // verifier si le mot de passe et sa confirmation correspond
        if ($_POST["passwordSignup"] != $_POST["password2"]) {
            $count++;
            $Password_Err = "Les mots de passes sont différents.";
            $Confirmation_Pass_Err = "Les mots de passes sont différents.";
            $class_alert = "alert-danger";
        }
        error_log(date('l jS \of F Y h:i:s A') . ":  Mot de passe Identique!\r\n", 3, '../log.txt');



        if ($count_crea == 0) { // Si le compteur d'erreur est à 0, on ajoute utilisateur
            // Dans la table `user`, on insère `nom` et `prenom`
            $sql_user = 'INSERT INTO usertodo (nom, email, passwordSignup) VALUES (:nom, :email, :passwordSignup)';
            $req_user = $bdd->prepare($sql_user);

            $req_user->execute(array(
                'nom' => $nom,
                'email' => $email,
                'passwordSignup' => $passwordsignup
            ));

            error_log(date('l jS \of F Y h:i:s A') . ": utilisateur a été créé avec succès\r\n", 3, '../log.txt');
            header('Location:../view/users.php');exit();
        }
        
    }





