<!--Navbar-->
<nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">TodoList</a>
        <form class="d-flex">
          <!--
            <input type="button" onclick="window.location.href = 'login.php';" value="LOGIN" class="btn btn-primary"/>  
          -->
            <!--Ici on gere l'affichage du bouton se connecter si personne est connecte-->

            <!--Bouton origine-->
            <?php if(!$_SESSION['adminLoggedIn'] && !$_SESSION['particulierLoggedIn'] ):?>
                <div class="d-flex flex-column justify-content-center align-items-center ml-5">
                    <div>
                        <a href="login.php"
                            class="text-white effect-underline font-weight-bold btn btn-primary" role="button">
                            Se connecter <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            <?php endif ?>

            <!--Bouton utilisateur-->
            <?php if($_SESSION['particulierLoggedIn'] == true):?>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex">
                        <span class="text-dark effect-underline font-weight-bold">Connecté :</span>
                        <?php $data_user = getUserData();?>
                        <?php if($data_user):?>
                        <?php foreach($data_user as $key => $user):?>
                        <?php if($_SESSION['id'] == $user['id']):?>
                        <span class="text-dark effect-underline font-weight-bold text-center ml-2">
                            <?= $user['prenomUser'] ?>
                        </span>
                        <?php endif?>
                        <?php endforeach?>
                        <?php endif?>
                    </div>
                    <div>
                        <a href="../controllers/logout.php"
                            class="text-white effect-underline font-weight-bold btn btn-primary" role="button">
                            Se déconnecter <i class="fa fa-sign-in" aria-hidden="true"></i></a>
                    </div>

                </div>
                <?php endif ?>

         </form>
      </div>
    </nav>
    <!--Fin navbar-->