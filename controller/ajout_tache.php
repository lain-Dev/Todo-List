<?php

if (isset($_POST['ajouter'])) {
    global $count_crea;//compteur 
    extract($_POST);
    $requiredInput = array(
        $tache
    );

    // Vérification champs vide !
    foreach ($requiredInput as $input) {
        if (empty($input)) { // Si un champ est vide, le compteur d'erreur augmente
            $count_crea++;
            error_log(date('l jS \of F Y h:i:s A') . ":  Champs tache est vide!\r\n", 3, '../log.txt');
            //session flash error:
            $_SESSION['flash'] = array('Error', "Echec lors de la création d'une tâche'","Erreur dans le formulaire </br> Veuillez entrer une tâche !");
            
        }
        
    }
    error_log(date('l jS \of F Y h:i:s A') . ":  Champs tâche rempli remplis!\r\n", 3, '../log.txt');

    if ($count_crea == 0) { // Si le compteur d'erreur est à 0, on ajoute utilisateur
        $id_usertodo = $_SESSION['id_utilisateur'];//affectation id de user connecté
        //Nettoyage des champs input:
        $tache = htmlentities(trim($_POST['tache']));
        include '../controller/connexion_bdd.php'; // Connexion à la BDD
        // Dans la table `userto`, on insère `nom`, `email` et `passwordSignup`
        $sql_user = 'INSERT INTO todolist (tache, id_usertodo) VALUES (:tache, :id_usertodo)';
        $req_user = $bdd->prepare($sql_user);

        $req_user->execute(array(
            'tache' => $tache,
            'id_usertodo' => $id_usertodo
        ));

        error_log(date('l jS \of F Y h:i:s A') . ": tâche ajouté avec succès\r\n", 3, '../log.txt');
        $_SESSION['flash'] = array('Success', "Création tâche avec succès");
        //renvoi page login pour se connecter
        header('Location:../vue/home.php');
        
    }
}