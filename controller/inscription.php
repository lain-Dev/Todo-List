<?php

    $Nom_Err =  $Email_Err =  $Password_Err = $Confirmation_Pass_Err = "";
    // On vérifie si le serveur reçoit un POST et si on a cliqué sur le bouton de signup
    if (isset($_POST['signup'])) {
        global $count_crea;//compteur 
        extract($_POST); // Extraction des variables présentes dans le tableau POST
        $requiredInput = array(
            $nom,
            $email,
            $passwordSignup,
            $password2
        );

        // Vérification champs vide !
        foreach ($requiredInput as $input) {
            if (empty($input)) { // Si un champ est vide, le compteur d'erreur augmente
                $count_crea++;
                error_log(date('l jS \of F Y h:i:s A') . ":  Champs input vide!\r\n", 3, '../log.txt');
                //session flash error:
                $_SESSION['flash'] = array('Error', "Echec lors de la création du compte","Erreur dans le formulaire </br> Veuillez remplir tous les champs !");
                
            }
            
        }
        error_log(date('l jS \of F Y h:i:s A') . ":  Tous les champs sont remplis!\r\n", 3, '../log.txt');

        //verifier doublon email
        $bdd = include '../controller/connexion_bdd.php'; // Connexion à la BDD
        error_log(date('l jS \of F Y h:i:s A') . ":  début connexion pour doublon mail OK !\r\n", 3, '../log.txt');
        if($bdd){
            try{
                
                $query = "SELECT * FROM `usertodo`"; 
                $sth = $bdd->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
                $sth->execute();
                $liste_email = $sth->fetchAll(PDO::FETCH_OBJ);
                foreach ($liste_email as $value) {
                    if($value->email == $email){
                        $count_crea++;
                        error_log(date('l jS \of F Y h:i:s A') . ":  email existe déjà !\r\n", 3, '../log.txt');
                        //session flash error:
                        $_SESSION['flash'] = array('Error', "Echec lors de la création du compte","Erreur dans le formulaire </br> Email déjà exitant !");
                        
                    }else {
                        error_log(date('l jS \of F Y h:i:s A') . ":  email valide !\r\n", 3, '../log.txt');
                    }
                }
                
            }catch(PDOException $e){
                $error = $e->getMessage();
                error_log(date('l jS \of F Y h:i:s A') . ":  vérification doublon mail echec !\r\n", 3, '../log.txt');
            }
        }
    

        // verifier si le mot de passe et sa confirmation correspond
        if ($_POST["passwordSignup"] != $_POST["password2"]) {
            $count_crea++;
            //session flash error:
            $_SESSION['flash'] = array('Error', "Echec lors de la connexion au compte","Erreur dans le formulaire </br> Mot de passe non identique !");
            error_log(date('l jS \of F Y h:i:s A') . ":  Mot de passe n'est pas Identique!\r\n", 3, '../log.txt');
            
        }
        error_log(date('l jS \of F Y h:i:s A') . ":  Mot de passe Identique!\r\n", 3, '../log.txt');



        if ($count_crea == 0) { // Si le compteur d'erreur est à 0, on ajoute utilisateur
            $role_user = 1;//attribuion rôle utilisateur normale
            $passwordSignup = password_hash($_POST["passwordSignup"], PASSWORD_DEFAULT);
            //Nettoyage des champs input:
            $nom = htmlentities(trim($_POST['nom']));
            $email = htmlentities(trim($_POST['email']));
            include '../controller/connexion_bdd.php'; // Connexion à la BDD
            // Dans la table `userto`, on insère `nom`, `email` et `passwordSignup`
            $sql_user = 'INSERT INTO usertodo (nom, email, passwordSignup, role_user) VALUES (:nom, :email, :passwordSignup, :role_user)';
            $req_user = $bdd->prepare($sql_user);

            $req_user->execute(array(
                'nom' => $nom,
                'email' => $email,
                'passwordSignup' => $passwordSignup,
                'role_user' => $role_user
            ));

            error_log(date('l jS \of F Y h:i:s A') . ": utilisateur a été créé avec succès\r\n", 3, '../log.txt');
            $_SESSION['flash'] = array('Success', "Création compte avec succès");
            //renvoi page login pour se connecter
            header('Location:../vue/home.php');
            
        }
        
    }





