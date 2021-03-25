<?php
//définir le chemin root
define('__ROOT__', dirname(dirname(__DIR__))); 

// On lance la session
session_start();

//On vérifie si l'admin est connecte
if(!isset($_SESSION['adminLoggedIn'])){
  $_SESSION['adminLoggedIn'] = false;
}

//On verifie si un utilisateur est connecte
if(!isset($_SESSION['particulierLoggedIn'])){
  $_SESSION['particulierLoggedIn'] = false;
}
if(!isset($_SESSION['id'])){
  $_SESSION['id'] = "";
}

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--My CSS-->
    <link rel="stylesheet" href="../styles/style.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    

    <!--font-awesome-->
    <script src="https://use.fontawesome.com/c18e5332f2.js"></script>

    <title>Todo List New!</title>

  </head>
  <body>
    
    <!--navbar-->
    <?php include('includes/head.php'); ?>

    <div class="card text-white bg-dark my-5" style="max-width: 18rem;">
      <div class="card-header">Header</div>
      <div class="card-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
          </form>
      </div>
    </div>

    

    <!--footer-->
    <?php include('includes/footer.php'); ?>
  
    

    
    <!-- JavaScript-->

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
