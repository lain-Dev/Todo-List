<?php
// On démarre une session
session_start();
//il faut vérifier si la session est connecté et l'appelé sinon l session n'est pas définis
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = false;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--icon Onglet-->
    <link rel="shortcut icon" type="image/ico" href="../public/image/icon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!--Font awesome-->
    <script src="https://use.fontawesome.com/c18e5332f2.js"></script>
    
    <title>Todo-List</title>

    
    