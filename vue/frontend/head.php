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
    <!--CSS-->
    <link rel="stylesheet" href="../public/style/style.css">
    <!--Font awesome-->
    <script src="https://use.fontawesome.com/c18e5332f2.js"></script>
    

    <title>Todo-List</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-warning" href="#">
        <h1>Todo-List</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavDropdown">
        <ul class="navbar-nav">

             <!-- Si aucun utilisateur n'est connecté, on affiche ce qui suit -->
             <?php if ($_SESSION["user"] == false) { ?>
                <!--Rien-->
            <!-- Si 'user' est connecté, on affiche ce qui suit -->
            <?php } else if ($_SESSION["user"]['role'] == 1) { ?>
                <li>
                    <form action="" method="POST">
                        <button class="btn btn-primary btn-green-nav" type="submit" name="deconnexion">Déconnexion</button>
                    </form>
                </li>
            <?php }?>
        

        </ul>
    </div>
    </nav>