<?php



//générateur aléatoire id pour la card créer
$idTache = md5(uniqid(rand(), true)); //On attribue un id unique à luser
$_POST['id'] = $idTache;
$_POST['idUser'] = $_SESSION['id'];

$_POST['jour'] = htmlentities($_POST['jour'], ENT_QUOTES);
$_POST['tache'] = htmlentities($_POST['tache'], ENT_QUOTES);


//attribution destination json dans variable
$filename = '../../data/todoList.json';
//retourne le contenu du fichier dans une variable de type string
$jsonString = file_get_contents($filename);
//Transforme la structure json en array PHP
$jsonArray = json_decode($jsonString, true);



//condition pour envoyer les data dans le fichier user.json
if (isset($filename)) {
    //fichier existe alors on récupère son contenu on transforme en array

    //$jsonArray = []; // si pas de tableau on crée un tableau
    array_unshift($jsonArray,$_POST);
    //en rencode le fichier en json aprés avoir reçu données
    file_put_contents($filename,json_encode($jsonArray));
    //message confirmation
    echo '<div class="col-md-12 d-flex justify-content-center">
            <div class="alert alert-success">Tache OK !</div>
        </div>';//message validatiion
}else {
    
    echo '<div class="col-md-12 d-flex justify-content-center">
    <div class="alert alert-danger">Erreur tache Invalide !</div></div>';//message erreur saisie

}